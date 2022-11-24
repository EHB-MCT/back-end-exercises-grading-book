<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class GradeController extends Controller
{
    public function create(Request $request)
    {
        return view('grades.create');
    }

    public function store(Request $request)
    {
        User::create([
            'name' => $request->input('student'),
            'grade' => $request->input('grade'),
            'email' => $request->input('student') . '@ehb.be',
            'password' => Hash::make('password'),
            'role' => User::ROLE_STUDENT,
        ]);

        return redirect()->back()->with('success', 'Created!');
    }
}
