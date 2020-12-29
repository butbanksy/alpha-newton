 <body style="font-family: 'dejavu sans', sans-serif">
     <a class="navbar-brand" style="margin:auto;"> <img src="../public/images/entete.png" height="150" width="700" /> </a><br><br>

     <p>Prof : ............................................................ &nbsp; &nbsp; Date :.........................................</p>
     <p>Matière : ...................................................... &nbsp; &nbsp; Niveau :.........................................</p>

     @foreach($etudiants as $etudiant)
     <p>{{$etudiant->person->nom}}</p>
     @endforeach


     <table border="2" id="table" data-toggle="table" data-pagination="true" data-locale="fr-FR" data-filter-control="true" data-search="true">
         <thead>
             <tr>
                 <th data-sortable="true" data-field="id">ID</th>
                 <th date-sortable="true" data-field="prenom">Nom</th>
                 <th date-sortable="true" data-field="nom">Prénom</th>
                 <th data-field="true">Absent</th>
                 <th data-field="true">Présent</th>

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
