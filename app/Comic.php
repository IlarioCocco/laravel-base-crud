<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comic extends Model
{
    // protected $table = "comics";
    // assegnazione massiva
    protected $fillable = ["title", "thumb", "price", "date", "type"];
}
