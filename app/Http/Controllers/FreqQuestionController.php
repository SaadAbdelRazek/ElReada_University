<?php

namespace App\Http\Controllers;

use App\Models\FreqQuestion;
use Illuminate\Http\Request;

class FreqQuestionController extends Controller
{
    public function viewFreqs(){
        $freqs=FreqQuestion::all();
        return view('admin.freq-questions',compact('freqs'));
    }

    public function create()
    {
        return view('admin.insert-freq-question');
    }

    // Insert a new question
    public function store(Request $request)
    {
        $request->validate([
            'question' => 'required|string|max:255',
            'answer' => 'required|string',
        ]);

        FreqQuestion::create([
            'question' => $request->question,
            'answer' => $request->answer,
        ]);

        return redirect()->route('admin-freqs')->with('success', 'Question added successfully.');
    }


    // Show edit form
    public function edit($id)
    {
        $question = FreqQuestion::findOrFail($id);
        return view('admin.update-freq-question', compact('question'));
    }

    // Update a question
    public function update(Request $request, $id)
    {
        $request->validate([
            'question' => 'required|string|max:255',
            'answer' => 'required|string',
        ]);

        $question = FreqQuestion::findOrFail($id);
        $question->update([
            'question' => $request->question,
            'answer' => $request->answer,
        ]);

        return redirect()->route('admin-freqs')->with('success', 'Question updated successfully.');
    }

    // Delete a question
    public function destroy($id)
    {
        $question = FreqQuestion::findOrFail($id);
        $question->delete();

        return redirect()->route('admin-freqs')->with('success', 'Question deleted successfully.');
    }
}
