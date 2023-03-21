<?php

namespace App\Http\Controllers;

use App\Models\Artist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ArtistController extends Controller
{
    //New artist
    public function NewArtist(Request $request){
        
        $formFields = $request->validate([
            'name' => ['required', 'min:3', 'max:255'],
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'country'=> ['required', 'min:3', 'max:255'],
            'birth' => ['required', 'min:3', 'max:255'],    
          
        ]); 
        if($request->hasFile('image')){
            $formFields['image'] = $request->file('image')->store('images', 'public');
        }
        Artist::create($formFields);
        return redirect('/Artists')->with('message', 'You have successfully added an artist');
        
    }
    //show artist
    public function showArtists()
    {
        $Artistslist = DB::table('artists')->get();
        $artists = artist::all();
        return view('/Admin/Artist', ['artists' => $artists]);
    }
    //delete artist
    public function DeleteArtist($id)
    {
        $artist = artist::find($id);
        $artist->delete();
        return redirect('Artists')->with('message', 'You have successfully deleted an artist');
    }
    //edit artist
    public function EditArtist($id)
    {
        $artist = artist::find($id);
        return view('/Admin/ArtistGestion/UpdateArtist', ['artist' => $artist]);
    }
    //update artist
    public function UpdateArtist(Request $request, $id)
    {
        $artist = artist::find($id);
        $artist->name = $request->input('name');
        $artist->country = $request->input('country');
        $artist->birth = $request->input('birth');
        if ($request->hasFile('image')) {
            $formFields['image'] = $request->file('image')->store('images', 'public');
        }
        $artist->update($formFields);
        return redirect('/Artists')->with('message', 'You have successfully updated an artist');
    }
}
