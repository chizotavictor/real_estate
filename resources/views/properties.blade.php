@extends('layouts.dashboard')
@section('contents')
<main id="content" class="bg-gray-01">
    <div class="px-3 px-lg-6 px-xxl-13 py-5 py-lg-10">
       <div class="d-flex flex-wrap flex-md-nowrap mb-6">
          <div class="mr-0 mr-md-auto">
             <h2 class="mb-0 text-heading fs-22 lh-15">My Properties</h2>
          </div>
          <div class="form-inline justify-content-md-end mx-n2">
             <div class="p-2">
                <div class="input-group input-group-lg bg-white border">
                   <div class="input-group-prepend">
                      <button class="btn pr-0 shadow-none" type="button"><i class="far fa-search"></i></button>
                   </div>
                   <input type="text" class="form-control bg-transparent border-0 shadow-none text-body" placeholder="Search listing" name="search">
                </div>
             </div>
            
          </div>
       </div>
       <div class="table-responsive">
          <table class="table table-hover bg-white border rounded-lg">
             <thead class="thead-sm thead-black">
                <tr>
                   <th scope="col" class="border-top-0 px-6 pt-5 pb-4">Property</th>
                   <th scope="col" class="border-top-0 pt-5 pb-4">Date Published</th>
                   <th scope="col" class="border-top-0 pt-5 pb-4">Status</th>
                   <th scope="col" class="border-top-0 pt-5 pb-4">Action</th>
                </tr>
             </thead>
             <tbody>
                @foreach ($properties as $p)
                <tr class="shadow-hover-xs-2 bg-hover-white">
                    <td class="align-middle pt-6 pb-4 px-6">
                       <div class="media">
                          <div class="w-120px mr-4 position-relative">
                             <a href="{{route('property', ['index' => $p->id])}}">
                             <img src="{{asset('public/uploads/'.$p->image_1)}}">
                             </a>
                             <span class="badge badge-indigo position-absolute pos-fixed-top">{{$p->purpose}}</span>
                          </div>
                          <div class="media-body">
                             <a href="single-property-1.html" class="text-dark hover-primary">
                                <h5 class="fs-16 mb-0 lh-18">{{$p->name}}</h5>
                             </a>
                             <p class="mb-1 font-weight-500">{{$p->address}}, {{$p->city}}, {{$p->country}}</p>
                             <span class="text-heading lh-15 font-weight-bold fs-17">${{$p->amount}}</span>
                             {{-- <span class="text-gray-light">/month</span> --}}
                          </div>
                       </div>
                    </td>
                    <td class="align-middle">{{$p->created_at->format('d M, Y')}}</td>
                    <td class="align-middle">
                       <span class="badge text-capitalize font-weight-normal fs-12 badge-yellow">{{$p->status}}</span>
                    </td>
                    <td class="align-middle">
                       <a href="#" data-toggle="tooltip" title="Edit" class="d-inline-block fs-18 text-muted hover-primary mr-5"><i class="fal fa-pencil-alt"></i></a>
                       <a href="#" data-toggle="tooltip" title="Delete" class="d-inline-block fs-18 text-muted hover-primary"><i class="fal fa-trash-alt"></i></a>
                    </td>
                 </tr>
                @endforeach
             </tbody>
          </table>
       </div>
       <nav class="mt-6">
          {{$properties->links()}}
       </nav>
    </div>
 </main>
@endsection