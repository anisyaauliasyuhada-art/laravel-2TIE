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
        $request->validate([
            'nama' => 'required|max:10',
            'email' => ['required', 'email'],
            'pertanyaan' => 'required|max:300|min:8',
        ], [
            'pertanyaan.required' => 'Pertanyaan tidak boleh kosong',
            'email.required' => 'Email tidak valid',
        ]);


        $data['nama'] = $request->nama;
        $data['email'] = $request->email;
        $data['pertanyaan'] = $request->pertanyaan;

        return view('home-question-respon', $data);
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
