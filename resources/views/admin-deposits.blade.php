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
        <h2>All Users</h2>
        <table class="table table-striped">
            <thead>
                <tr class="data-item data-head">
                  <th>S/N</th>
                  <th class="data-col dt-tnxno">Status</th>
                    <th class="data-col dt-amount">Deposit</th>
                    <th class="data-col dt-usd-amount">Withdraw</th>
                    <th class="data-col dt-account">Maturity Date</th>
                    <th class="data-col"></th>
                </tr>
            </thead>
            
            <tbody>
              @foreach($deposits as $key => $d)
              <tr class="data-item">
                    <td>{{$key+1}}</td>
                    <td >
                        @if($d->status == "Pending")
                            <span class="badge badge-warning">{{$d->status}}</span>
                        @else
                            <span class="badge badge-success">{{$d->status}}</span>
                        @endif
                    </td>
                    <td class="data-col dt-token"><a href="{{route('payment', ['id' => $d->id, 'user_id' => $d->user->id])}}"><span class="lead token-amount">{{strtoupper($d->user->name)}} <br><br>$ {{number_format($d->amount, 2, '.', ',')}}</span></a>
                    </td>
                    <td class="data-col dt-amount"><span class="lead amount-pay">$ {{number_format($d->due_amount, 2, '.', ',')}}</span>
                    </td>
                    <td class="data-col dt-account"><span class="lead user-info">{{date('d/m/Y H:i a', $d->due_date)}}</span>
                    </td>
                    
                    <td class="data-col text-right">
                        <div class="relative d-inline-block d-md-none"><a href="#" class="btn btn-light-alt btn-xs btn-icon toggle-tigger"><em class="ti ti-more-alt"></em></a>
                            <div class="toggle-class dropdown-content dropdown-content-center-left pd-2x">
                                @if($d->status == "Active")
                                    <a href="{{route('admin-confirm-deposits', ['id' => $d->id, 'status' => 'Pending'])}}" class="btn btn-auto btn-primary btn-xs"><span>Decline <span class="d-none d-xl-inline-block">Payment</span></span><em class="ti ti-cancel"></em></a>
                            
                                    @if($d->status == "Active")
                        
                                        @if( time() > $d->due_date )
                                            <span style="color:red">Payment Due for this Deposit.</span>    
                                        @endif
                                    @endif                                               
                                    <a href="{{route('payment', ['id' => $d->id])}}" class="btn btn-danger-alt btn-xs btn-icon"><em class="ti ti-eye"></em></a>
                                    
                            </div>
                        </div>
                        <ul class="data-action-list d-none d-md-inline-flex">
                                                                <li><a href="{{route('admin-confirm-deposits', ['id' => $d->id, 'status' => 'Pending'])}}" class="btn btn-auto btn-primary btn-xs"><span>Decline <span class="d-none d-xl-inline-block">Payment</span></span><em class="ti ti-cancel"></em></a>
                              @if($d->status == "Active")
                      
                                @if( time() > $d->due_date )
                                    <span style="color:red">Payment Due for this Deposit.</span>    
                                @endif
                            @endif
                            </li>
                                                                <li><a href="{{route('payment', ['id' => $d->id])}}" class="btn btn-danger-alt btn-xs btn-icon"><em class="ti ti-eye"></em></a>
                            </li>
                                                                </ul>
                          @else
                          <ul class="data-action-list  ">
                                                                <li><a href="{{route('admin-confirm-deposits', ['id' => $d->id, 'status' => 'Active'])}}" class="btn btn-auto btn-primary btn-xs"><span>Approve <span class="d-none d-xl-inline-block">Payment</span></span><em class="ti ti-check"></em></a>
                            </li>
                                                                <li><a href="{{route('payment', ['id' => $d->id, 'user_id' => $d->user->id])}}" class="btn btn-danger-alt btn-xs btn-icon"><em class="ti ti-eye"></em></a>
                            </li>
                                                                </ul>
                            </div>
                        </div>
                        <ul class="data-action-list d-none d-md-inline-flex">
                                                                <li><a href="{{route('admin-confirm-deposits', ['id' => $d->id, 'status' => 'Active'])}}" class="btn btn-auto btn-primary btn-xs"><span>Approve <span class="d-none d-xl-inline-block">Now</span></span><em class="ti ti-check"></em></a>
                            </li>
                                                                <li><a href="{{route('payment', ['id' => $d->id, 'user_id' => $d->user->id])}}" class="btn btn-danger-alt btn-xs btn-icon"><em class="ti ti-eye"></em></a>
                            </li>
                                                                </ul>
                          
                          @endif
                    </td>
                </tr>
                @endforeach
                <!-- .data-item -->
                                        </tbody>
          
        </table><br>
        {{$deposits->links()}}
    </div>
    </div>
</div>

@endsection