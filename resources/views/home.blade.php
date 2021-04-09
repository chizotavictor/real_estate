@extends('layouts.dashboard')
@section('contents')
<main id="content" class="bg-gray-01">
   <div class="px-3 px-lg-6 px-xxl-13 py-5 py-lg-10">
      <div class="d-flex flex-wrap flex-md-nowrap mb-6">
         <div class="mr-0 mr-md-auto">
            <h2 class="mb-0 text-heading fs-22 lh-15">Welcome back, {{Auth::user()->name}}!</h2>
         </div>
         @if(Auth::user()->is_admin)
         <div>
            <a href="{{ route('property.add') }}" class="btn btn-primary btn-lg">
               <span>Add New Property</span>
               <span class="d-inline-block ml-1 fs-20 lh-1">
                  <svg class="icon icon-add-new">
                     <use xlink:href="#icon-add-new"></use>
                  </svg>
               </span>
            </a>
         </div>
         @endif
      </div>
      <h5 style="font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;">Real Estate</h5>
      <div class="row">
         <div class="col-sm-6 col-xxl-3 mb-6">
            <div class="card">
               <div class="card-body row align-items-center px-6 py-7">
                  <div class="col-5">
                     <span class="w-83px h-83 d-flex align-items-center justify-content-center fs-36 badge badge-blue badge-circle">
                        <svg class="icon icon-1">
                           <use xlink:href="#icon-1"></use>
                        </svg>
                     </span>
                  </div>
                  <div class="col-7 text-center">
                     <p class="fs-42 lh-12 mb-0 counterup" data-start="0" data-end="{{$getTotalPostedProperty}}" data-decimals="0" data-duration="0" data-separator="">{{$getTotalPostedProperty}}</p>
                     <p>Posted Properties</p>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-sm-6 col-xxl-3 mb-6">
            <div class="card">
               <div class="card-body row align-items-center px-6 py-7">
                  <div class="col-5">
                     <span class="w-83px h-83 d-flex align-items-center justify-content-center fs-36 badge badge-green badge-circle">
                        <svg class="icon icon-2">
                           <use xlink:href="#icon-1"></use>
                        </svg>
                     </span>
                  </div>
                  <div class="col-7 text-center">
                     <p class="fs-42 lh-12 mb-0 counterup" data-start="0" data-end="0" data-decimals="0" data-duration="0" data-separator="">0</p>
                     <p>Acquired Properties</p>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-sm-6 col-xxl-3 mb-6">
            <div class="card">
               <div class="card-body row align-items-center px-6 py-7">
                  <div class="col-4">
                     <span class="w-83px h-83 d-flex align-items-center justify-content-center fs-36 badge badge-yellow badge-circle">
                        <svg class="icon icon-review">
                           <use xlink:href="#icon-1"></use>
                        </svg>
                     </span>
                  </div>
                  <div class="col-8 text-center">
                     <p class="fs-42 lh-12 mb-0 counterup" data-start="0" data-end="{{$getTotalSoldProperty}}" data-decimals="0" data-duration="0" data-separator="">{{$getTotalSoldProperty}}</p>
                     <p>Sold Propertise</p>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-sm-6 col-xxl-3 mb-6">
            <div class="card">
               <div class="card-body row align-items-center px-6 py-7">
                  <div class="col-5">
                     <span class="w-83px h-83 d-flex align-items-center justify-content-center fs-36 badge badge-pink badge-circle">
                        <svg class="icon icon-heart">
                           <use xlink:href="#icon-heart"></use>
                        </svg>
                     </span>
                  </div>
                  <div class="col-7 text-center">
                     <p class="fs-42 lh-12 mb-0 counterup" data-start="0" data-end="0" data-decimals="0" data-duration="0" data-separator="">0</p>
                     <p>Rented Properties</p>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <h5 style="font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;">Investment</h5>
      <div class="row">
         <div class="col-sm-6 col-xxl-3 mb-6">
            <div class="card">
               <div class="card-body row align-items-center px-6 py-7">
                  <div class="col-5">
                     <span class="w-83px h-83 d-flex align-items-center justify-content-center fs-36 badge badge-blue badge-circle">
                        <svg class="icon icon-1">
                           <use xlink:href="#icon-1"></use>
                        </svg>
                     </span>
                  </div>
                  <div class="col-7 text-center">
                     <p class="fs-42 lh-12 mb-0">${{$income}}</p>
                     <p>Profit Balance</p>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-sm-6 col-xxl-3 mb-6">
            <div class="card">
               <div class="card-body row align-items-center px-6 py-7">
                  <div class="col-5">
                     <span class="w-83px h-83 d-flex align-items-center justify-content-center fs-36 badge badge-green badge-circle">
                        <svg class="icon icon-2">
                           <use xlink:href="#icon-1"></use>
                        </svg>
                     </span>
                  </div>
                  <div class="col-7 text-center">
                     <p class="fs-42 lh-12 mb-0">${{$current_investment}}</p>
                     <p>Active Investment</p>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-sm-6 col-xxl-3 mb-6">
            <div class="card">
               <div class="card-body row align-items-center px-6 py-7">
                  <div class="col-4">
                     <span class="w-83px h-83 d-flex align-items-center justify-content-center fs-36 badge badge-yellow badge-circle">
                        <svg class="icon icon-review">
                           <use xlink:href="#icon-1"></use>
                        </svg>
                     </span>
                  </div>
                  <div class="col-8 text-center">
                     <p class="fs-42 lh-12 mb-0">${{$total_investment}}</p>
                     <p>Total Investment</p>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-sm-6 col-xxl-3 mb-6">
            <div class="card">
               <div class="card-body row align-items-center px-6 py-7">
                  <div class="col-5">
                     <span class="w-83px h-83 d-flex align-items-center justify-content-center fs-36 badge badge-pink badge-circle">
                        <svg class="icon icon-heart">
                           <use xlink:href="#icon-heart"></use>
                        </svg>
                     </span>
                  </div>
                  <div class="col-7 text-center">
                     <p class="fs-42 lh-12 mb-0">${{$pending_investment}}</p>
                     <p>Pending Investment</p>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-sm-6 col-xxl-3 mb-6">
            <div class="card">
               <div class="card-body row align-items-center px-6 py-7">
                  <div class="col-5">
                     <span class="w-83px h-83 d-flex align-items-center justify-content-center fs-36 badge badge-pink badge-circle">
                        <svg class="icon icon-heart">
                           <use xlink:href="#icon-heart"></use>
                        </svg>
                     </span>
                  </div>
                  <div class="col-7 text-center">
                     <p class="fs-42 lh-12 mb-0">${{$total_withdrawal}}</p>
                     <p>Total Withdrawal</p>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</main>
@endsection