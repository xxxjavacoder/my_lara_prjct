<?php

namespace App\Http\Controllers;

use App\Models\Auto;
use App\Models\Part;
use App\Models\Posts;
use Illuminate\Http\Request;

class PartController extends Controller
{
    public function index(Request $request) {
        $series = $request->input('series');

        $parts = Part::query()
            ->when($series, function ($query) use ($series) {
                $query->whereHas('autos', function ($q) use ($series) {
                    $q->where('series', $series);
                });
            })
            ->with('autos')
            ->paginate(5);

        // Отримуємо всі бренди авто для селектора
        $series = Auto::distinct()->pluck('series');

        return view('parts.index', compact('parts', 'series'));
    }
}
