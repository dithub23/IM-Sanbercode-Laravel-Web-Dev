<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Profile;


class ProfileController extends Controller
{
    public function getProfile()
    {
        $currentUser = Auth::user();

        $user = User::find($currentUser->id);

        // dd($user);

         if ($user->profile) {
            $profile = Profile::where('user_id', $user->id)->first();
            return view('profile.update', ['profile' => $profile]);

        }else{
            return view('profile.add');
        }
    }

    public function store(Request $request)
    {
        $request->validate([
            'age' => 'required',
            'bio' => 'required', 
        ]);

        $currentUser = Auth::user(); // WAJIB

        Profile::create([
            'age' => $request->age,
            'bio' => $request->bio,
            'user_id' => $currentUser->id,
        ]);

        return redirect('/profile')->with('success', 'Profile created successfully!');
    }
 
    public function update(Request $request)
    {
        $request->validate([
            'age' => 'required',
            'bio' => 'required', 
        ]);

        $currentUser = Auth::user(); // WAJIB

        $profile = Profile::where('user_id', $currentUser->id)->first();

        $profile->update([
            'age' => $request->age,
            'bio' => $request->bio,
            'user_id' => $currentUser->id,
        ]);

        return redirect('/profile')->with('success', 'Profile updated successfully!');
    }

}
