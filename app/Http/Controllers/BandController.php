<?php

namespace App\Http\Controllers;

use App\Models\Band;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BandController extends Controller
{
    //new band
    public function NewBand(Request $request){
        
        $formFields = $request->validate([
            'name' => ['required', 'min:3', 'max:255'],
            'members'=> ['required', 'min:3', 'max:255'],
            'release_date' => ['required', 'min:3', 'max:255'],
            'country'=> ['required', 'min:3', 'max:255'],
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
          
        ]); 
        if($request->hasFile('image')){
            $formFields['image'] = $request->file('image')->store('images', 'public');
        }
        Band::create($formFields);
        return redirect('/Bands')->with('message', 'You have successfully added a band');
    }
    //show bands
    public function showbands()
    {
        $bandslist = DB::table('bands')->get();
        $bands = band::all();
        return view('/Admin/bands', ['bands' => $bands]);
    }
    //delete band
    public function DeleteBand($id)
    {
        $band = band::find($id);
        $band->delete();
        return redirect('Bands')->with('message', 'You have successfully deleted a song');
    }
    //edit band
    public function EditBand($id)
    {
        $band = band::find($id);
        return view('/Admin/BandGestion/UpdateBand', ['band' => $band]);
    }
    //update band
    public function UpdateBand(Request $request, $id)
    {
        $band = band::find($id);
        $band->name = $request->input('name');
        $band->members = $request->input('members');
        $band->release_date = $request->input('release_date');
        $band->country = $request->input('country');
        if ($request->hasFile('image')) {
            $formFields['image'] = $request->file('image')->store('images', 'public');
        }
        $band->update($formFields);
        return redirect('/Bands')->with('message', 'You have successfully updated a band');
    }

}


