@extends('layouts.dashboard')

@section('contents')

<div class="content-wrapper">
    <!-- Page Title Header Starts-->
    <div class="row page-title-header">
        <div class="col-12">
            <div class="page-header">
                <h4 class="page-title">Referrals</h4>
            </div>
        </div>   
    </div>
    <!-- Page Title Header Ends-->

    <div class="row">
      @if(Session::has('danger'))
        <div class="col-md-12">
          <div class="alert alert-danger">
            {{ Session::get('danger')}}
          </div>
        </div>
      @endif
    </div>

    <div class="row">
        <div class="col-md-12 ">
            <div class="card">
                <div class="card-body">
                    <div><pre style="background-color: #ccc">https://{{ env("DOMAIN_NAME") }}/register?ref={{Auth::user()->referral_code}}</pre></div>
                    <table class="table mt-1">
                        <thead>
                            <tr>
                                <th>S/N</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Referral_code</th>
                                <th>BTC Wallet</th>
                                <th>Initiated Date</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($refs as $d => $key)
                                <tr>
                                    <td>{{$d + 1 }}</td>
                                    <td>{{$key->referral->name}}</td>
                                    <td>{{$key->referral->email}}</td>
                                    <td>{{$key->referral->referral_code}} </td>
                                    <td>{{$key->referral->btc_wallet}} </td>
                                    <td>{{$key->referral->created_at->diffForHumans()}}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
  
                    {{$refs->links()}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection