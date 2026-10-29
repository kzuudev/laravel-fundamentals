<?php

namespace App\Http\Controllers\Issues;

use App\Models\Issues;
use App\Http\Controllers\Controller;
use App\Http\Requests\Issues\IssueStoreRequest;
use App\Http\Requests\Issues\IssueUpdateRequest;
use App\Http\Requests\Issues\IssueDeleteRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class IssueController extends Controller {

    public function index(): View {
        
        return view('issues.index', [
            'issues' => Issues::all()
        ]);

    }

    public function store(IssueStoreRequest $request): RedirectResponse  
    {
        $issue = Issues::create($request->validated());

        return redirect()->route('issue.index', $issue->id)->with('success', 'Issue created successfully');
        
    }

    public function update(IssueUpdateRequest $request, Issues $issue): RedirectResponse
    {
        $issue->update($request->validated());

        return redirect()->route('issue.index', $issue->id)->with('success', 'Issue updated successfully');
    }

    public function show(Issues $issue): View
    {
        return view('issues.show', [
            'issue' => $issue
        ]);
    }

    public function destroy(IssueDeleteRequest $request, Issues $issue): RedirectResponse 
    {
        $issue->delete();

        return redirect()->route('issue.index')->with('success', 'Issue deleted successfully');
    }



    
}