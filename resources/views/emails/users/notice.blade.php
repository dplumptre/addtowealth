@component('mail::message')
# Time Left bug.

Hi {{$user->username}},

@component('mail::panel')
For those that have been matched, we noticed a small bug associated with the time left for you to make your donation.

The time for you to make your donations is 6hours (six hours). Make sure your donations are made within 6 hours from now.

However, our engineers are working to fix the bug.
@endcomponent



Thanks,<br>
{{ config('app.name') }}
@endcomponent
