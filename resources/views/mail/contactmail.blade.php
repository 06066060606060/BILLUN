<div>

<h1>Mail de Billun</h1>


    <i>Message de:
        {{ $mailData['email'] }}</i>
    <i><br>
    <i>
        nom:
        {{ $mailData['nom'] }}<br>
        Prénom:
        {{ $mailData['prenom'] }}
    </i>
    <p>
       Société: {{ $mailData['societe'] }}
    </p>
    <p>
       Siteweb: {{ $mailData['siteweb'] }}
    </p>

    <p>
   Message: {{ $mailData['message'] }}
    </p>

</div>
