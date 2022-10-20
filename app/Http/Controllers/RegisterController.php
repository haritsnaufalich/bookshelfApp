<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Author;

class RegisterController extends Controller
{
    public function registerIndex() {
        return view('register.index', [
            "title" => "Register",
            "active" => "Register"
        ]);
    }

    public function registerStore(Request $request) {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'username' => 'required:min:5|max:255|unique:authors',
            'email' => 'required|email:dns|unique:authors',
            'password' => 'required|min:8|max:255'
        ]);

        $validatedData['password'] = bcrypt($validatedData['password']);

        Author::create($validatedData);

        return redirect('/login')->with('success', 'Account has been Created');
    }
}
