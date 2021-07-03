<?php

namespace App\Http\Controllers;

use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class SettingsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    // view admin settings page
    public function adminSettingsPage(){
        return view('admin.pages.settings');
    }

    // settings update form submit
    public function updateSettings(Request $request){
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users,email,' . Auth::id()],
            'profile_picture' => ['sometimes', 'image', 'file'],
            'new_password' => ['sometimes', 'nullable', 'string', 'min:8'],
            'phone' => ['sometimes', 'min:11']
        ]);

        $user = User::find(Auth::id());

        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone = $request->phone;

        if($request->has('profile_picture')){
            // delete previous image
            Storage::delete($user->profile_pic);

            //crop by square size
            $user->profile_pic = $request->file('profile_picture')->store('profile_picture');
            $public_path = public_path('storage/' . $user->profile_pic);
            Image::make($public_path)->fit(200, 200)->save($public_path);
        }

        if($request->old_password && $request->new_password){
            if (Hash::check($request->old_password, Auth::user()->password)){
                $user->password = Hash::make($request->new_password);
            }else{
                Toastr::error('Old password does not match', 'Error!');
                return back();
            }
        }

        $user->save();

        Toastr::success('Profile info updated', 'Success');
        return back();
    }
}
