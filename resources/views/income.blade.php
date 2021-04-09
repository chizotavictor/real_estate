@extends('layouts.dashboard')

@section('contents')

<div class="content-wrapper">
    <!-- Page Title Header Starts-->
    <div class="row page-title-header">
        <div class="col-12">
            <div class="page-header">
                <h4 class="page-title">Trade Income Records</h4>
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
                  <h4 class="card-title">Transaction Records</h4>

                  <table class="table mt-1">
                      <thead>
                          <tr>
                              <th>S/N</th>
                              <th>Income Amount ($)</th>
                              <th>Due Amount ($)</th>
                              <th>Income Duration</th>
                              <th>Package</th>
                              <th>Status</th>
                              <th>Withdrawn</th>
                              <th>Trx Date</th>
                          </tr>
                      </thead>
                      <tbody>
                          @foreach ($trxs as $d => $key)
                              <tr>
                                  <td>{{$d + 1 }}</td>
                                  <td>${{number_format($key->amount, 2, '.', ',')}}</td>
                                  <td>${{number_format($key->deposit->due_amount, 2, '.', ',')}}</td>
                                  <td>{{$key->deposit->plan->duration}} days </td>
                                  <td>{{$key->deposit->plan->name}}, {{$key->type}} </td>
                                  <td>
                                      @if ($key->deposit->status == "Pending")
                                          <span class="badge badge-warning p-2">{{$key->deposit->status}}</span>
                                      @else
                                          <span class="badge badge-success p-2">{{$key->deposit->status}}</span>
                                      @endif
                                  </td>
                                  <td>
                                      @if (isset($key->withdrawal_id))
                                          <p class="badge badge-success p-2">Yes</p>
                                      @else
                                          <p class="badge badge-warning p-2">No</p>
                                      @endif
                                  </td>
                                  
                                  <td>{{$key->created_at->diffForHumans()}}</td>
                              </tr>
                          @endforeach
                      </tbody>
                  </table>

                  {{$trxs->links()}}
                </div>
              </div>
        </div>
         
    </div>
</div>
        
@endsection
