<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Corruptionsectors;

class Corruptionmen extends Model
{



    public function corruptionmens()
    {
        return $this->hasMany(Corruptionsectors::class, 'menu_uz', 'menu_uz');
    }
}
