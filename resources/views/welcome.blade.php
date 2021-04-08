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
               <form class="d-flex" action="https://virgomansions.com/listing">
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

   <section class="bg-gray-02 pt-2 pb-11 bg-white">
      <div class="container container-xxl">
         <div class="row justify-content-between mt-10">
            <div class="col-lg-6 mb-6 mb-lg-0" data-animate="fadeInUp">
               <div class="card border-0 bg-transparent">
                   <h3>BUYING YOUR NEW HOME</h3>
                  <p style="font-weight:bold">Find Your Perfect Home</p>
                  <p style="text-align:justify">No matter your budget, we have the perfect home for you. One of our professional agents will be with you every step of the way, from helping you narrow your search to guiding you through the negotiation process. Contact us to get started, and get ready to experience what other buyers have been saying is the easiest way to buy a place!</p>
               </div>
            </div>
            <div class="col-lg-6 mb-6 mb-lg-0" data-animate="fadeInUp">
               <div class="card border-0 bg-transparent">
                  <img src="{{ asset('sale-home.png') }}" style="width:450px;">
               </div>
            </div>
         </div>
         <div class="row justify-content-between mt-10">
            <div class="col-lg-6 mb-6 mb-lg-0" data-animate="fadeInUp">
               <div class="card border-0 bg-transparent">
                   <img src="{{ asset('rent-home.png') }}" style="width:350px;">
               </div>
            </div>
            <div class="col-lg-6 mb-6 mb-lg-0" data-animate="fadeInUp">
               <div class="card border-0 bg-transparent">
                  <h3>THE RENTAL PROCESS</h3>
                  <p style="font-weight:bold">Leasing Listings</p>
                  <p style="text-align:justify">It’s not always easy to find a good rental property on your own. That’s why we’re here. Search San Francisco properties by neighborhood, price, amenities and more. Click the link below to contact our office and begin your rental process.</p>
               </div>
            </div>
         </div>
      </div>
   </section>
   <section class="py-lg-12 my-lg-1 py-11">
      <div class="container container-xxl">
         <div class="row">
            <div class="col-md-12">
               <h2 class="text-heading">SELLER’S GUIDE</h2>
               <span class="heading-divider"></span>
               <p style="font-weight:bold">Sell Quick. Sell Smart.</p>
               <p class="mb-7">Ready to sell your property? Whether this is your first time or you’re a seasoned seller, our tools and resources will help you every step of the way. Get the best price in the shortest time. Contact us today to start selling.</p>
            </div>
            
         </div>
     </div>
   </section>
   <section class="pb-lg-13 pb-11">
      <div class="container container-xxl">
         <div class="row">
            <div class="col-md-12">
               <h2 class="text-heading">INVESTMENTS/STOCK TRADES</h2>
               <span class="heading-divider"></span>
               <p style="font-weight:bold">Invest now and increase your chances of buying a house from us ...</p>
               <p class="mb-7">We offer an investment platform to real estate brokers and stock traders,
Collaborate with a dedicated trade manager/advisor who will work with you and for you, providing clear recommendations designed to help you grow and protect your wealth. You will sign up a trade account in the real estate stock brokerage platform using the link provided and you alone will have full access to your trade account so as to initiate withdrawal anytime. You will fund your trade account with your investment capital which will generate a fixed return which depends on the signal strength.</p>
            </div>
            
         </div>
      </div>
   </section>
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