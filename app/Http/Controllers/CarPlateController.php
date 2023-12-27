<?php

namespace App\Http\Controllers;

use App\Models\CarPlate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class CarPlateController extends Controller
{
    private function getFilteredCarPlates(Request $request, $category = null) {
        $query = CarPlate::query();

        if (isset($request->searchCarPlate) && $request->searchCarPlate !== '') {
            $searchValue = $request->searchCarPlate;

            // Determine if the search value is numeric or alphabetic
            if (is_numeric($searchValue)) {
                // Search in 'number' column if search value is numeric
                $query->where('number', '=', $searchValue);
            } else {
                // Search in 'alphabet_start', 'alphabet_end', and 'carplate' columns for alphabetic values
                $query->where(function ($q) use ($searchValue) {
                    $q->where('alphabet_start', '=', $searchValue)
                      ->orWhere('alphabet_end', '=', $searchValue)
                      ->orWhere('carplate', '=', $searchValue);
                });
            }
        }

        if ($category !== null) {
            $query->where('category', $category);
        }

        $results = $query->paginate(12);
        $results->appends(['searchCarPlate' => $request->searchCarPlate]);
        if ($category !== null) {
            $results->appends(['category' => $category]);
        }

        return $results;
    }



    public function all(Request $request) {
        $query = CarPlate::query();

        if (isset($request->searchCarPlate) && $request->searchCarPlate !== '') {
            $searchValue = $request->searchCarPlate;

            // Determine if the search value is numeric or alphabetic
            if (is_numeric($searchValue)) {
                // Search in 'number' column if search value is numeric
                $query->where('number', '=', $searchValue);
            } else {
                // Search in 'alphabet_start', 'alphabet_end', and 'carplate' columns for alphabetic values
                $query->where(function ($q) use ($searchValue) {
                    $q->where('alphabet_start', '=', $searchValue)
                      ->orWhere('alphabet_end', '=', $searchValue)
                      ->orWhere('carplate', '=', $searchValue);
                });
            }
        }

        $results = $query->paginate(12);
        $results->appends(['searchCarPlate' => $request->searchCarPlate]);

        if ($request->ajax()) {
            return response()->json([
                'content' => view('carplate-type.all', compact('results'))->render(),
            ]);
        }

        return view('carplate-type.all', compact('results'));
    }



    public function golden(Request $request) {
        $results = $this->getFilteredCarPlates($request, 'Golden Number');
        if ($request->ajax()) {
            return response()->json([
                'content' => view('carplate-type.golden', compact('results'))->render(),
            ]);
        }
        return view('carplate-type.golden', compact('results'));
    }

    public function twoDigit(Request $request) {
        $results = $this->getFilteredCarPlates($request, '2 Digit');
        if ($request->ajax()) {
            return response()->json([
                'content' => view('carplate-type.twoDigit', compact('results'))->render(),
            ]);
        }
        return view('carplate-type.twoDigit', compact('results'));
    }

    public function threeDigit(Request $request) {
        $results = $this->getFilteredCarPlates($request, '3 Digit');
        if ($request->ajax()) {
            return response()->json([
                'content' => view('carplate-type.threeDigit', compact('results'))->render(),
            ]);
        }
        return view('carplate-type.threeDigit', compact('results'));
    }

    public function fourDigit(Request $request) {
        $results = $this->getFilteredCarPlates($request, '4 Digit');
        if ($request->ajax()) {
            return response()->json([
                'content' => view('carplate-type.fourDigit', compact('results'))->render(),
            ]);
        }
        return view('carplate-type.fourDigit', compact('results'));
    }

}

