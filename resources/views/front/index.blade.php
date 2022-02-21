@extends('front.layout')

@section('content')

      <!-- Slider Area Start -->
      <section class="gauto-slider-area fix">
         <div class="gauto-slide owl-carousel">
            <div class="gauto-main-slide slide-item-1">
               <div class="gauto-main-caption">
                  <div class="gauto-caption-cell">
                     <div class="container">
                        <div class="row">
                           <div class="col-md-12">
                              <div class="slider-text">
                                 <p>for rent $65 per day</p>
                                 <h2>Reserved Now & Get <span>50% Off</span></h2>
                                 <a href="#" class="gauto-btn">Reserve Now!</a>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="gauto-main-slide slide-item-2">
               <div class="gauto-main-caption">
                  <div class="gauto-caption-cell">
                     <div class="container">
                        <div class="row">
                           <div class="col-md-12">
                              <div class="slider-text">
                                 <p>for rent $70 per day</p>
                                 <h2>Reserved Now & Get <span>50% Off</span></h2>
                                 <a href="#" class="gauto-btn">Reserve Now!</a>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- Slider Area End -->


      <!-- Find Area Start -->
      <section class="gauto-find-area">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="find-box">
                     <div class="row">
                        <div class="col-md-4">
                           <div class="find-text">
                              <h3>Search Your Best Cars here.</h3>
                           </div>
                        </div>
                        <div class="col-md-8">
                           <div class="find-form">
                              <form>
                                 <div class="row">
                                    <div class="col-md-4">
                                       <p>
                                          <input type="text" placeholder="From Address" />
                                       </p>
                                    </div>
                                    <div class="col-md-4">
                                       <p>
                                          <input type="text" placeholder="To Address" />
                                       </p>
                                    </div>
                                    <div class="col-md-4">
                                       <p>
                                          <select>
                                             <option data-display="Select">AC Car</option>
                                             <option>Non-AC Car</option>
                                          </select>
                                       </p>
                                    </div>
                                 </div>
                                 <div class="row">
                                    <div class="col-md-4">
                                       <p>
                                          <input id="reservation_date" name="reservation_date" placeholder="Journey Date" data-select="datepicker" type="text">
                                       </p>
                                    </div>
                                    <div class="col-md-4">
                                       <p class="input-group clockpicker" data-placement="bottom" data-align="top" data-autoclose="true">
                                          <input type="text" class="form-control" placeholder="Journey Time" />
                                       </p>
                                    </div>
                                    <div class="col-md-4">
                                       <p>
                                          <button type="submit" class="gauto-theme-btn">Find Car</button>
                                       </p>
                                    </div>
                                 </div>
                              </form>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- Find Area End -->

      <!-- Offers Area Start -->
      <section class="gauto-offers-area section_70">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="site-heading">
                     <h4>Come with</h4>
                     <h2>Hot offers</h2>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-12">
                  <div class="offer-tabs">
                     <ul class="nav nav-tabs" id="offerTab" role="tablist">
                        <li class="nav-item">
                           <a class="nav-link active" id="all-tab" data-toggle="tab" href="#all" role="tab" aria-controls="all" aria-selected="true">All Brands</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" id="nissan-tab" data-toggle="tab" href="#nissan" role="tab" aria-controls="nissan" aria-selected="false">nissan</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" id="Toyota-tab" data-toggle="tab" href="#Toyota" role="tab" aria-controls="Toyota" aria-selected="false">Toyota</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" id="Audi-tab" data-toggle="tab" href="#Audi" role="tab" aria-controls="Audi" aria-selected="false">Audi</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" id="mercedes-tab" data-toggle="tab" href="#mercedes" role="tab" aria-controls="mercedes" aria-selected="false">mercedes</a>
                        </li>
                     </ul>
                     <div class="tab-content" id="offerTabContent">
                        <!-- All Tab Start -->
                        <div class="tab-pane fade show active" id="all" role="tabpanel" aria-labelledby="all-tab">
                           <div class="row">
                              <div class="col-lg-4">
                                 <div class="single-offers">
                                    <div class="offer-image">
                                       <a href="#">
                                       <img src="{{ asset('front/img/offer-toyota.png') }}" alt="offer 1" />
                                       </a>
                                    </div>
                                    <div class="offer-text">
                                       <a href="#">
                                          <h3>Toyota Alphard</h3>
                                       </a>
                                       <h4>$50.00<span>/ Day</span></h4>
                                       <ul>
                                          <li><i class="fa fa-car"></i>Model:2017</li>
                                          <li><i class="fa fa-cogs"></i>Automatic</li>
                                          <li><i class="fa fa-dashboard"></i>20kmpl</li>
                                       </ul>
                                       <div class="offer-action">
                                          <a href="#" class="offer-btn-1">Rent Car</a>
                                          <a href="#" class="offer-btn-2">Details</a>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-lg-4">
                                 <div class="single-offers">
                                    <div class="offer-image">
                                       <a href="#">
                                       <img src="{{ asset('front/img/nissan-offer.png') }}" alt="offer 1" />
                                       </a>
                                    </div>
                                    <div class="offer-text">
                                       <a href="#">
                                          <h3>Nissan 370Z</h3>
                                       </a>
                                       <h4>$75.00<span>/ Day</span></h4>
                                       <ul>
                                          <li><i class="fa fa-car"></i>Model:2017</li>
                                          <li><i class="fa fa-cogs"></i>Automatic</li>
                                          <li><i class="fa fa-dashboard"></i>20kmpl</li>
                                       </ul>
                                       <div class="offer-action">
                                          <a href="#" class="offer-btn-1">Rent Car</a>
                                          <a href="#" class="offer-btn-2">Details</a>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-lg-4">
                                 <div class="single-offers">
                                    <div class="offer-image">
                                       <a href="#">
                                       <img src="{{ asset('front/img/audi-offer.png') }}" alt="offer 1" />
                                       </a>
                                    </div>
                                    <div class="offer-text">
                                       <a href="#">
                                          <h3>Audi Q3</h3>
                                       </a>
                                       <h4>$45.00<span>/ Day</span></h4>
                                       <ul>
                                          <li><i class="fa fa-car"></i>Model:2017</li>
                                          <li><i class="fa fa-cogs"></i>Automatic</li>
                                          <li><i class="fa fa-dashboard"></i>20kmpl</li>
                                       </ul>
                                       <div class="offer-action">
                                          <a href="#" class="offer-btn-1">Rent Car</a>
                                          <a href="#" class="offer-btn-2">Details</a>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="row">
                              <div class="col-lg-4">
                                 <div class="single-offers">
                                    <div class="offer-image">
                                       <a href="#">
                                       <img src="{{ asset('front/img/bmw-offer.png') }}" alt="offer 1" />
                                       </a>
                                    </div>
                                    <div class="offer-text">
                                       <a href="#">
                                          <h3>BMW X3</h3>
                                       </a>
                                       <h4>$50.00<span>/ Day</span></h4>
                                       <ul>
                                          <li><i class="fa fa-car"></i>Model:2017</li>
                                          <li><i class="fa fa-cogs"></i>Automatic</li>
                                          <li><i class="fa fa-dashboard"></i>20kmpl</li>
                                       </ul>
                                       <div class="offer-action">
                                          <a href="#" class="offer-btn-1">Rent Car</a>
                                          <a href="#" class="offer-btn-2">Details</a>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-lg-4">
                                 <div class="single-offers">
                                    <div class="offer-image">
                                       <a href="#">
                                       <img src="{{ asset('front/img/audi-offer.png') }}" alt="offer 1" />
                                       </a>
                                    </div>
                                    <div class="offer-text">
                                       <a href="#">
                                          <h3>Audi Q3</h3>
                                       </a>
                                       <h4>$75.00<span>/ Day</span></h4>
                                       <ul>
                                          <li><i class="fa fa-car"></i>Model:2017</li>
                                          <li><i class="fa fa-cogs"></i>Automatic</li>
                                          <li><i class="fa fa-dashboard"></i>20kmpl</li>
                                       </ul>
                                       <div class="offer-action">
                                          <a href="#" class="offer-btn-1">Rent Car</a>
                                          <a href="#" class="offer-btn-2">Details</a>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-lg-4">
                                 <div class="single-offers">
                                    <div class="offer-image">
                                       <a href="#">
                                       <img src="{{ asset('front/img/toyota-offer-2.png') }}" alt="offer 1" />
                                       </a>
                                    </div>
                                    <div class="offer-text">
                                       <a href="#">
                                          <h3>Toyota Camry</h3>
                                       </a>
                                       <h4>$55.00<span>/ Day</span></h4>
                                       <ul>
                                          <li><i class="fa fa-car"></i>Model:2017</li>
                                          <li><i class="fa fa-cogs"></i>Automatic</li>
                                          <li><i class="fa fa-dashboard"></i>20kmpl</li>
                                       </ul>
                                       <div class="offer-action">
                                          <a href="#" class="offer-btn-1">Rent Car</a>
                                          <a href="#" class="offer-btn-2">Details</a>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <!-- All Tab End -->

                        <!-- Nissan Tab Start -->
                        <div class="tab-pane fade" id="nissan" role="tabpanel" aria-labelledby="nissan-tab">
                           <div class="row">
                              <div class="col-lg-4">
                                 <div class="single-offers">
                                    <div class="offer-image">
                                       <a href="#">
                                       <img src="{{ asset('front/img/bmw-offer.png') }}" alt="offer 1" />
                                       </a>
                                    </div>
                                    <div class="offer-text">
                                       <a href="#">
                                          <h3>BMW X3</h3>
                                       </a>
                                       <h4>$50.00<span>/ Day</span></h4>
                                       <ul>
                                          <li><i class="fa fa-car"></i>Model:2017</li>
                                          <li><i class="fa fa-cogs"></i>Automatic</li>
                                          <li><i class="fa fa-dashboard"></i>20kmpl</li>
                                       </ul>
                                       <div class="offer-action">
                                          <a href="#" class="offer-btn-1">Rent Car</a>
                                          <a href="#" class="offer-btn-2">Details</a>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-lg-4">
                                 <div class="single-offers">
                                    <div class="offer-image">
                                       <a href="#">
                                       <img src="{{ asset('front/img/audi-offer.png') }}" alt="offer 1" />
                                       </a>
                                    </div>
                                    <div class="offer-text">
                                       <a href="#">
                                          <h3>Audi Q3</h3>
                                       </a>
                                       <h4>$75.00<span>/ Day</span></h4>
                                       <ul>
                                          <li><i class="fa fa-car"></i>Model:2017</li>
                                          <li><i class="fa fa-cogs"></i>Automatic</li>
                                          <li><i class="fa fa-dashboard"></i>20kmpl</li>
                                       </ul>
                                       <div class="offer-action">
                                          <a href="#" class="offer-btn-1">Rent Car</a>
                                          <a href="#" class="offer-btn-2">Details</a>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-lg-4">
                                 <div class="single-offers">
                                    <div class="offer-image">
                                       <a href="#">
                                       <img src="{{ asset('front/img/toyota-offer-2.png') }}" alt="offer 1" />
                                       </a>
                                    </div>
                                    <div class="offer-text">
                                       <a href="#">
                                          <h3>Toyota Camry</h3>
                                       </a>
                                       <h4>$55.00<span>/ Day</span></h4>
                                       <ul>
                                          <li><i class="fa fa-car"></i>Model:2017</li>
                                          <li><i class="fa fa-cogs"></i>Automatic</li>
                                          <li><i class="fa fa-dashboard"></i>20kmpl</li>
                                       </ul>
                                       <div class="offer-action">
                                          <a href="#" class="offer-btn-1">Rent Car</a>
                                          <a href="#" class="offer-btn-2">Details</a>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <!-- Nissan Tab End -->

                        <!-- Toyota Tab Start -->
                        <div class="tab-pane fade" id="Toyota" role="tabpanel" aria-labelledby="Toyota-tab">
                           <div class="row">
                              <div class="col-lg-4">
                                 <div class="single-offers">
                                    <div class="offer-image">
                                       <a href="#">
                                       <img src="{{ asset('front/img/nissan-offer.png') }}" alt="offer 1" />
                                       </a>
                                    </div>
                                    <div class="offer-text">
                                       <a href="#">
                                          <h3>Nissan 370Z</h3>
                                       </a>
                                       <h4>$75.00<span>/ Day</span></h4>
                                       <ul>
                                          <li><i class="fa fa-car"></i>Model:2017</li>
                                          <li><i class="fa fa-cogs"></i>Automatic</li>
                                          <li><i class="fa fa-dashboard"></i>20kmpl</li>
                                       </ul>
                                       <div class="offer-action">
                                          <a href="#" class="offer-btn-1">Rent Car</a>
                                          <a href="#" class="offer-btn-2">Details</a>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-lg-4">
                                 <div class="single-offers">
                                    <div class="offer-image">
                                       <a href="#">
                                       <img src="{{ asset('front/img/offer-toyota.png') }}" alt="offer 1" />
                                       </a>
                                    </div>
                                    <div class="offer-text">
                                       <a href="#">
                                          <h3>Toyota Alphard</h3>
                                       </a>
                                       <h4>$50.00<span>/ Day</span></h4>
                                       <ul>
                                          <li><i class="fa fa-car"></i>Model:2017</li>
                                          <li><i class="fa fa-cogs"></i>Automatic</li>
                                          <li><i class="fa fa-dashboard"></i>20kmpl</li>
                                       </ul>
                                       <div class="offer-action">
                                          <a href="#" class="offer-btn-1">Rent Car</a>
                                          <a href="#" class="offer-btn-2">Details</a>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-lg-4">
                                 <div class="single-offers">
                                    <div class="offer-image">
                                       <a href="#">
                                       <img src="{{ asset('front/img/audi-offer.png') }}" alt="offer 1" />
                                       </a>
                                    </div>
                                    <div class="offer-text">
                                       <a href="#">
                                          <h3>Audi Q3</h3>
                                       </a>
                                       <h4>$45.00<span>/ Day</span></h4>
                                       <ul>
                                          <li><i class="fa fa-car"></i>Model:2017</li>
                                          <li><i class="fa fa-cogs"></i>Automatic</li>
                                          <li><i class="fa fa-dashboard"></i>20kmpl</li>
                                       </ul>
                                       <div class="offer-action">
                                          <a href="#" class="offer-btn-1">Rent Car</a>
                                          <a href="#" class="offer-btn-2">Details</a>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <!-- Toyota Tab Start -->

                        <!-- Audi Tab Start -->
                        <div class="tab-pane fade" id="Audi" role="tabpanel" aria-labelledby="Audi-tab">
                           <div class="row">
                              <div class="col-lg-4">
                                 <div class="single-offers">
                                    <div class="offer-image">
                                       <a href="#">
                                       <img src="{{ asset('front/img/audi-offer.png') }}" alt="offer 1" />
                                       </a>
                                    </div>
                                    <div class="offer-text">
                                       <a href="#">
                                          <h3>Audi Q3</h3>
                                       </a>
                                       <h4>$45.00<span>/ Day</span></h4>
                                       <ul>
                                          <li><i class="fa fa-car"></i>Model:2017</li>
                                          <li><i class="fa fa-cogs"></i>Automatic</li>
                                          <li><i class="fa fa-dashboard"></i>20kmpl</li>
                                       </ul>
                                       <div class="offer-action">
                                          <a href="#" class="offer-btn-1">Rent Car</a>
                                          <a href="#" class="offer-btn-2">Details</a>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-lg-4">
                                 <div class="single-offers">
                                    <div class="offer-image">
                                       <a href="#">
                                       <img src="{{ asset('front/img/nissan-offer.png') }}" alt="offer 1" />
                                       </a>
                                    </div>
                                    <div class="offer-text">
                                       <a href="#">
                                          <h3>Nissan 370Z</h3>
                                       </a>
                                       <h4>$75.00<span>/ Day</span></h4>
                                       <ul>
                                          <li><i class="fa fa-car"></i>Model:2017</li>
                                          <li><i class="fa fa-cogs"></i>Automatic</li>
                                          <li><i class="fa fa-dashboard"></i>20kmpl</li>
                                       </ul>
                                       <div class="offer-action">
                                          <a href="#" class="offer-btn-1">Rent Car</a>
                                          <a href="#" class="offer-btn-2">Details</a>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-lg-4">
                                 <div class="single-offers">
                                    <div class="offer-image">
                                       <a href="#">
                                       <img src="{{ asset('front/img/toyota-offer-2.png') }}" alt="offer 1" />
                                       </a>
                                    </div>
                                    <div class="offer-text">
                                       <a href="#">
                                          <h3>Toyota Alphard</h3>
                                       </a>
                                       <h4>$50.00<span>/ Day</span></h4>
                                       <ul>
                                          <li><i class="fa fa-car"></i>Model:2017</li>
                                          <li><i class="fa fa-cogs"></i>Automatic</li>
                                          <li><i class="fa fa-dashboard"></i>20kmpl</li>
                                       </ul>
                                       <div class="offer-action">
                                          <a href="#" class="offer-btn-1">Rent Car</a>
                                          <a href="#" class="offer-btn-2">Details</a>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <!-- Audi Tab End -->

                        <!-- Marcedes Tab Start -->
                        <div class="tab-pane fade" id="mercedes" role="tabpanel" aria-labelledby="mercedes-tab">
                           <div class="row">
                              <div class="col-lg-4">
                                 <div class="single-offers">
                                    <div class="offer-image">
                                       <a href="#">
                                       <img src="{{ asset('front/img/marcedes-offer.png') }}" alt="offer 1" />
                                       </a>
                                    </div>
                                    <div class="offer-text">
                                       <a href="#">
                                          <h3>marcedes S-class</h3>
                                       </a>
                                       <h4>$50.00<span>/ Day</span></h4>
                                       <ul>
                                          <li><i class="fa fa-car"></i>Model:2017</li>
                                          <li><i class="fa fa-cogs"></i>Automatic</li>
                                          <li><i class="fa fa-dashboard"></i>20kmpl</li>
                                       </ul>
                                       <div class="offer-action">
                                          <a href="#" class="offer-btn-1">Rent Car</a>
                                          <a href="#" class="offer-btn-2">Details</a>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-lg-4">
                                 <div class="single-offers">
                                    <div class="offer-image">
                                       <a href="#">
                                       <img src="{{ asset('front/img/audi-offer.png') }}" alt="offer 1" />
                                       </a>
                                    </div>
                                    <div class="offer-text">
                                       <a href="#">
                                          <h3>Audi Q3</h3>
                                       </a>
                                       <h4>$45.00<span>/ Day</span></h4>
                                       <ul>
                                          <li><i class="fa fa-car"></i>Model:2017</li>
                                          <li><i class="fa fa-cogs"></i>Automatic</li>
                                          <li><i class="fa fa-dashboard"></i>20kmpl</li>
                                       </ul>
                                       <div class="offer-action">
                                          <a href="#" class="offer-btn-1">Rent Car</a>
                                          <a href="#" class="offer-btn-2">Details</a>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-lg-4">
                                 <div class="single-offers">
                                    <div class="offer-image">
                                       <a href="#">
                                       <img src="{{ asset('front/img/nissan-offer.png') }}" alt="offer 1" />
                                       </a>
                                    </div>
                                    <div class="offer-text">
                                       <a href="#">
                                          <h3>Nissan 370Z</h3>
                                       </a>
                                       <h4>$75.00<span>/ Day</span></h4>
                                       <ul>
                                          <li><i class="fa fa-car"></i>Model:2017</li>
                                          <li><i class="fa fa-cogs"></i>Automatic</li>
                                          <li><i class="fa fa-dashboard"></i>20kmpl</li>
                                       </ul>
                                       <div class="offer-action">
                                          <a href="#" class="offer-btn-1">Rent Car</a>
                                          <a href="#" class="offer-btn-2">Details</a>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <!-- Marcedes Tab End -->
                        <div class="row">
                           <div class="col-md-12">
                              <div class="load-more">
                                 <a href="#" class="gauto-btn">More Members</a>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- Offers Area End -->



