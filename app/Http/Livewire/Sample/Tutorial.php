<?php

namespace App\Http\Livewire\Sample;

use Livewire\Component;

class Tutorial extends Component {

    public $name = 'Janeki';
    public $display = false;
    public $greeting = []; // Empty for now

    public function render() {
        return view('livewire.sample.tutorial');
    }
}
