<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Evaluation extends Model
{
    use HasFactory;

    public function user() : BelongsTo 
    {
        return $this->belongsTo(User::class);
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
}
