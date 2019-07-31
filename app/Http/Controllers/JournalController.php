<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Journal;

class JournalController extends Controller
{
    public function index()
    {
        return Journal::all();
    }
 
    public function show(Journal $journal)
    {
        return $journal;
        //Journal::find($id);
    }

    public function store(Request $request)
    {
        Journal::create($request->all());
        return response()->json($journal, 201);

    }

    public function update(Request $request, Journal $journal)
    {
        //$journal = Journal::findOrFail($id);
        $journal->update($request->all());

        return response()->json($journal, 200);
    }

    public function delete(Request $request, Journal $journal)
    {
        //$journal = Journal::findOrFail($id);
        $journal->delete();

        return response()->json(null, 204);
    }

}
