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
 
    public function show($id)
    {
        return Journal::find($id);
    }

    public function store(Request $request)
    {
        return Journal::create($request->all());
    }

    public function update(Request $request, $id)
    {
        $journal = Journal::findOrFail($id);
        $journal->update($request->all());

        return $journal;
    }

    public function delete(Request $request, $id)
    {
        $journal = Journal::findOrFail($id);
        $journal->delete();

        return 204;
    }

}
