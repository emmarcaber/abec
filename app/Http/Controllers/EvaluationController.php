<?php

namespace App\Http\Controllers;

use App\Models\User;
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
     * Show the form for creating new evaluation.
     */
    public function create()
    {
        $officers_to_evaluate = User::select('users.id as user_id', 'position', 'name')
            ->join('positions', 'positions.id', 'users.position_id')
            ->orderBy('positions.id')->get();

        if (auth()->user()->role === 'user') {
            return view('users.evaluations.create', [
                'title' => 'Create Evaluation',
                'officers_to_evaluate' => $officers_to_evaluate,
            ]);
        }
    }

    /**
     * Store the new evaluation to the database.
     */
    public function store(Request $request) 
    {
        dd($request->all());
    }
}
