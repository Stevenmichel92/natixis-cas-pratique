
$( document ).ready(function(){

    $('#sauvegarder').on('click', function(){
        let date_event = $('#date_event').val();
        let heure_event = $('#heure_event').val();
        let choix_lounge = $('input[name="choix_lounge"]:checked').val();
        let type_event = $( "#type_event .dd-selected-value" ).val();
        let description_event = $('textarea#description_event').val();
        let nb_participant = $('#nb_participant').val();
        let nom_organisateur = $('#nom_organisateur').val();
        let prenom_organisateur = $('#prenom_organisateur').val();
        let direction_organisateur = $('#direction_organisateur option:selected').val();

        let error = false;
        $('#error').html("");
        if(date_event == ""){
            error = true;
            $('#error').append('<div class="alert alert-danger" role="alert">La date de l\'évènement est obligatoire</div>')
        }
        if(heure_event == ""){
            error = true;
            $('#error').append('<div class="alert alert-danger" role="alert">L\'heure de l\'évènement est obligatoire</div>')
        }
        if(choix_lounge == ""){
            error = true;
            $('#error').append('<div class="alert alert-danger" role="alert">Le choix du lounge est obligatoire</div>')
        }
        if(type_event == ""){
            error = true;
            $('#error').append('<div class="alert alert-danger" role="alert">Le type d\évènement est obligatoire</div>')
        }
        if(description_event == ""){
            error = true;
            $('#error').append('<div class="alert alert-danger" role="alert">La description de l\'évènement est obligatoire</div>')
        }
        if(nb_participant == ""){
            error = true;
            $('#error').append('<div class="alert alert-danger" role="alert">Le nombre de participant est obligatoire</div>')
        }
        if(nom_organisateur == ""){
            error = true;
            $('#error').append('<div class="alert alert-danger" role="alert">Votre nom est obligatoire</div>')
        }
        if(prenom_organisateur == ""){
            error = true;
            $('#error').append('<div class="alert alert-danger" role="alert">Votre prénom est obligatoire</div>')
        }
        if(direction_organisateur == ""){
            error = true;
            $('#error').append('<div class="alert alert-danger" role="alert">Votre direction est obligatoire</div>')
        }

        if(error == false){
            Swal.fire({
                title: 'Validation événement',
                text: 'Êtes-vous sûr de sauvegarder cet événement?',
                showDenyButton: true,
                confirmButtonText: 'Oui, je confirme',
                denyButtonText: `Annuler`,
            }).then((result) => {
                if (result.isConfirmed) {
                    let id_event = Number($('#new_event').attr("data-event"));
                    $('#new_event').attr("data-event", id_event+1);

                    Swal.fire('L\'événement a bien été sauvegardé!', '', 'success');
                    let new_event = {
                        "id_event": id_event,
                        "date_event":date_event,
                        "heure_event":heure_event,
                        "choix_lounge_id":choix_lounge,
                        "type_event_id":type_event,
                        "description_event":description_event,
                        "nb_participant":nb_participant,
                        "nom_organisateur":nom_organisateur,
                        "prenom_organisateur":prenom_organisateur,
                        "direction_organisateur_id":direction_organisateur
                    }

                    console.log(new_event);
                } 
            })
        }

    })


    $('#nb_participant').keyup(function(){
        if($(this).val()<1 | $(this).val()>10){
            $(this).val("");
        }
    })

    function MajFirstLetter(str) 
    {
        return str.split(/\s+/).map(s => s.charAt(0).toUpperCase() + s.substring(1).toLowerCase()).join(" ");
    }

    $('#prenom_organisateur').keyup(function(){            
        $(this).val(MajFirstLetter($(this).val()))
    });

    $('#nom_organisateur').keyup(function(){
        $(this).val($(this).val().toUpperCase());
    });


    var ddData = [
        {
            text: "ÉVÈNEMENT INTERNE",
            value: 1,
            selected: false,
            description: "Conférences, rencontre d'équipes",
            imageSrc: "img/maitre-de-conferences.png"
        },
        {
            text: "ÉVÈNEMENT EXTERNE",
            value: 2,
            selected: false,
            description: "Manifestations, autres",
            imageSrc: "img/conference-de-presse.png"
        }
    ];
    $('#type_event').ddslick({
        data: ddData,
        defaultSelectedIndex:0
    });

});