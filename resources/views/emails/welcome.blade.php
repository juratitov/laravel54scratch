@component('mail::message')

Welcome to sign up, {{ $user->name }}!

@component('mail::button', ['url' => url('/login'), 'color' => 'green'])
Login
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent