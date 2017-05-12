@component('mail::message')
# Donation package accepted

Hi {{ ucfirst($payer->user->username) }},

@component('mail::panel')
Your selected package, <strong>{{ucfirst($payer->packages->name)}} Package </strong> has been accepted and has been queued.

You will be notified by email as soon as you have a Recipient to make the donation to.
@endcomponent
Please keep your account credentials safe.

Thanks,<br>
{{ config('app.name') }}
@endcomponent
