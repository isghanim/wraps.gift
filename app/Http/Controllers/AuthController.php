<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\RedirectResponse;

class AuthController extends Controller
{
    public function signup(): RedirectResponse
    {
        $data = request()->validate([
            'email' => ['required', 'email', 'max:255', 'unique:users']
        ]);

        $newUser = User::create($data);
        $newUser->sendLoginLink();
        session()->flash('success');
        return redirect()->back()->withInput();
    }
}
