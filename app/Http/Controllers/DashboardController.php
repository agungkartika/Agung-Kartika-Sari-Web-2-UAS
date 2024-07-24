<?php

namespace App\Http\Controllers;

use App\Models\Notification;
use App\Models\Report;
use App\Models\Stock;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $totalStocks = Stock::count();
        $totalReports = Report::count();
        $latestNotifications = Notification::latest()->take(5)->get();

        return view('dashboard', compact('totalStocks', 'totalReports', 'latestNotifications'));
    }
}
