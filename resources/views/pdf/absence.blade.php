<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
        #customers {
            font-family: Arial, Helvetica, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        #absence,
        #presence,
        #id {
            width: 10px;
        }

        #customers td,
        #customers th {
            border: 1px solid #ddd;
            padding: 8px;
        }

        #customers tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        #customers tr:hover {
            background-color: #ddd;
        }

        #customers th {
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: left;
            background-color: #41bacc;
            color: white;
        }

    </style>


    <title>Fiche d'absence</title>
</head>
<body style="font-family: 'XB Riyaz',  monospace, sans-serif;">
    <a class="navbar-brand" style="margin:auto;"> <img src="../public/images/entete.png" height="150" width="700" /> </a><br><br>

    <p>Prof : ............................................................ &nbsp; &nbsp; Date : {{date("d/m/Y")}}</p>
    <p>Matière : ...................................................... &nbsp; &nbsp; Niveau :.......................................</p>


    <table id="customers" data-toggle="table" data-pagination="true" data-locale="fr-FR" data-filter-control="true" data-search="true">
        <thead>
            <tr>
                <th data-sortable="true" id="id" data-field="id">ID</th>
                <th date-sortable="true" data-field="prenom">Nom</th>
                <th date-sortable="true" data-field="nom">Prénom</th>
                <th data-field="true" id="presence">Présent(e)</th>
                <th data-field="true" id="absence">Absent(e)</th>

            </tr>
        </thead>
        <tbody>
            @foreach($etudiants as $etudiant)
            <tr>
                <td>{{$etudiant->id}}</td>
                <td>{{$etudiant->person->nom}}</td>
                <td>{{$etudiant->person->prenom}}</td>
                <td></td>
                <td></td>

            </tr>
            @endforeach
        </tbody>
    </table>

</body>
</html>
