<?php

namespace App\View\Components;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\Component;
use Illuminate\Support\Str;

class userphoto extends Component
{
public $id;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($id)
    {
        $this->id=session('id');

        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.userphoto', ['id'=>$this->id,'file'=>$this->photoexists(), 'rand'=>Str::random(4)]);
    }
    public function photoexists(){
        if (Storage::disk('local')->exists('data/portraits/'.$this->id.'.jpg')) {
            return true;
        }    
        return false; 
    }
}
