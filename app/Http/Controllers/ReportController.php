<?php

namespace App\Http\Controllers;

use App\Models\Notification;
use App\Models\Report;
use App\Models\Stock;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function index()
    {
        $reports = Report::with('stock')->get();
        // dd($reports);
        return view('reports.index', compact('reports'));
    }

    public function create()
    {
        $stocks = Stock::all();
        return view('reports.create', compact('stocks'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'stock_id' => 'required|exists:stocks,id',
            'report_date' => 'required|date',
        ]);

        $stocks = Stock::findOrFail($request->stock_id);
        $quantity = $stocks->quantity;

        Report::create(
            [
                'stock_id' => $request->stock_id,
                'report_date' => $request->report_date,
                'quantity' => $quantity,
            ]
        );

        Notification::create([
            'message' => 'Laporan baru dibuat untuk stok: ' . $stocks->product_name . ' dengan jumlah: ' . $quantity,
            'stock_id' => $stocks->id,
        ]);
    
        return redirect()->route('reports.index')->with('success', 'Report created successfully.');
    }
    public function download()
    {
        $reports = Report::all();
        $pdf = Pdf::loadView('reports.download', compact('reports'));
        return $pdf->download('report.pdf');
    }

}
