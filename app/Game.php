<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    protected $fillable = [
      "title",
      "genre",
      "developer",
      "console",
      "price"
    ];

    protected $table = "games";
}
