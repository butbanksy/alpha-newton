<?php

namespace App\Exports;

use App\User;
use App\Models\Student;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithHeadings;


class UsersExport implements FromCollection, WithMapping, WithHeadings
{
    private $niveau_scolaire;
    private $matiere;
    public function __construct($niveau_scolaire, $matiere)
    {
        $this->matiere = $matiere;
        $this->niveau_scolaire = $niveau_scolaire;
    }
    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        $etudiants = Student::with(['person', 'responsable'])->whereHas('subjects', function ($query) use (&$request) {
            return $query
                ->where('niveau', $this->niveau_scolaire)
                ->where('nom', $this->matiere);
        })
            ->get();


        return $etudiants;
    }
    public function headings(): array
    {
        return [
            'Id',
            'Nom',
            'Prénom',
            'Telephone',
            'Lieu de Naissance',
            'Date de Naissance',
            'Adresse',
            'Niveau Scolaire',
            'Option',
            'Etablissement',
            'Maladie Spécifique',
            'Maladie Respiratoire',
            'Maladie Vue',
            'Maladie Audition',
            'Nom Responsable',
            'Prenom Responsable',
            'Adresse Responsable',
            'Téléphone Responsable',
            'Profession Responsable'

        ];
    }
    public function map($et): array

    {
        return [
            $et->personne_id,
            $et->person->nom,
            $et->person->prenom,
            $et->person->telephone,
            $et->person->lieu_naissance,
            $et->person->date_naissance,
            $et->person->adresse,
            $et->person->niveau_scolaire,
            $et->person->option,
            $et->person->etablissement,
            $et->person->maladie_specifique,
            $et->person->maladie_respiratoire,
            $et->person->maladie_vue,
            $et->person->maladie_audition,
            $et->responsable->nom,
            $et->responsable->prenom,
            $et->responsable->adresse,
            $et->responsable->telephone,
            $et->responsable->profession
        ];
    }
}