<!-- Promo Area Start -->
<section class="gauto-promo-area">
   <div class="container">
      <div class="row">
         <div class="col-md-6">
            <div class="promo-box-left">
               <img src="{{ asset('front/img/toyota-offer-2.png') }}" alt="promo car" />
            </div>
         </div>
         <div class="col-md-6">
            <div class="promo-box-right">
               <h3>Do You Want To Earn With Us? So Don't be Late.</h3>
               <a href="#" class="gauto-btn">Become a drive</a>
            </div>
         </div>
      </div>
   </div>
</section>
<!-- Promo Area End -->




<!-- Testimonial Area Start -->
<section class="gauto-testimonial-area section_70">
   <div class="container">
      <div class="row">
         <div class="col-md-12">
            <div class="site-heading">
               <h4>Some words</h4>
               <h2>testimonial</h2>
            </div>
         </div>
      </div>
      <div class="row">
         <div class="col-md-12">
            <div class="testimonial-slider owl-carousel">
               <div class="single-testimonial">
                  <div class="testimonial-text">
                     <p>"Dorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusm tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat adipisicing elit."</p>
                     <div class="testimonial-meta">
                        <div class="client-image">
                           <img src="{{ asset('front/img/testimonial.jpg') }}" alt="testimonial" />
                        </div>
                        <div class="client-info">
                           <h3>Marco Ghaly</h3>
                           <p>Customer</p>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="single-testimonial">
                  <div class="testimonial-text">
                     <p>"Forem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusm tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat adipisicing elit."</p>
                     <div class="testimonial-meta">
                        <div class="client-image">
                           <img src="{{ asset('front/img/testimonial-2.jpg') }}" alt="testimonial" />
                        </div>
                        <div class="client-info">
                           <h3>Sherief Arafa</h3>
                           <p>Customer</p>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="single-testimonial">
                  <div class="testimonial-text">
                     <p>"Dorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusm tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat adipisicing elit."</p>
                     <div class="testimonial-meta">
                        <div class="client-image">
                           <img src="{{ asset('front/img/testimonial.jpg') }}" alt="testimonial" />
                        </div>
                        <div class="client-info">
                           <h3>Marco Ghaly</h3>
                           <p>Customer</p>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="single-testimonial">
                  <div class="testimonial-text">
                     <p>"Dorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusm tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat adipisicing elit."</p>
                     <div class="testimonial-meta">
                        <div class="client-image">
                           <img src="{{ asset('front/img/testimonial.jpg') }}" alt="testimonial" />
                        </div>
                        <div class="client-info">
                           <h3>Marco Ghaly</h3>
                           <p>Customer</p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<!-- Testimonial Area End -->




      <!-- About Area Start -->
      <section class="gauto-about-area section_70">
         <div class="container">
            <div class="row">
               <div class="col-lg-6">
                  <div class="about-left">
                     <h4>about us</h4>
                     <h2>Welcome to gauto</h2>
                     <p>Horem Ipsum passages, and more recently with desktop publishing software like aldus pageMaker including versions of all the Rorem Ipsum generators</p>
                     <div class="about-list">
                        <ul>
                           <li><i class="fa fa-check"></i>We are a trusted name</li>
                           <li><i class="fa fa-check"></i>we deal in have all brands</li>
                           <li><i class="fa fa-check"></i>have a larger stock of vehicles</li>
                           <li><i class="fa fa-check"></i>we are at worldwide locations</li>
                        </ul>
                     </div>
                     <div class="about-signature">
                        <div class="signature-left">
                           <img src="{{ asset('front/img/signature.png') }}" alt="signature" />
                        </div>
                        <div class="signature-right">
                           <h3>Robertho Garcia</h3>
                           <p>President</p>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-lg-6">
                  <div class="about-right">
                     <img src="{{ asset('front/img/about.png') }}" alt="car" />
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- About Area End -->
<!-- Service Area Start -->
<section class="gauto-service-area section_70">
   <div class="container">
      <div class="row">
         <div class="col-md-12">
            <div class="site-heading">
               <h4>see our</h4>
               <h2>Latest Services</h2>
            </div>
         </div>
      </div>
      <div class="row">
         <div class="col-md-12">
            <div class="service-slider owl-carousel">
               <div class="single-service">
                  <span class="service-number">01 </span>
                  <div class="service-icon">
                     <img src="{{ asset('front/img/city-transport.png') }}" alt="city trasport" />
                  </div>
                  <div class="service-text">
                     <a href="#">
                        <h3>City transfer</h3>
                     </a>
                     <p>Risus commodo maecenas accumsan lacus vel facilisis. Dorem ipsum dolor consectetur adipiscing elit.</p>
                  </div>
               </div>
               <div class="single-service">
                  <span class="service-number">02 </span>
                  <div class="service-icon">
                     <img src="{{ asset('front/img/airport-transport.png') }}" alt="airport trasport" />
                  </div>
                  <div class="service-text">
                     <a href="#">
                        <h3>Airport transfer</h3>
                     </a>
                     <p>Risus commodo maecenas accumsan lacus vel facilisis. Dorem ipsum dolor consectetur adipiscing elit.</p>
                  </div>
               </div>
               <div class="single-service">
                  <span class="service-number">03 </span>
                  <div class="service-icon">
                     <img src="{{ asset('front/img/hospital-transport.png') }}" alt="hospital trasport" />
                  </div>
                  <div class="service-text">
                     <a href="#">
                        <h3>Hospital transfer</h3>
                     </a>
                     <p>Risus commodo maecenas accumsan lacus vel facilisis. Dorem ipsum dolor consectetur adipiscing elit.</p>
                  </div>
               </div>
               <div class="single-service">
                  <span class="service-number">04 </span>
                  <div class="service-icon">
                     <img src="{{ asset('front/img/wedding-ceremony.png') }}" alt="wedding trasport" />
                  </div>
                  <div class="service-text">
                     <a href="#">
                        <h3>wedding ceremony</h3>
                     </a>
                     <p>Risus commodo maecenas accumsan lacus vel facilisis. Dorem ipsum dolor consectetur adipiscing elit.</p>
                  </div>
               </div>
               <div class="single-service">
                  <span class="service-number">05 </span>
                  <div class="service-icon">
                     <img src="{{ asset('front/img/hotel-transport.png') }}" alt="wedding trasport" />
                  </div>
                  <div class="service-text">
                     <a href="#">
                        <h3>Whole City Tour</h3>
                     </a>
                     <p>Risus commodo maecenas accumsan lacus vel facilisis. Dorem ipsum dolor consectetur adipiscing elit.</p>
                  </div>
               </div>
               <div class="single-service">
                  <span class="service-number">06 </span>
                  <div class="service-icon">
                     <img src="{{ asset('front/img/luggege-transport.png') }}" alt="wedding trasport" />
                  </div>
                  <div class="service-text">
                     <a href="#">
                        <h3>Baggage transport</h3>
                     </a>
                     <p>Risus commodo maecenas accumsan lacus vel facilisis. Dorem ipsum dolor consectetur adipiscing elit.</p>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<!-- Service Area End -->

@endsection
