@component('mail::message')
# Welcome home

Hi {{$user->username}},

Welcome to {{env('APP_NAME')}}

@component('mail::panel')
We are a community of people helping people, people offering assistance to people and empowering the poor.

Take a look around the website and see all you can accomplish with it.
Make sure you keep your profile updated with the correct information.
@endcomponent
<?php $url = route('profile'); ?>
@component('mail::button', ['url' => $url])
Update Profile
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
