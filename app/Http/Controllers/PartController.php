<?php

namespace App\Http\Controllers;

use App\Models\Auto;
use App\Models\Part;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PartController extends Controller
{
    public function index(Request $request) {
        $series = $request->input('series');
        $modelCode = $request->input('model_code');

        $parts = Part::query()
            ->when($series, function ($query) use ($series) {
                $query->whereHas('autos', function ($q) use ($series) {
                    $q->where('series', $series);
                });
            })
            ->when($modelCode, function ($query) use ($modelCode) {
                $query->whereHas('autos', function ($q) use ($modelCode) {
                    $q->where('model_code', $modelCode);
                });
            })
            ->with('autos')
            ->paginate(5);

        $seriesList = Auto::distinct()->pluck('series');

        if ($series) {
            $model_code = DB::table('autos')
                ->where('series', $series)
                ->distinct()
                ->pluck('model_code');
        } else {
            $model_code = collect();
        }

        return view('parts.index', compact('parts', 'seriesList', 'model_code'));
    }
}
