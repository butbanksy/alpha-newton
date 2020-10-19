<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Responsable extends Model
{
    use HasFactory;

    protected $guarded = ["id"];

    protected $table = "responsables";

    public function student()
    {
        return $this->belongsTo(Student::class, "etudiant_id");
    }
}
