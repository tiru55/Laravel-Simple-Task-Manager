<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Hash;


class ProfileController extends Controller
{
    public function index()
    {
            return view('profile');
    }
   public function update_profile(Request $req)
   {
        $user = auth()->user();
        $user->update([
            'first_name' => $req->first_name,
            'last_name'  => $req->last_name,
            'employee_id' => $req->employee_id,
            'designation' => $req->designation,
            'department' => $req->department,
            'phone' => $req->phone,
            'city' => $req->city,
            'country' => $req->country
        ]);
        toast('Your Profile Has Been Updated..!!','success');
        return redirect('profile');

   }
}
