@component('mail::message')
# Bonjour la team GLODEMAP,
Vous avez reçu un message provenant d'un visiteur sur votre site dont les details sont ci-dessous :
@component('mail::panel')
Nom : {{ $nom }}
Email : {{ $email }}
Téléphone : {{ $phone }}
Objet : {{ $objet }}
Message : {{ $message }}
@endcomponent


Merci,<br>
{{ config('app.name') }}
@endcomponent
