<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Note;

class NoteController extends Controller
{
    //

    public function store(Request $request)
    {
        $request->validate([
            'priority' => 'required',
            'note' => 'required'
        ]);


        Note::create([
            'user_id' => auth()->user()->id,
            'note' => $request->note,
            'priority' => $request->priority
        ]);

        return back()->with('message', 'note added');
    }

    public function update($id, Request $request)
    {
        $request->validate([
            'priority' => 'required',
            'note' => 'required',
        ]);

        Note::where("id", $id)->update([
            'note' => $request->note,
            'priority' => $request->priority
        ]);

        return back()->with('message', 'note updated');
    }

    public function destroy($id)
    {
        Note::destroy($id);
        return back()->with('message', 'note deleted');

    }
}
