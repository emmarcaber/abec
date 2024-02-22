<?php

namespace App\Http\Controllers;

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
                'title' => 'ABEC - Evaluation',
            ]);
        }
    }
}
