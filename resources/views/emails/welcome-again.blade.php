@component('mail::message')
# Introduction
My Name Md. Mamun Or Rashid

The body of your message.

@component('mail::button', ['url' => 'https://google.com'])
GO To
@endcomponent
@component('mail::panel', ['url' => ''])
Thats Right Man.
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
