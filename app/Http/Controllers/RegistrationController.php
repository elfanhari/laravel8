<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    public function create()
    {
        return view('auth.register');
    }

    public function store(RegisterRequest $request)
    {
        $request['password'] = bcrypt($request->password);
        User::create($request->all());
        return redirect('/')->withInfo('You are now registered');
    }
}
