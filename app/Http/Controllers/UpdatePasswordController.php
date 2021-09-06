<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;

use Illuminate\Http\Request;

class UpdatePasswordController extends Controller
{
    public function update_pasword()
    {
        $user = auth()->user();
        
        dd($user->password);
    }
}
