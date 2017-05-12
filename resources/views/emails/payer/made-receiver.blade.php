@component('mail::message')
# You have been made a Recipient

Hi {{ucwords($receiver->user->username)}},

@component('mail::panel')
You have been elevated to be a Recipient.

Kindly be patient as you will be allocated donors as soon as they are available.
@endcomponent


Thanks,<br>
{{ config('app.name') }}
@endcomponent
