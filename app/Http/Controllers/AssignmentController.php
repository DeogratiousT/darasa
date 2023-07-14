<?php

namespace App\Http\Controllers;

use App\Models\Assignment;
use Illuminate\Http\Request;

class AssignmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if(request()->ajax()){
            return  Laratables::recordsOf(Assignment::class);
        }

        return view('assignments.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('assignments.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => ['required', 'string'],
            'description' => ['required', 'string'],
            'due-date' => ['required', 'date']
        ]);

        $validated = $validator->safe();

        try {
            Assignment::create([
                'title' => $validated['title'],
                'description' => $validated['description'],
                'due-date' => $validated['due-date'],
                'user_id' => auth()->id(),
            ]);
        } catch (\Throwable $th) {
            logger($th->getMessage());
        }

        return redirect()->route('asignment.index')->with('success', 'Assignment Created Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Assignment $assignment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Assignment $assignment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Assignment $assignment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Assignment $assignment)
    {
        //
    }
}
