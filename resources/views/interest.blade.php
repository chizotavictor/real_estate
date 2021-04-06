<p>Dear Admin, a request for acquisittion of property <a href="{{route('description', ['id' => $data['property_id']])}}" target="_blank" rel="noopener noreferrer">View</a></p>
<br>
<h5>Client:</h5>
<ul>
    <li>Name: <b>{{$data['first_name'] . ' ' . $data['last_name']}}</b></li>
    <li>Email: <b>{{$data['email']}}</b></li>
    <li>Phone number: <b>{{$data['phone']}}</b></li>
    <li>Message: <b>{{$data['message']}}</b></li>
</ul>