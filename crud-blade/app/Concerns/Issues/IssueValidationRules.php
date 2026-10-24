<?php

namespace App\Concerns;

use App\Models\Issue;

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
        return ['required', 'text', 'max:255'];
    }

    /**
     * Get the validation rules used to validate issue deletion.
     */

    protected function issueStatusRules(): array
    {
        return ['required', 'enum:open,in_progress,closed'];
    }

    /**
     * Get the validation rules used to validate issue priority.
     */

    protected function issuePriorityRules(): array
    {
        return ['required', 'enum:low,medium,high'];
    }

    /**
     * Get the validation rules used to validate issue type.
     */

    protected function issueTypeRules(): array
    {
        return ['required', 'enum:bug,feature,task'];
    }
}