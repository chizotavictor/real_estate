@extends('layouts.dashboard')

@section('contents')

<div class="content-wrapper">
    <!-- Page Title Header Starts-->
    <div class="row page-title-header">
        <div class="col-12">
            <div class="page-header">
                <h4 class="page-title">Dashboard</h4>
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
       <div class="col-lg-12 table-responsive">
        <h2>All Referrals</h2>
        <table class="table table-striped">
            <thead>
                <tr class="data-item data-head">
                    <th class="data-col dt-id">S/N</th>
                  <th class="data-col dt-tnxno">Name</th>
                    <th class="data-col dt-amount">Email</th>
                    <th class="data-col dt-usd-amount">Referral Code</th>
                    <th class="data-col dt-account">Date Joined</th>
                    <th class="data-col">Role</th>
                    <th class="data-col">Delete</th>
                </tr>
            </thead>
            
            <tbody>
              @foreach($referrals as $key => $d)
              <tr class="data-item">
                   <td>{{$key+1}}</td>
                    <td class="data-col dt-token"><span class="lead token-amount">{{$d->user->name}}</a></span>
                    </td>
                    <td class="data-col dt-amount"><span class="lead amount-pay">{{$d->user->email}} BTC</span>
                    </td>
                    <td class="data-col dt-account"><span class="lead user-info">{{$d->user->referral_code}}</span>
                    </td>
                    <td class="data-col dt-type"><span class="dt-type-md badge badge-outline badge-success badge-md">{{$d->user->created_at->format('d M, Y h:i A')}}</span>
                        
                    </td>
                    <td class="data-col">
                        <span style="color:green">{{($d->is_admin) ? "Admin" : "User" }}</span> <br>
                    </td>
                    <td><a href="{{ route('user.delete', ['id' => $d->id]) }}">Delete</a></td>
              </tr>
              @endforeach
              <!-- .data-item -->
          </tbody>
          
        </table>
        {{$referrals->links()}}
       </div>
    </div>
</div>

@endsection