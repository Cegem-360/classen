<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Mail\QuotationInner;
use App\Mail\RequestQuotationSended;
use App\Models\Door;
use App\Models\Quotation;
use App\Models\QuotationItem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Validator;

final class QuotationController extends Controller
{
    public function index()
    {
        $quotation = session('quotation');
        $quotationItems = QuotationItem::with(['door', 'door.category'])->where('quotation_id', $quotation->id)->get();

        return view('quotation.index', ['quotation' => $quotation, 'quotationItems' => $quotationItems]);
    }

    public function success()
    {
        // reset session Quotation
        session()->forget('quotation');
        // frm database reset
        Quotation::where('session_id', session()->getId())->delete();

        return view('quotation.success');
    }

    public function addItem(Door $door)
    {
        $quotation = session('quotation');
        QuotationItem::where('quotation_id', $quotation->id)->where('door_id', $door->id)->firstOrCreate([
            'quotation_id' => $quotation->id,
            'door_id' => $door->id,
        ]);

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
        $quotation = session('quotation');

        if ($quotation->items->count() < 1) {
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

        Mail::to($validated['contactEmail'])->cc('info@arcadia98.hu')->send(new RequestQuotationSended($quotation, $quotationItems));
        Mail::to('info@arcadia98.hu')->send(new QuotationInner($quotation, $quotationItems));

        return redirect()->route('quotation.success')->success('Köszönjük az árajánlat kérést, kollégánk hamarosan felveszi Önnel a kapcsolatot');
    }
}
