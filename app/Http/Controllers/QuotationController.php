<?php

namespace App\Http\Controllers;

use Validator;
use App\Models\Door;
use App\Models\Quotation;
use App\Mail\QuotationInner;
use Illuminate\Http\Request;
use App\Models\QuotationItem;
use App\Mail\RequestQuotationSended;
use Illuminate\Support\Facades\Mail;

class QuotationController extends Controller
{
    public function index()
    {
        $quotation = session('quotation', Quotation::firstOrcreate([
            'session_id' => session()->getId(),
        ]));
        if (session()->missing('quotation')) {
            session(['quotation' => $quotation]);
        }
        $quotationItems = QuotationItem::with(['door', 'door.category'])->where('quotation_id', $quotation->id)->get();

        return view('quotation.index', compact('quotation', 'quotationItems'));
    }

    public function success()
    {
        //reset session Quotation
        session()->forget('quotation');
        //frm database reset
        Quotation::where('session_id', session()->getId())->delete();

        return view('quotation.success');
    }

    public function addItem(Door $door)
    {
        $quotation = session()->get('quotation', Quotation::create([
            'session_id' => session()->getId(),
        ]));
        QuotationItem::where('quotation_id', $quotation->id)->where('door_id', $door->id)->firstOrCreate([
            'quotation_id' => $quotation->id,
            'door_id' => $door->id,
        ]);
        session()->put('quotation', $quotation);

        return redirect()->route('quotation.index');
    }

    public function deleteItem(QuotationItem $quotationItem)
    {
        $quotationItem->delete();

        return redirect()->route('quotation.index');
    }

    public function updateItem(QuotationItem $quotationItem, $quantity)
    {
        $quotationItem->update([
            'quantity' => $quantity,
        ]);

        return redirect()->route('quotation.index');
    }

    public function store(Request $request)
    {
        $quotation = session()->get('quotation', Quotation::firstOrcreate([
            'session_id' => session()->getId(),
        ])->with(['items']));

        if($quotation->items->count() < 0){
           return redirect()->route('quotation.index')->error('Kérjük válasszon terméket az árajánlat kéréshez');
        }

        $validated = Validator::make($request->all(), [
            'first_name' => 'required',
            'last_name' => 'required',
            'contactEmail' => 'required|email',
            'phone' => 'required',
        ])->validate();

        $quotationItems = QuotationItem::with(['door', 'door.category'])->where('quotation_id', $quotation->id)->get();

        $quotation->update([
            'session_id' => session()->getId(),
            'first_name' => $validated['first_name'],
            'last_name' => $validated['last_name'],
            'email' => $validated['contactEmail'],
            'phone' => $validated['phone'],
            'message' => $request->emailMessage ?? '',
        ]);



        Mail::to($validated['contactEmail'])->cc("webshop@arcadia98.hu")->send(new RequestQuotationSended($quotation, $quotationItems));
        Mail::to("webshop@arcadia98.hu")->send(new QuotationInner($quotation, $quotationItems));
        Mail::to("info@arcadia98.hu")->send(new QuotationInner($quotation, $quotationItems));

        return redirect()->route('quotation.success')->success('Köszönjük az árajánlat kérést, kollégánk hamarosan felveszi Önnel a kapcsolatot');
    }
}
