@component('mail::message')
  Bonjour <b>{{ $name ?>}}</b>,
  Tu as oublié ton mot de passe ? Pas de problème.
   <span>Voici ton code de récupération:</span>
@component('mail::button', ['url' => ''])
         <span>recup_code</span>
@endcomponent
	<p class="text-center style">Copie/colle ce code dans le cadre recommandé sur le site.</br></br>
        Tu vas pouvoir entrer et confirmer ton nouveau mot de passe.<br><br>
        Ceci est un email automatique, merci de ne pas y répondre
<br>
{{ config('app.name') }}
@endcomponent
