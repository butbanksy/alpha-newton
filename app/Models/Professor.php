<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Professor extends Model
{
    use HasFactory;

    protected $guarded = ["id"];
    protected $table = "professeurs";

    public function person()
    {
        return $this->belongsTo(Person::class, "personne_id");
    }
}
