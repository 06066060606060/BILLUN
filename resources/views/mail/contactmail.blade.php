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
        @if(!empty($mailData['societe']))
            Société:
            {{ $mailData['societe'] }}
        @endif
    </p>
    <p>
   
    
    <p>
          @if(!empty($mailData['siteweb']))
            siteweb:
            {{ $mailData['siteweb'] }}
        @endif
 
    </p>

    <p>
   Message: {{ $mailData['message'] }}
    </p>

</div>
