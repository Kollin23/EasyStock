<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Invoice;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class DashboardController extends Controller
{
    public function index()
    {
        $incomes = Invoice::where('user_id', Auth::id())
            ->select(DB::raw('DATE(date) as date'), DB::raw('SUM(total) as total'))
            ->groupBy(DB::raw('DATE(date)'))
            ->orderBy('date', 'asc')
            ->get();

        $labels = $incomes->pluck('date')->map(function ($date) {
            return Carbon::parse($date)->format('d/m');
        });

        $totals = $incomes->pluck('total');

        return view('dashboard', compact('labels', 'totals'));
    }
}