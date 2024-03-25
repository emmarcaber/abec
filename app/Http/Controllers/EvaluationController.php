<?php

namespace App\Http\Controllers;

use App\Http\Requests\EvaluationRequest;
use App\Models\User;
use App\Models\Position;
use App\Models\Evaluation;
use Illuminate\Http\Request;

class EvaluationController extends Controller
{

    protected $evaluationModel;
    protected $userModel;
    protected $currentUserId;
    protected $currentUserRole;

    public function __construct()
    {
        $this->evaluationModel = new Evaluation();
        $this->userModel = new User();
    }

    /**
     * Display the evaluations listing.
     */
    public function index(Request $request)
    {
        $currentUserId = auth()->user()->id;
        $currentUserRole = auth()->user()->role;

        if ($currentUserRole === 'user') {
            return view('users.evaluations.index', [
                'title' => 'Evaluation',
                'evaluations' => $this->evaluationModel->getEvaluationsByUser($currentUserId),
            ]);
        }
    }

    /**
     * Show the form for creating new evaluation.
     */
    public function create()
    {
        $currentUserId = auth()->user()->id;
        $currentUserRole = auth()->user()->role;

        if ($currentUserRole === 'user') {
            return view('users.evaluations.create', [
                'title' => 'Create Evaluation',
                'officers_to_evaluate' => $this->userModel->getOfficersToEvaluateByUser($currentUserId),
                'user_id' => $currentUserId,
            ]);
        }
    }

    /**
     * Store the new evaluation to the database.
     */
    public function store(EvaluationRequest $evaluationRequest)
    {
        Evaluation::create($evaluationRequest);

        return redirect(route('user.evaluations.index'))
            ->with('success', 'Evaluation created successfully!');
    }
}
