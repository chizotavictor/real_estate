@extends('layouts.dashboard')
@section('contents')
<main id="content" class="bg-gray-01">
    
    <div class="px-3 px-lg-6 px-xxl-13 py-5 py-lg-10 my-profile">
       <div class="mb-6">
          <h2 class="mb-0 text-heading fs-22 lh-15">Add new property</h2>
       </div>
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
       @if($errors->any())
       <div class="alert alert-danger">
        <ol>
        {!! implode('', $errors->all('<li>:message</li>')) !!}
        </ol>
       </div>
    @endif
       <div class="collapse-tabs new-property-step">
          <ul class="nav nav-pills border py-2 px-3 mb-6 d-none d-md-flex mb-6" role="tablist">
             <li class="nav-item col">
                <a class="nav-link active bg-transparent shadow-none py-2 font-weight-500 text-center lh-214 d-block" id="description-tab" data-toggle="pill" data-number="1." href="#description" role="tab" aria-controls="description" aria-selected="true"><span class="number">1.</span> Description</a>
             </li>
             <li class="nav-item col">
                <a class="nav-link bg-transparent shadow-none py-2 font-weight-500 text-center lh-214 d-block" id="media-tab" data-toggle="pill" data-number="2." href="#media" role="tab" aria-controls="media" aria-selected="false"><span class="number">2.</span> Media</a>
             </li>
             <li class="nav-item col">
                <a class="nav-link bg-transparent shadow-none py-2 font-weight-500 text-center lh-214 d-block" id="location-tab" data-toggle="pill" data-number="3." href="#location" role="tab" aria-controls="location" aria-selected="false"><span class="number">3.</span> Location</a>
             </li>
             <li class="nav-item col">
                <a class="nav-link bg-transparent shadow-none py-2 font-weight-500 text-center lh-214 d-block" id="detail-tab" data-toggle="pill" data-number="4." href="#detail" role="tab" aria-controls="detail" aria-selected="false"><span class="number">4.</span> Detail</a>
             </li>
             
          </ul>
          <div class="tab-content shadow-none p-0">
             <form enctype="multipart/form-data" action="{{route('property.add')}}" method="POST">
                 @csrf
                <div id="collapse-tabs-accordion">
                   <div class="tab-pane tab-pane-parent fade show active px-0" id="description" role="tabpanel" aria-labelledby="description-tab">
                      <div class="card bg-transparent border-0">
                         <div class="card-header d-block d-md-none bg-transparent px-0 py-1 border-bottom-0" id="heading-description">
                            <h5 class="mb-0">
                               <button class="btn btn-lg collapse-parent btn-block border shadow-none" data-toggle="collapse" data-number="1." data-target="#description-collapse" aria-expanded="true" aria-controls="description-collapse">
                               <span class="number">1.</span> Description
                               </button>
                            </h5>
                         </div>
                         <div id="description-collapse" class="collapse show collapsible" aria-labelledby="heading-description" data-parent="#collapse-tabs-accordion">
                            <div class="card-body py-4 py-md-0 px-0">
                               <div class="row">
                                  <div class="col-lg-6">
                                     <div class="card mb-6">
                                        <div class="card-body p-6">
                                           <h3 class="card-title mb-0 text-heading fs-22 lh-15">Property
                                              Description
                                           </h3>
                                           
                                           <div class="form-group">
                                              <label for="title" class="text-heading">Title *</label>
                                              <input type="text" class="form-control {{ $errors->has('name') ? ' is-invalid' : '' }} form-control-lg border-0" id="name" name="name" value="{{old('name')}}">
                                                @if ($errors->has('name'))
                                                    <span class="invalid-feedback" style="color:red" role="alert">
                                                        <strong>{{ $errors->first('name') }}</strong>
                                                    </span>
                                                @endif
                                           </div>
                                           <div class="form-group mb-0">
                                              <label for="description-01" class="text-heading">Description *</label>
                                              <textarea class="form-control {{ $errors->has('description') ? ' is-invalid' : '' }} border-0" rows="5" name="description" id="description-01">{{old('description')}}</textarea>
                                              @if ($errors->has('description'))
                                                    <span class="invalid-feedback" style="color:red" role="alert">
                                                        <strong>{{ $errors->first('description') }}</strong>
                                                    </span>
                                                @endif
                                           </div>
                                        </div>
                                     </div>
                                     <div class="card mb-6">
                                        <div class="card-body p-6">
                                           <h3 class="card-title mb-0 text-heading fs-22 lh-15">Select
                                              Feature *
                                           </h3>
    
                                           <div class="form-row mx-n2">
                                              <div class="col-md-6 col-lg-12 col-xxl-6 px-2 mb-4 mb-md-0">
                                                 <div class="form-group mb-0">
                                                    <label for="category" class="text-heading">Feature:</label>
                                                    <select class="form-control border-0 shadow-none form-control-lg selectpicker" title="Select" data-style="btn-lg py-2 h-52" id="purpose" name="purpose">
                                                       <option value="RENT">For Rent</option>
                                                       <option value="SALE">For Sale</option>
                                                    </select>
                                                 </div>
                                              </div>
                                           </div>
                                        </div>
                                     </div>
                                  </div>
                                  <div class="col-lg-6">
                                     <div class="card mb-6">
                                        <div class="card-body p-6">
                                           <h3 class="card-title mb-0 text-heading fs-22 lh-15">Property
                                              Price
                                           </h3>
                                           <div class="form-row mx-n2">
                                              <div class="col-md-6 col-lg-12 col-xxl-6 px-2">
                                                 <div class="form-group">
                                                    <label for="price" class="text-heading">Price in $ <span class="text-muted">(only numbers) *</span></label>
                                                    <input type="text" class="form-control  {{ $errors->has('amount') ? ' is-invalid' : '' }} form-control-lg border-0" placeholder="0.00" value="{{ old('amount')}}" id="price" name="amount">
                                                    @if ($errors->has('amount'))
                                                        <span class="invalid-feedback" style="color:red" role="alert">
                                                            <strong>{{ $errors->first('amount') }}</strong>
                                                        </span>
                                                    @endif
                                                 </div>
                                              </div>
                                              <div class="col-md-6 col-lg-12 col-xxl-6 px-2">
                                                 <div class="form-group">
                                                    <label for="tax" class="text-heading">Yearly Tax Rate %</label>
                                                    <input type="text" name="yearly_tax_rate" class="form-control {{ $errors->has('yearly_tax_rate') ? ' is-invalid' : '' }} form-control-lg border-0" placeholder="0.00" value="{{old('yearly_tax_rate')}}" id="yearly_tax_rate">
                                                    @if ($errors->has('yearly_tax_rate'))
                                                        <span class="invalid-feedback" style="color:red" role="alert">
                                                            <strong>{{ $errors->first('yearly_tax_rate') }}</strong>
                                                        </span>
                                                    @endif
                                                 </div>
                                              </div>
                                           </div>   
                                        </div>
                                     </div>
                                     
                                  </div>
                               </div>
                               <div class="text-right">
                                  <button class="btn btn-lg btn-primary next-button">Next step
                                  <span class="d-inline-block ml-2 fs-16"><i class="fal fa-long-arrow-right"></i></span>
                                  </button>
                               </div>
                            </div>
                         </div>
                      </div>
                   </div>
                   <div class="tab-pane tab-pane-parent fade px-0" id="media" role="tabpanel" aria-labelledby="media-tab">
                      <div class="card bg-transparent border-0">
                         <div class="card-header d-block d-md-none bg-transparent px-0 py-1 border-bottom-0" id="heading-media">
                            <h5 class="mb-0">
                               <button class="btn btn-lg collapse-parent btn-block border shadow-none" data-toggle="collapse" data-number="2." data-target="#media-collapse" aria-expanded="true" aria-controls="media-collapse">
                               <span class="number">2.</span> Images
                               </button>
                            </h5>
                         </div>
                         <div id="media-collapse" class="collapse collapsible" aria-labelledby="heading-media" data-parent="#collapse-tabs-accordion">
                            <div class="card-body py-4 py-md-0 px-0">
                               <div class="row">
                                  <div class="col-lg-12">
                                     <div class="card mb-6">
                                        <div class="card-body p-6">
                                           <h3 class="card-title mb-0 text-heading fs-22 lh-15">Upload photos
                                              of your property
                                           </h3>
                                          
                                            <div class="form-group">
                                                <label for="file" class="text-heading">1st Image</label>
                                                <input type="file" class="form-control form-control-lg border-0"  name="image_1">
                                            </div>

                                            <div class="form-group">
                                                <label for="file" class="text-heading">2nd Image</label>
                                                <input type="file" class="form-control form-control-lg border-0"  name="image_2">
                                            </div>

                                            <div class="form-group">
                                                <label for="file" class="text-heading">3rd Image</label>
                                                <input type="file" class="form-control form-control-lg border-0"  name="image_3">
                                            </div>

                                            <div class="form-group">
                                                <label for="file" class="text-heading">4th Image</label>
                                                <input type="file" class="form-control form-control-lg border-0"  name="image_4">
                                            </div>

                                            <div class="form-group">
                                                <label for="file" class="text-heading">5th Image</label>
                                                <input type="file" class="form-control form-control-lg border-0"  name="image_5">
                                            </div>


                                        </div>
                                     </div>
                                  </div>
                                  
                               </div>
                               <div class="d-flex flex-wrap">
                                  <a href="#" class="btn btn-lg bg-hover-white border rounded-lg mb-3 mr-auto prev-button">
                                  <span class="d-inline-block text-primary mr-2 fs-16"><i class="fal fa-long-arrow-left"></i></span>Prev step
                                  </a>
                                  <button class="btn btn-lg btn-primary next-button mb-3">Next step
                                  <span class="d-inline-block ml-2 fs-16"><i class="fal fa-long-arrow-right"></i></span>
                                  </button>
                               </div>
                            </div>
                         </div>
                      </div>
                   </div>
                   <div class="tab-pane tab-pane-parent fade px-0" id="location" role="tabpanel" aria-labelledby="location-tab">
                      <div class="card bg-transparent border-0">
                         <div class="card-header d-block d-md-none bg-transparent px-0 py-1 border-bottom-0" id="heading-location">
                            <h5 class="mb-0">
                               <button class="btn btn-block collapse-parent collapsed border shadow-none" data-toggle="collapse" data-number="3." data-target="#location-collapse" aria-expanded="true" aria-controls="location-collapse">
                               <span class="number">3.</span> Location
                               </button>
                            </h5>
                         </div>
                         <div id="location-collapse" class="collapse collapsible" aria-labelledby="heading-location" data-parent="#collapse-tabs-accordion">
                            <div class="card-body py-4 py-md-0 px-0">
                               <div class="row">
                                  <div class="col-lg-12">
                                     <div class="card mb-6">
                                        <div class="card-body p-6">
                                           <h3 class="card-title mb-0 text-heading fs-22 lh-15">Listing
                                              Location
                                           </h3>
                                           <div class="form-group">
                                              <label for="address" class="text-heading">Address</label>
                                              <input type="text" class="form-control {{ $errors->has('address') ? ' is-invalid' : '' }} form-control-lg border-0" value="{{ old('address') }}" id="address" name="address">
                                              @if ($errors->has('address'))
                                                    <span class="invalid-feedback" style="color:red" role="alert">
                                                        <strong>{{ $errors->first('address') }}</strong>
                                                    </span>
                                                @endif
                                           </div>
                                           <div class="form-row mx-n2">
                                                <div class="col-md-6 col-lg-12 col-xxl-6 px-2">
                                                    <div class="form-group">
                                                        <label for="city" class="text-heading">City</label>
                                                        <input type="text" class="form-control {{ $errors->has('city') ? ' is-invalid' : '' }} form-control-lg border-0" value="{{ old('city') }}" id="city" name="city">
                                                        @if ($errors->has('city'))
                                                            <span class="invalid-feedback" style="color:red" role="alert">
                                                                <strong>{{ $errors->first('city') }}</strong>
                                                            </span>
                                                        @endif
                                                    </div>
                                                </div>
                                              <div class="col-md-6 col-lg-12 col-xxl-6 px-2">
                                                 <div class="form-group">
                                                    <label for="state" class="text-heading">Country</label>
                                                    <select class="form-control {{ $errors->has('country') ? ' is-invalid' : '' }}  form-control-lg border-0" id="country" name="country">
                                                        <option value="Afganistan">Afghanistan</option>
                                                        <option value="Albania">Albania</option>
                                                        <option value="Algeria">Algeria</option>
                                                        <option value="American Samoa">American Samoa</option>
                                                        <option value="Andorra">Andorra</option>
                                                        <option value="Angola">Angola</option>
                                                        <option value="Anguilla">Anguilla</option>
                                                        <option value="Antigua & Barbuda">Antigua & Barbuda</option>
                                                        <option value="Argentina">Argentina</option>
                                                        <option value="Armenia">Armenia</option>
                                                        <option value="Aruba">Aruba</option>
                                                        <option value="Australia">Australia</option>
                                                        <option value="Austria">Austria</option>
                                                        <option value="Azerbaijan">Azerbaijan</option>
                                                        <option value="Bahamas">Bahamas</option>
                                                        <option value="Bahrain">Bahrain</option>
                                                        <option value="Bangladesh">Bangladesh</option>
                                                        <option value="Barbados">Barbados</option>
                                                        <option value="Belarus">Belarus</option>
                                                        <option value="Belgium">Belgium</option>
                                                        <option value="Belize">Belize</option>
                                                        <option value="Benin">Benin</option>
                                                        <option value="Bermuda">Bermuda</option>
                                                        <option value="Bhutan">Bhutan</option>
                                                        <option value="Bolivia">Bolivia</option>
                                                        <option value="Bonaire">Bonaire</option>
                                                        <option value="Bosnia & Herzegovina">Bosnia & Herzegovina</option>
                                                        <option value="Botswana">Botswana</option>
                                                        <option value="Brazil">Brazil</option>
                                                        <option value="British Indian Ocean Ter">British Indian Ocean Ter</option>
                                                        <option value="Brunei">Brunei</option>
                                                        <option value="Bulgaria">Bulgaria</option>
                                                        <option value="Burkina Faso">Burkina Faso</option>
                                                        <option value="Burundi">Burundi</option>
                                                        <option value="Cambodia">Cambodia</option>
                                                        <option value="Cameroon">Cameroon</option>
                                                        <option value="Canada">Canada</option>
                                                        <option value="Canary Islands">Canary Islands</option>
                                                        <option value="Cape Verde">Cape Verde</option>
                                                        <option value="Cayman Islands">Cayman Islands</option>
                                                        <option value="Central African Republic">Central African Republic</option>
                                                        <option value="Chad">Chad</option>
                                                        <option value="Channel Islands">Channel Islands</option>
                                                        <option value="Chile">Chile</option>
                                                        <option value="China">China</option>
                                                        <option value="Christmas Island">Christmas Island</option>
                                                        <option value="Cocos Island">Cocos Island</option>
                                                        <option value="Colombia">Colombia</option>
                                                        <option value="Comoros">Comoros</option>
                                                        <option value="Congo">Congo</option>
                                                        <option value="Cook Islands">Cook Islands</option>
                                                        <option value="Costa Rica">Costa Rica</option>
                                                        <option value="Cote DIvoire">Cote DIvoire</option>
                                                        <option value="Croatia">Croatia</option>
                                                        <option value="Cuba">Cuba</option>
                                                        <option value="Curaco">Curacao</option>
                                                        <option value="Cyprus">Cyprus</option>
                                                        <option value="Czech Republic">Czech Republic</option>
                                                        <option value="Denmark">Denmark</option>
                                                        <option value="Djibouti">Djibouti</option>
                                                        <option value="Dominica">Dominica</option>
                                                        <option value="Dominican Republic">Dominican Republic</option>
                                                        <option value="East Timor">East Timor</option>
                                                        <option value="Ecuador">Ecuador</option>
                                                        <option value="Egypt">Egypt</option>
                                                        <option value="El Salvador">El Salvador</option>
                                                        <option value="Equatorial Guinea">Equatorial Guinea</option>
                                                        <option value="Eritrea">Eritrea</option>
                                                        <option value="Estonia">Estonia</option>
                                                        <option value="Ethiopia">Ethiopia</option>
                                                        <option value="Falkland Islands">Falkland Islands</option>
                                                        <option value="Faroe Islands">Faroe Islands</option>
                                                        <option value="Fiji">Fiji</option>
                                                        <option value="Finland">Finland</option>
                                                        <option value="France">France</option>
                                                        <option value="French Guiana">French Guiana</option>
                                                        <option value="French Polynesia">French Polynesia</option>
                                                        <option value="French Southern Ter">French Southern Ter</option>
                                                        <option value="Gabon">Gabon</option>
                                                        <option value="Gambia">Gambia</option>
                                                        <option value="Georgia">Georgia</option>
                                                        <option value="Germany">Germany</option>
                                                        <option value="Ghana">Ghana</option>
                                                        <option value="Gibraltar">Gibraltar</option>
                                                        <option value="Great Britain">Great Britain</option>
                                                        <option value="Greece">Greece</option>
                                                        <option value="Greenland">Greenland</option>
                                                        <option value="Grenada">Grenada</option>
                                                        <option value="Guadeloupe">Guadeloupe</option>
                                                        <option value="Guam">Guam</option>
                                                        <option value="Guatemala">Guatemala</option>
                                                        <option value="Guinea">Guinea</option>
                                                        <option value="Guyana">Guyana</option>
                                                        <option value="Haiti">Haiti</option>
                                                        <option value="Hawaii">Hawaii</option>
                                                        <option value="Honduras">Honduras</option>
                                                        <option value="Hong Kong">Hong Kong</option>
                                                        <option value="Hungary">Hungary</option>
                                                        <option value="Iceland">Iceland</option>
                                                        <option value="Indonesia">Indonesia</option>
                                                        <option value="India">India</option>
                                                        <option value="Iran">Iran</option>
                                                        <option value="Iraq">Iraq</option>
                                                        <option value="Ireland">Ireland</option>
                                                        <option value="Isle of Man">Isle of Man</option>
                                                        <option value="Israel">Israel</option>
                                                        <option value="Italy">Italy</option>
                                                        <option value="Jamaica">Jamaica</option>
                                                        <option value="Japan">Japan</option>
                                                        <option value="Jordan">Jordan</option>
                                                        <option value="Kazakhstan">Kazakhstan</option>
                                                        <option value="Kenya">Kenya</option>
                                                        <option value="Kiribati">Kiribati</option>
                                                        <option value="Korea North">Korea North</option>
                                                        <option value="Korea Sout">Korea South</option>
                                                        <option value="Kuwait">Kuwait</option>
                                                        <option value="Kyrgyzstan">Kyrgyzstan</option>
                                                        <option value="Laos">Laos</option>
                                                        <option value="Latvia">Latvia</option>
                                                        <option value="Lebanon">Lebanon</option>
                                                        <option value="Lesotho">Lesotho</option>
                                                        <option value="Liberia">Liberia</option>
                                                        <option value="Libya">Libya</option>
                                                        <option value="Liechtenstein">Liechtenstein</option>
                                                        <option value="Lithuania">Lithuania</option>
                                                        <option value="Luxembourg">Luxembourg</option>
                                                        <option value="Macau">Macau</option>
                                                        <option value="Macedonia">Macedonia</option>
                                                        <option value="Madagascar">Madagascar</option>
                                                        <option value="Malaysia">Malaysia</option>
                                                        <option value="Malawi">Malawi</option>
                                                        <option value="Maldives">Maldives</option>
                                                        <option value="Mali">Mali</option>
                                                        <option value="Malta">Malta</option>
                                                        <option value="Marshall Islands">Marshall Islands</option>
                                                        <option value="Martinique">Martinique</option>
                                                        <option value="Mauritania">Mauritania</option>
                                                        <option value="Mauritius">Mauritius</option>
                                                        <option value="Mayotte">Mayotte</option>
                                                        <option value="Mexico">Mexico</option>
                                                        <option value="Midway Islands">Midway Islands</option>
                                                        <option value="Moldova">Moldova</option>
                                                        <option value="Monaco">Monaco</option>
                                                        <option value="Mongolia">Mongolia</option>
                                                        <option value="Montserrat">Montserrat</option>
                                                        <option value="Morocco">Morocco</option>
                                                        <option value="Mozambique">Mozambique</option>
                                                        <option value="Myanmar">Myanmar</option>
                                                        <option value="Nambia">Nambia</option>
                                                        <option value="Nauru">Nauru</option>
                                                        <option value="Nepal">Nepal</option>
                                                        <option value="Netherland Antilles">Netherland Antilles</option>
                                                        <option value="Netherlands">Netherlands (Holland, Europe)</option>
                                                        <option value="Nevis">Nevis</option>
                                                        <option value="New Caledonia">New Caledonia</option>
                                                        <option value="New Zealand">New Zealand</option>
                                                        <option value="Nicaragua">Nicaragua</option>
                                                        <option value="Niger">Niger</option>
                                                        <option value="Nigeria">Nigeria</option>
                                                        <option value="Niue">Niue</option>
                                                        <option value="Norfolk Island">Norfolk Island</option>
                                                        <option value="Norway">Norway</option>
                                                        <option value="Oman">Oman</option>
                                                        <option value="Pakistan">Pakistan</option>
                                                        <option value="Palau Island">Palau Island</option>
                                                        <option value="Palestine">Palestine</option>
                                                        <option value="Panama">Panama</option>
                                                        <option value="Papua New Guinea">Papua New Guinea</option>
                                                        <option value="Paraguay">Paraguay</option>
                                                        <option value="Peru">Peru</option>
                                                        <option value="Phillipines">Philippines</option>
                                                        <option value="Pitcairn Island">Pitcairn Island</option>
                                                        <option value="Poland">Poland</option>
                                                        <option value="Portugal">Portugal</option>
                                                        <option value="Puerto Rico">Puerto Rico</option>
                                                        <option value="Qatar">Qatar</option>
                                                        <option value="Republic of Montenegro">Republic of Montenegro</option>
                                                        <option value="Republic of Serbia">Republic of Serbia</option>
                                                        <option value="Reunion">Reunion</option>
                                                        <option value="Romania">Romania</option>
                                                        <option value="Russia">Russia</option>
                                                        <option value="Rwanda">Rwanda</option>
                                                        <option value="St Barthelemy">St Barthelemy</option>
                                                        <option value="St Eustatius">St Eustatius</option>
                                                        <option value="St Helena">St Helena</option>
                                                        <option value="St Kitts-Nevis">St Kitts-Nevis</option>
                                                        <option value="St Lucia">St Lucia</option>
                                                        <option value="St Maarten">St Maarten</option>
                                                        <option value="St Pierre & Miquelon">St Pierre & Miquelon</option>
                                                        <option value="St Vincent & Grenadines">St Vincent & Grenadines</option>
                                                        <option value="Saipan">Saipan</option>
                                                        <option value="Samoa">Samoa</option>
                                                        <option value="Samoa American">Samoa American</option>
                                                        <option value="San Marino">San Marino</option>
                                                        <option value="Sao Tome & Principe">Sao Tome & Principe</option>
                                                        <option value="Saudi Arabia">Saudi Arabia</option>
                                                        <option value="Senegal">Senegal</option>
                                                        <option value="Seychelles">Seychelles</option>
                                                        <option value="Sierra Leone">Sierra Leone</option>
                                                        <option value="Singapore">Singapore</option>
                                                        <option value="Slovakia">Slovakia</option>
                                                        <option value="Slovenia">Slovenia</option>
                                                        <option value="Solomon Islands">Solomon Islands</option>
                                                        <option value="Somalia">Somalia</option>
                                                        <option value="South Africa">South Africa</option>
                                                        <option value="Spain">Spain</option>
                                                        <option value="Sri Lanka">Sri Lanka</option>
                                                        <option value="Sudan">Sudan</option>
                                                        <option value="Suriname">Suriname</option>
                                                        <option value="Swaziland">Swaziland</option>
                                                        <option value="Sweden">Sweden</option>
                                                        <option value="Switzerland">Switzerland</option>
                                                        <option value="Syria">Syria</option>
                                                        <option value="Tahiti">Tahiti</option>
                                                        <option value="Taiwan">Taiwan</option>
                                                        <option value="Tajikistan">Tajikistan</option>
                                                        <option value="Tanzania">Tanzania</option>
                                                        <option value="Thailand">Thailand</option>
                                                        <option value="Togo">Togo</option>
                                                        <option value="Tokelau">Tokelau</option>
                                                        <option value="Tonga">Tonga</option>
                                                        <option value="Trinidad & Tobago">Trinidad & Tobago</option>
                                                        <option value="Tunisia">Tunisia</option>
                                                        <option value="Turkey">Turkey</option>
                                                        <option value="Turkmenistan">Turkmenistan</option>
                                                        <option value="Turks & Caicos Is">Turks & Caicos Is</option>
                                                        <option value="Tuvalu">Tuvalu</option>
                                                        <option value="Uganda">Uganda</option>
                                                        <option value="United Kingdom">United Kingdom</option>
                                                        <option value="Ukraine">Ukraine</option>
                                                        <option value="United Arab Erimates">United Arab Emirates</option>
                                                        <option value="United States of America">United States of America</option>
                                                        <option value="Uraguay">Uruguay</option>
                                                        <option value="Uzbekistan">Uzbekistan</option>
                                                        <option value="Vanuatu">Vanuatu</option>
                                                        <option value="Vatican City State">Vatican City State</option>
                                                        <option value="Venezuela">Venezuela</option>
                                                        <option value="Vietnam">Vietnam</option>
                                                        <option value="Virgin Islands (Brit)">Virgin Islands (Brit)</option>
                                                        <option value="Virgin Islands (USA)">Virgin Islands (USA)</option>
                                                        <option value="Wake Island">Wake Island</option>
                                                        <option value="Wallis & Futana Is">Wallis & Futana Is</option>
                                                        <option value="Yemen">Yemen</option>
                                                        <option value="Zaire">Zaire</option>
                                                        <option value="Zambia">Zambia</option>
                                                        <option value="Zimbabwe">Zimbabwe</option>
                                                    </select>
                                                    @if ($errors->has('country'))
                                                        <span class="invalid-feedback" style="color:red" role="alert">
                                                            <strong>{{ $errors->first('country') }}</strong>
                                                        </span>
                                                    @endif
                                                 </div>
                                              </div>
                                              
                                           </div>
                                           
                                        </div>
                                     </div>
                                  </div>
                                  
                               </div>
                               <div class="d-flex flex-wrap">
                                  <a href="#" class="btn btn-lg bg-hover-white border rounded-lg mb-3 mr-auto prev-button">
                                  <span class="d-inline-block text-primary mr-2 fs-16"><i class="fal fa-long-arrow-left"></i></span>Prev step
                                  </a>
                                  <button class="btn btn-lg btn-primary next-button mb-3">Next step
                                  <span class="d-inline-block ml-2 fs-16"><i class="fal fa-long-arrow-right"></i></span>
                                  </button>
                               </div>
                            </div>
                         </div>
                      </div>
                   </div>
                   <div class="tab-pane tab-pane-parent fade px-0" id="detail" role="tabpanel" aria-labelledby="detail-tab">
                      <div class="card bg-transparent border-0">
                         <div class="card-header d-block d-md-none bg-transparent px-0 py-1 border-bottom-0" id="heading-detail">
                            <h5 class="mb-0">
                               <button class="btn btn-block collapse-parent collapsed border shadow-none" data-toggle="collapse" data-number="4." data-target="#detail-collapse" aria-expanded="true" aria-controls="detail-collapse">
                               <span class="number">4.</span> Detail
                               </button>
                            </h5>
                         </div>
                         <div id="detail-collapse" class="collapse collapsible" aria-labelledby="heading-detail" data-parent="#collapse-tabs-accordion">
                            <div class="card-body py-4 py-md-0 px-0">
                               <div class="card mb-6">
                                  <div class="card-body p-6">
                                     <h3 class="card-title mb-0 text-heading fs-22 lh-15">Listing Detail</h3>
                                     
                                     <div class="row">
                                        <div class="col-lg-4">
                                           <div class="form-group">
                                              <label for="room" class="text-heading">Rooms</label>
                                              <input type="text" class="form-control {{ $errors->has('rooms') ? ' is-invalid' : '' }}  form-control-lg border-0" value="{{old('rooms')}}" id="room" name="rooms">
                                              @if ($errors->has('rooms'))
                                                <span class="invalid-feedback" style="color:red" role="alert">
                                                    <strong>{{ $errors->first('rooms') }}</strong>
                                                </span>
                                            @endif
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="form-group">
                                               <label for="bedrooms" class="text-heading">Bedrooms</label>
                                               <input type="text" class="form-control {{ $errors->has('bedrooms') ? ' is-invalid' : '' }}  form-control-lg border-0" value="{{ old('bedrooms') }}" id="bedrooms" name="bedrooms">
                                               @if ($errors->has('bedrooms'))
                                                <span class="invalid-feedback" style="color:red" role="alert">
                                                    <strong>{{ $errors->first('rooms') }}</strong>
                                                </span>
                                            @endif
                                            </div>
                                         </div>
                                         <div class="col-lg-4">
                                            <div class="form-group">
                                               <label for="bathrooms" class="text-heading">Bathrooms</label>
                                               <input type="text" class="form-control {{ $errors->has('bathrooms') ? ' is-invalid' : '' }}  form-control-lg border-0" value="{{ old('bathrooms') }}" id="bathrooms" name="bathrooms">
                                               @if ($errors->has('bathrooms'))
                                                <span class="invalid-feedback" style="color:red" role="alert">
                                                    <strong>{{ $errors->first('bathrooms') }}</strong>
                                                </span>
                                            @endif
                                            </div>
                                         </div>
                                     </div>
                                    
                                     <div class="row">
                                        <div class="col-lg-4">
                                            <div class="form-group">
                                               <label for="available-from" class="text-heading">Available from
                                               <span class="text-muted">(date)</span></label>
                                               <input type="date" class="form-control {{ $errors->has('available_from') ? ' is-invalid' : '' }}  form-control-lg border-0" value="{{old('available_from')}}" id="available_from" name="available_from">
                                               @if ($errors->has('available_from'))
                                                    <span class="invalid-feedback" style="color:red" role="alert">
                                                        <strong>{{ $errors->first('available_from') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                         </div>

                                         <div class="col-lg-4">
                                            <div class="form-group">
                                               <label for="available-from" class="text-heading">Floors
                                               <span class="text-muted"></span></label>
                                               <input type="number" class="form-control {{ $errors->has('floors') ? ' is-invalid' : '' }}  form-control-lg border-0" value="{{old('floors')}}" id="floors" name="floors">
                                               @if ($errors->has('floors'))
                                                    <span class="invalid-feedback" style="color:red" role="alert">
                                                        <strong>{{ $errors->first('floors') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                         </div>

                                        <div class="col-lg-4">
                                           <div class="form-group">
                                              <label for="year-built" class="text-heading">Year built <span class="text-muted">(numeric)</span></label>
                                              <input type="text" class="form-control {{ $errors->has('floors') ? ' is-invalid' : '' }} form-control-lg border-0" id="year-built" value="{{old('year_built')}}" name="year_built">
                                              @if ($errors->has('year_built'))
                                                    <span class="invalid-feedback" style="color:red" role="alert">
                                                        <strong>{{ $errors->first('year_built') }}</strong>
                                                    </span>
                                                @endif
                                           </div>
                                        </div>
                                     </div>
                                      
                                  </div>
                               </div>
                               
                               <div class="d-flex flex-wrap">
                                  <a href="#" class="btn btn-lg bg-hover-white border rounded-lg mb-3 mr-auto prev-button">
                                  <span class="d-inline-block text-primary mr-2 fs-16"><i class="fal fa-long-arrow-left"></i></span>Prev step
                                  </a>
                                  <button class="btn btn-lg btn-primary mb-3" type="submit">Add Property
                                  <span class="d-inline-block ml-2 fs-16"><i class="fal fa-long-arrow-right"></i></span>
                                  </button>
                               </div>
                            </div>
                         </div>
                      </div>
                   </div>
            
                </div>
             </form>
          </div>
       </div>
    </div>
 </main>
@endsection