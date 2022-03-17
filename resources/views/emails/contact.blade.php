@component('mail::message')
<strong>Name:</strong> {{ $data['name'] }}
<br>
<strong>Email:</strong> {{ $data['email'] }}

<strong>Message:</strong>

{{ $data['message'] }}

@component('mail::button', ['url' => 'https://pp.ebuzz-it.com'])
Go To PricePond
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent