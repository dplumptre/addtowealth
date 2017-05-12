@component('mail::message')
# Password Change Notice.

Hi {{$user->username}}

@component('mail::panel')
You password has just been changed.

If you did not make this change, please send an email to {{config('family.emails.support')}}
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
