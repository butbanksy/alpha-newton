<?php

namespace App\Exports;

use App\User;
use App\Models\Student;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithHeadings;


class UsersExport implements FromCollection,WithMapping, WithHeadings
{
    private $niveau_scolaire;
    private $matiere;
    public function __construct($niveau_scolaire,$matiere){
        $this->matiere = $matiere;
        $this->niveau_scolaire = $niveau_scolaire;
    }
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        $etudiants = Student::select('personne_id')->with('person:id,nom,prenom')->whereHas('subjects', function ($query) use (&$request) {
            return $query
            ->where('niveau', $this->niveau_scolaire)
            ->where('nom', $this->matiere);            
           
        })->get();
        return $etudiants;
    }
    public function headings(): array
    {
        return [
            'Id',
            'Nom',
            'Prénom',
        ];
    }
    public function map($et): array
    {
        return [
            $et->personne_id,
            $et->person->nom,
            $et->person->prenom,
            // Date::dateTimeToExcel($invoice->created_at),
        ];
    }

}
