@extends('layouts.listing')
@section('contents')
<main id="content">
    <section>
       <div class="container">
          <nav aria-label="breadcrumb">
             <ol class="breadcrumb pt-lg-0 pb-3">
                <li class="breadcrumb-item fs-12 letter-spacing-087">
                   <a href="{{ route('welcome') }}">Home</a>
                </li>
                <li class="breadcrumb-item fs-12 letter-spacing-087">
                   <a href="{{ ($property->purpose == "SELL") ? route('buy') : route('rent')}}">Listing</a>
                </li>
                <li class="breadcrumb-item fs-12 letter-spacing-087 active">{{$property->name}}</li>
             </ol>
          </nav>
       </div>
       <div class="container-fluid">
          <div class="position-relative" data-animate="zoomIn">
             <div class="position-absolute pos-fixed-top-right z-index-3">
                 
             </div>
             <div class="row galleries m-n1">
                @if(!is_null($property->image_1))
                <div class="col-lg-6 p-1">
                   <div class="item item-size-4-3">
                      <div class="card p-0 hover-zoom-in">
                         <a href="{{asset('public/uploads/'.$property->image_1)}}" class="card-img" data-gtf-mfp="true" data-gallery-id="01" style="background-image:url({{asset('public/uploads/'.$property->image_1)}})">
                         </a>
                      </div>
                   </div>
                </div>
                @endif
                
                <div class="col-lg-6 p-1">
                   <div class="row m-n1">
                    @if(!is_null($property->image_2))
                      <div class="col-md-6 p-1">
                         <div class="item item-size-4-3">
                            <div class="card p-0 hover-zoom-in">
                               <a href="{{asset('public/uploads/'.$property->image_2)}}" class="card-img" data-gtf-mfp="true" data-gallery-id="01" style="background-image:url({{asset('public/uploads/'.$property->image_2)}})">
                               </a>
                            </div>
                         </div>
                      </div>
                    @endif
                    @if(!is_null($property->image_3))
                      <div class="col-md-6 p-1">
                         <div class="item item-size-4-3">
                            <div class="card p-0 hover-zoom-in">
                               <a href="{{asset('public/uploads/'.$property->image_3)}}" class="card-img" data-gtf-mfp="true" data-gallery-id="01" style="background-image:url({{asset('public/uploads/'.$property->image_3)}})">
                               </a>
                            </div>
                         </div>
                      </div>
                    @endif
                    @if(!is_null($property->image_4))
                      <div class="col-md-6 p-1">
                         <div class="item item-size-4-3">
                            <div class="card p-0 hover-zoom-in">
                               <a href="{{asset('public/uploads/'.$property->image_4)}}" class="card-img" data-gtf-mfp="true" data-gallery-id="01" style="background-image:url({{asset('public/uploads/'.$property->image_4)}})">
                               </a>
                            </div>
                         </div>
                      </div>
                    @endif
                    @if(!is_null($property->image_5))
                      <div class="col-md-6 p-1">
                         <div class="item item-size-4-3">
                            <div class="card p-0 hover-zoom-in">
                               <a href="{{asset('public/uploads/'.$property->image_5)}}" class="card-img" data-gtf-mfp="true" data-gallery-id="01" style="background-image:url({{asset('public/uploads/'.$property->image_5)}})">
                               </a>
                        
                            </div>
                         </div>
                      </div>
                    @endif
                   </div>
                </div>
             </div>
          </div>
       </div>
    </section>
    <div class="primary-content pt-8">
       <div class="container">
          <div class="row">
             <article class="col-lg-8 pr-xl-7">
                <section class="pb-7 border-bottom">
                   <ul class="list-inline d-sm-flex align-items-sm-center mb-2">
                      <li class="list-inline-item badge badge-orange mr-2">Featured</li>
                      <li class="list-inline-item badge badge-primary mr-3">For {{$property->purpose}}</li>
                      <li class="list-inline-item mr-2 mt-2 mt-sm-0"><i class="fal fa-clock mr-1"></i>{{$property->created_at->diffForHumans()}}</li>
                   </ul>
                   <div class="d-sm-flex justify-content-sm-between">
                      <div>
                         <h2 class="fs-35 font-weight-600 lh-15 text-heading">{{$property->name}}</h2>
                         <p class="mb-0"><i class="fal fa-map-marker-alt mr-2"></i>{{$property->address}}, {{$property->city}}, {{$property->country}}</p>
                      </div>
                      <div class="mt-2 text-lg-right">
                         <p class="fs-22 text-heading font-weight-bold mb-0">${{number_format($property->amount, 2)}}</p>
                         {{-- <p class="mb-0">$9350/SqFt</p> --}}
                      </div>
                   </div>
                   <h4 class="fs-22 text-heading mt-6 mb-2">Description</h4>
                   <p class="mb-0 lh-214">{{$property->description}}
                   </p>
                </section>
           
                <section class="pt-6 border-bottom pb-4">
                   <h4 class="fs-22 text-heading mb-4">Additional Details</h4>
                   <div class="row">
                      <dl class="col-sm-6 mb-0 d-flex">
                         <dt class="w-110px fs-14 font-weight-500 text-heading pr-2">Price</dt>
                         <dd>${{number_format($property->amount, 2)}}</dd>
                      </dl>
                      <dl class="col-sm-6 mb-0 d-flex">
                         <dt class="w-110px fs-14 font-weight-500 text-heading pr-2">Yearly Tax</dt>
                         <dd>{{$property->yearly_tax_rate}}%</dd>
                      </dl>
                      <dl class="col-sm-6 mb-0 d-flex">
                         <dt class="w-110px fs-14 font-weight-500 text-heading pr-2">Rooms</dt>
                         <dd>{{$property->rooms}}</dd>
                      </dl>
                      <dl class="col-sm-6 mb-0 d-flex">
                         <dt class="w-110px fs-14 font-weight-500 text-heading pr-2">Bedroom</dt>
                         <dd>{{$property->bedrooms}}</dd>
                      </dl>
                      <dl class="col-sm-6 mb-0 d-flex">
                         <dt class="w-110px fs-14 font-weight-500 text-heading pr-2">Floors</dt>
                         <dd>{{$property->floors}}</dd>
                      </dl>
                      <dl class="col-sm-6 mb-0 d-flex">
                         <dt class="w-110px fs-14 font-weight-500 text-heading pr-2">Year Built</dt>
                         <dd>{{$property->year_built}}</dd>
                      </dl>
                      
                   </div>
                </section>
               
          </div>
       </div>
    </div>
    <section class="" style="margin-top: 100px">
        <div class="container">
           <div class="card border-0 mt-n13 z-index-3 pb-8 pt-10">
              <div class="card-body p-0">
                 <h2 class="text-heading mb-2 fs-22 fs-md-32 text-center lh-16">We're always eager to hear from
                    you!
                 </h2>
                 <p class="text-center mxw-670 mb-8">
                    For {{($property->purpose == "RENT") ? 'Renting' : 'Purchasing'}} base please we will like you to fill the interest for below. Our compliance team will reach out to your for further dealings.
                 </p>
                 @if(Session::has('error'))
                    <div class="alert alert-danger">
                    {{ Session::get('error')}}
                    </div>
                @endif
                @if(Session::has('success'))
                    <div class="alert alert-success">
                    {{ Session::get('success')}}
                    </div>
                @endif
                 <form class="mxw-751 px-md-5" method="POST" action="{{ route('interest') }}">
                    @csrf
                    <div class="row">
                       <div class="col-md-6">
                          <div class="form-group">
                             <input type="text" placeholder="First Name" required class="form-control form-control-lg border-0" name="first_name">
                          </div>
                       </div>
                       <input type="hidden" name="property_id" value="{{$property->id}}">
                       <div class="col-md-6">
                          <div class="form-group">
                             <input type="text" placeholder="Last Name" required name="last_name" class="form-control form-control-lg border-0">
                          </div>
                       </div>
                    </div>
                    <div class="row">
                       <div class="col-md-6">
                          <div class="form-group">
                             <input placeholder="Your Email" required class="form-control form-control-lg border-0" type="email" name="email">
                          </div>
                       </div>
                       <div class="col-md-6">
                          <div class="form-group">
                             <input type="text" placeholder="Your Phone" required name="phone" class="form-control form-control-lg border-0">
                          </div>
                       </div>
                    </div>
                    <div class="form-group mb-6">
                       <textarea class="form-control border-0" required placeholder="Message" name="message" rows="5"></textarea>
                    </div>
                    <div class="text-center">
                       <button type="submit" class="btn btn-lg btn-primary px-9">Send Order</button>
                    </div>
                 </form>
              </div>
           </div>
        
        </div>
     </section>
 </main>
@endsection