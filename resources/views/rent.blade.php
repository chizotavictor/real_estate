@extends('layouts.listing')
@section('contents')
<main id="content" style="">
    <section class="pb-8 page-title shadow">
       <div class="container">
          <nav aria-label="breadcrumb">
             <ol class="breadcrumb pt-6 pt-lg-2 lh-15 pb-5">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item">Listing</li>
                <li class="breadcrumb-item active" aria-current="page">Rent</li>
             </ol>
             <h1 class="fs-30 lh-1 mb-0 text-heading font-weight-600">Renting Propertise</h1>
          </nav>
       </div>
    </section>
    <section class="pt-8 pb-11 bg-gray-01">
       <div class="container">
          <div class="row">
             <div class="col-lg-4 order-2 order-lg-1 primary-sidebar sidebar-sticky" id="sidebar">
                <div class="primary-sidebar-inner">
                   <div class="card mb-4">
                      <div class="card-body px-6 py-4">
                         <h4 class="card-title fs-16 lh-2 text-dark mb-3">Find your home</h4>
                         <form>
                            <div class="form-group">
                               <label for="key-word" class="sr-only">Name of House</label>
                               <input type="text" class="form-control form-control-lg border-0 shadow-none" id="key-word" name="search" placeholder="Enter keyword...">
                            </div>
                            <div class="form-group">
                               <label for="location" class="sr-only">Address</label>
                               <input type="text" class="form-control form-control-lg border-0 shadow-none" id="key-word" name="address" placeholder="Enter address...">
                            </div>
                            <div class="form-group">
                               <label for="type" class="sr-only">City</label>
                               <input type="text" class="form-control form-control-lg border-0 shadow-none" id="key-word" name="city" placeholder="Enter city...">
                            </div>
                            <div class="form-group">
                               <label for="status" class="sr-only">Status</label>
                               <select class="form-control border-0 shadow-none form-control-lg selectpicker" title="All Status" data-style="btn-lg py-2 h-52" id="status" name="status">
                                  <option value="RENT">For Rent</option>
                                  <option value="SALE">For Sale</option>
                               </select>
                            </div>
                             
                            <button type="submit" class="btn btn-primary btn-lg btn-block shadow-none mt-4">Search
                            </button>
                         </form>
                      </div>
                   </div>
                  
                </div>
             </div>
             <div class="col-lg-8 mb-8 mb-lg-0 order-1 order-lg-2">
                <div class="row align-items-sm-center mb-4">
                   <div class="col-md-6">
                      <h2 class="fs-15 text-dark mb-0">We found <span class="text-primary">{{$count}}</span> properties
                         available for
                         you
                      </h2>
                   </div>
                  
                </div>
                @foreach ($properties as $p)
                <div class="py-5 px-4 border rounded-lg shadow-hover-1 bg-white mb-4" data-animate="fadeInUp">
                    <div class="media flex-column flex-sm-row no-gutters">
                        <div class="col-sm-3 mr-sm-5 card border-0 hover-change-image bg-hover-overlay mb-sm-5">
                          <img src="{{asset('public/uploads/'. $p->image_1)}}" class="card-img" alt="Home in Metric Way">
                          <div class="card-img-overlay p-2">
                             <ul class="list-inline mb-0 d-flex justify-content-center align-items-center h-100 hover-image">
                                <li class="list-inline-item">
                                   <a href="#" class="w-40px h-40 border rounded-circle d-inline-flex align-items-center justify-content-center text-heading bg-white border-white bg-hover-primary border-hover-primary hover-white">
                                   <i class="far fa-heart"></i>
                                   </a>
                                </li>
                                <li class="list-inline-item">
                                   <a href="#" class="w-40px h-40 border rounded-circle d-inline-flex align-items-center justify-content-center text-heading bg-white border-white bg-hover-primary border-hover-primary hover-white">
                                   <i class="fas fa-exchange-alt"></i>
                                   </a>
                                </li>
                             </ul>
                          </div>
                         </div>
                       <div class="media-body mt-3 mt-sm-0">
                          <h2 class="my-0"><a href="#" class="fs-16 lh-2 text-dark hover-primary d-block">{{$p->name}}</a></h2>
                          <p class="mb-1 font-weight-500 text-gray-light">{{$p->address}}, {{$p->city}},{{$p->country}}</p>
                          <p class="fs-17 font-weight-bold text-heading mb-1">
                             ${{$p->amount}}
                          </p>
                          <p class="mb-2 ml-0">{{$p->description}}</p>
                       </div>
                    </div>
                    <div class="d-sm-flex justify-content-sm-between">
                        
                       <span class="badge badge-primary mr-xl-2 mt-3 mt-sm-0">{{$p->purpose}}</span>
                    </div>
                 </div>
                @endforeach
                
                 
             </div>
          </div>
       </div>
    </section>
  
 </main>
@endsection