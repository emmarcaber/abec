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
        $user_id = auth()->user()->id;
        $officers_to_evaluate = User::select('users.id as user_id', 'position', 'name')
            ->join('positions', 'positions.id', 'users.position_id')
            ->where('users.id', '!=', $user_id)
            ->orderBy('positions.id')->get();

        if (auth()->user()->role === 'user') {
            return view('users.evaluations.create', [
                'title' => 'Create Evaluation',
                'officers_to_evaluate' => $officers_to_evaluate,
                'user_id' => $user_id,
            ]);
        }
    }

    /**
     * Store the new evaluation to the database.
     */
    public function store(Request $request) 
    {
        dd($request->all());
        $formFields = $request->validate([
            'user_id' => 'required|exists:positions,id',
            'evaluated_officer_id' => 'required|exists:positions,id',
            'knowledge_expertise' => 'required|numeric|min:1|max:5',
            'leadership_abilities' => 'required|numeric|min:1|max:5',
            'teamwork_collaboration' => 'required|numeric|min:1|max:5',
            'work_ethic_dedication' => 'required|numeric|min:1|max:5',
            'overall_contribution_to_team' => 'required|numeric|min:1|max:5',
            'comments' => 'required',
            'recommendations' => 'required',
        ]);
    }
}
