<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ActorType extends Model
{
    use HasFactory;
    protected $fillable = array('name');

    public function actors()
    {
        return $this->hasMany('Actor', 'typeId');
    }
}
