<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    // Section.php
    public function services() {
        return $this->hasMany(Services::class); 
    }
}
