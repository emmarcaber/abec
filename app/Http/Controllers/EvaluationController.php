<?php

namespace App\Http\Controllers;

use App\Models\Position;
use Illuminate\Http\Request;

class EvaluationController extends Controller
{

    /**
     * Display the evaluations listing.
     */
    public function index(Request $request)
    {
        if (auth()->user()->role === 'user') {
            return view('users.evaluations.index', [
                'title' => 'Evaluation',
            ]);
        }
    }

    /**
     * Show the form for creating new evaluation
     */
    public function create()
    {
        if (auth()->user()->role === 'user') {
            return view('users.evaluations.create', [
                'title' => 'Create Evaluation',
                'officer_positions' => Position::select('id', 'officer_type', 'position')->get(),
            ]);
        }
    }
}
