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
       <div class="col-lg-12">
        <form action="{{ route('admin.plan.edit.submit') }}" method="post">
            @csrf
            <div class="token-contribute">
                <div class="form-group">
                    <label>ID</label>
                    <input style="width: 430px;" name="id" id="token-base-amount" readonly value="{{ $p->id }}"  class="form-control">
                </div>
                
                <div class="form-group">
                    <label>Name</label>
                    <input style="width: 430px;" name="name" id="token-base-amount" value="{{ $p->name }}"  class="form-control">
                </div>
                
                <div class="form-group">
                    <label>Duration</label>
                    <input style="width: 430px;" name="duration" id="token-base-amount" value="{{ $p->duration }}"  class="form-control">
                </div>
                
                <div class="form-group">
                    <label>Percentage (%/100)</label>
                    <input style="width: 430px;" name="rate" id="token-base-amount" value="{{ $p->rate }}"  class="form-control">
                </div>
                
                <div class="form-group">
                    <label>Start</label>
                    <input style="width: 430px;" name="start" id="token-base-amount" value="{{ $p->start }}"  class="form-control">
                </div>
                
                <div class="form-group">
                    <label>End</label>
                    <input style="width: 430px;" name="end" id="token-base-amount" value="{{ $p->end }}"  class="form-control">
                </div>
                <button class="btn btn-primary btn-block" type="submit" name="submit"><li class="fab fa-btc "></li> Save Changes</button>
            </div>
        </form>
       </div>
    </div>
</div>

@endsection