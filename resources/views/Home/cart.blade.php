
@extends('Home.Main')

@section('body')

	<section class="tg-parallax tg-innerbanner" data-appear-top-offset="600" data-parallax="scroll" data-image-src="{{ url('LP/travelu/images/parallax/bgparallax-07.jpg') }}">
        <div class="tg-sectionspace tg-haslayout">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <h1>Cart</h1>
                        <h2>Enjoy Safe journy Good Luck</h2>
                       
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--************************************
            Inner Banner End
    *************************************-->
    <!--************************************
            Main Start
    *************************************-->


        @isset($location)
        <main id="tg-main" class="tg-main tg-sectionspace tg-haslayout tg-bglight">
            <div class="container">
                <div class="row">
                    <div id="tg-twocolumns" class="tg-twocolumns">
                        <form class="tg-formtheme tg-formcart" method="POST" action={{ url('addbooking') }}>
                            
                            @csrf

                            <input type="hidden" name="check_in" value="{{ $check_in }}">
                            <input type="hidden" name="check_out" value="{{ $check_out }}">
                            <input type="hidden" name="location_id" value="{{ $location->id }}">    
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                <div class="tg-cartproductdetail">
                                    <table class="table table-responsive">
                                        <tr>
                                            <th scope="col">Tour Name</th>
                                            
                                            <th scope="col"> Base Price</th>
                                          
                                        </tr>
                                        <tbody>
                                            <tr>
                                                <td data-title="tour name">
                                                    <div class="tg-tourname">
                                                        <figure>
                                                            <a href="#"><img src="{{ url('LP/travelu/images/img-04.jpg') }}" alt="image destinations"></a>
                                                        </figure>
                                                        <div class="tg-populartourcontent">
                                                            <div class="tg-populartourtitle">
                                                                <h3><a href="#">{{ $location->title }}</a></h3>
                                                                <span>from {{ $check_in  }} to {{ $check_out }}</span>
                                                            </div>
                                                            
                                                        </div>
                                                    </div>
                                                </td>
                                               
                                                <td data-title="price"><span>{{ $location->rate }} x {{ $days}} </span></td>
                                                
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                           
                            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 pull-right">
                                <aside id="tg-sidebar" class="tg-sidebar tg-haslayout">
                                    <div class="tg-widget tg-widgetpersonprice">
                                        <div class="tg-widgetcontent">
                                            <ul>
                                                
                                                <li><span>Sub Total</span><em>{{ $total_amout }}</em></li>
                                                <li><span>Tax Rate</span><em>0</em></li>
                                                <li><span> Due Fine</span><em>0</em></li>
                                                <li class="tg-totalprice"><div class="tg-totalpayment"><span>Total Price</span><em>{{ $total_amout }}</em></div></li>
                                                
                                                
                                                <li><button type="submit" class="tg-btn tg-btn-lg">Confrim</button></li>
                                            </ul>
                                        </div>
                                    </div>
                                </aside>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </main>
        @endisset

        @empty($location)
        <main id="tg-main" class="tg-main tg-sectionspace tg-haslayout tg-bglight">
           <h3 style="text-align: center">Nothing Found . Please Login With Correct Account . </h3>
        </main>
        @endempty

    

    @endsection