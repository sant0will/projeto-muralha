<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProfileHasSpecialNeed extends Model{
    public function profiles(){
    $profile = App\Profile::find(1);

        foreach ($profile->specialsneeds as $specialsneeds) {
        echo $specialsneeds->pivot->created_at;
        }
    }
}
