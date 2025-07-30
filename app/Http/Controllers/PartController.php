<?php

namespace App\Http\Controllers;

use App\Models\Part;
use App\Models\Posts;
use Illuminate\Http\Request;

class PartController extends Controller
{
    public function index() {
        $parts = Part::all();

        return view('parts.index', ['parts' => $parts]);
    }
}
