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
        <div class="col-lg-6" >
            <h1 style="font-weight:bold;font-size:40px;">1 BTC - $ {{$xrate}}</h1>
        </div>
    </div>
    <!-- .row -->
       
       
   <div class="row">
       <div class="card col-lg-12 mt-2 p-3">
           <h3>Manage Investment Plan</h3>
           <table class="table">
               <tr>
                   <th>Package</th>
                   <th>Duration</th>
                   <th>Percentage %</th>
                   <th>Min</th>
                   <th>Max</th>
                   <th>Action</th>
               </tr>
               @foreach($plans as $p)
               <tr>
                   <td>{{$p->name}}</td>
                   <td>{{$p->duration}} days</td>
                   <td>{{$p->rate}}</td>
                   <td>${{$p->start}}</td>
                   <td>${{$p->end}}</td>
                   <td><a href="{{ route('plan.edit', ['id' => $p->id]) }}">Edit</a></td>
               </tr>
               @endforeach
           </table>
       </div>
   </div>
</div>
        
@endsection
