<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Evaluation extends Model
{
    use HasFactory;

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    protected $fillable = [
        'user_id',
        'evaluated_officer_id',
        'knowledge_expertise',
        'leadership_abilities',
        'teamwork_collaboration',
        'work_ethic_dedication',
        'overall_contribution_to_team',
        'comments',
        'recommendations',
    ];

    public function getEvaluationsByUser($userId): Collection
    {
        return $this->join('users as evaluated_users', 'evaluations.evaluated_officer_id', 'evaluated_users.id')
            ->join('positions', 'positions.id', 'evaluated_users.position_id')
            ->select([
                'evaluations.id',
                'evaluations.user_id',
                'evaluations.knowledge_expertise',
                'evaluations.leadership_abilities',
                'evaluations.teamwork_collaboration',
                'evaluations.work_ethic_dedication',
                'evaluations.overall_contribution_to_team',
                'evaluations.evaluated_officer_id',
                'evaluations.comments',
                'evaluations.recommendations',
                'positions.position',
                'evaluated_users.name'
            ])
            ->selectRaw(
                'round(avg((knowledge_expertise + 
                leadership_abilities + 
                teamwork_collaboration + 
                work_ethic_dedication + 
                overall_contribution_to_team) / 5),2) as overall_rating'
            )
            ->groupBy([
                'evaluations.id',
                'positions.position',
                'evaluated_users.name'
            ])
            ->get();
    }
}
