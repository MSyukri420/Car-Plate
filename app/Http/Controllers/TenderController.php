<?php

namespace App\Http\Controllers;

use App\Models\Tender;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;

class TenderController extends Controller
{
    public function tenders()
    {
        // Retrieve the overall latest tender
        $latestTender = Tender::latest()->first();

        // Retrieve the most recent tenders for each state
        $latestTenders = DB::table('tenders')
            ->select('state', DB::raw('MAX(created_at) as latest_created_at'))
            ->groupBy('state')
            ->get();

        // Create an array to store the most recent tenders
        $mostRecentTenders = [];

        // Loop through the grouped tenders and retrieve the most recent tender for each state
        foreach ($latestTenders as $latest) {
            $mostRecentTender = Tender::where('state', $latest->state)
                ->where('created_at', $latest->latest_created_at)
                ->first();

            if ($mostRecentTender) {
                $mostRecentTenders[] = $mostRecentTender;
            }
        }

        return view('tender', compact('mostRecentTenders', 'latestTender'));
    }
}
