<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EvaluationRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'user_id' => 'required|exists:positions,id',
            'evaluated_officer_id' => 'required|exists:positions,id',
            'knowledge_expertise' => 'required|numeric|min:1|max:5',
            'leadership_abilities' => 'required|numeric|min:1|max:5',
            'teamwork_collaboration' => 'required|numeric|min:1|max:5',
            'work_ethic_dedication' => 'required|numeric|min:1|max:5',
            'overall_contribution_to_team' => 'required|numeric|min:1|max:5',
            'comments' => 'required',
            'recommendations' => 'required',
        ];
    }
}
