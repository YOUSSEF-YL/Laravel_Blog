@component('mail::message')
# welcome to our newsletter

The body of your message.

@component('mail::button', ['url' => ''])
Go Back to our website
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
