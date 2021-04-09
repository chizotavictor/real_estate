@extends('layouts.dashboard')

@section('contents')

<div class="content-wrapper">
    <!-- Page Title Header Starts-->
    <div class="row page-title-header">
        <div class="col-12">
            <div class="page-header">
                <h4 class="page-title">Fund Wallet</h4>
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
        <div class="col-md-12 d-flex align-items-stretch">
            <div class="card">
                <div class="card-body table-responsive">
                  <h4 class="card-title">Deposit Record</h4>
                  <table class="table mt-1">
                      <thead>
                          <tr>
                              <th>S/N</th>
                              <th>Amount ($)</th>
                              <th>Due Amount ($)</th>
                              <th>Package</th>
                              <th>Status</th>
                              <th>Method</th>
                              <th>Initiated Date</th>
                              <th>View</th>
                          </tr>
                      </thead>
                      <tbody>
                          @foreach ($deposits as $d => $key)
                              <tr>
                                  <td>{{$d + 1 }}</td>
                                  <td>${{number_format($key->amount, 2, '.', ',')}}</td>
                                  <td>${{number_format($key->due_amount, 2, '.', ',')}}</td>
                                  <td>{{$key->plan->name}}</td>
                                  <td>
                                      @if ($key->status == "Pending")
                                          <span class="badge badge-warning p-2">{{$key->status}}</span>
                                      @else
                                          <span class="badge badge-success p-2">{{$key->status}}</span>
                                      @endif
                                  </td>
                                  <td>{{$key->method}}</td>
                                  <td>{{$key->created_at->diffForHumans()}}</td>
                                  <td><a href="{{route('payment', ['id' => $key->id])}}" class="btn btn-success">View details</a></td>
                              </tr>
                          @endforeach
                      </tbody>
                  </table>

                  {{$deposits->links()}}
                </div>
              </div>
        </div>
         
    </div>
</div>
        
@endsection
