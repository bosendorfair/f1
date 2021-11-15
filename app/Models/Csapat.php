<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Csapat extends Model
{
    use HasFactory;

    protected $table = "csapat";
    protected $primarKey = "id";

    public function csapattagok()
    {
        return $this->hasMany(Pilota::class);
    }

}


