<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QuestionController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function create()
    {
        return view('question.create');
    }

    public function store(Request $request)
    {
        dd($request->all());
        $request->validate([
            'nama' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'pertanyaan' => 'required|string',
        ]);

        return redirect()
            ->route('question.index')
            ->with('success', 'Pertanyaan berhasil dikirim!');
    }

    public function show(string $id)
    {
        //
    }

    public function edit(string $id)
    {
        //
    }

    public function update(Request $request, string $id)
    {
        //
    }

    public function destroy(string $id)
    {
        //
    }
}
