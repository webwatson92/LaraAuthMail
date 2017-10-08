@component('mail::message')
#  Récupération de mot de passe

 Bonjour <b></b>,
 Tu as oublié ton mot de passe ? Pas de problème.
	<p>Voici ton code de récupération</p>
@component('mail::panel-primary')
recup_code
@endcomponent

Copie/colle ce code dans le cadre recommandé sur le site.</br></br>
Tu vas pouvoir entrer et confirmer ton nouveau mot de passe.<br><br>
Ceci est un email automatique, merci de ne pas y répondre
{{ config('app.name') }}
@endcomponent
