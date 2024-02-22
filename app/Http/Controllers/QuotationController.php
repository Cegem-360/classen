<?php

namespace App\Http\Controllers;

use App\Models\Door;
use App\Models\Quotation;
use App\Models\QuotationItem;
use Illuminate\Http\Client\Request;
use App\Http\Requests\QoutationRequest;

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
        return view('quotation.success');
    }

    public function addItem(Door $door)
    {
        $quotation = session()->get('quotation', Quotation::create([
            'session_id' => session()->getId(),
        ]));
        QuotationItem::firstOrCreate([
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

    public function store(QoutationRequest $request, Door $door)
    {
        $quotation = session()->get('quotation', Quotation::create([
            'session_id' => session()->getId(),
        ]));
        $validated = $request->validated();
        $quotation->update([
            'first_name' => $validated['last_name'],
            'last_name' => $validated['last_name'],
            'email' => $validated['email'],
            'phone' => $validated['phone'],
            'message' => $validated['message'],
        ]);

        return redirect()->route('quotation.success');
    }
}
