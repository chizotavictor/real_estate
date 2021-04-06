@extends('layouts.app')
@section('contents')
<main id="content">
   <section>
      <div style="background-image: url('web/images/bg-home-02.jpg')" class="py-lg-17 py-11 bg-cover">
         <div class="container mt-lg-9" data-animate="zoomIn">
            <p class="mb-5 text-white text-center fs-md-22 fs-18 font-weight-600">Find Your Dream Home</p>
            <h2 class="text-white text-center display-2 font-weight-light mb-10">Searching for the Best Places</h2>
            <div class="mxw-670 position-relative z-index-2">
               <input class="search-field" type="hidden" name="status" value="for-sale" data-default-value="">
               <ul class="nav nav-pills property-search-status-tab">
                  <li class="nav-item" role="presentation">
                     <a class="nav-link btn shadow-none rounded-bottom-0 fs-13 letter-spacing-087 bg-dark-opacity-05 text-white hover-white text-uppercase bg-active-primary active" data-toggle="pill" data-value="for-sale" href="#" role="tab" aria-selected="true">
                     sale
                     </a>
                  </li>
                  <li class="nav-item" role="presentation">
                     <a class="nav-link btn shadow-none rounded-bottom-0 fs-13 letter-spacing-087 bg-dark-opacity-05 text-white hover-white bg-active-primary text-uppercase" data-toggle="pill" data-value="for-rent" href="#" role="tab" aria-selected="false">
                     rent
                     </a>
                  </li>
               </ul>
               <form class="d-flex">
                  <div class="position-relative w-100">
                     <i class="far fa-search text-dark fs-18 position-absolute pl-4 pos-fixed-left-center"></i>
                     <input type="text" class="rounded-bottom-right-lg w-100 pl-8 py-4 bg-white border-0 fs-13 font-weight-500 text-gray-light rounded-0 lh-17" placeholder="Enter an address, neighborhood" name="search">
                  </div>
                  <button type="submit" class="btn btn-primary fs-16 font-weight-600 rounded-left-0 rounded-lg">
                  Search
                  </button>
               </form>
            </div>
         </div>
      </div>
   </section>
   {{-- <section class="pt-lg-12 pt-11 pb-11">
      <div class="container container-xxl">
         <div class="row flex-lg-row flex-cloumn">
            <div class="col-lg-5 col-xxl-6">
               <h2 class="text-heading">Popular Properties</h2>
               <span class="heading-divider"></span>
               <p class="mb-7">When you’re ready for a change, we’re ready to help.</p>
            </div>
            <div class="col-lg-7 col-xxl-6">
               <ul class="nav nav-pills mt-lg-4 justify-content-lg-end mb-lg-0 mb-6" role="tablist">
                  <li class="nav-item pl-lg-3 pr-3 pr-lg-0 mb-3">
                     <a class="pointer nav-link active fs-13 letter-spacing-087 text-secondary text-uppercase px-4 bg-gray-01 text-active-white bg-active-primary rounded-lg" id="pills-all-tab" data-toggle="pill" href="#pills-all" role="tab" aria-controls="pills-all" aria-selected="true">all</a>
                  </li>
               </ul>
            </div>
         </div>
         <div class="tab-content p-0 shadow-none" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-all" role="tabpanel" aria-labelledby="pills-all-tab">
               <div class="row">
                  <div class="col-xxl-3 col-lg-4 col-md-6 mb-6" data-animate="zoomIn">
                     <div class="card border-0 bg-overlay-gradient-3 rounded-lg hover-change-image">
                        <img src="{{ asset('web/images/properties-grid-08.jpg')}}" class="card-img" alt="Villa on Hollywood Boulevard">
                        <div class="card-img-overlay d-flex flex-column position-relative-sm">
                           <div class="d-flex">
                              <div class="mr-auto h-24 d-flex">
                                 <span class="badge badge-primary mr-2">For Sale</span>
                              </div>
                              <ul class="list-inline mb-0 d-flex justify-content-center align-items-center h-100 hover-image">
                                 <li class="list-inline-item">
                                    <a href="#" class="w-40px h-40 rounded-circle d-inline-flex align-items-center justify-content-center text-white bg-dark-opacity-03 bg-hover-primary hover-white" data-toggle="tooltip" title="Wishlist">
                                    <i class="far fa-heart"></i>
                                    </a>
                                 </li>
                                 <li class="list-inline-item">
                                    <a href="#" class="w-40px h-40 rounded-circle d-inline-flex align-items-center justify-content-center text-white bg-dark-opacity-03 bg-hover-primary hover-white" data-toggle="tooltip" title="Compare">
                                    <i class="fas fa-exchange-alt"></i>
                                    </a>
                                 </li>
                              </ul>
                           </div>
                           <div class="mt-auto px-2">
                              <p class="fs-17 font-weight-bold text-white mb-0 lh-13">$1.250.000</p>
                              <h4 class="mt-0 mb-2 lh-1"><a href="single-property-1.html" class="fs-16 text-white">Villa on Hollywood Boulevard</a></h4>
                              <div class="border-top border-white-opacity-03 pt-2">
                                 <ul class="list-inline d-flex mb-0 flex-wrap mt-2 mt-lg-0 mr-n5">
                                    <li class="list-inline-item text-white font-weight-500 fs-13 d-flex align-items-center mr-5" data-toggle="tooltip" title="3 Bedroom">
                                       <svg class="icon icon-bedroom fs-18 text-primary mr-1">
                                          <use xlink:href="#icon-bedroom"></use>
                                       </svg>
                                       3 Br
                                    </li>
                                    <li class="list-inline-item text-white font-weight-500 fs-13 d-flex align-items-center mr-5" data-toggle="tooltip" title="3 Bedroom">
                                       <svg class="icon icon-shower fs-18 text-primary mr-1">
                                          <use xlink:href="#icon-shower"></use>
                                       </svg>
                                       3 Ba
                                    </li>
                                    <li class="list-inline-item text-white font-weight-500 fs-13 d-flex align-items-center mr-5" data-toggle="tooltip" title="3 Bedroom">
                                       <svg class="icon icon-square fs-18 text-primary mr-1">
                                          <use xlink:href="#icon-square"></use>
                                       </svg>
                                       2300 Sq.Ft
                                    </li>
                                    <li class="list-inline-item text-white font-weight-500 fs-13 d-flex align-items-center mr-5" data-toggle="tooltip" title="3 Bedroom">
                                       <svg class="icon icon-Garage fs-18 text-primary mr-1">
                                          <use xlink:href="#icon-Garage"></use>
                                       </svg>
                                       1 Gr
                                    </li>
                                 </ul>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xxl-3 col-lg-4 col-md-6 mb-6" data-animate="zoomIn">
                     <div class="card border-0 bg-overlay-gradient-3 rounded-lg hover-change-image">
                        <img src="{{asset('web/images/properties-grid-09.jpg')}}" class="card-img" alt="Home in Metric Way">
                        <div class="card-img-overlay d-flex flex-column position-relative-sm">
                           <div class="d-flex">
                              <div class="mr-auto h-24 d-flex">
                                 <span class="badge badge-orange mr-2">Featured</span>
                                 <span class="badge badge-indigo mr-2">For Sale</span>
                              </div>
                              <ul class="list-inline mb-0 d-flex justify-content-center align-items-center h-100 hover-image">
                                 <li class="list-inline-item">
                                    <a href="#" class="w-40px h-40 rounded-circle d-inline-flex align-items-center justify-content-center text-white bg-dark-opacity-03 bg-hover-primary hover-white" data-toggle="tooltip" title="Wishlist">
                                    <i class="far fa-heart"></i>
                                    </a>
                                 </li>
                                 <li class="list-inline-item">
                                    <a href="#" class="w-40px h-40 rounded-circle d-inline-flex align-items-center justify-content-center text-white bg-dark-opacity-03 bg-hover-primary hover-white" data-toggle="tooltip" title="Compare">
                                    <i class="fas fa-exchange-alt"></i>
                                    </a>
                                 </li>
                              </ul>
                           </div>
                           <div class="mt-auto px-2">
                              <p class="fs-17 font-weight-bold text-white mb-0 lh-13">$5.700<span class="fs-14 font-weight-500"> / year</span></p>
                              <h4 class="mt-0 mb-2 lh-1"><a href="single-property-1.html" class="fs-16 text-white">Home in Metric Way</a></h4>
                              <div class="border-top border-white-opacity-03 pt-2">
                                 <ul class="list-inline d-flex mb-0 flex-wrap mt-2 mt-lg-0 mr-n5">
                                    <li class="list-inline-item text-white font-weight-500 fs-13 d-flex align-items-center mr-5" data-toggle="tooltip" title="3 Bedroom">
                                       <svg class="icon icon-bedroom fs-18 text-primary mr-1">
                                          <use xlink:href="#icon-bedroom"></use>
                                       </svg>
                                       3 Br
                                    </li>
                                    <li class="list-inline-item text-white font-weight-500 fs-13 d-flex align-items-center mr-5" data-toggle="tooltip" title="3 Bedroom">
                                       <svg class="icon icon-shower fs-18 text-primary mr-1">
                                          <use xlink:href="#icon-shower"></use>
                                       </svg>
                                       3 Ba
                                    </li>
                                    <li class="list-inline-item text-white font-weight-500 fs-13 d-flex align-items-center mr-5" data-toggle="tooltip" title="3 Bedroom">
                                       <svg class="icon icon-square fs-18 text-primary mr-1">
                                          <use xlink:href="#icon-square"></use>
                                       </svg>
                                       2300 Sq.Ft
                                    </li>
                                    <li class="list-inline-item text-white font-weight-500 fs-13 d-flex align-items-center mr-5" data-toggle="tooltip" title="3 Bedroom">
                                       <svg class="icon icon-Garage fs-18 text-primary mr-1">
                                          <use xlink:href="#icon-Garage"></use>
                                       </svg>
                                       1 Gr
                                    </li>
                                 </ul>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xxl-3 col-lg-4 col-md-6 mb-6" data-animate="zoomIn">
                     <div class="card border-0 bg-overlay-gradient-3 rounded-lg hover-change-image">
                        <img src="{{asset('web/images/properties-grid-10.jpg')}}" class="card-img" alt="Affordable Urban House">
                        <div class="card-img-overlay d-flex flex-column position-relative-sm">
                           <div class="d-flex">
                              <div class="mr-auto h-24 d-flex">
                                 <span class="badge badge-indigo mr-2">For Sale</span>
                              </div>
                              <ul class="list-inline mb-0 d-flex justify-content-center align-items-center h-100 hover-image">
                                 <li class="list-inline-item">
                                    <a href="#" class="w-40px h-40 rounded-circle d-inline-flex align-items-center justify-content-center text-white bg-dark-opacity-03 bg-hover-primary hover-white" data-toggle="tooltip" title="Wishlist">
                                    <i class="far fa-heart"></i>
                                    </a>
                                 </li>
                                 <li class="list-inline-item">
                                    <a href="#" class="w-40px h-40 rounded-circle d-inline-flex align-items-center justify-content-center text-white bg-dark-opacity-03 bg-hover-primary hover-white" data-toggle="tooltip" title="Compare">
                                    <i class="fas fa-exchange-alt"></i>
                                    </a>
                                 </li>
                              </ul>
                           </div>
                           <div class="mt-auto px-2">
                              <p class="fs-17 font-weight-bold text-white mb-0 lh-13">$550<span class="fs-14 font-weight-500"> / month</span></p>
                              <h4 class="mt-0 mb-2 lh-1"><a href="single-property-1.html" class="fs-16 text-white">Affordable Urban House</a></h4>
                              <div class="border-top border-white-opacity-03 pt-2">
                                 <ul class="list-inline d-flex mb-0 flex-wrap mt-2 mt-lg-0 mr-n5">
                                    <li class="list-inline-item text-white font-weight-500 fs-13 d-flex align-items-center mr-5" data-toggle="tooltip" title="3 Bedroom">
                                       <svg class="icon icon-bedroom fs-18 text-primary mr-1">
                                          <use xlink:href="#icon-bedroom"></use>
                                       </svg>
                                       3 Br
                                    </li>
                                    <li class="list-inline-item text-white font-weight-500 fs-13 d-flex align-items-center mr-5" data-toggle="tooltip" title="3 Bedroom">
                                       <svg class="icon icon-shower fs-18 text-primary mr-1">
                                          <use xlink:href="#icon-shower"></use>
                                       </svg>
                                       3 Ba
                                    </li>
                                    <li class="list-inline-item text-white font-weight-500 fs-13 d-flex align-items-center mr-5" data-toggle="tooltip" title="3 Bedroom">
                                       <svg class="icon icon-square fs-18 text-primary mr-1">
                                          <use xlink:href="#icon-square"></use>
                                       </svg>
                                       2300 Sq.Ft
                                    </li>
                                    <li class="list-inline-item text-white font-weight-500 fs-13 d-flex align-items-center mr-5" data-toggle="tooltip" title="3 Bedroom">
                                       <svg class="icon icon-Garage fs-18 text-primary mr-1">
                                          <use xlink:href="#icon-Garage"></use>
                                       </svg>
                                       1 Gr
                                    </li>
                                 </ul>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xxl-3 col-lg-4 col-md-6 mb-6" data-animate="zoomIn">
                     <div class="card border-0 bg-overlay-gradient-3 rounded-lg hover-change-image">
                        <img src="{{asset('web/images/properties-grid-11.jpg')}}" class="card-img" alt="Home in Metric Way">
                        <div class="card-img-overlay d-flex flex-column position-relative-sm">
                           <div class="d-flex">
                              <div class="mr-auto h-24 d-flex">
                                 <span class="badge badge-primary mr-2">For Sale</span>
                              </div>
                              <ul class="list-inline mb-0 d-flex justify-content-center align-items-center h-100 hover-image">
                                 <li class="list-inline-item">
                                    <a href="#" class="w-40px h-40 rounded-circle d-inline-flex align-items-center justify-content-center text-white bg-dark-opacity-03 bg-hover-primary hover-white" data-toggle="tooltip" title="Wishlist">
                                    <i class="far fa-heart"></i>
                                    </a>
                                 </li>
                                 <li class="list-inline-item">
                                    <a href="#" class="w-40px h-40 rounded-circle d-inline-flex align-items-center justify-content-center text-white bg-dark-opacity-03 bg-hover-primary hover-white" data-toggle="tooltip" title="Compare">
                                    <i class="fas fa-exchange-alt"></i>
                                    </a>
                                 </li>
                              </ul>
                           </div>
                           <div class="mt-auto px-2">
                              <p class="fs-17 font-weight-bold text-white mb-0 lh-13">$1.250.000</p>
                              <h4 class="mt-0 mb-2 lh-1"><a href="single-property-1.html" class="fs-16 text-white">Home in Metric Way</a></h4>
                              <div class="border-top border-white-opacity-03 pt-2">
                                 <ul class="list-inline d-flex mb-0 flex-wrap mt-2 mt-lg-0 mr-n5">
                                    <li class="list-inline-item text-white font-weight-500 fs-13 d-flex align-items-center mr-5" data-toggle="tooltip" title="3 Bedroom">
                                       <svg class="icon icon-bedroom fs-18 text-primary mr-1">
                                          <use xlink:href="#icon-bedroom"></use>
                                       </svg>
                                       3 Br
                                    </li>
                                    <li class="list-inline-item text-white font-weight-500 fs-13 d-flex align-items-center mr-5" data-toggle="tooltip" title="3 Bedroom">
                                       <svg class="icon icon-shower fs-18 text-primary mr-1">
                                          <use xlink:href="#icon-shower"></use>
                                       </svg>
                                       3 Ba
                                    </li>
                                    <li class="list-inline-item text-white font-weight-500 fs-13 d-flex align-items-center mr-5" data-toggle="tooltip" title="3 Bedroom">
                                       <svg class="icon icon-square fs-18 text-primary mr-1">
                                          <use xlink:href="#icon-square"></use>
                                       </svg>
                                       2300 Sq.Ft
                                    </li>
                                    <li class="list-inline-item text-white font-weight-500 fs-13 d-flex align-items-center mr-5" data-toggle="tooltip" title="3 Bedroom">
                                       <svg class="icon icon-Garage fs-18 text-primary mr-1">
                                          <use xlink:href="#icon-Garage"></use>
                                       </svg>
                                       1 Gr
                                    </li>
                                 </ul>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xxl-3 col-lg-4 col-md-6 mb-6" data-animate="zoomIn">
                     <div class="card border-0 bg-overlay-gradient-3 rounded-lg hover-change-image">
                        <img src="{{asset('web/images/properties-grid-40.jpg')}}" class="card-img" alt="Home in Metric Way">
                        <div class="card-img-overlay d-flex flex-column position-relative-sm">
                           <div class="d-flex">
                              <div class="mr-auto h-24 d-flex">
                                 <span class="badge badge-indigo mr-2">For Sale</span>
                              </div>
                              <ul class="list-inline mb-0 d-flex justify-content-center align-items-center h-100 hover-image">
                                 <li class="list-inline-item">
                                    <a href="#" class="w-40px h-40 rounded-circle d-inline-flex align-items-center justify-content-center text-white bg-dark-opacity-03 bg-hover-primary hover-white" data-toggle="tooltip" title="Wishlist">
                                    <i class="far fa-heart"></i>
                                    </a>
                                 </li>
                                 <li class="list-inline-item">
                                    <a href="#" class="w-40px h-40 rounded-circle d-inline-flex align-items-center justify-content-center text-white bg-dark-opacity-03 bg-hover-primary hover-white" data-toggle="tooltip" title="Compare">
                                    <i class="fas fa-exchange-alt"></i>
                                    </a>
                                 </li>
                              </ul>
                           </div>
                           <div class="mt-auto px-2">
                              <p class="fs-17 font-weight-bold text-white mb-0 lh-13">$550<span class="fs-14 font-weight-500"> / month</span></p>
                              <h4 class="mt-0 mb-2 lh-1"><a href="single-property-1.html" class="fs-16 text-white">Home in Metric Way</a></h4>
                              <div class="border-top border-white-opacity-03 pt-2">
                                 <ul class="list-inline d-flex mb-0 flex-wrap mt-2 mt-lg-0 mr-n5">
                                    <li class="list-inline-item text-white font-weight-500 fs-13 d-flex align-items-center mr-5" data-toggle="tooltip" title="3 Bedroom">
                                       <svg class="icon icon-bedroom fs-18 text-primary mr-1">
                                          <use xlink:href="#icon-bedroom"></use>
                                       </svg>
                                       3 Br
                                    </li>
                                    <li class="list-inline-item text-white font-weight-500 fs-13 d-flex align-items-center mr-5" data-toggle="tooltip" title="3 Bedroom">
                                       <svg class="icon icon-shower fs-18 text-primary mr-1">
                                          <use xlink:href="#icon-shower"></use>
                                       </svg>
                                       3 Ba
                                    </li>
                                    <li class="list-inline-item text-white font-weight-500 fs-13 d-flex align-items-center mr-5" data-toggle="tooltip" title="3 Bedroom">
                                       <svg class="icon icon-square fs-18 text-primary mr-1">
                                          <use xlink:href="#icon-square"></use>
                                       </svg>
                                       2300 Sq.Ft
                                    </li>
                                    <li class="list-inline-item text-white font-weight-500 fs-13 d-flex align-items-center mr-5" data-toggle="tooltip" title="3 Bedroom">
                                       <svg class="icon icon-Garage fs-18 text-primary mr-1">
                                          <use xlink:href="#icon-Garage"></use>
                                       </svg>
                                       1 Gr
                                    </li>
                                 </ul>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xxl-3 col-lg-4 col-md-6 mb-6" data-animate="zoomIn">
                     <div class="card border-0 bg-overlay-gradient-3 rounded-lg hover-change-image">
                        <img src="{{asset('web/images/properties-grid-41.jpg')}}" class="card-img" alt="Affordable Urban House">
                        <div class="card-img-overlay d-flex flex-column position-relative-sm">
                           <div class="d-flex">
                              <div class="mr-auto h-24 d-flex">
                                 <span class="badge badge-primary mr-2">For Sale</span>
                              </div>
                              <ul class="list-inline mb-0 d-flex justify-content-center align-items-center h-100 hover-image">
                                 <li class="list-inline-item">
                                    <a href="#" class="w-40px h-40 rounded-circle d-inline-flex align-items-center justify-content-center text-white bg-dark-opacity-03 bg-hover-primary hover-white" data-toggle="tooltip" title="Wishlist">
                                    <i class="far fa-heart"></i>
                                    </a>
                                 </li>
                                 <li class="list-inline-item">
                                    <a href="#" class="w-40px h-40 rounded-circle d-inline-flex align-items-center justify-content-center text-white bg-dark-opacity-03 bg-hover-primary hover-white" data-toggle="tooltip" title="Compare">
                                    <i class="fas fa-exchange-alt"></i>
                                    </a>
                                 </li>
                              </ul>
                           </div>
                           <div class="mt-auto px-2">
                              <p class="fs-17 font-weight-bold text-white mb-0 lh-13">$1.250.000</p>
                              <h4 class="mt-0 mb-2 lh-1"><a href="single-property-1.html" class="fs-16 text-white">Affordable Urban House</a></h4>
                              <div class="border-top border-white-opacity-03 pt-2">
                                 <ul class="list-inline d-flex mb-0 flex-wrap mt-2 mt-lg-0 mr-n5">
                                    <li class="list-inline-item text-white font-weight-500 fs-13 d-flex align-items-center mr-5" data-toggle="tooltip" title="3 Bedroom">
                                       <svg class="icon icon-bedroom fs-18 text-primary mr-1">
                                          <use xlink:href="#icon-bedroom"></use>
                                       </svg>
                                       3 Br
                                    </li>
                                    <li class="list-inline-item text-white font-weight-500 fs-13 d-flex align-items-center mr-5" data-toggle="tooltip" title="3 Bedroom">
                                       <svg class="icon icon-shower fs-18 text-primary mr-1">
                                          <use xlink:href="#icon-shower"></use>
                                       </svg>
                                       3 Ba
                                    </li>
                                    <li class="list-inline-item text-white font-weight-500 fs-13 d-flex align-items-center mr-5" data-toggle="tooltip" title="3 Bedroom">
                                       <svg class="icon icon-square fs-18 text-primary mr-1">
                                          <use xlink:href="#icon-square"></use>
                                       </svg>
                                       2300 Sq.Ft
                                    </li>
                                    <li class="list-inline-item text-white font-weight-500 fs-13 d-flex align-items-center mr-5" data-toggle="tooltip" title="3 Bedroom">
                                       <svg class="icon icon-Garage fs-18 text-primary mr-1">
                                          <use xlink:href="#icon-Garage"></use>
                                       </svg>
                                       1 Gr
                                    </li>
                                 </ul>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xxl-3 col-lg-4 col-md-6 mb-6" data-animate="zoomIn">
                     <div class="card border-0 bg-overlay-gradient-3 rounded-lg hover-change-image">
                        <img src="{{asset('web/images/properties-grid-42.jpg')}}" class="card-img" alt="Villa on Hollywood Boulevard">
                        <div class="card-img-overlay d-flex flex-column position-relative-sm">
                           <div class="d-flex">
                              <div class="mr-auto h-24 d-flex">
                                 <span class="badge badge-orange mr-2">Featured</span>
                                 <span class="badge badge-indigo mr-2">For Sale</span>
                              </div>
                              <ul class="list-inline mb-0 d-flex justify-content-center align-items-center h-100 hover-image">
                                 <li class="list-inline-item">
                                    <a href="#" class="w-40px h-40 rounded-circle d-inline-flex align-items-center justify-content-center text-white bg-dark-opacity-03 bg-hover-primary hover-white" data-toggle="tooltip" title="Wishlist">
                                    <i class="far fa-heart"></i>
                                    </a>
                                 </li>
                                 <li class="list-inline-item">
                                    <a href="#" class="w-40px h-40 rounded-circle d-inline-flex align-items-center justify-content-center text-white bg-dark-opacity-03 bg-hover-primary hover-white" data-toggle="tooltip" title="Compare">
                                    <i class="fas fa-exchange-alt"></i>
                                    </a>
                                 </li>
                              </ul>
                           </div>
                           <div class="mt-auto px-2">
                              <p class="fs-17 font-weight-bold text-white mb-0 lh-13">$1.250.000</p>
                              <h4 class="mt-0 mb-2 lh-1"><a href="single-property-1.html" class="fs-16 text-white">Villa on Hollywood Boulevard</a></h4>
                              <div class="border-top border-white-opacity-03 pt-2">
                                 <ul class="list-inline d-flex mb-0 flex-wrap mt-2 mt-lg-0 mr-n5">
                                    <li class="list-inline-item text-white font-weight-500 fs-13 d-flex align-items-center mr-5" data-toggle="tooltip" title="3 Bedroom">
                                       <svg class="icon icon-bedroom fs-18 text-primary mr-1">
                                          <use xlink:href="#icon-bedroom"></use>
                                       </svg>
                                       3 Br
                                    </li>
                                    <li class="list-inline-item text-white font-weight-500 fs-13 d-flex align-items-center mr-5" data-toggle="tooltip" title="3 Bedroom">
                                       <svg class="icon icon-shower fs-18 text-primary mr-1">
                                          <use xlink:href="#icon-shower"></use>
                                       </svg>
                                       3 Ba
                                    </li>
                                    <li class="list-inline-item text-white font-weight-500 fs-13 d-flex align-items-center mr-5" data-toggle="tooltip" title="3 Bedroom">
                                       <svg class="icon icon-square fs-18 text-primary mr-1">
                                          <use xlink:href="#icon-square"></use>
                                       </svg>
                                       2300 Sq.Ft
                                    </li>
                                    <li class="list-inline-item text-white font-weight-500 fs-13 d-flex align-items-center mr-5" data-toggle="tooltip" title="3 Bedroom">
                                       <svg class="icon icon-Garage fs-18 text-primary mr-1">
                                          <use xlink:href="#icon-Garage"></use>
                                       </svg>
                                       1 Gr
                                    </li>
                                 </ul>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xxl-3 col-lg-4 col-md-6 mb-6" data-animate="zoomIn">
                     <div class="card border-0 bg-overlay-gradient-3 rounded-lg hover-change-image">
                        <img src="{{asset('web/images/properties-grid-43.jpg')}}" class="card-img" alt="Affordable Urban House">
                        <div class="card-img-overlay d-flex flex-column position-relative-sm">
                           <div class="d-flex">
                              <div class="mr-auto h-24 d-flex">
                                 <span class="badge badge-indigo mr-2">For Rent</span>
                              </div>
                              <ul class="list-inline mb-0 d-flex justify-content-center align-items-center h-100 hover-image">
                                 <li class="list-inline-item">
                                    <a href="#" class="w-40px h-40 rounded-circle d-inline-flex align-items-center justify-content-center text-white bg-dark-opacity-03 bg-hover-primary hover-white" data-toggle="tooltip" title="Wishlist">
                                    <i class="far fa-heart"></i>
                                    </a>
                                 </li>
                                 <li class="list-inline-item">
                                    <a href="#" class="w-40px h-40 rounded-circle d-inline-flex align-items-center justify-content-center text-white bg-dark-opacity-03 bg-hover-primary hover-white" data-toggle="tooltip" title="Compare">
                                    <i class="fas fa-exchange-alt"></i>
                                    </a>
                                 </li>
                              </ul>
                           </div>
                           <div class="mt-auto px-2">
                              <p class="fs-17 font-weight-bold text-white mb-0 lh-13">$550<span class="fs-14 font-weight-500"> / month</span></p>
                              <h4 class="mt-0 mb-2 lh-1"><a href="single-property-1.html" class="fs-16 text-white">Affordable Urban House</a></h4>
                              <div class="border-top border-white-opacity-03 pt-2">
                                 <ul class="list-inline d-flex mb-0 flex-wrap mt-2 mt-lg-0 mr-n5">
                                    <li class="list-inline-item text-white font-weight-500 fs-13 d-flex align-items-center mr-5" data-toggle="tooltip" title="3 Bedroom">
                                       <svg class="icon icon-bedroom fs-18 text-primary mr-1">
                                          <use xlink:href="#icon-bedroom"></use>
                                       </svg>
                                       3 Br
                                    </li>
                                    <li class="list-inline-item text-white font-weight-500 fs-13 d-flex align-items-center mr-5" data-toggle="tooltip" title="3 Bedroom">
                                       <svg class="icon icon-shower fs-18 text-primary mr-1">
                                          <use xlink:href="#icon-shower"></use>
                                       </svg>
                                       3 Ba
                                    </li>
                                    <li class="list-inline-item text-white font-weight-500 fs-13 d-flex align-items-center mr-5" data-toggle="tooltip" title="3 Bedroom">
                                       <svg class="icon icon-square fs-18 text-primary mr-1">
                                          <use xlink:href="#icon-square"></use>
                                       </svg>
                                       2300 Sq.Ft
                                    </li>
                                    <li class="list-inline-item text-white font-weight-500 fs-13 d-flex align-items-center mr-5" data-toggle="tooltip" title="3 Bedroom">
                                       <svg class="icon icon-Garage fs-18 text-primary mr-1">
                                          <use xlink:href="#icon-Garage"></use>
                                       </svg>
                                       1 Gr
                                    </li>
                                 </ul>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
           
         </div>
         <div class="text-center">
            <a href="listing-grid-with-left-filter.html" class="btn btn-lg text-secondary btn-accent rounded-lg mt-6">See all properties
            <i class="far fa-long-arrow-right ml-1"></i>
            </a>
         </div>
      </div>
   </section> --}}
   <section class="bg-gray-02 pt-10 pb-11">
      <div class="container container-xxl">
         <h2 class="text-dark lh-1625 text-center">Why Choose Us?</h2>
         <span class="heading-divider mx-auto"></span>
         <div class="row justify-content-between mt-10">
            <div class="col-lg-4 mb-6 mb-lg-0" data-animate="fadeInUp">
               <div class="card border-0 bg-transparent">
                  <div class="card-img-top d-flex align-items-end justify-content-center">
                     <img src="{{asset('web/images/urban.png')}}" alt="Wider range of properties">
                  </div>
                  <div class="card-body px-0 px-xxl-10 pt-7 pb-0 text-center">
                     <h4 class="card-title fs-18 lh-17 text-dark mb-2">Wider range of properties</h4>
                     {{-- <p class="card-text px-sm-2">
                        Lorem ipsum dolor sit amet, consec tetur cing elit. Suspe ndisse suscorem ipsum dolor sit ametcipsum suscorein ipsumg elit.
                     </p> --}}
                  </div>
               </div>
            </div>
            <div class="col-lg-4 mb-6 mb-lg-0" data-animate="fadeInUp">
               <div class="card border-0 bg-transparent">
                  <div class="card-img-top d-flex align-items-end justify-content-center">
                     <img src="{{asset('web/images/bank.png')}}" alt="Financing made easy">
                  </div>
                  <div class="card-body px-0 px-xxl-10 pt-7 pb-0 text-center">
                     <h4 class="card-title fs-18 lh-17 text-dark mb-2">Financing made easy</h4>
                     {{-- <p class="card-text px-sm-2">
                        Lorem ipsum dolor sit amet, consec tetur cing elit. Suspe ndisse suscorem ipsum dolor sit ametcipsum suscorein ipsumg elit.
                     </p> --}}
                  </div>
               </div>
            </div>
            <div class="col-lg-4 mb-6 mb-lg-0" data-animate="fadeInUp">
               <div class="card border-0 bg-transparent">
                  <div class="card-img-top d-flex align-items-end justify-content-center">
                     <img src="{{asset('web/images/buy.png')}}" alt="Transparentcy">
                  </div>
                  <div class="card-body px-0 px-xxl-10 pt-7 pb-0 text-center">
                     <h4 class="card-title fs-18 lh-17 text-dark mb-2">Transparentcy</h4>
                     {{-- <p class="card-text px-sm-2">
                        Lorem ipsum dolor sit amet, consec tetur cing elit. Suspe ndisse suscorem ipsum dolor sit ametcipsum suscorein ipsumg elit.
                     </p> --}}
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
   {{-- <section class="py-lg-12 my-lg-1 py-11">
      <div class="container container-xxl">
         <div class="row">
            <div class="col-md-6">
               <h2 class="text-heading">Properties For Sale</h2>
               <span class="heading-divider"></span>
               <p class="mb-7">Lorem ipsum dolor sit amet, consec tetur cing elit. Suspe ndisse suscipit</p>
            </div>
            <div class="col-md-6 text-md-right">
               <a href="listing-grid-with-left-filter.html" class="btn btn-lg text-secondary btn-accent rounded-lg mb-8">See all properties
               <i class="far fa-long-arrow-right ml-1"></i>
               </a>
            </div>
         </div>
         <div class="slick-slider mx-n2 custom-arrow-spacing-30" data-slick-options='{"slidesToShow": 5, "autoplay":true,"dots":false,"arrows":true,"responsive":[{"breakpoint": 1600,"settings": {"slidesToShow":3,"arrows":false}},{"breakpoint": 992,"settings": {"slidesToShow":3,"arrows":false}},{"breakpoint": 768,"settings": {"slidesToShow": 2,"arrows":false,"dots":true,"autoplay":true}},{"breakpoint": 576,"settings": {"slidesToShow": 1,"arrows":false,"dots":true,"autoplay":true}}]}'>
            <div class="box px-2" data-animate="fadeInUp">
               <div class="card border-0 hover-change-image">
                  <div class="bg-overlay-gradient-1 bg-hover-overlay-gradient-3 rounded-lg card-img">
                     <img src="{{asset('web/images/properties-grid-12.jpg')}}" alt="Villa on Hollywood Boulevard">
                     <div class="card-img-overlay d-flex flex-column justify-content-between">
                        <div>
                           <span class="badge mr-2 badge-orange">Featured</span>
                           <span class="badge mr-2 badge-primary">For Sale</span>
                        </div>
                        <ul class="list-inline mb-0 hover-image text-center">
                           <li class="list-inline-item">
                              <a href="#" class="w-52px h-52 rounded-circle d-inline-flex align-items-center justify-content-center text-heading bg-white bg-hover-primary hover-white" data-toggle="tooltip" title="Wishlist">
                              <i class="far fa-heart"></i>
                              </a>
                           </li>
                           <li class="list-inline-item">
                              <a href="#" class="w-52px h-52 rounded-circle d-inline-flex align-items-center justify-content-center text-heading bg-white bg-hover-primary hover-white" data-toggle="tooltip" title="Compare">
                              <i class="fas fa-exchange-alt"></i>
                              </a>
                           </li>
                        </ul>
                        <ul class="list-inline d-flex mb-0 flex-wrap px-2 mr-n5">
                           <li class="list-inline-item text-white font-weight-500 fs-13 d-flex align-items-center mr-5" data-toggle="tooltip" title="3 Bedroom">
                              <svg class="icon icon-bedroom fs-18 text-primary mr-1">
                                 <use xlink:href="#icon-bedroom"></use>
                              </svg>
                              3 Br
                           </li>
                           <li class="list-inline-item text-white font-weight-500 fs-13 d-flex align-items-center mr-5" data-toggle="tooltip" title="3 Bathrooms">
                              <svg class="icon icon-shower fs-18 text-primary mr-1">
                                 <use xlink:href="#icon-shower"></use>
                              </svg>
                              3 Ba
                           </li>
                           <li class="list-inline-item text-white font-weight-500 fs-13 d-flex align-items-center mr-5" data-toggle="tooltip" title="Size">
                              <svg class="icon icon-square fs-18 text-primary mr-1">
                                 <use xlink:href="#icon-square"></use>
                              </svg>
                              2300 Sq.Ft
                           </li>
                        </ul>
                     </div>
                  </div>
                  <div class="card-body p-0">
                     <h2 class="my-0 mt-1"><a href="single-property-1.html" class="fs-16 text-dark hover-primary lh-2">Villa on Hollywood Boulevard</a></h2>
                     <p class="text-gray-light font-weight-500 mb-1">1421 San Pedro St, Los Angeles</p>
                     <p class="fs-17 font-weight-bold text-heading mb-0">$1.250.000</p>
                  </div>
               </div>
            </div>
            <div class="box px-2" data-animate="fadeInUp">
               <div class="card border-0 hover-change-image">
                  <div class="bg-overlay-gradient-1 bg-hover-overlay-gradient-3 rounded-lg card-img">
                     <img src="{{asset('web/images/properties-grid-13.jpg')}}" alt="Home in Metric Way">
                     <div class="card-img-overlay d-flex flex-column justify-content-between">
                        <div>
                           <span class="badge mr-2 badge-primary">For Sale</span>
                        </div>
                        <ul class="list-inline mb-0 hover-image text-center">
                           <li class="list-inline-item">
                              <a href="#" class="w-52px h-52 rounded-circle d-inline-flex align-items-center justify-content-center text-heading bg-white bg-hover-primary hover-white" data-toggle="tooltip" title="Wishlist">
                              <i class="far fa-heart"></i>
                              </a>
                           </li>
                           <li class="list-inline-item">
                              <a href="#" class="w-52px h-52 rounded-circle d-inline-flex align-items-center justify-content-center text-heading bg-white bg-hover-primary hover-white" data-toggle="tooltip" title="Compare">
                              <i class="fas fa-exchange-alt"></i>
                              </a>
                           </li>
                        </ul>
                        <ul class="list-inline d-flex mb-0 flex-wrap px-2 mr-n5">
                           <li class="list-inline-item text-white font-weight-500 fs-13 d-flex align-items-center mr-5" data-toggle="tooltip" title="3 Bedroom">
                              <svg class="icon icon-bedroom fs-18 text-primary mr-1">
                                 <use xlink:href="#icon-bedroom"></use>
                              </svg>
                              3 Br
                           </li>
                           <li class="list-inline-item text-white font-weight-500 fs-13 d-flex align-items-center mr-5" data-toggle="tooltip" title="3 Bathrooms">
                              <svg class="icon icon-shower fs-18 text-primary mr-1">
                                 <use xlink:href="#icon-shower"></use>
                              </svg>
                              3 Ba
                           </li>
                           <li class="list-inline-item text-white font-weight-500 fs-13 d-flex align-items-center mr-5" data-toggle="tooltip" title="Size">
                              <svg class="icon icon-square fs-18 text-primary mr-1">
                                 <use xlink:href="#icon-square"></use>
                              </svg>
                              2300 Sq.Ft
                           </li>
                        </ul>
                     </div>
                  </div>
                  <div class="card-body p-0">
                     <h2 class="my-0 mt-1"><a href="single-property-1.html" class="fs-16 text-dark hover-primary lh-2">Home in Metric Way</a></h2>
                     <p class="text-gray-light font-weight-500 mb-1">1421 San Pedro St, Los Angeles</p>
                     <p class="fs-17 font-weight-bold text-heading mb-0">$1.250.000</p>
                  </div>
               </div>
            </div>
            <div class="box px-2" data-animate="fadeInUp">
               <div class="card border-0 hover-change-image">
                  <div class="bg-overlay-gradient-1 bg-hover-overlay-gradient-3 rounded-lg card-img">
                     <img src="{{asset('web/images/properties-grid-14.jpg')}}" alt="Affordable Urban House">
                     <div class="card-img-overlay d-flex flex-column justify-content-between">
                        <div>
                           <span class="badge mr-2 badge-primary">For Sale</span>
                        </div>
                        <ul class="list-inline mb-0 hover-image text-center">
                           <li class="list-inline-item">
                              <a href="#" class="w-52px h-52 rounded-circle d-inline-flex align-items-center justify-content-center text-heading bg-white bg-hover-primary hover-white" data-toggle="tooltip" title="Wishlist">
                              <i class="far fa-heart"></i>
                              </a>
                           </li>
                           <li class="list-inline-item">
                              <a href="#" class="w-52px h-52 rounded-circle d-inline-flex align-items-center justify-content-center text-heading bg-white bg-hover-primary hover-white" data-toggle="tooltip" title="Compare">
                              <i class="fas fa-exchange-alt"></i>
                              </a>
                           </li>
                        </ul>
                        <ul class="list-inline d-flex mb-0 flex-wrap px-2 mr-n5">
                           <li class="list-inline-item text-white font-weight-500 fs-13 d-flex align-items-center mr-5" data-toggle="tooltip" title="3 Bedroom">
                              <svg class="icon icon-bedroom fs-18 text-primary mr-1">
                                 <use xlink:href="#icon-bedroom"></use>
                              </svg>
                              3 Br
                           </li>
                           <li class="list-inline-item text-white font-weight-500 fs-13 d-flex align-items-center mr-5" data-toggle="tooltip" title="3 Bathrooms">
                              <svg class="icon icon-shower fs-18 text-primary mr-1">
                                 <use xlink:href="#icon-shower"></use>
                              </svg>
                              3 Ba
                           </li>
                           <li class="list-inline-item text-white font-weight-500 fs-13 d-flex align-items-center mr-5" data-toggle="tooltip" title="Size">
                              <svg class="icon icon-square fs-18 text-primary mr-1">
                                 <use xlink:href="#icon-square"></use>
                              </svg>
                              2300 Sq.Ft
                           </li>
                        </ul>
                     </div>
                  </div>
                  <div class="card-body p-0">
                     <h2 class="my-0 mt-1"><a href="single-property-1.html" class="fs-16 text-dark hover-primary lh-2">Affordable Urban House</a></h2>
                     <p class="text-gray-light font-weight-500 mb-1">1421 San Pedro St, Los Angeles</p>
                     <p class="fs-17 font-weight-bold text-heading mb-0">$1.250.000</p>
                  </div>
               </div>
            </div>
            <div class="box px-2" data-animate="fadeInUp">
               <div class="card border-0 hover-change-image">
                  <div class="bg-overlay-gradient-1 bg-hover-overlay-gradient-3 rounded-lg card-img">
                     <img src="{{asset('web/images/properties-grid-15.jpg')}}" alt="Explore Old Barcelona">
                     <div class="card-img-overlay d-flex flex-column justify-content-between">
                        <div>
                           <span class="badge mr-2 badge-orange">Featured</span>
                           <span class="badge mr-2 badge-primary">For Sale</span>
                        </div>
                        <ul class="list-inline mb-0 hover-image text-center">
                           <li class="list-inline-item">
                              <a href="#" class="w-52px h-52 rounded-circle d-inline-flex align-items-center justify-content-center text-heading bg-white bg-hover-primary hover-white" data-toggle="tooltip" title="Wishlist">
                              <i class="far fa-heart"></i>
                              </a>
                           </li>
                           <li class="list-inline-item">
                              <a href="#" class="w-52px h-52 rounded-circle d-inline-flex align-items-center justify-content-center text-heading bg-white bg-hover-primary hover-white" data-toggle="tooltip" title="Compare">
                              <i class="fas fa-exchange-alt"></i>
                              </a>
                           </li>
                        </ul>
                        <ul class="list-inline d-flex mb-0 flex-wrap px-2 mr-n5">
                           <li class="list-inline-item text-white font-weight-500 fs-13 d-flex align-items-center mr-5" data-toggle="tooltip" title="3 Bedroom">
                              <svg class="icon icon-bedroom fs-18 text-primary mr-1">
                                 <use xlink:href="#icon-bedroom"></use>
                              </svg>
                              3 Br
                           </li>
                           <li class="list-inline-item text-white font-weight-500 fs-13 d-flex align-items-center mr-5" data-toggle="tooltip" title="3 Bathrooms">
                              <svg class="icon icon-shower fs-18 text-primary mr-1">
                                 <use xlink:href="#icon-shower"></use>
                              </svg>
                              3 Ba
                           </li>
                           <li class="list-inline-item text-white font-weight-500 fs-13 d-flex align-items-center mr-5" data-toggle="tooltip" title="Size">
                              <svg class="icon icon-square fs-18 text-primary mr-1">
                                 <use xlink:href="#icon-square"></use>
                              </svg>
                              2300 Sq.Ft
                           </li>
                        </ul>
                     </div>
                  </div>
                  <div class="card-body p-0">
                     <h2 class="my-0 mt-1"><a href="single-property-1.html" class="fs-16 text-dark hover-primary lh-2">Explore Old Barcelona</a></h2>
                     <p class="text-gray-light font-weight-500 mb-1">1421 San Pedro St, Los Angeles</p>
                     <p class="fs-17 font-weight-bold text-heading mb-0">$1.250.000</p>
                  </div>
               </div>
            </div>
            <div class="box px-2" data-animate="fadeInUp">
               <div class="card border-0 hover-change-image">
                  <div class="bg-overlay-gradient-1 bg-hover-overlay-gradient-3 rounded-lg card-img">
                     <img src="{{asset('web/images/properties-grid-16.jpg')}}" alt="Garden Gingerbread House">
                     <div class="card-img-overlay d-flex flex-column justify-content-between">
                        <div>
                           <span class="badge mr-2 badge-primary">For Sale</span>
                        </div>
                        <ul class="list-inline mb-0 hover-image text-center">
                           <li class="list-inline-item">
                              <a href="#" class="w-52px h-52 rounded-circle d-inline-flex align-items-center justify-content-center text-heading bg-white bg-hover-primary hover-white" data-toggle="tooltip" title="Wishlist">
                              <i class="far fa-heart"></i>
                              </a>
                           </li>
                           <li class="list-inline-item">
                              <a href="#" class="w-52px h-52 rounded-circle d-inline-flex align-items-center justify-content-center text-heading bg-white bg-hover-primary hover-white" data-toggle="tooltip" title="Compare">
                              <i class="fas fa-exchange-alt"></i>
                              </a>
                           </li>
                        </ul>
                        <ul class="list-inline d-flex mb-0 flex-wrap px-2 mr-n5">
                           <li class="list-inline-item text-white font-weight-500 fs-13 d-flex align-items-center mr-5" data-toggle="tooltip" title="3 Bedroom">
                              <svg class="icon icon-bedroom fs-18 text-primary mr-1">
                                 <use xlink:href="#icon-bedroom"></use>
                              </svg>
                              3 Br
                           </li>
                           <li class="list-inline-item text-white font-weight-500 fs-13 d-flex align-items-center mr-5" data-toggle="tooltip" title="3 Bathrooms">
                              <svg class="icon icon-shower fs-18 text-primary mr-1">
                                 <use xlink:href="#icon-shower"></use>
                              </svg>
                              3 Ba
                           </li>
                           <li class="list-inline-item text-white font-weight-500 fs-13 d-flex align-items-center mr-5" data-toggle="tooltip" title="Size">
                              <svg class="icon icon-square fs-18 text-primary mr-1">
                                 <use xlink:href="#icon-square"></use>
                              </svg>
                              2300 Sq.Ft
                           </li>
                        </ul>
                     </div>
                  </div>
                  <div class="card-body p-0">
                     <h2 class="my-0 mt-1"><a href="single-property-1.html" class="fs-16 text-dark hover-primary lh-2">Garden Gingerbread House</a></h2>
                     <p class="text-gray-light font-weight-500 mb-1">1421 San Pedro St, Los Angeles</p>
                     <p class="fs-17 font-weight-bold text-heading mb-0">$1.250.000</p>
                  </div>
               </div>
            </div>
            <div class="box px-2" data-animate="fadeInUp">
               <div class="card border-0 hover-change-image">
                  <div class="bg-overlay-gradient-1 bg-hover-overlay-gradient-3 rounded-lg card-img">
                     <img src="{{asset('web/images/properties-grid-12.jpg')}}" alt="Villa on Hollywood Boulevard">
                     <div class="card-img-overlay d-flex flex-column justify-content-between">
                        <div>
                           <span class="badge mr-2 badge-orange">Featured</span>
                           <span class="badge mr-2 badge-primary">For Sale</span>
                        </div>
                        <ul class="list-inline mb-0 hover-image text-center">
                           <li class="list-inline-item">
                              <a href="#" class="w-52px h-52 rounded-circle d-inline-flex align-items-center justify-content-center text-heading bg-white bg-hover-primary hover-white" data-toggle="tooltip" title="Wishlist">
                              <i class="far fa-heart"></i>
                              </a>
                           </li>
                           <li class="list-inline-item">
                              <a href="#" class="w-52px h-52 rounded-circle d-inline-flex align-items-center justify-content-center text-heading bg-white bg-hover-primary hover-white" data-toggle="tooltip" title="Compare">
                              <i class="fas fa-exchange-alt"></i>
                              </a>
                           </li>
                        </ul>
                        <ul class="list-inline d-flex mb-0 flex-wrap px-2 mr-n5">
                           <li class="list-inline-item text-white font-weight-500 fs-13 d-flex align-items-center mr-5" data-toggle="tooltip" title="3 Bedroom">
                              <svg class="icon icon-bedroom fs-18 text-primary mr-1">
                                 <use xlink:href="#icon-bedroom"></use>
                              </svg>
                              3 Br
                           </li>
                           <li class="list-inline-item text-white font-weight-500 fs-13 d-flex align-items-center mr-5" data-toggle="tooltip" title="3 Bathrooms">
                              <svg class="icon icon-shower fs-18 text-primary mr-1">
                                 <use xlink:href="#icon-shower"></use>
                              </svg>
                              3 Ba
                           </li>
                           <li class="list-inline-item text-white font-weight-500 fs-13 d-flex align-items-center mr-5" data-toggle="tooltip" title="Size">
                              <svg class="icon icon-square fs-18 text-primary mr-1">
                                 <use xlink:href="#icon-square"></use>
                              </svg>
                              2300 Sq.Ft
                           </li>
                        </ul>
                     </div>
                  </div>
                  <div class="card-body p-0">
                     <h2 class="my-0 mt-1"><a href="single-property-1.html" class="fs-16 text-dark hover-primary lh-2">Villa on Hollywood Boulevard</a></h2>
                     <p class="text-gray-light font-weight-500 mb-1">1421 San Pedro St, Los Angeles</p>
                     <p class="fs-17 font-weight-bold text-heading mb-0">$1.250.000</p>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section> --}}
   {{-- <section class="pb-lg-13 pb-11">
      <div class="container container-xxl">
         <div class="row">
            <div class="col-md-6">
               <h2 class="text-heading">Properties For Rent</h2>
               <span class="heading-divider"></span>
               <p class="mb-7">Lorem ipsum dolor sit amet, consec tetur cing elit. Suspe ndisse suscipit</p>
            </div>
            <div class="col-md-6 text-md-right">
               <a href="listing-grid-with-left-filter.html" class="btn btn-lg text-secondary btn-accent rounded-lg mb-8">See all properties
               <i class="far fa-long-arrow-right ml-1"></i>
               </a>
            </div>
         </div>
         <div class="slick-slider mx-n2" data-slick-options='{"slidesToShow": 5, "autoplay":true,"dots":false,"arrows":true,"responsive":[{"breakpoint": 1600,"settings": {"slidesToShow":3,"arrows":false}},{"breakpoint": 992,"settings": {"slidesToShow":3,"arrows":false}},{"breakpoint": 768,"settings": {"slidesToShow": 2,"arrows":false,"dots":true,"autoplay":true}},{"breakpoint": 576,"settings": {"slidesToShow": 1,"arrows":false,"dots":true,"autoplay":true}}]}'>
            <div class="box px-2" data-animate="fadeInUp">
               <div class="card border-0 hover-change-image">
                  <div class="rounded-lg bg-overlay-gradient-7 bg-hover-overlay-gradient-3 card-img">
                     <img src="{{asset('web/images/properties-grid-23.jpg')}}" alt="Villa on Hollywood Boulevard">
                     <div class="card-img-overlay d-flex flex-column justify-content-between">
                        <div>
                           <span class="badge mr-2 badge-indigo">For Rent</span>
                        </div>
                        <ul class="list-inline mb-0 hover-image text-center">
                           <li class="list-inline-item">
                              <a href="#" class="w-52px h-52 rounded-circle d-inline-flex align-items-center justify-content-center text-heading bg-white bg-hover-primary hover-white" data-toggle="tooltip" title="Wishlist">
                              <i class="far fa-heart"></i>
                              </a>
                           </li>
                           <li class="list-inline-item">
                              <a href="#" class="w-52px h-52 rounded-circle d-inline-flex align-items-center justify-content-center text-heading bg-white bg-hover-primary hover-white" data-toggle="tooltip" title="Compare">
                              <i class="fas fa-exchange-alt"></i>
                              </a>
                           </li>
                        </ul>
                        <ul class="list-inline d-flex mb-0 flex-wrap px-2 mr-n5">
                           <li class="list-inline-item text-white font-weight-500 fs-13 d-flex align-items-center mr-5" data-toggle="tooltip" title="3 Bedroom">
                              <svg class="icon icon-bedroom fs-18 text-primary mr-1">
                                 <use xlink:href="#icon-bedroom"></use>
                              </svg>
                              3 Br
                           </li>
                           <li class="list-inline-item text-white font-weight-500 fs-13 d-flex align-items-center mr-5" data-toggle="tooltip" title="3 Bathrooms">
                              <svg class="icon icon-shower fs-18 text-primary mr-1">
                                 <use xlink:href="#icon-shower"></use>
                              </svg>
                              3 Ba
                           </li>
                           <li class="list-inline-item text-white font-weight-500 fs-13 d-flex align-items-center mr-5" data-toggle="tooltip" title="Size">
                              <svg class="icon icon-square fs-18 text-primary mr-1">
                                 <use xlink:href="#icon-square"></use>
                              </svg>
                              2300 Sq.Ft
                           </li>
                        </ul>
                     </div>
                  </div>
                  <div class="card-body p-0">
                     <h2 class="my-0 mt-1"><a href="single-property-1.html" class="fs-16 text-dark hover-primary lh-2">Villa on Hollywood Boulevard</a></h2>
                     <p class="text-gray-light font-weight-500 mb-1">1421 San Pedro St, Los Angeles</p>
                     <p class="fs-17 font-weight-bold text-heading mb-0">$550<span class="text-gray-light font-weight-500 fs-14"> / month</span></p>
                  </div>
               </div>
            </div>
            <div class="box px-2" data-animate="fadeInUp">
               <div class="card border-0 hover-change-image">
                  <div class="rounded-lg bg-overlay-gradient-7 bg-hover-overlay-gradient-3 card-img">
                     <img src="{{asset('web/images/properties-grid-24.jpg')}}" alt="Home in Metric Way">
                     <div class="card-img-overlay d-flex flex-column justify-content-between">
                        <div>
                           <span class="badge mr-2 badge-indigo">For Rent</span>
                        </div>
                        <ul class="list-inline mb-0 hover-image text-center">
                           <li class="list-inline-item">
                              <a href="#" class="w-52px h-52 rounded-circle d-inline-flex align-items-center justify-content-center text-heading bg-white bg-hover-primary hover-white" data-toggle="tooltip" title="Wishlist">
                              <i class="far fa-heart"></i>
                              </a>
                           </li>
                           <li class="list-inline-item">
                              <a href="#" class="w-52px h-52 rounded-circle d-inline-flex align-items-center justify-content-center text-heading bg-white bg-hover-primary hover-white" data-toggle="tooltip" title="Compare">
                              <i class="fas fa-exchange-alt"></i>
                              </a>
                           </li>
                        </ul>
                        <ul class="list-inline d-flex mb-0 flex-wrap px-2 mr-n5">
                           <li class="list-inline-item text-white font-weight-500 fs-13 d-flex align-items-center mr-5" data-toggle="tooltip" title="3 Bedroom">
                              <svg class="icon icon-bedroom fs-18 text-primary mr-1">
                                 <use xlink:href="#icon-bedroom"></use>
                              </svg>
                              3 Br
                           </li>
                           <li class="list-inline-item text-white font-weight-500 fs-13 d-flex align-items-center mr-5" data-toggle="tooltip" title="3 Bathrooms">
                              <svg class="icon icon-shower fs-18 text-primary mr-1">
                                 <use xlink:href="#icon-shower"></use>
                              </svg>
                              3 Ba
                           </li>
                           <li class="list-inline-item text-white font-weight-500 fs-13 d-flex align-items-center mr-5" data-toggle="tooltip" title="Size">
                              <svg class="icon icon-square fs-18 text-primary mr-1">
                                 <use xlink:href="#icon-square"></use>
                              </svg>
                              2300 Sq.Ft
                           </li>
                        </ul>
                     </div>
                  </div>
                  <div class="card-body p-0">
                     <h2 class="my-0 mt-1"><a href="single-property-1.html" class="fs-16 text-dark hover-primary lh-2">Home in Metric Way</a></h2>
                     <p class="text-gray-light font-weight-500 mb-1">1421 San Pedro St, Los Angeles</p>
                     <p class="fs-17 font-weight-bold text-heading mb-0">$550<span class="text-gray-light font-weight-500 fs-14"> / month</span></p>
                  </div>
               </div>
            </div>
            <div class="box px-2" data-animate="fadeInUp">
               <div class="card border-0 hover-change-image">
                  <div class="rounded-lg bg-overlay-gradient-7 bg-hover-overlay-gradient-3 card-img">
                     <img src="{{asset('web/images/properties-grid-25.jpg')}}" alt="Affordable Urban House">
                     <div class="card-img-overlay d-flex flex-column justify-content-between">
                        <div>
                           <span class="badge mr-2 badge-orange">Featured</span>
                           <span class="badge mr-2 badge-indigo">For Rent</span>
                        </div>
                        <ul class="list-inline mb-0 hover-image text-center">
                           <li class="list-inline-item">
                              <a href="#" class="w-52px h-52 rounded-circle d-inline-flex align-items-center justify-content-center text-heading bg-white bg-hover-primary hover-white" data-toggle="tooltip" title="Wishlist">
                              <i class="far fa-heart"></i>
                              </a>
                           </li>
                           <li class="list-inline-item">
                              <a href="#" class="w-52px h-52 rounded-circle d-inline-flex align-items-center justify-content-center text-heading bg-white bg-hover-primary hover-white" data-toggle="tooltip" title="Compare">
                              <i class="fas fa-exchange-alt"></i>
                              </a>
                           </li>
                        </ul>
                        <ul class="list-inline d-flex mb-0 flex-wrap px-2 mr-n5">
                           <li class="list-inline-item text-white font-weight-500 fs-13 d-flex align-items-center mr-5" data-toggle="tooltip" title="3 Bedroom">
                              <svg class="icon icon-bedroom fs-18 text-primary mr-1">
                                 <use xlink:href="#icon-bedroom"></use>
                              </svg>
                              3 Br
                           </li>
                           <li class="list-inline-item text-white font-weight-500 fs-13 d-flex align-items-center mr-5" data-toggle="tooltip" title="3 Bathrooms">
                              <svg class="icon icon-shower fs-18 text-primary mr-1">
                                 <use xlink:href="#icon-shower"></use>
                              </svg>
                              3 Ba
                           </li>
                           <li class="list-inline-item text-white font-weight-500 fs-13 d-flex align-items-center mr-5" data-toggle="tooltip" title="Size">
                              <svg class="icon icon-square fs-18 text-primary mr-1">
                                 <use xlink:href="#icon-square"></use>
                              </svg>
                              2300 Sq.Ft
                           </li>
                        </ul>
                     </div>
                  </div>
                  <div class="card-body p-0">
                     <h2 class="my-0 mt-1"><a href="single-property-1.html" class="fs-16 text-dark hover-primary lh-2">Affordable Urban House</a></h2>
                     <p class="text-gray-light font-weight-500 mb-1">1421 San Pedro St, Los Angeles</p>
                     <p class="fs-17 font-weight-bold text-heading mb-0">$5.700<span class="text-gray-light font-weight-500 fs-14"> / year</span></p>
                  </div>
               </div>
            </div>
            <div class="box px-2" data-animate="fadeInUp">
               <div class="card border-0 hover-change-image">
                  <div class="rounded-lg bg-overlay-gradient-7 bg-hover-overlay-gradient-3 card-img">
                     <img src="{{asset('web/images/properties-grid-26.jpg')}}" alt="Explore Old Barcelona">
                     <div class="card-img-overlay d-flex flex-column justify-content-between">
                        <div>
                           <span class="badge mr-2 badge-indigo">For Rent</span>
                        </div>
                        <ul class="list-inline mb-0 hover-image text-center">
                           <li class="list-inline-item">
                              <a href="#" class="w-52px h-52 rounded-circle d-inline-flex align-items-center justify-content-center text-heading bg-white bg-hover-primary hover-white" data-toggle="tooltip" title="Wishlist">
                              <i class="far fa-heart"></i>
                              </a>
                           </li>
                           <li class="list-inline-item">
                              <a href="#" class="w-52px h-52 rounded-circle d-inline-flex align-items-center justify-content-center text-heading bg-white bg-hover-primary hover-white" data-toggle="tooltip" title="Compare">
                              <i class="fas fa-exchange-alt"></i>
                              </a>
                           </li>
                        </ul>
                        <ul class="list-inline d-flex mb-0 flex-wrap px-2 mr-n5">
                           <li class="list-inline-item text-white font-weight-500 fs-13 d-flex align-items-center mr-5" data-toggle="tooltip" title="3 Bedroom">
                              <svg class="icon icon-bedroom fs-18 text-primary mr-1">
                                 <use xlink:href="#icon-bedroom"></use>
                              </svg>
                              3 Br
                           </li>
                           <li class="list-inline-item text-white font-weight-500 fs-13 d-flex align-items-center mr-5" data-toggle="tooltip" title="3 Bathrooms">
                              <svg class="icon icon-shower fs-18 text-primary mr-1">
                                 <use xlink:href="#icon-shower"></use>
                              </svg>
                              3 Ba
                           </li>
                           <li class="list-inline-item text-white font-weight-500 fs-13 d-flex align-items-center mr-5" data-toggle="tooltip" title="Size">
                              <svg class="icon icon-square fs-18 text-primary mr-1">
                                 <use xlink:href="#icon-square"></use>
                              </svg>
                              2300 Sq.Ft
                           </li>
                        </ul>
                     </div>
                  </div>
                  <div class="card-body p-0">
                     <h2 class="my-0 mt-1"><a href="single-property-1.html" class="fs-16 text-dark hover-primary lh-2">Explore Old Barcelona</a></h2>
                     <p class="text-gray-light font-weight-500 mb-1">1421 San Pedro St, Los Angeles</p>
                     <p class="fs-17 font-weight-bold text-heading mb-0">$550<span class="text-gray-light font-weight-500 fs-14"> / month</span></p>
                  </div>
               </div>
            </div>
            <div class="box px-2" data-animate="fadeInUp">
               <div class="card border-0 hover-change-image">
                  <div class="rounded-lg bg-overlay-gradient-7 bg-hover-overlay-gradient-3 card-img">
                     <img src="{{asset('web/images/properties-grid-12.jpg')}}" alt="Garden Gingerbread House">
                     <div class="card-img-overlay d-flex flex-column justify-content-between">
                        <div>
                           <span class="badge mr-2 badge-orange">Featured</span>
                           <span class="badge mr-2 badge-indigo">For Rent</span>
                        </div>
                        <ul class="list-inline mb-0 hover-image text-center">
                           <li class="list-inline-item">
                              <a href="#" class="w-52px h-52 rounded-circle d-inline-flex align-items-center justify-content-center text-heading bg-white bg-hover-primary hover-white" data-toggle="tooltip" title="Wishlist">
                              <i class="far fa-heart"></i>
                              </a>
                           </li>
                           <li class="list-inline-item">
                              <a href="#" class="w-52px h-52 rounded-circle d-inline-flex align-items-center justify-content-center text-heading bg-white bg-hover-primary hover-white" data-toggle="tooltip" title="Compare">
                              <i class="fas fa-exchange-alt"></i>
                              </a>
                           </li>
                        </ul>
                        <ul class="list-inline d-flex mb-0 flex-wrap px-2 mr-n5">
                           <li class="list-inline-item text-white font-weight-500 fs-13 d-flex align-items-center mr-5" data-toggle="tooltip" title="3 Bedroom">
                              <svg class="icon icon-bedroom fs-18 text-primary mr-1">
                                 <use xlink:href="#icon-bedroom"></use>
                              </svg>
                              3 Br
                           </li>
                           <li class="list-inline-item text-white font-weight-500 fs-13 d-flex align-items-center mr-5" data-toggle="tooltip" title="3 Bathrooms">
                              <svg class="icon icon-shower fs-18 text-primary mr-1">
                                 <use xlink:href="#icon-shower"></use>
                              </svg>
                              3 Ba
                           </li>
                           <li class="list-inline-item text-white font-weight-500 fs-13 d-flex align-items-center mr-5" data-toggle="tooltip" title="Size">
                              <svg class="icon icon-square fs-18 text-primary mr-1">
                                 <use xlink:href="#icon-square"></use>
                              </svg>
                              2300 Sq.Ft
                           </li>
                        </ul>
                     </div>
                  </div>
                  <div class="card-body p-0">
                     <h2 class="my-0 mt-1"><a href="single-property-1.html" class="fs-16 text-dark hover-primary lh-2">Garden Gingerbread House</a></h2>
                     <p class="text-gray-light font-weight-500 mb-1">1421 San Pedro St, Los Angeles</p>
                     <p class="fs-17 font-weight-bold text-heading mb-0">$5.700<span class="text-gray-light font-weight-500 fs-14"> / year</span></p>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section> --}}
   <section>
      <div class="bg-patten-01 pt-12 pb-10 bg-secondary">
         <div class="container">
            <h2 class="text-white text-center lh-1625 mxw-589 font-weight-normal">Looking to Buy a new property or Sell
               an existing
               one?
            </h2>
            <span class="heading-divider mx-auto"></span>
            <div class="row info-box-3 mt-7 no-gutters mx-auto">
               <div class="col-md-3 col-sm-6 mb-6 mb-md-0" data-animate="zoomIn">
                  <a href="#" class="card border-0 align-items-center justify-content-center pb-5 pt-7 px-0 shadow-hover-3 bg-transparent bg-hover-white text-decoration-none hover-change-image">
                     <div class="card-img-top d-flex align-items-center justify-content-center border-md-right rounded-0">
                        <div class=" position-relative">
                           <img src="{{asset('web/images/verified.png')}}" class="hover-image position-absolute pos-fixed-top" alt="Apartment">
                           <img src="{{asset('web/images/white-verified.png')}}" class="image" alt="Apartment">
                        </div>
                     </div>
                     <div class="card-body px-0 pt-5 pb-0">
                        <h4 class="card-title fs-16 lh-2 text-white mb-0">Apartment</h4>
                     </div>
                  </a>
               </div>
               <div class="col-md-3 col-sm-6 mb-6 mb-md-0" data-animate="zoomIn">
                  <a href="#" class="card border-0 align-items-center justify-content-center pb-5 pt-7 px-0 shadow-hover-3 bg-transparent bg-hover-white text-decoration-none hover-change-image">
                     <div class="card-img-top d-flex align-items-center justify-content-center border-md-right rounded-0">
                        <div class=" position-relative">
                           <img src="{{asset('web/images/sofa.png')}}" class="hover-image position-absolute pos-fixed-top" alt="House">
                           <img src="{{asset('web/images/white-sofa.png')}}" class="image" alt="House">
                        </div>
                     </div>
                     <div class="card-body px-0 pt-5 pb-0">
                        <h4 class="card-title fs-16 lh-2 text-white mb-0">House</h4>
                     </div>
                  </a>
               </div>
               <div class="col-md-3 col-sm-6 mb-6 mb-md-0" data-animate="zoomIn">
                  <a href="#" class="card border-0 align-items-center justify-content-center pb-5 pt-7 px-0 shadow-hover-3 bg-transparent bg-hover-white text-decoration-none hover-change-image">
                     <div class="card-img-top d-flex align-items-center justify-content-center border-md-right rounded-0">
                        <div class=" position-relative">
                           <img src="{{asset('web/images/architecture-and-city.png')}}" class="hover-image position-absolute pos-fixed-top" alt="Office">
                           <img src="{{asset('web/images/white-architecture-and-city.png')}}" class="image" alt="Office">
                        </div>
                     </div>
                     <div class="card-body px-0 pt-5 pb-0">
                        <h4 class="card-title fs-16 lh-2 text-white mb-0">Office</h4>
                     </div>
                  </a>
               </div>
               <div class="col-md-3 col-sm-6 mb-6 mb-md-0" data-animate="zoomIn">
                  <a href="#" class="card border-0 align-items-center justify-content-center pb-5 pt-7 px-0 shadow-hover-3 bg-transparent bg-hover-white text-decoration-none hover-change-image">
                     <div class="card-img-top d-flex align-items-center justify-content-center  rounded-0">
                        <div class=" position-relative">
                           <img src="{{asset('web/images/eco-house.png')}}" class="hover-image position-absolute pos-fixed-top" alt="Villa">
                           <img src="{{asset('web/images/white-eco-house.png')}}" class="image" alt="Villa">
                        </div>
                     </div>
                     <div class="card-body px-0 pt-5 pb-0">
                        <h4 class="card-title fs-16 lh-2 text-white mb-0">Villa</h4>
                     </div>
                  </a>
               </div>
            </div>
         </div>
      </div>
   </section>
  
   {{-- <section class="bg-gray-02 pt-9 pb-lg-13 pb-11">
      <div class="container container-xxl">
         <h2 class="text-heading">Destinations We Love The Most</h2>
         <span class="heading-divider"></span>
         <div class="slick-slider mx-n2" data-slick-options='{"slidesToShow": 5,"arrows":false, "autoplay":false,"dots":false,"responsive":[{"breakpoint": 1600,"settings": {"slidesToShow":4}},{"breakpoint": 1200,"settings": {"slidesToShow":3}},{"breakpoint": 992,"settings": {"slidesToShow":2}},{"breakpoint": 768,"settings": {"slidesToShow": 2}},{"breakpoint": 576,"settings": {"slidesToShow": 1}}]}'>
            <div class="box px-2" data-animate="zoomIn">
               <div class="card text-white bg-overlay-gradient-5 hover-zoom-in">
                  <img src="{{asset('web/images/properties-city-06.jpg')}}" class="card-img" alt="New York">
                  <div class="card-img-overlay d-flex justify-content-end flex-column p-4">
                     <h2 class="mb-0 fs-20 lh-182"><a href="single-property-1.html" class="text-white">New York</a></h2>
                     <p class="fs-13 font-weight-500 letter-spacing-087 mb-0">FROM<span class="ml-2 fs-15 font-weight-bold">$540.000 - $900.000</span></p>
                  </div>
               </div>
            </div>
            <div class="box px-2" data-animate="zoomIn">
               <div class="card text-white bg-overlay-gradient-5 hover-zoom-in">
                  <img src="{{asset('web/images/properties-city-07.jpg')}}" class="card-img" alt="Los Angeles">
                  <div class="card-img-overlay d-flex justify-content-end flex-column p-4">
                     <h2 class="mb-0 fs-20 lh-182"><a href="single-property-1.html" class="text-white">Los Angeles</a></h2>
                     <p class="fs-13 font-weight-500 letter-spacing-087 mb-0">FROM<span class="ml-2 fs-15 font-weight-bold">$520.000 - $700.000</span></p>
                  </div>
               </div>
            </div>
            <div class="box px-2" data-animate="zoomIn">
               <div class="card text-white bg-overlay-gradient-5 hover-zoom-in">
                  <img src="{{asset('web/images/properties-city-08.jpg')}}" class="card-img" alt="San Jose">
                  <div class="card-img-overlay d-flex justify-content-end flex-column p-4">
                     <h2 class="mb-0 fs-20 lh-182"><a href="single-property-1.html" class="text-white">San Jose</a></h2>
                     <p class="fs-13 font-weight-500 letter-spacing-087 mb-0">FROM<span class="ml-2 fs-15 font-weight-bold">$340.000 - $600.000</span></p>
                  </div>
               </div>
            </div>
            <div class="box px-2" data-animate="zoomIn">
               <div class="card text-white bg-overlay-gradient-5 hover-zoom-in">
                  <img src="{{asset('web/images/properties-city-09.jpg')}}" class="card-img" alt="Fort Worth">
                  <div class="card-img-overlay d-flex justify-content-end flex-column p-4">
                     <h2 class="mb-0 fs-20 lh-182"><a href="single-property-1.html" class="text-white">Fort Worth</a></h2>
                     <p class="fs-13 font-weight-500 letter-spacing-087 mb-0">FROM<span class="ml-2 fs-15 font-weight-bold">$240.000 - $660.000</span></p>
                  </div>
               </div>
            </div>
            <div class="box px-2" data-animate="zoomIn">
               <div class="card text-white bg-overlay-gradient-5 hover-zoom-in">
                  <img src="{{asset('web/images/properties-city-10.jpg')}}" class="card-img" alt="Kansas City">
                  <div class="card-img-overlay d-flex justify-content-end flex-column p-4">
                     <h2 class="mb-0 fs-20 lh-182"><a href="single-property-1.html" class="text-white">Kansas City</a></h2>
                     <p class="fs-13 font-weight-500 letter-spacing-087 mb-0">FROM<span class="ml-2 fs-15 font-weight-bold">$380.000 - $680.000</span></p>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section> --}}
  
</main>
@endsection