  
@extends('Home.Main')

@section('body')
    
<div class="tg-bannerholder">
    <div class="tg-slidercontent">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <h1>Experience the Wonder</h1>
                    <h2>People don’t take trips, trips take People</h2>
                    <form  class="tg-formtheme tg-formtrip" action="{{ url('/findlocation') }}" method="post">
                        
                        
                        @csrf
                        <fieldset>
                            <div class="form-group">
                                <div class="tg-select">
                                    <select class="selectpicker" name="city" data-live-search="true" data-width="100%">
                                        <option  value="lahore">LAHORE</option>
                                        <option  value="Karachi">KARACHI</option>
                                        <option  value="Rawalpindi">RAWALPINDI</option>
                                        <option  value="Islamabad">ISLMABAD</option>
                                        <option  value="Nothren">NORTHEN</option>
                                      
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="tg-select">
                                    <select class="selectpicker" name="type" data-live-search="true" data-width="100%">
                                        <option  value="room">Room</option>
                                        <option  value="apartment">Apartment</option>
                                        
                                       
                                      
                                    </select>
                                </div>
                            </div>


                            <div class="form-group">
                                <div class="tg-select">
                                    <select class="selectpicker" name="capasity" data-live-search="true" data-width="100%">
                                        <option  value="1">1 Person</option>
                                        <option  value="2">2 Person</option>
                                        <option  value="3">3 Person</option>
                                        <option  value="4">4 Person</option>
                                        <option  value="5">5 Person</option>
                               
                                       
                                      
                                    </select>
                                </div>
                            </div>

                          
                          

                
                            <div class="form-group">
                                <div class="tg-select">
                                    <select class="selectpicker" name="facilty" data-live-search="true" data-width="100%">
                                        <option  value="1">With Food</option>
                                        <option  value="2">With vehicle</option>
                                        <option  value="3">With Food vehicle</option>
                                        <option  value="4">Without Food vehicle </option>
                                        
                                      
                                      
                                    </select>
                                </div>
                            </div>
                           
                        </fieldset>
                        <div class="form-group">
                            <button class="tg-btn" type="submit"><span>find tours</span></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div id="tg-homeslider" class="tg-homeslider owl-carousel tg-haslayout">
        <figure class="item" data-vide-bg="poster: {{ url('LP/travelu/images/destination/img-01.jpg') }}" data-vide-options="position: 0% 50%"></figure>
        <figure class="item" data-vide-bg="poster: {{ url('LP/travelu/images/destination/img-02.jpg') }}" data-vide-options="position: 0% 50%"></figure>
        <figure class="item" data-vide-bg="poster: {{ url('LP/travelu/images/destination/img-03.jpg') }}" data-vide-options="position: 0% 50%"></figure>
    </div>
</div>
<!--************************************
        Home Slider End
*************************************-->
<!--************************************
        Main Start
