<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Donante extends Model
{
    protected $table = 'donadores';

    public function obra()
    {
        return $this->belongsTo('App\Obra');
    }
}
