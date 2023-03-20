<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BandController extends Controller
{
    //new band
    public function NewBand(Request $request){
        $formFields = $request->validate([
            'name' => ['required', 'min:3', 'max:255'],
            'genre' => ['required', 'min:3', 'max:255'],
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'description' => ['required', 'min:3', 'max:255'],
        ]);
        if($request->hasFile('image')){
            $formFields['image'] = $request->file('image')->store('images', 'public');
        }
        Band::create($formFields);
        return redirect('/Bands')->with('message', 'You have successfully added a band');
    }
}


