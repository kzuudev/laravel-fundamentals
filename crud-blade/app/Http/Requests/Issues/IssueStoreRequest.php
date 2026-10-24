<?php

namespace App\Http\Requests\Issues;

use App\Concerns\Issues\IssueValidationRules;
use Illuminate\Foundation\Http\FormRequest;

class IssueStoreRequest extends FormRequest
{
    use IssueValidationRules;

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
     * @return array<string, IssueValidationRules|array<mixed>|string>
     */
    public function rules(): array
    {
        return $this->issueRules();
    }
}
