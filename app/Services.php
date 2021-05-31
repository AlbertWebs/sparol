<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Services extends Model
{
    // Services.php
    public function section() {
        return $this->belongsTo(Section::class); 
    }
}
