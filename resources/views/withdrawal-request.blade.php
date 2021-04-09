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
      @if(Session::has('error'))
        <div class="col-md-12">
          <div class="alert alert-danger">
            {{ Session::get('error')}}
          </div>
        </div>
      @endif
    </div>

    <div class="row">
        <div class="col-md-12 ">
            <div class="card">
                <div class="card-body table-responsive">
                  <h4 class="card-title">Withdrawal Request</h4>
                  <p>Please select your investment record:</p>

                    <form action="{{ route('withdrawal-request') }}" method="post">
                        @csrf
                        <div class="token-contribute">
                            
                            <div class="token-calc">
                                <div class="token-pay-amount">
                                <select name="deposit_id" id="token-base-amount" class="form-control">
                                    <option></option>
                                    @foreach ($deposits as $p)
                                        <option value="{{$p->id}}">${{$p->amount}} - Withdrawable Amount: ${{$p->due_amount}}</option>
                                    @endforeach 
                                </select>
                                </div>
                            </div>
                        
                            <button class="btn btn-primary btn-block mt-1" type="submit" name="submit"><li class="fab fa-btc "></li> Withdraw</button>
                        </div>
                    </form>
                </div>
              </div>
        </div>
         
    </div>

    <div class="row">
        <div class="col-md-12 ">
            <div class="card">
                <div class="card-body table-responsive">
                  <h4 class="card-title">Withdrawal Request</h4>
                  <p>Please select your investment record:</p>

                  <table class="table table-striped">
                    <thead>
                        <tr class="data-item data-head">
                            <th>S/N</th>
                          <th class="data-col dt-tnxno">Status</th>
                            <th class="data-col dt-amount">Amount</th>
                            <th class="data-col dt-account">Initiated Date</th>
                            <th class="data-col"></th>
                        </tr>
                    </thead>
                    
                    <tbody>
                        @foreach($ws as $key => $w)
                              <tr class="data-item">
                            <td>{{$key+1}}</td>
                            <td class="data-col dt-token"><span class="lead token-amount">{{$w->status}}</span>
                            </td>
                            <td class="data-col dt-amount"><span class="lead amount-pay">${{$w->amount}}</span>
                            </td>
                            <td class="data-col dt-account"><span class="lead user-info">{{$w->created_at->format('d M, Y H:i a') }}<br>
                          </tr>
                      @endforeach
                      </tbody>
                  </table>
                </div>
              </div>
        </div>
         
    </div>
</div>
        
@endsection
