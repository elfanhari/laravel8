<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ProfileInformationController extends Controller
{
    public function __invoke(Request $request, $identifier)
    {
        return view('profile', [
            'username' => $identifier,
            'slug' => Str::of('Laravel Framework')->slug('-'),
        ]);
    }
}