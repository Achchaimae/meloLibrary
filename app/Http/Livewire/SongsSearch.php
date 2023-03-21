<?php

namespace App\Http\Livewire;
use App\Models\Song;
use Livewire\Component; 

class SongsSearch extends Component
{
    public $searchQuery;
    public $songs;


    protected $rules = [
        'searchQuery' => 'required|min:3'
    ];


    public function search() : void
     {
        $this->validate();
        $this->songs = Song::where('title', 'like', '%'.$this->searchQuery.'%')->get();

        if ($this->songs->isEmpty()) {
            session()->flash('message', 'No results found for "' . $this->searchQuery . '".');
        }
    }
    public function render() {
        if($this->songs) {
            return view('livewire.songs-search', ['songs' => $this->songs]);
        }else {
            return view('livewire.songs-search', ['songs' => "There's no song with that name"]);
        }
    }

}