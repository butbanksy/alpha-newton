<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    use HasFactory;

    protected $guarded = ["id"];
    protected $table = "matieres";

    public function students()
    {
        return $this->belongsToMany(Student::class, "etudiants_matieres", "matiere_id", "etudiant_id");
    }
}
