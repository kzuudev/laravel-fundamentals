<?php

namespace App\Http\Requests\Issues;

use Illuminate\Foundation\Http\FormRequest;


class IssueDeleteRequest extends FormRequest {

    public function authorize(): bool {
        return false;
    }

    public function rules(): array {
        return [];
    }
}