*************************************-->
<main id="tg-main" class="tg-main tg-haslayout">
    <!--************************************
            Advantures Start
    *************************************-->
    <section class="tg-sectionspace tg-haslayout">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="tg-toursdestinations">
                        <div class="tg-tourdestination tg-tourdestinationbigbox">
                            <figure>
                                <a href="javascript:void(0);">
                                    <img src="{{ url('LP/travelu/images/destination/img-01.jpg') }}" alt="image destinations">
                                    <div class="tg-hoverbox">
                                        <div class="tg-adventuretitle">
                                            <h2>Ice Adventure Vacations</h2>
                                        </div>
                                        <div class="tg-description">
                                            <p>your best vacation ever</p>
                                        </div>
                                    </div>
                                </a>
                            </figure>
                        </div>
                        <div class="tg-tourdestination">
                            <figure>
                                <a href="javascript:void(0);">
                                    <img src="{{ url('LP/travelu/images/destination/img-02.jpg') }}" alt="image destinations">
                                    <div class="tg-hoverbox">
                                        <div class="tg-adventuretitle">
                                            <h2>National Parks</h2>
                                        </div>
                                    </div>
                                </a>
                            </figure>
                        </div>
                        <div class="tg-tourdestination">
                            <figure>
                                <a href="javascript:void(0);">
                                    <img src="{{ url('LP/travelu/images/destination/img-03.jpg') }}" alt="image destinations">
                                    <div class="tg-hoverbox">
                                        <div class="tg-adventuretitle">
                                            <h2> Vacations</h2>
                                        </div>
                                    </div>
                                </a>
                            </figure>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--************************************
            Advantures End
    *************************************-->
    <!--************************************
            Features Start
    *************************************-->
    <section class="tg-sectionspace tg-zerotoppadding tg-haslayout">
        <div class="container">
            <div class="row">
                <div class="tg-features">
                    <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                        <div class="tg-feature">
                            <div class="tg-featuretitle">
                                <h2><span>01</span>Luxury Apartments</h2>
                            </div>
                            <div class="tg-description">
                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh tempor cum soluta nobis consectetuer nihil imperdiet doming...</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                        <div class="tg-feature">
                            <div class="tg-featuretitle">
                                <h2><span>02</span>Tourist Guide</h2>
                            </div>
                            <div class="tg-description">
                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh tempor cum soluta nobis consectetuer nihil imperdiet doming...</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                        <div class="tg-feature">
                            <div class="tg-featuretitle">
                                <h2><span>03</span>Accommodation</h2>
                            </div>
                            <div class="tg-description">
                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh tempor cum soluta nobis consectetuer nihil imperdiet doming...</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--************************************
            Features End
    *************************************-->
    <!--************************************
            Popular Tour Start
    *************************************-->
    
    <!--************************************
            Popular Tour End
    *************************************-->
    <!--************************************
            Our Destination Start
    *************************************-->
    <section class="tg-sectionspace tg-haslayout">
        <div class="container">
            <div class="row">
                <div class="tg-ourdestination">
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 tg-verticalmiddle">
                        <figure><img src="{{ url('LP/travelu/images/placeholder/placeholder-01.png') }}" alt="image destinations"></figure>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 tg-verticalmiddle">
                        <div class="tg-ourdestinationcontent">
                            <div class="tg-sectiontitle tg-sectiontitleleft">
                                <h2>Popular Tours</h2>
                            </div>
                            <div class="tg-description"><p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam consectetuer adipiscing elit, sed diam nonummy nibh...</p></div>
                            <ul class="tg-destinations">
                                <li>
                                    <a href="#">
                                        <h3>GB</h3>
                                        
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <h3>North</h3>
                                        
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <h3>Islamabad</h3>
                                        
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <h3>Sakrdu</h3>
                                       
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <h3>North</h3>
                                    
                                    </a>
                                </li>
                                <li>
                                 
                                </li>
                            </ul>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--************************************
            Our Destination End
    *************************************-->
    <!--************************************
            Destination Start
    *************************************-->
    <section class="tg-sectionspace tg-zerotoppadding tg-haslayout">
        <div class="container">
            <div class="row">
                <div id="tg-destinationsslider" class="tg-destinationsslider tg-destinations owl-carousel">
                    <div class="item tg-destination">
                        <figure>
                            <a href="tourbookingdetail.html"><img src="{{ url('LP/travelu/images/destination/img-04.jpg') }}" alt="image description"></a>
                            <figcaption>
                                <h2><a href="tourbookingdetail.html">Paris</a></h2>
                                <div class="tg-description">
                                    <p>in the streets of London</p>
                                </div>
                            </figcaption>
                        </figure>
                    </div>
                    <div class="item tg-destination">
                        <figure>
                            <a href="tourbookingdetail.html"><img src="{{ url('LP/travelu/images/destination/img-05.jpg') }}" alt="image description"></a>
                            <figcaption>
                                <h2><a href="tourbookingdetail.html">Egypt</a></h2>
                                <div class="tg-description">
                                    <p>in the streets of London</p>
                                </div>
                            </figcaption>
                        </figure>
                        <figure>
                            <a href="tourbookingdetail.html"><img src="{{ url('LP/travelu/images/destination/img-06.jpg') }}" alt="image description"></a>
                            <figcaption>
                                <h2><a href="tourbookingdetail.html">London</a></h2>
                                <div class="tg-description">
                                    <p>in the streets of London</p>
                                </div>
                            </figcaption>
                        </figure>
                    </div>
                    <div class="item tg-destination">
                        <figure>
                            <a href="javascript:void(0);"><img src="{{ url('LP/travelu/images/destination/img-07.jpg') }}" alt="image description"></a>
                            <figcaption>
                                <h2><a href="javascript:void(0);">Istanbul</a></h2>
                                <div class="tg-description">
                                    <p>Beautiful Mosque</p>
                                </div>
                            </figcaption>
                        </figure>
                    </div>
                    <div class="item tg-destination">
                        <figure>
                            <a href="javascript:void(0);"><img src="{{ url('LP/travelu/images/destination/img-06.jpg') }}" alt="image description"></a>
                            <figcaption>
                                <h2><a href="javascript:void(0);">Paris</a></h2>
                                <div class="tg-description">
                                    <p>in the streets of London</p>
                                </div>
                            </figcaption>
                        </figure>
                    </div>
                    <div class="item tg-destination">
                        <figure>
                            <a href="javascript:void(0);"><img src="{{ url('LP/travelu/images/destination/img-05.jpg') }}" alt="image description"></a>
                            <figcaption>
                                <h2><a href="javascript:void(0);">Egypt</a></h2>
                                <div class="tg-description">
                                    <p>in the streets of London</p>
                                </div>
                            </figcaption>
                        </figure>
                        <figure>
                            <a href="javascript:void(0);"><img src="{{ url('LP/travelu/images/destination/img-06.jpg') }}" alt="image description"></a>
                            <figcaption>
                                <h2><a href="javascript:void(0);">London</a></h2>
                                <div class="tg-description">
                                    <p>in the streets of London</p>
                                </div>
                            </figcaption>
                        </figure>
                    </div>
                   
                </div>
            </div>
        </div>
    </section>
    
    <section class="tg-parallax" data-appear-top-offset="600" data-parallax="scroll" data-image-src="{{ url('LP/travelu/images/parallax/bgparallax-03.jpg') }}">
        <div class="tg-sectionspace tg-haslayout">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="tg-ourpartners">
                            <div class="tg-pattern"><img src="{{ url('LP/travelu/images/patternw.png') }}" alt="image destination"></div>
                            <h2>Our Partners</h2>
                            <ul class="tg-partners">
                                <li><figure><a href="javascript:void(0);"><img src="{{ url('LP/travelu/images/partners/img-01.png') }}" alt="image destinations"></a></figure></li>
                                <li><figure><a href="javascript:void(0);"><img src="{{ url('LP/travelu/images/partners/img-02.png') }}" alt="image destinations"></a></figure></li>
                                <li><figure><a href="javascript:void(0);"><img src="{{ url('LP/travelu/images/partners/img-03.png') }}" alt="image destinations"></a></figure></li>
                                <li><figure><a href="javascript:void(0);"><img src="{{ url('LP/travelu/images/partners/img-04.png') }}" alt="image destinations"></a></figure></li>
                                <li><figure><a href="javascript:void(0);"><img src="{{ url('LP/travelu/images/partners/img-05.png') }}" alt="image destinations"></a></figure></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
</main>
        
@endsection
