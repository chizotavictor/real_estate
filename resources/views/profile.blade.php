@extends('layouts.dashboard')

@section('contents')

<div class="content-wrapper">
    <!-- Page Title Header Starts-->
    <div class="row page-title-header">
        <div class="col-12">
            <div class="page-header">
                <h4 class="page-title">Profile Settings</h4>
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
                  <form action="{{ route('profile') }}" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-md-12">
                                <div class="input-item input-with-label"><label for="full-name">Name</label>
                                <input class="form-control" value="{{$user->name}}" type="text" id="full-name" name="name" required>
                                </div>
                                <!-- .input-item -->
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-md-12">
                                <div class="input-item input-with-label"><label for="email-address">Email: </label>
                                <input class="form-control" type="text" id="email-address" value="{{$user->email}}" disabled="">
                                </div>
                                <!-- .input-item -->
                            </div>
                        </div>

                        <!-- .row -->
                        <div class="row mt-2">
                            <div class="col-md-12">
                                <div class="input-item input-with-label"><label for="full-name" class="input-item-label">Wallet Address</label>
                                <input class="form-control" value="{{$user->btc_wallet}}" type="text" id="full-name" name="btc_wallet" required>
                                </div>
                                <!-- .input-item -->
                            </div>
                        </div>
                        <!-- .row -->
                        <div class="gaps-1x"></div>
                        <!-- 10px gap -->
                        <div class="d-sm-flex justify-content-between align-items-center mt-2">
                            <button name="add" type="submit" class="btn btn-primary">Update Profile</button>
                            <div class="gaps-2x d-sm-none"></div><span class="text-success"><em class="ti ti-check-box"></em> All Changes are saved</span>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection