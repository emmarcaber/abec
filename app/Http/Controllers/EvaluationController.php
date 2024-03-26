<?php

namespace App\Http\Controllers;

use App\Http\Requests\EvaluationRequest;
use App\Models\Evaluation;
use App\Models\User;
use Illuminate\Http\Request;

class EvaluationController extends Controller
{

    protected $evaluationModel;
    protected $userModel;

    /**
     * Create a new controller instance.
     */
    public function __construct(Evaluation $evaluationModel, User $userModel)
    {
        $this->evaluationModel = $evaluationModel;
        $this->userModel = $userModel;
    }

    /**
     * Display the evaluations listing.
     */
    public function index(Request $request)
    {
        $currentUser = auth()->user();

        if ($currentUser->role === 'user') {
            $evaluations = $this->evaluationModel->getEvaluationsByUser($currentUser->id);

            return view('users.evaluations.index', [
                'title' => 'Evaluation',
                'evaluations' => $evaluations,
            ]);
        }
    }

    /**
     * Show the form for creating a new evaluation.
     */
    public function create()
    {
        $currentUser = auth()->user();

        if ($currentUser->role === 'user') {
            $officersToEvaluate = $this->userModel->getOfficersToEvaluateByUser($currentUser->id);

            return view('users.evaluations.create', [
                'title' => 'Create Evaluation',
                'officers_to_evaluate' => $officersToEvaluate,
                'user_id' => $currentUser->id,
            ]);
        }
    }

    /**
     * Store the new evaluation in the database.
     */
    public function store(EvaluationRequest $request)
    {
        $this->evaluationModel->create($request->validated());

        return redirect()->route('user.evaluations.index')
            ->with('success', 'Evaluation created successfully!');
    }

    /**
     * Update the current evaluation in the database.
     */
    public function update(EvaluationRequest $request)
    {
    }
}
