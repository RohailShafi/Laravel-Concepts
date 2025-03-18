<?php

namespace App\Http\Controllers;

use App\Http\Requests\Profile\CreateProfileRequest;
use App\Http\Requests\Profile\UpdateProfileRequest;
use App\Models\Profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Storage;

class ProfileController extends Controller
{
    public function show()
    {
        $profile = Profile::latest()->first();

        return view('pages.home', compact('profile'));
    }

    public function create()
    {
        return view('pages.profile.create_profile');
    }

    public function edit()
    {
        $profile = Profile::latest()->first();

        return view('pages.profile.edit_profile', compact('profile'));
    }

    public function store(CreateProfileRequest $request)
    {
        try {

            $imagePath = null;
            if ($request->hasFile('image')) {
                $imagePath = $request->file('image')->store('profile_images', 'public');
            }
//            $imageData = $request->input('cropped_image');
//            $imageName = 'profile_' . time() . '.png';
//            Storage::disk('public')->put('profile_images/' . $imageName, base64_decode(explode(',', $imageData)[1]));

//            dd($imageName);
            Profile::create([
                'name' => $request->name,
                'designation' => $request->designation,
                'description' => $request->description,
                'image' => 'profile_images/' .$imagePath,
            ]);

            return back()->with('success', 'Profile saved successfully.');
        }catch (\Exception $e){

            return $e->getMessage();
        }

    }

    public function update(UpdateProfileRequest $request)
    {
        $profile = Profile::latest()->first();

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('profile_images', 'public');
            $profile->image = $imagePath;
        }

        $profile->name = $request->name;
        $profile->designation = $request->designation;
        $profile->description = $request->description;
        $profile->save();

        return redirect('/')->with('success', 'Profile updated successfully.');
    }

    public function delete(Request $request){

        $profile = Profile::latest()->first();

        if($profile){

            if($profile->image){

                Storage::disk('public')->delete($profile->image);
            }

            $profile->delete();
        }

        return redirect('/')->with('success', 'Profile deleted successfully.');
    }

}
