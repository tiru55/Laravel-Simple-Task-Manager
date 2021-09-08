<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Http\Request;

class UpdatePasswordController extends Controller
{
    public function update_password(Request $req)
    {
        $user = auth()->user();
        $hashed = Hash::make($req->current_password);
        if($hashed == $user->password && $req->password == $req->confirm_password)
        {
            $user->update([
                "password" => $req->password,
            ]);
        }
        else
        {
            toast('Current Password is Wrong..!','warning');

        }

    }
}
