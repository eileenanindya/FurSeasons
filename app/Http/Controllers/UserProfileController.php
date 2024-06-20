<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profile;
use Illuminate\Support\Facades\Auth;

class UserProfileController extends Controller
{
    public function showProfileForm()
    {
        $user = Auth::user();
        $profile = Profile::where('user_id', $user->id)->first();
        return view('profile.edit', compact('profile'));
    }

    public function add_profile(Request $request)
    {
        $request->validate([
            'address' => 'required|string|max:255',
            'phone_number' => 'required|string|max:15',
        ]);

        $user = Auth::user();
        $profile = Profile::where('id', $user->id)->first();

        if (!$profile) {
            $profile = new Profile();
            $profile->id = $user->id;
        }

        $profile->user_id = $user->id;
        $profile->name = $user->name;
        $profile->email = $user->email;
        $profile->address = $request->input('address');
        $profile->phone_number = $request->input('phone_number');
        $profile->save();

        return redirect()->back()->with('success', 'Profile added/updated successfully.');
    }
}

// namespace App\Http\Controllers;

// use Illuminate\Http\Request;
// use App\Models\Profile;
// use Illuminate\Support\Facades\Auth;

// class UserProfileController extends Controller
// {
//     public function add_profile(Request $request){
//         $user = Auth::user();
        
//         // Create a new Profile instance
//         $profile = new Profile();
//         $profile->id = $user->id; // Assuming you have a user_id field to link to the user
//         $profile->name = $user->name;
//         $profile->email = $user->email;
//         $profile->address = $request->address;
//         $profile->phone_number = $request->phone_number;
        
//         // Save the Profile instance
//         $profile->save();

//         return redirect()->back()->with('success', 'Profile added successfully.');
//     }
// }
