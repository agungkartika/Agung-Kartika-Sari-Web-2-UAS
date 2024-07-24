<?php

namespace App\Http\Controllers;

use App\Models\Notification;
use App\Models\Stock;
use Illuminate\Http\Request;

class StockController extends Controller
{
    public function index()
    {
        $stocks = Stock::with(['user'])->get();
        return view('stocks.index', compact('stocks'));
    }

    public function create()
    {
        return view('stocks.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'product_name' => 'required|string|max:255',
            'quantity' => 'required|integer|min:1',
        ]);

        $stock = Stock::create([
            'product_name' => $request->product_name,
            'quantity' => $request->quantity,
            'user_id' => auth()->id(),
        ]);

        Notification::create([
            'message' => 'Stok baru ditambahkan: ' . $request->product_name . ' dengan jumlah: ' . $request->quantity,
            'stock_id' => $stock->id,
        ]);
    

        return redirect()->route('stocks.index')->with('success', 'Stock created successfully.');
    }

    public function show(Stock $stock)
    {
        return view('stocks.show', compact('stock'));
    }

    public function edit(Stock $stock)
    {
        return view('stocks.edit', compact('stock'));
    }

    public function update(Request $request, Stock $stock)
    {
        $request->validate([
            'product_name' => 'required|string|max:255',
            'quantity' => 'required|integer|min:1',
        ]);

        $stock->update($request->only(['product_name', 'quantity']));
        
        Notification::create([
            'message' => 'Stok diperbarui: ' . $stock->product_name . ' menjadi: ' . $request->quantity,
            'stock_id' => $stock->id,
        ]);
    

        return redirect()->route('stocks.index')->with('success', 'Stock updated successfully.');
    }

    public function destroy(Stock $stock)
    {
        $stock->delete();
        return redirect()->route('stocks.index')->with('success', 'Stock deleted successfully.');
    }
}
