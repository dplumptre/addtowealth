@component('mail::message')
# Members Requests Listened to.

Hi {{$user->username}},

@component('mail::panel')
Earlier today, matching was supposed to have taken place.
This will allow users make their donations which will now put users in position where they will recover a 100% of their donations.

The Admin received a lot of requests and pleas from some users for the matching to kick-off tomorrow (23rd May 2017) in-order for them to be fully prepared for the matching.

We have listened to your requests. Matching will now kick-off 7am, 23rd May 2017.
@endcomponent



Thanks,<br>
{{ config('app.name') }}
@endcomponent
