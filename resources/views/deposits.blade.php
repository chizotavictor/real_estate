@extends('layouts.dashboard')

@section('contents')
<main id="content" class="bg-gray-01">
  <div class="px-3 px-lg-6 px-xxl-13 py-5 py-lg-10">
      <div class="row">
        <h2 class="mb-10 ml-3 text-heading fs-22 lh-15">Purchase Investment Plan</h2>
      </div>
     <div class="d-flex flex-wrap flex-md-nowrap mb-6">
        
        <div class="content-wrapper">
         

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
              <div class="col-md-6  align-items-stretch">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Wallet Address</h4>
                    <div class="form-group">
                      <div class="input-group">
                        <div class="input-group-prepend">
                          <span class="input-group-text"><b>BTC</b></span>
                        </div>
                        <input type="text" class="form-control" value="1D3TU5n7DJc51yQyScRoAbCNPBw46wRhkz" aria-describedby="basic-addon1">
                      </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group">
                          <div class="input-group-prepend">
                            <span class="input-group-text"><b>ETH</b></span>
                          </div>
                          <input type="text" class="form-control" value="0xF0473fdb5d38D076f3763B08c43aE29dB417913e" aria-describedby="basic-addon1">
                        </div>
                    </div>
                      
                  </div>
                </div>
              </div>
              <div class="col-md-6 d-flex align-items-stretch">
                  <div class="row flex-grow">
                      <div class="card">
                          <div class="card-body">
                            <h4 class="card-title">Payment verification request</h4>
                            <form class="form-sample" method="POST" action="{{ route('deposit') }}">
                                @csrf
                              <div class="row">
                                <div class="col-md-6">
                                  <div class="form-group row">
                                    <div class="col-sm-10">
                                      <label for="">Sender:</label>
                                      <input type="text" class="form-control"  readonly value="{{Auth::user()->name}}"/>
                                    </div>
                                  </div>
                                </div>
                                <div class="col-md-6">
                                  <div class="form-group row">
                                    <div class="col-sm-10">
                                      <label for="">Plan:</label>
                                      <select name="plan_id" class="form-control">
                                        @foreach (\App\Package::all() as $p)
                                            <option value="{{$p->id}}">{{$p->name}} - {{$p->duration}} days - ${{$p->start}} - ${{$p->end}}</option>
                                        @endforeach 
                                    </select>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="row">
                                <div class="col-md-12">
                                  <div class="form-group row">
                                      <div class="col-sm-11">
                                          <label class="col-form-label">Amount ($):</label>
                                          <input type="text" name="amount" id="amount" placeholder="0.00" class="form-control @error('amount') is-invalid @enderror" value="{{ old('amount')}}">
                                          @error('amount')
                                              <span class="invalid-feedback" role="alert">
                                                  <strong>{{ $message }}</strong>
                                              </span>
                                          @enderror
                                      </div>
                                  </div>
                                </div>
                              </div>
                              <div class="row">
                                <div class="col-md-12">
                                  <div class="form-group row">
                                    <div class="col-sm-10">
                                      <label for="">Payment Method:</label>
                                      <select name="method" class="form-control">
                                        <option value="Bitcoin">Bitcoin (BTC)</option>
                                        <option value="Ethereum">Ethereum (ETH)</option>
                                    </select>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="token-calc-note note note-plane"><em class="fas fa-times-circle text-danger"></em><span class="note-text ">Don't deposit less than the minimum required amount in each plan</span><br>
                              <button type="submit" class="btn btn-success mr-2">Initiate Payment</button>
                            </form>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
        </div>
      </div>
  </div>
</main>
        
@endsection
