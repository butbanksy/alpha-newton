<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $guarded = ["id"];

    protected $table = "etudiants";

    public function person()
    {
        return $this->belongsTo(Person::class, "personne_id");
    }

    public function responsable()
    {
        return $this->hasOne(Responsable::class, "etudiant_id");
    }

    public function subjects()
    {
        return $this->belongsToMany(Subject::class, "etudiants_matieres", "etudiant_id", "matiere_id");
    }
}
