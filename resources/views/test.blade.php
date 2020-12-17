@extends("master")

@section("content")
<div class="container">
    <select name="niveau_scolaire" id="niveaux" placeholder="{{__('messages.niveau_scolaire')}}">
        <option disabled selected>Choisissez votre niveau scolaire</option>
        <option value="college">Collège</option>
        <option value="5eme">5ème</option>
        <option value="6eme">6ème</option>
        <option value="bacar">Bac Arabe</option>
        <option value="bacfr">Bac Francais</option>
    </select>

    <select name="matiere" id="matiere" placeholder="{{__('messages.niveau_scolaire')}}">
        <option disabled selected>Choisissez votre niveau scolaire</option>
    </select>

    <div class="btn btn-primary" id="getInfo">
        Chercher
    </div>

    <td><input type="checkbox" class="option" name="cb" value="1"> 1 </td>
    <td><input type="checkbox" class="option" name="cb" value="2"> 2 </td>
    <td><input type="checkbox" class="option" name="cb" value="3"> 3 </td>
    <div class="number">
        hello
    </div>
    <script>
        $('#getInfo').click(function() {
            let niveau = $("select#niveaux").val();
            let matiere = $("select#matiere").val();

        })
        $('#select').on('change', function(e) {


            let url = `/fr/getNiveau/${e.target.value}`;
            fetch(url)
                .then(res => res.json(res))
                .then(res => {
                    let html = `                        
                    <select name="niveau_scolaire" id="select" placeholder="{{__('messages.niveau_scolaire')}}">
                        <option disabled selected>Choisissez votre niveau scolaire</option>`
                    for (let el of res) {
                        html += `    
                            <option value="${el.nom}">${el.nom}</option>

                `
                    }
                    html += `</select>`
                    $("#matiere").html(html)
                })
                .catch(err => console.log('Request Failed', err));

        });



        $(document).on("change", ".option", function() {
            var total = 0;
            $('.option:checked').each(function() {
                total += parseInt($(this).val());
            })
            $('.number').html( total + ' DH');
        })
    </script>

</div>
@endsection