@extends('notifications.layout')
@section('contents')
Dear <b>{{$username}}</b><br>
<br>Your deposit of <b>${{$amount}}</b> on purchase of the Investment Package is confirmed successfully. Your interest will be paid to you.
<br><br>
Happy Earnings!

<br>
Thanks,<br>
{{ config('app.name') }}
@endsection
