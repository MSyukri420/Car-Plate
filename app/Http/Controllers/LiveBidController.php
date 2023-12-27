<?php

namespace App\Http\Controllers;

use App\Models\LivePlate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class LiveBidController extends Controller
{
    public function liveBid()
    {
        $livePlates = LivePlate::all();
        $now = Carbon::now();

        foreach ($livePlates as $plate) {
            $endDateTime = Carbon::parse($plate->end_date);
            $duration = $endDateTime->diff($now)->format('%d - %H:%I:%S');
            $plate->duration = $duration;

            // Split the plate into parts
            preg_match('/^([A-Za-z]{1,3})(\d{1,4})([A-Za-z]{0,1})$/', $plate->plate, $matches);
            $plate->alphabet_start = isset($matches[1]) ? strtoupper($matches[1]) : '';
            $plate->number = $matches[2] ?? '';
            $plate->alphabet_end = isset($matches[3]) ? strtoupper($matches[3]) : '';
        }

        return view('liveBid', compact('livePlates'));
    }
}
