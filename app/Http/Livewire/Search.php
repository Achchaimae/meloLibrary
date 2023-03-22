<?php

namespace App\Http\Livewire;

use App\Models\Song;
use Livewire\Component;

class Search extends Component
{
    
    public $searchQuery;
    public $songs;


    protected $rules = [
        'searchQuery' => 'required|min:3'
    ];


    public function search() : void
     {
        $this->validate();
        $this->songs = Song::where(function ($query) {
            $query->where('title', 'like', '%'.$this->searchQuery.'%')
                  ->orWhere('artist', 'like', '%'.$this->searchQuery.'%')
                  ->orWhere('tag', 'like', '%'.$this->searchQuery.'%');
        })->get();

        if ($this->songs->isEmpty()) {
            session()->flash('message', 'No results found for "' . $this->searchQuery . '".');
        }
    }
    public function render() {
        if($this->songs) {
            return view('livewire.search', ['songs' => $this->songs]);
        }else {
            return view('livewire.search', ['songs' => "There's no song with that name"]);
        }
    }

   
}
