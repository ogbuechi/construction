@extends('layouts.app')


@section('content')
    <!--Main Slider-->
    <section class="main-slider">

        <div class="rev_slider_wrapper fullwidthbanner-container"  id="rev_slider_one_wrapper" data-source="gallery">
            <div class="rev_slider fullwidthabanner" id="rev_slider_one" data-version="5.4.1">
                <ul>

{{--                    <li data-description="Slide Description" data-easein="default" data-easeout="default" data-fsmasterspeed="1500" data-fsslotamount="7" data-fstransition="fade" data-hideafterloop="0" data-hideslideonmobile="off" data-index="rs-1688" data-masterspeed="default" data-param1="" data-param10="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-rotate="0" data-saveperformance="off" data-slotamount="default" data-thumb="images/main-slider/image-1.jpg" data-title="Slide Title" data-transition="parallaxvertical">--}}
{{--                        <img alt="" class="rev-slidebg" data-bgfit="cover" data-bgparallax="10" data-bgposition="center center" data-bgrepeat="no-repeat" data-no-retina="" src="images/main-slider/4.jpg">--}}



{{--                    </li>--}}
{{--                    <li data-description="Slide Description" data-easein="default" data-easeout="default" data-fsmasterspeed="1500" data-fsslotamount="7" data-fstransition="fade" data-hideafterloop="0" data-hideslideonmobile="off" data-index="rs-1688" data-masterspeed="default" data-param1="" data-param10="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-rotate="0" data-saveperformance="off" data-slotamount="default" data-thumb="images/main-slider/image-1.jpg" data-title="Slide Title" data-transition="parallaxvertical">--}}
{{--                        <img alt="" class="rev-slidebg" data-bgfit="cover" data-bgparallax="10" data-bgposition="center center" data-bgrepeat="no-repeat" data-no-retina="" src="images/main-slider/3.png">--}}

{{--                        <div class="tp-caption"--}}
{{--                             data-paddingbottom="[0,0,0,0]"--}}
{{--                             data-paddingleft="[0,0,0,0]"--}}
{{--                             data-paddingright="[0,0,0,0]"--}}
{{--                             data-paddingtop="[0,0,0,0]"--}}
{{--                             data-responsive_offset="on"--}}
{{--                             data-type="text"--}}
{{--                             data-height="none"--}}
{{--                             data-width="['750','700','700','550']"--}}
{{--                             data-whitespace="normal"--}}
{{--                             data-hoffset="['15','15','15','15']"--}}
{{--                             data-voffset="['-10','-90','-90','-90']"--}}
{{--                             data-x="['left','left','left','left']"--}}
{{--                             data-y="['middle','middle','middle','middle']"--}}
{{--                             data-textalign="['top','top','top','top']"--}}
{{--                             data-frames='[{"from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'>--}}
{{--                            <h2>We’re professionals <br> for building <span>constructions</span></h2>--}}
{{--                        </div>--}}

{{--                        <div class="tp-caption"--}}
{{--                             data-paddingbottom="[0,0,0,0]"--}}
{{--                             data-paddingleft="[0,0,0,0]"--}}
{{--                             data-paddingright="[0,0,0,0]"--}}
{{--                             data-paddingtop="[0,0,0,0]"--}}
{{--                             data-responsive_offset="on"--}}
{{--                             data-type="text"--}}
{{--                             data-height="none"--}}
{{--                             data-width="['700','700','700','550']"--}}
{{--                             data-whitespace="normal"--}}
{{--                             data-hoffset="['15','15','15','15']"--}}
{{--                             data-voffset="['110','40','20','0']"--}}
{{--                             data-x="['left','left','left','left']"--}}
{{--                             data-y="['middle','middle','middle','middle']"--}}
{{--                             data-textalign="['top','top','top','top']"--}}
{{--                             data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'>--}}
{{--                            <div class="text">We have provided complete remodeling and construction solutions for residential and commercial properties in cities.</div>--}}
{{--                        </div>--}}

{{--                        <div class="tp-caption tp-resizeme"--}}
{{--                             data-paddingbottom="[0,0,0,0]"--}}
{{--                             data-paddingleft="[0,0,0,0]"--}}
{{--                             data-paddingright="[0,0,0,0]"--}}
{{--                             data-paddingtop="[0,0,0,0]"--}}
{{--                             data-responsive_offset="on"--}}
{{--                             data-type="text"--}}
{{--                             data-height="none"--}}
{{--                             data-width="['560','700','700','550']"--}}
{{--                             data-whitespace="normal"--}}
{{--                             data-hoffset="['15','15','15','15']"--}}
{{--                             data-voffset="['200','140','120','100']"--}}
{{--                             data-x="['left','left','left','left']"--}}
{{--                             data-y="['middle','middle','middle','middle']"--}}
{{--                             data-textalign="['top','top','top','top']"--}}
{{--                             data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'>--}}
{{--                            <div class="btns-box">--}}
{{--                                <a href="{{ route('contact') }}" class="theme-btn btn-style-one">Get appointment</a>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                    </li>--}}

                    <li data-description="Slide Description" data-easein="default" data-easeout="default" data-fsmasterspeed="1500" data-fsslotamount="7" data-fstransition="fade" data-hideafterloop="0" data-hideslideonmobile="off" data-index="rs-1689" data-masterspeed="default" data-param1="" data-param10="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-rotate="0" data-saveperformance="off" data-slotamount="default" data-thumb="images/main-slider/image-2.jpg" data-title="Slide Title" data-transition="parallaxvertical">
                        <img alt="" class="rev-slidebg" data-bgfit="cover" data-bgparallax="10" data-bgposition="center center" data-bgrepeat="no-repeat" data-no-retina="" src="images/main-slider/image-2.jpg">

                        <div class="tp-caption"
                             data-paddingbottom="[0,0,0,0]"
                             data-paddingleft="[0,0,0,0]"
                             data-paddingright="[0,0,0,0]"
                             data-paddingtop="[0,0,0,0]"
                             data-responsive_offset="on"
                             data-type="text"
                             data-height="none"
                             data-width="['650','700','700','550']"
                             data-whitespace="normal"
                             data-hoffset="['15','15','15','15']"
                             data-voffset="['-10','-90','-90','-90']"
                             data-x="['left','left','left','left']"
                             data-y="['middle','middle','middle','middle']"
                             data-textalign="['top','top','top','top']"
                             data-frames='[{"from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'>
                            <h2>We take pride in bringing your projects to life</h2>
                        </div>

                        <div class="tp-caption"
                             data-paddingbottom="[0,0,0,0]"
                             data-paddingleft="[0,0,0,0]"
                             data-paddingright="[0,0,0,0]"
                             data-paddingtop="[0,0,0,0]"
                             data-responsive_offset="on"
                             data-type="text"
                             data-height="none"
                             data-width="['700','700','700','550']"
                             data-whitespace="normal"
                             data-hoffset="['15','15','15','15']"
                             data-voffset="['110','40','20','0']"
                             data-x="['left','left','left','left']"
                             data-y="['middle','middle','middle','middle']"
                             data-textalign="['top','top','top','top']"
                             data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'>
                            <div class="text">{{ env('APP_NAME') }}  is an established construction company. With over
                                {{ env('exp') }} years of experience, we have a versatile team of highly skilled tradesmen and professionals.</div>
                        </div>

                        <div class="tp-caption tp-resizeme"
                             data-paddingbottom="[0,0,0,0]"
                             data-paddingleft="[0,0,0,0]"
                             data-paddingright="[0,0,0,0]"
                             data-paddingtop="[0,0,0,0]"
                             data-responsive_offset="on"
                             data-type="text"
                             data-height="none"
                             data-width="['560','700','700','550']"
                             data-whitespace="normal"
                             data-hoffset="['15','15','15','15']"
                             data-voffset="['200','150','120','100']"
                             data-x="['left','left','left','left']"
                             data-y="['middle','middle','middle','middle']"
                             data-textalign="['top','top','top','top']"
                             data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'>
                            <div class="btns-box">
                                <a href="{{ route('contact') }}" class="theme-btn btn-style-one">Get appointment</a>
                            </div>
                        </div>

                    </li>

                    <li data-description="Slide Description" data-easein="default" data-easeout="default" data-fsmasterspeed="1500" data-fsslotamount="7" data-fstransition="fade" data-hideafterloop="0" data-hideslideonmobile="off" data-index="rs-1690" data-masterspeed="default" data-param1="" data-param10="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-rotate="0" data-saveperformance="off" data-slotamount="default" data-thumb="images/main-slider/image-3.jpg" data-title="Slide Title" data-transition="parallaxvertical">
                        <img alt="" class="rev-slidebg" data-bgfit="cover" data-bgparallax="10" data-bgposition="center center" data-bgrepeat="no-repeat" data-no-retina="" src="images/ser/8.jpg">

                        <div class="tp-caption"
                             data-paddingbottom="[0,0,0,0]"
                             data-paddingleft="[0,0,0,0]"
                             data-paddingright="[0,0,0,0]"
                             data-paddingtop="[0,0,0,0]"
                             data-responsive_offset="on"
                             data-type="text"
                             data-height="none"
                             data-width="['650','700','700','550']"
                             data-whitespace="normal"
                             data-hoffset="['15','15','15','15']"
                             data-voffset="['-10','-90','-90','-90']"
                             data-x="['left','left','left','left']"
                             data-y="['middle','middle','middle','middle']"
                             data-textalign="['top','top','top','top']"
                             data-frames='[{"from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'>
                            <h2>We build your dream <br> home with <span>passion</span></h2>
                        </div>

                        <div class="tp-caption"
                             data-paddingbottom="[0,0,0,0]"
                             data-paddingleft="[0,0,0,0]"
                             data-paddingright="[0,0,0,0]"
                             data-paddingtop="[0,0,0,0]"
                             data-responsive_offset="on"
                             data-type="text"
                             data-height="none"
                             data-width="['700','700','700','550']"
                             data-whitespace="normal"
                             data-hoffset="['15','15','15','15']"
                             data-voffset="['110','40','20','0']"
                             data-x="['left','left','left','left']"
                             data-y="['middle','middle','middle','middle']"
                             data-textalign="['top','top','top','top']"
                             data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'>
                            <div class="text">Delivering complex and sensitive construciton projects in some of the world’s most sought-after locations.
                                {{ env('APP_NAME') }} takes pride in delivering projects to the highest standards through innovative construction methods, attention to detail, programme and cost management,
                                and a commitment to immaculate levels of finish.</div>
                        </div>

                        <div class="tp-caption tp-resizeme"
                             data-paddingbottom="[0,0,0,0]"
                             data-paddingleft="[0,0,0,0]"
                             data-paddingright="[0,0,0,0]"
                             data-paddingtop="[0,0,0,0]"
                             data-responsive_offset="on"
                             data-type="text"
                             data-height="none"
                             data-width="['560','700','700','550']"
                             data-whitespace="normal"
                             data-hoffset="['15','15','15','15']"
                             data-voffset="['200','140','120','100']"
                             data-x="['left','left','left','left']"
                             data-y="['middle','middle','middle','middle']"
                             data-textalign="['top','top','top','top']"
                             data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'>
                            {{--                            <div class="btns-box">--}}
                            {{--                                <a href="#" class="theme-btn btn-style-one">Get appointment</a>--}}
                            {{--                            </div>--}}
                        </div>

                    </li>

                </ul>
            </div>
        </div>
    </section>
    <!--End Main Slider-->






    <!--Services Section-->
    <section class="services-section">
        <div class="auto-container">
            <div class="row clearfix">

                <!--Title Column-->
                <div class="title-column col-md-4 col-sm-12 col-xs-12">
                    <div class="inner-column">
                        <div class="sec-title">
                            <h2>Who We Are</h2>
                        </div>
                        <div class="styled-text">{{ env('APP_NAME') }} is a proven leader in global aerospace sector.
                        </div>
                        <div class="text">
                            These cutting-edge products and services – which span the commercial aircraft,
                            helicopter, defence, security and space segments – benefit from our wide-ranging
                            expertise and continued emphasis on innovation.

                        </div>
                        <a href="/services" class="theme-btn btn-style-one">View all services</a>
                    </div>
                </div>

                <!--Blocks Column-->
                <div class="blocks-column col-md-8 col-sm-12 col-xs-12">
                    <div class="inner-column">
                        <div class="row clearfix">

                            <!--Service Block-->
                            <div class="service-block col-md-6 col-sm-6 col-xs-12">
                                <div class="inner-box">
                                    <div class="image">
                                        <a href="#"><img src="images/ser/1.jpg" alt="" /></a>
                                    </div>
                                    <div class="lower-box">
                                        <h3><a href="#">WHAT WE DO</a></h3>
                                        <div class="text">
                                            Setting the standard for modern aviation is a top priority for {{ env('APP_NAME') }}. <br/>

                                            Making it safer, cleaner and more fuel-efficient thanks to our products, services and customer care,
                                            while ensuring our customers' needs are covered all over the world is our commitment.
                                        </div>
                                        {{--                                        <a href="building-contruction.html" class="read-more">Read more</a>--}}
                                    </div>
                                </div>
                            </div>

                            <!--Service Block-->
                            <div class="service-block col-md-6 col-sm-6 col-xs-12">
                                <div class="inner-box">
                                    <div class="image">
                                        <a href="{{ route('services') }}"><img src="images/ser/6.jpg" alt="" /></a>
                                    </div>
                                    <div class="lower-box">
                                        <h3><a href="#">Customer Care</a></h3>

                                        We believe that operators, lessors and MROs deserve first-class customer care.

                                        And this is what {{ env('APP_NAME') }} offers long before, during and after the delivery of an aircraft.

                                        Our mission is to improve your in-service fleet efficiency, provide you with the keys to
                                        being autonomous in managing your aircraft, as well as to safeguard your operations and help
                                        you recover from unforeseeable events.

                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!--End Services Section-->



    <!--Contruction Section-->
    <section class="contruction-section" style="background-image:url(images/background/3.png)">
        <div class="auto-container">
            <div class="row clearfix">
                <!--Image Column-->
                <div class="image-column col-md-4 col-sm-12 col-xs-12">
                    <div class="image">
                        <img src="images/men2.jpg" alt="" />
                    </div>
                </div>
                <!--Content Column-->
                <div class="content-column col-md-8 col-sm-12 col-xs-12">
                    <div class="inner-column">
{{--                        <h2 class="text-uppercase">PROFESSIONAL BEHIND {{ env('APP_NAME') }} ({{ env('ceo') }})</h2>--}}

                        <div class="text text-justify">


                            <p>Applying aircraft safety for our repairs and maintenance and oiling of engines and others.</p>
                            <p>
                                Your first choice expert to call for anything maintenance and servicing of any private Aircraft. As an Aircraft engineer,
                                I render the best of service required to keep your aircraft in proper safety and maintenance along with handling total over hauling. </p>
                        </div>

                        <div class="row clearfix fact-counter about p-2">

                            <!--Column-->
                            <div class="column counter-column col-md-4 col-sm-4 col-xs-12">
                                <div class="inner">
                                    <div class="count-outer count-box">
                                        <span class="count-text" data-speed="2000" data-stop="{{ env('exp') }}">0</span>
                                    </div>
                                    <h4 class="counter-title">Years of Experience</h4>
                                </div>
                            </div>

                            <!--Column-->
                            <div class="column counter-column col-md-4 col-sm-4 col-xs-12">
                                <div class="inner">
                                    <div class="count-outer count-box">
                                        <span class="count-text" data-speed="2500" data-stop="{{ env('active_projects') }}">0</span>+
                                    </div>
                                    <h4 class="counter-title">Successful Projects</h4>
                                </div>
                            </div>

                            <!--Column-->
                            <div class="column counter-column col-md-4 col-sm-4 col-xs-12">
                                <div class="inner">
                                    <div class="count-outer count-box">
                                        <span class="count-text" data-speed="3000" data-stop="{{ env('satisfied_clients') }}">0</span>
                                    </div>
                                    <h4 class="counter-title">Satisfied Customers</h4>
                                </div>
                            </div>

                        </div>

                        <a href="{{ route('about') }}" class="theme-btn btn-style-two">Know more about {{ env('ceo') }}</a>



                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Contruction Section-->



    <!--Services Section Two-->
    <section class="services-section-two" style="background-image:url(images/background/1.png)">
        <div class="auto-container">
            <div class="sec-title">
                <h2>Our Expertise</h2>
                <div class="text">

                    From traditional, single main rotor helicopters to small,
                    multirotor drones, aeropartsconsult provides a number of unique challenges regarding simulation –
                    whether the focus of simulation is to support training, research, engineering, or something else.
                </div>
            </div>
            <div class="four-item-carousel owl-carousel owl-theme">

                <!--Services Block Two-->
                @foreach($c_services as $item)
                    <div class="service-block-two">
                        <div class="inner-box">
                            <div class="flip-container" >
                                <div class="flipper">
                                    <div class="front">

                                        <h3>{{ $item['name'] }}</h3>
                                        <div class="text">{{ $item['info'] }}.</div>
                                    </div>

                                    <div class="back">
                                        <div class="overlay-box">
                                            <div class="overlay-inner">
                                                <div class="overlay-content">
                                                    <h4><a href="">{{ $item['name'] }};</a></h4>
                                                    <div class="overlay-text">{{ $item['info'] }}</div>
                                                    <a href="{{ route('services') }}" class="read-more">Read more</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach


            </div>
        </div>
    </section>
    <!--End Services Section Two-->



    <!--Counter Section-->
    <section class="counter-section" style="background-image:url(images/background/2.jpg)">
        <div class="auto-container">
            <div class="row clearfix">

                <!--Image Column-->
                <div class="image-column col-md-6 col-sm-12 col-xs-12">
                    <div class="image">
                        <img src="images/resource/image-1.png" alt="" />
                    </div>
                </div>

                <!--Counter Column-->
                <div class="counter-column col-md-6 col-sm-12 col-xs-12">
                    <div class="inner-column">
                        <h2>Why work with us </h2>
                        <div class="text">Our expertise is more than {{ env('exp') }} years in aircraft,
                            maintenance and consultation, and have trained more than 240 pilots and
                            engineers meet their flight career prospect</div>

                        <div class="fact-counter">

                            <div class="row clearfix">

                                <!--Column-->
                                <div class="column counter-column col-md-4 col-sm-4 col-xs-12">
                                    <div class="inner">
                                        <div class="count-outer count-box">
                                            <span class="count-text" data-speed="2000" data-stop="{{ env('exp') }}">0</span>
                                        </div>
                                        <h4 class="counter-title">Years of Experience</h4>
                                    </div>
                                </div>

                                <!--Column-->
                                <div class="column counter-column col-md-4 col-sm-4 col-xs-12">
                                    <div class="inner">
                                        <div class="count-outer count-box">
                                            <span class="count-text" data-speed="2500" data-stop="{{ env('active_projects') }}">0</span>+
                                        </div>
                                        <h4 class="counter-title">Successful Projects</h4>
                                    </div>
                                </div>

                                <!--Column-->
                                <div class="column counter-column col-md-4 col-sm-4 col-xs-12">
                                    <div class="inner">
                                        <div class="count-outer count-box">
                                            <span class="count-text" data-speed="3000" data-stop="{{ env('satisfied_clients') }}">0</span>
                                        </div>
                                        <h4 class="counter-title">Satisfied Customers</h4>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!--End Counter Section-->


    <!--Services Section Two-->
    <section class="services-section-two" style="background-image:url(images/background/1.png)">
        <div class="auto-container">
            <div class="sec-title">
                <h2>{{ env('APP_NAME') }} Other Services</h2>
                <div class="text">

                    {{ env("APP_NAME") }} Services purpose is to further enhance safety in the aviation industry,
                    strengthen our relationship with our customers and contribute to a more sustainable future.
                    From a fully integrated package including training, flight operations, maintenance, upgrades, dismantling & recycling,
                    to a single ad hoc solution, our complete services portfolio covers the entire aircraft
                    life cycle from entry into service to end-of-life.

                </div>
            </div>
            <div class="four-item-carousel owl-carousel owl-theme">

                <!--Services Block Two-->
                @foreach($services as $item)
                    <div class="service-block-two">
                        <div class="inner-box">
                            <div class="flip-container" >
                                <div class="flipper">
                                    <div class="front">
                                        <div class="icon-box">
                                            <span class="icon"><img src="{{ $item['img'] }}" alt="" /></span>
                                        </div>
                                        <h3>{{ $item['name'] }};</h3>
                                        <div class="text">{{ $item['info'] }}.</div>
                                    </div>

                                    <div class="back">
                                        <div class="overlay-box">
                                            <div class="overlay-inner">
                                                <div class="overlay-content">
                                                    <h4><a href="">{{ $item['name'] }};</a></h4>
                                                    <div class="overlay-text">{{ $item['info'] }}</div>
                                                    <a href="{{ route('services') }}" class="read-more">Read more</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach


            </div>
        </div>
    </section>
    <!--End Services Section Two-->


    <!--Gallery Section-->
    <section class="gallery-section">
        <div class="auto-container projects">
            <div class="sec-title light">
                <h2>Our Projects</h2>
            </div>
            <!--MixitUp Galery-->
            <div class="mixitup-gallery">

                <!--Filter-->
{{--                <div class="filters clearfix">--}}

{{--                    <ul class="filter-tabs filter-btns clearfix">--}}
{{--                        <li class="active filter" data-role="button" data-filter="all">All</li>--}}
{{--                        <li class="filter" data-role="button" data-filter=".road">Roads</li>--}}
{{--                        <li class="filter" data-role="button" data-filter=".commercial">Commercial</li>--}}
{{--                        <li class="filter" data-role="button" data-filter=".education">Education</li>--}}
{{--                        <li class="filter" data-role="button" data-filter=".hospital">Hospital</li>--}}
{{--                        <li class="filter" data-role="button" data-filter=".residential">Residential</li>--}}
{{--                        <li class="filter" data-role="button" data-filter=".office">Office</li>--}}
{{--                        <li class="filter" data-role="button" data-filter=".construction">Construction</li>--}}
{{--                    </ul>--}}

{{--                </div>--}}

                <div class="filter-list row clearfix">

                    <!--Gallery Item-->
                    @foreach($projects as $item)
                        <div class="gallery-item mix all {{ $item['type'] }} col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <div class="inner-box">
                                <div class="image">
                                    <img style="max-height: 500px" src="{{ $item['img'] }}" alt="" />
                                    <div class="overlay-box">
                                        <div class="content">
                                            <h3><a href="#">{{ $item['name'] }}</a></h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="text-center">
                                    <h3>{{ $item['name'] }}</h3>
                                </div>
                            </div>
                        </div>
                @endforeach

                </div>
            </div>
        </div>
    </section>
    <!--End Gallery Section-->

    <!--Contruction Section-->
    <section class="contruction-section" style="background-image:url(images/background/3.png)">
        <div class="auto-container">
            <div class="row clearfix">
                <!--Image Column-->
                <div class="image-column col-md-4 col-sm-12 col-xs-12">
                    <div class="image">
                        <img src="images/man.png" alt="" />
                    </div>
                </div>
                <!--Content Column-->
                <div class="content-column col-md-8 col-sm-12 col-xs-12">
                    <div class="inner-column">
                        <h2>Area of Specialization</h2>
                        <div class="text text-justify">

                            <p>
                                We guarantee a supportive and friendly environment with a motivating professional team. This is how we are able to innovate, restructure and redesign aircraft to fly more safe and efficient.
                                Aircraft maintenance subscribed to my maintenance are queued in weekly for checks and rechecks.
                            </p>
                        </div>
{{--                        <a href="{{ route('about') }}" class="theme-btn btn-style-two">Know more about us</a>--}}

                        <h2>Aircraft Specialist</h2>
                        <div class="text text-justify">
                        We bring the swift maintenance for all Aircrafts and ensure maintenance are
                            carried out with standard protocol in place to ensure safety.</div>

                        <h2> Aircraft Consultant</h2>
                        <div class="text text-justify">

                            We ensure flight safety and maintenance are properly
                            managed in the hanger. We also give flight traveling tips and training for certified pilots.</div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Contruction Section-->

    <!--Call To Action Section-->
    <section class="call-to-action-section">
        <div class="auto-container">
            <div class="row clearfix">

                <div class="column col-md-9 col-sm-12 col-xs-12">
                    <h2>
                        For more inquiry please endeavor to write us and let us know how we can be
                        of assistance and we would get back to you as soon as possible.
                    </h2>
                </div>

                <div class="btn-column col-md-3 col-sm-12 col-xs-12">
                    <a href="{{ route('contact') }}" class="theme-btn btn-style-three">Contact Us</a>
                </div>

            </div>
        </div>
    </section>
    <!--Call End To Action Section-->




    <!--Testimonial Section-->
    <section class="testimonial-section">
        <div class="auto-container" style="padding: 0 35px">
            <!--Sec Title Two-->
            <div class="sec-title-two centered">
                <h2>What our client says</h2>
            </div>
            <div class="row">


{{--                <div class="col-md-4 testimonial-block">--}}
{{--                    <div class="inner-box">--}}
{{--                        <div class="image">--}}
{{--                            <img src="images/test.jpg" alt="" />--}}
{{--                        </div>--}}
{{--                        <div class="text">I have dealt with multiple professional organizations over the last 45 years.--}}
{{--                            But only a few of them performed to the level of dedication, responsiveness, thoroughness, diligence, and customer focus that yours has.  Thanks again for your support.--}}
{{--                            Please pass along my appreciation for a job well done to all that helped me through this process. </div>--}}
{{--                        <div class="author-name">- JJ Suarez, Ohio</div>--}}
{{--                        --}}{{--                        <div class="author-designation">Ceo of Mart</div>--}}
{{--                    </div>--}}
{{--                </div>--}}

                <!--Testimonial Block-->
                <div class="col-md-4 testimonial-block">
                    <div class="inner-box">
                        <div class="image">
                            <img src="images/resource/author-1.jpg" alt="" />
                        </div>
                        <div class="text">It was classic maintaining my Aircraft with Aero parts Consult.
                            The response was  VFR fast and effectively. Thank you!

                        </div>
                        <div class="author-name">-  Blaine Sweatt, Florida

                        </div>
{{--                        <div class="author-designation">Ceo of Mart</div>--}}
                    </div>
                </div>

                <!--Testimonial Block-->
                <div class="col-md-4 testimonial-block">
                    <div class="inner-box">
                        <div class="image">
                            <img src="images/resource/author-2.jpg" alt="" />
                        </div>
                        <div class="text">My company was finally able to get a well informed engineer after series of troubles
                            finding an Aeronautical Engineer
                        </div>
                        <div class="author-name">- Malte Lorenz, New York</div>
{{--                        <div class="author-designation">Ceo of Mart</div>--}}
                    </div>
                </div>

                <!--Testimonial Block-->
                <div class="col-md-4 testimonial-block">
                    <div class="inner-box">
                        <div class="image">
                            <img src="images/test.jpg" alt="" />
                        </div>
                        <div class="text">Thanks to this awesome engineer.  He was able to do my Aircraft repainting
                            and oil changing. You are great! </div>
                        <div class="author-name">-  Paul Teirstein, MD, California</div>
{{--                        <div class="author-designation">Ceo of Mart</div>--}}
                    </div>
                </div>

                <!--Testimonial Block-->


            </div>
        </div>
    </section>
    <!--End Testimonial Section-->



    <!--Services Section Two-->
    <section class="services-section-two" style="background-image:url(images/background/1.png)">
        <div class="auto-container">
            <div class="sec-title">
                <h2>Awards & Recognitions</h2>
                <div class="text">
                    Our Expertise has Ranked us as best Safety Trainer and Aircraft Engineer for several years
                </div>
            </div>
{{--            <div class="four-item-carousel owl-carousel owl-theme">--}}
            <div class="row">

                <!--Services Block Two-->
                @foreach($awards as $item)
                    <div class="service-block-two col-md-6">
                        <div class="inner-box">
                            <div class="flip-container" >
                                <div class="flipper">
                                    <div class="front">

                                        <h3>{{ $item['name'] }}</h3>
                                        <div class="text">{{ $item['info'] }}.</div>
                                    </div>

                                    <div class="back">
                                        <div class="overlay-box">
                                            <div class="overlay-inner">
                                                <div class="overlay-content">
                                                    <h4><a href="">{{ $item['name'] }};</a></h4>
                                                    <div class="overlay-text">{{ $item['info'] }}</div>
                                                    {{--                                                    <a href="{{ route('services') }}" class="read-more">Read more</a>--}}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach


            </div>
        </div>
    </section>
    <!--End Services Section Two-->


    @section('hide')
    <!--Team Section-->
    <section class="team-section">
        <div class="auto-container">
            <!--Sec Title-->
            <div class="sec-title">
                <h2>Our Qualified Team</h2>
                <div class="title">Bring to the table win-win survival strategies to ensure proactive domination. </div>
            </div>
            <div class="row clearfix">

                <!--Team Block-->
                <div class="team-block col-lg-3 col-md-4 col-sm-6 col-xs-12">
                    <div class="inner-box">
                        <div class="image">
                            <img src="images/resource/team-1.jpg" alt="" />
                            <div class="overlay-box">
                                <ul class="social-icon-one">
                                    <li><a href="#"><span class="fa fa-twitter"></span></a></li>
                                    <li><a href="#"><span class="fa fa-linkedin-square"></span></a></li>
                                    <li><a href="#"><span class="fa fa-facebook-square"></span></a></li>
                                    <li><a href="#"><span class="fa fa-skype"></span></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="lower-box">
                            <h3><a href="team.html">Robert Charter</a></h3>
                            <div class="designation">Senior Engineer</div>
                        </div>
                    </div>
                </div>

                <!--Team Block-->
                <div class="team-block col-lg-3 col-md-4 col-sm-6 col-xs-12">
                    <div class="inner-box">
                        <div class="image">
                            <img src="images/resource/team-2.jpg" alt="" />
                            <div class="overlay-box">
                                <ul class="social-icon-one">
                                    <li><a href="#"><span class="fa fa-twitter"></span></a></li>
                                    <li><a href="#"><span class="fa fa-linkedin-square"></span></a></li>
                                    <li><a href="#"><span class="fa fa-facebook-square"></span></a></li>
                                    <li><a href="#"><span class="fa fa-skype"></span></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="lower-box">
                            <h3><a href="team.html">Robert Charter</a></h3>
                            <div class="designation">Senior Engineer</div>
                        </div>
                    </div>
                </div>

                <!--Team Block-->
                <div class="team-block col-lg-3 col-md-4 col-sm-6 col-xs-12">
                    <div class="inner-box">
                        <div class="image">
                            <img src="images/resource/team-3.jpg" alt="" />
                            <div class="overlay-box">
                                <ul class="social-icon-one">
                                    <li><a href="#"><span class="fa fa-twitter"></span></a></li>
                                    <li><a href="#"><span class="fa fa-linkedin-square"></span></a></li>
                                    <li><a href="#"><span class="fa fa-facebook-square"></span></a></li>
                                    <li><a href="#"><span class="fa fa-skype"></span></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="lower-box">
                            <h3><a href="team.html">Robert Charter</a></h3>
                            <div class="designation">Senior Engineer</div>
                        </div>
                    </div>
                </div>

                <!--Team Block-->
                <div class="team-block col-lg-3 col-md-4 col-sm-6 col-xs-12">
                    <div class="inner-box">
                        <div class="image">
                            <img src="images/resource/team-4.jpg" alt="" />
                            <div class="overlay-box">
                                <ul class="social-icon-one">
                                    <li><a href="#"><span class="fa fa-twitter"></span></a></li>
                                    <li><a href="#"><span class="fa fa-linkedin-square"></span></a></li>
                                    <li><a href="#"><span class="fa fa-facebook-square"></span></a></li>
                                    <li><a href="#"><span class="fa fa-skype"></span></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="lower-box">
                            <h3><a href="team.html">Robert Charter</a></h3>
                            <div class="designation">Senior Engineer</div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!--End Team Section-->

    <!--News Section-->
    <section class="news-section">
        <div class="auto-container">
            <div class="sec-title">
                <h2>Latest News</h2>
                <div class="title">Bring to the table win-win survival strategies to ensure proactive domination. </div>
            </div>

            <div class="row clearfix">
                <!--Column-->
                <div class="column col-md-8 col-sm-12 col-xs-12">
                    <div class="row clearfix">

                        <!--News Block-->
                        <div class="news-block col-md-6 col-sm-6 col-xs-12">
                            <div class="inner-box">
                                <div class="image">
                                    <a href="blog-detail.html"><img src="images/resource/news-1.jpg" alt="" /></a>
                                    <div class="post-date">26 Aug. 2017</div>
                                </div>
                                <div class="lower-box">
                                    <h3><a href="blog-detail.html">5 powerful ways to do excercise inright way for fitness.</a></h3>
                                    <div class="text">Fed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia.</div>
                                    <a href="blog-detail.html" class="read-more">Read more</a>
                                </div>
                            </div>
                        </div>

                        <!--News Block-->
                        <div class="news-block col-md-6 col-sm-6 col-xs-12">
                            <div class="inner-box">
                                <div class="image">
                                    <a href="blog-detail.html"><img src="images/resource/news-2.jpg" alt="" /></a>
                                    <div class="post-date">26 Aug. 2017</div>
                                </div>
                                <div class="lower-box">
                                    <h3><a href="blog-detail.html">Tea coffee won't fix your energy problem.</a></h3>
                                    <div class="text">Fed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia.</div>
                                    <a href="blog-detail.html" class="read-more">Read more</a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <!--Column-->
                <div class="column col-md-4 col-sm-12 col-xs-12">
                    <div class="sidebar-news" style="background-image:url(images/background/4.jpg)">

                        <!--News Block Two-->
                        <div class="news-block-two">
                            <div class="inner-box">
                                <h3><a href="blog-detail.html">Rest your way to health and vitality for health.</a></h3>
                                <div class="post-date">April 26 2018</div>
                            </div>
                        </div>

                        <!--News Block Two-->
                        <div class="news-block-two">
                            <div class="inner-box">
                                <h3><a href="blog-detail.html">Fat loss, health tips, healthy eating, healthy lifestyle.</a></h3>
                                <div class="post-date">April 26 2018</div>
                            </div>
                        </div>

                        <!--News Block Two-->
                        <div class="news-block-two">
                            <div class="inner-box">
                                <h3><a href="blog-detail.html">Sleep is one of the most important parts of living</a></h3>
                                <div class="post-date">April 26 2018</div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>

        </div>
    </section>
    <!--End News Section-->

@endsection

<!--Renovation Section-->


<section class="renovation-section" style="background-image:url(images/ser/6.jpg)">
    <div class="auto-container">
        <h3> <span>{{ env('exp') }}</span> YEARS AS AN EXPERT AERONAUTICAL ENGINEER </h3>
        <h2>NEXT Generation Aircraft Consultant
        </h2>
        <p style="color: white" class="text-white">As an independent contractor we ensure that individuals are able to manage their aircraft
            and do the necessary repairs for their Aircrafts. Contact us today so we can see how we can be of help. </p>
        <a href="{{ route('contact') }}" class="theme-btn btn-style-one">Contact us now</a>
    </div>
</section>
<!--End Renovation Section-->

@endsection
