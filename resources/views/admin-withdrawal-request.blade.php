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
        <h2>All Withdrawal Request</h2>
        <table class="table table-striped mt-2">
            <thead>
                <tr class="data-item data-head">
                    <th class="data-col dt-id">S/N</th>
                    <th class="data-col dt-tnxno">Name</th>
                    <th class="data-col dt-tnxno">Status</th>
                    <th class="data-col dt-amount">Amount</th>
                    <th class="data-col dt-account">Initiated Date</th>
                    <th class="data-col dt-account"> Action</th>
                    <th class="data-col"></th>
                </tr>
            </thead>
            
            <tbody>
                @foreach($ws as $key => $w)
                <tr class="data-item">
                    <td>{{$key+1}}</td>
                    <td class="data-col dt-token"><span class="lead token-amount">{{strtoupper($w->user->name)}} <br><br><span style="color:green">{{$w->user->btc_wallet}}</span></span>
                    </td>
                    <td class="data-col dt-token"><span class="lead token-amount">{{$w->status}}</span>
                    </td>
                    <td class="data-col dt-amount"><span class="lead amount-pay">{{$w->amount}} BTC</span>
                    </td>
                    <td class="data-col dt-account"><span class="lead user-info">{{$w->created_at->format('d M, Y H:i a') }}<br>
                    <td class="data-col dt-account">
                        @if($w->status == "Pending")
                            <a href="{{route('confirm-withdrawal-request', ['id' => $w->id, 'status' => 'Approved'])}}">Approve</a>
                        @else
                            <a href="{{route('confirm-withdrawal-request', ['id' => $w->id, 'status' => 'Pending'])}}">Set to Pending</a>
                        @endif
                    </td> 
                </tr>
            @endforeach
            </tbody>
        </table>
       </div>
    </div>
</div>
@endsection