<?php

namespace App\Concerns\Issues;

trait IssueValidationRules {

    protected function issueRules(): array 
    {
        return [
            'title' => $this->issueTitleRules(),
            'description' => $this->issueDescriptionRules(),
            'status' => $this->issueStatusRules(),
            'priority' => $this->issuePriorityRules(),
            'type' => $this->issueTypeRules(),
        ];
        
    }


    /** 
     * Get the validation rules used to validate issue creation.
     */

    protected function issueTitleRules(): array
    {
        return ['required', 'string', 'max:255'];
    }

    /**
     * Get the validation rules used to validate issue update.
     */

    protected function issueDescriptionRules(): array
    {
        return ['nullable', 'string', 'max:255'];
    }

    /**
     * Get the validation rules used to validate issue deletion.
     */

    protected function issueStatusRules(): array
    {
        return ['required', 'in:open,in_progress,closed'];
    }

    /**
     * Get the validation rules used to validate issue priority.
     */

    protected function issuePriorityRules(): array
    {
        return ['required', 'in:low,medium,high'];
    }

    /**
     * Get the validation rules used to validate issue type.
     */

    protected function issueTypeRules(): array
    {
        return ['required', 'in:bug,feature,task'];
    }
}