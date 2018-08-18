@component('mail::message')
First Email from us

###Hi,

Welcome to our website. I hope you will have a very
good time with us.

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
Fady
<!-- {{ config('app.name') }} -->
@endcomponent
