<div>

    <h1>Mail de Billun</h1>


    <i>Message de:
        {{ $mailData['email'] }}</i>
    <i><br>
        <i>
            nom:
            {{ $mailData['nom'] }}<br>
            @if (!empty($mailData['prenom']))
                Prénom:
                {{ $mailData['prenom'] }}
            @endif
        </i>
        <p>
            @if (!empty($mailData['societe']))
                Société:
                {{ $mailData['societe'] }}
            @endif
        </p>
        <p>


        <p>
            @if (!empty($mailData['siteweb']))
                siteweb:
                {{ $mailData['siteweb'] }}
            @endif

        </p>

        <p>
            @if (!empty($mailData['message']))
                Message: {{ $mailData['message'] }}
            @endif
        </p>

</div>
