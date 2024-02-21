<?php

namespace App\Http\Controllers;

use App\Models\Quotation;
use App\Models\QuotationItem;
use Illuminate\Http\Client\Request;

class QuotationController extends Controller
{
    public function index()
    {
        return view('quotation.index');
    }

    public function success()
    {
        return view('quotation.success');
    }

    public function addItem(Request $request, QuotationItem $quotationItem)
    {
        $quotationItem->update($request->all());

        return response()->json($quotationItem, 200);
    }

    public function deleteItem(QuotationItem $quotationItem)
    {
        $quotationItem->delete();

        return response()->json(null, 204);
    }

    public function store(Request $request)
    {
        $quotation = Quotation::create($request->all());

        foreach ($request->items as $item) {
            $quotation->items()->create($item);
        }

        return response()->json($quotation, 201);
    }
}
