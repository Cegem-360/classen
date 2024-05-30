<?php

namespace App\Http\Controllers;

use App\Mail\RequestQuotationSended;
use App\Models\Door;
use App\Models\Quotation;
use App\Models\QuotationItem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Validator;

class QuotationController extends Controller
{
    public function index()
    {
        $quotation = session('quotation', Quotation::create([
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
        $quotation = session()->get('quotation', Quotation::create([
            'session_id' => session()->getId(),
        ]));
        $validated = Validator::make($request->all(), [
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
        ])->validate();
        // $validated = $request->validated();
        $quotation->update([
            'first_name' => $validated['first_name'],
            'last_name' => $validated['last_name'],
            'email' => $validated['email'],
            'phone' => $validated['phone'],
            'message' => $validated['message'],
        ]);
        $quotationItems = QuotationItem::with(['door', 'door.category'])->where('quotation_id', $quotation->id)->get();
        Mail::to($request->email)->cc('web-ertesito@arcadia98.hu')->send(new RequestQuotationSended($quotation, $quotationItems));
        return redirect()->route('quotation.success')->success('Köszönjük az árajánlat kérést, kollégánk hamarosan felveszi Önnel a kapcsolatot');
    }
}
