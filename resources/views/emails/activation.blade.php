@component('mail::message')
# Introduction

The body of your message.

@component('mail::button', ['url' => route('activate', ['token' => $user->activation_token, 'email'=>$user->email])])
Verify E-Mail
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
