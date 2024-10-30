<?php

namespace App\Http\Controllers;

use App\Models\Notes;
use Illuminate\Http\Request;

class NotesController extends Controller
{
    public function index()
    {
        $notes = Notes::get();
        return view('notes.index', [
            'notes' => $notes
        ]);
    }

    public function create()
    {
        return view('notes.create');
    }

    public function store(Request $request)
    {

        $request->validate([
            'title' => 'required|string|max:99',
            'description' => 'required|string|max:255'
        ]);

        Notes::create([
            'title' => $request->title,
            'description' => $request->description
        ]);

        return redirect('/notes')->with('status', 'Note created successfully!');
    }

    public function edit($noteId)
    {

        $note = Notes::where('id', $noteId)->first();
        return view('notes.edit', [
            'note' => $note
        ]);
    }

    public function update(Request $request, $noteId)
    {

        $note = Notes::where('id', $noteId)->first();

        $request->validate([
            'title' => 'required|string|max:99',
            'description' => 'required|string|max:255'
        ]);

        $note->update([
            'title' => $request->title,
            'description' => $request->description
        ]);

        return redirect('/notes')->with('status', 'Note updated successfully!');
    }

    public function destroy($noteId)
    {

        $note = Notes::where('id', $noteId)->first();
        $note->delete();

        return redirect('/notes')->with('status', 'Note deleted successfully!');
    }
}
