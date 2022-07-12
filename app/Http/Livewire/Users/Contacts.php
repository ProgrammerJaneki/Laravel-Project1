<?php

namespace App\Http\Livewire\Users;

use Livewire\Component;
use Livewire\WithFileUploads;

class Contacts extends Component {
    use WithFileUploads;

    public $photo;
    public $errorMessage = 'Must be an image';

    public function save() {
        $this->validate([
            'photo' => 'image|max:1024', // 1MB Max
        ]);

        $this->photo->store('photos', 's3'); // store in the photos
    }

    // Now store the Image
}
