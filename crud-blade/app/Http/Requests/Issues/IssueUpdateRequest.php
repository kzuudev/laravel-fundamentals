<?php

namespace App\Http\Requests\Issues;

use Illuminate\Foundation\Http\FormRequest;
use App\Concerns\Issues\IssueValidationRules;


class IssueUpdateRequest extends FormRequest {

    use IssueValidationRules;

    public function authorize(): bool {

        return false;
    }

    public function rules(): array {
        return $this->issueRules();
    }
}

