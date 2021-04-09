@component('mail::message')
Dear <b>{{$username}}</b><br>
<br>Your daily return of <b>${{$amount}}</b> with <b>Motasko</b> investment on your <b>{{$plan}}</b> has been paid. <br><br>
Thank you for choosing Motasko Investment. 
<br><br>
Happy Earnings!

<br>
Thanks,<br>
{{ config('app.name') }}
@endcomponent
