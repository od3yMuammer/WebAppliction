@extends('layouts.parent')
@section('content')
    <div data-elementor-type="wp-page" data-elementor-id="850" class="elementor elementor-850">
        <div class="elementor-inner">
            <div class="elementor-section-wrap">
                <section
                    class="elementor-section elementor-top-section elementor-element elementor-element-909045c elementor-section-full_width elementor-section-height-default elementor-section-height-default"
                    data-id="909045c" data-element_type="section">
                    <div class="elementor-container elementor-column-gap-no">
                        <div class="elementor-row">
                            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-5667e80"
                                data-id="5667e80" data-element_type="column">
                                <div class="elementor-column-wrap elementor-element-populated">
                                    <div class="elementor-widget-wrap">
                                        <div class="elementor-element elementor-element-a7dc75a elementor-widget elementor-widget-wazors_banner_slider"
                                            data-id="a7dc75a" data-element_type="widget"
                                            data-widget_type="wazors_banner_slider.default">
                                            <div class="elementor-widget-container">
                                                <section class="main-slider style1">
                                                    <div class="slider-box">
                                                        <div
                                                            class="banner-carousel owl-theme owl-carousel owl-loaded owl-drag">
                                                            <div class="owl-stage-outer">
                                                                <div class="owl-stage"
                                                                    style="transform: translate3d(-2382px, 0px, 0px); transition: all 0s ease 0s; width: 5558px;">




                                                                    @foreach ($slides as $slide)
                                                                        
                                                                    <div class="owl-item animated owl-animated-in fadeIn active"
                                                                    style="width: 794px;">
                                                                    <div class="slide">
                                                                        <div class="image-layer"
                                                                            style="background-image:url({{ url('images_sliders/'.$slide->image_url) }})">
                                                                        </div>
                                                                        <div class="auto-container">
                                                                            <div class="content ">
                                                                                <h3
                                                                                    class="typo-tagline-text typo-tagline-text">
                                                                                    <font
                                                                                        style="vertical-align: inherit;">
                                                                                        <font
                                                                                            style="vertical-align: inherit;">{{ $slide->welcome_txt }}</font>
                                                                                    </font>
                                                                                </h3>
                                                                                <div class="big-title">
                                                                                    <h2
                                                                                        class="typo-header-text typo-header-text">
                                                                                        <font
                                                                                            style="vertical-align: inherit;">
                                                                                            <font
                                                                                                style="vertical-align: inherit;">
                                                                                                {{ $slide->slide_title }} </font>
                                                                                        </font>

                                                                                    </h2>
                                                                                </div>
                                                                                <div class="btns-box">
                                                                                    <a class="btn-one style2"
                                                                                        href="{{ $slide->btn_url }}"
                                                                                        target="_blank"
                                                                                        rel="nofollow"><span
                                                                                            class="txt">
                                                                                            <font
                                                                                                style="vertical-align: inherit;">
                                                                                                <font
                                                                                                    style="vertical-align: inherit;">
                                                                                                    {{ $slide->btn_txt }}
                                                                                                </font>
                                                                                            </font>
                                                                                        </span></a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                    @endforeach



                                                                    


                                                                </div>
                                                            </div>
                                                            <div class="owl-nav"><button type="button"
                                                                    role="presentation" class="owl-prev"><span
                                                                        class="flaticon-next"></span></button><button
                                                                    type="button" role="presentation"
                                                                    class="owl-next"><span
                                                                        class="flaticon-next"></span></button></div>
                                                            <div class="owl-dots"><button role="button"
                                                                    class="owl-dot"><span></span></button><button
                                                                    role="button"
                                                                    class="owl-dot active"><span></span></button><button
                                                                    role="button" class="owl-dot"><span></span></button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </section>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!--<section
                class="elementor-section elementor-top-section elementor-element elementor-element-66e0191 elementor-section-full_width elementor-section-height-default elementor-section-height-default"
                data-id="66e0191" data-element_type="section">
                <div class="elementor-container elementor-column-gap-no">
                    <div class="elementor-row">
                        <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-4023ae1"
                            data-id="4023ae1" data-element_type="column">
                            <div class="elementor-column-wrap elementor-element-populated">
                                <div class="elementor-widget-wrap">
                                    <div class="elementor-element elementor-element-ad89fd1 elementor-widget elementor-widget-wazors_about"
                                        data-id="ad89fd1" data-element_type="widget"
                                        data-widget_type="wazors_about.default">
                                        <div class="elementor-widget-container">
                                            <section class="about-style1-area">
                                                <div class="shape1 wow slideInLeft animated" data-wow-delay="100ms"
                                                    data-wow-duration="2500ms"
                                                    style="visibility: visible; animation-duration: 2500ms; animation-delay: 100ms; animation-name: slideInLeft;">
                                                    <img width="219" height="411"
                                                        src="wp-content/uploads/shape-1.png"
                                                        class="attachment-full size-full" alt="tesy"
                                                        loading="lazy">
                                                </div>
                                                <div class="shape2 wow slideInLeft animated" data-wow-delay="100ms"
                                                    data-wow-duration="3500ms"
                                                    style="visibility: visible; animation-duration: 3500ms; animation-delay: 100ms; animation-name: slideInLeft;">
                                                    <img width="292" height="673"
                                                        src="wp-content/uploads/shape-2.png"
                                                        class="attachment-full size-full" alt=""
                                                        loading="lazy">
                                                </div>
                                                <div class="container">
                                                    <div class="row">
                                                        <div class="col-xl-6">
                                                            <div class="about-style1-content-box">
                                                                <div class="sec-title">
                                                                    <div class="sub-title">
                                                                        <h3 class="typo-tagline-text">
                                                                            <font style="vertical-align: inherit;">
                                                                                <font style="vertical-align: inherit;">
                                                                                    ?????? ?????????? ????????????</font>
                                                                            </font>
                                                                        </h3>
                                                                    </div>
                                                                    <h2 class="typo-header-text">
                                                                        <font style="vertical-align: inherit;">
                                                                            <font style="vertical-align: inherit;">
                                                                                ?????? ???????? ???? </font>
                                                                        </font><br>
                                                                        <font style="vertical-align: inherit;">
                                                                            <font style="vertical-align: inherit;">
                                                                                ?????? ?????????????? ??????????????</font>
                                                                        </font>
                                                                    </h2>
                                                                </div>
                                                                <div class="inner-content">
                                                                    <div class="text">
                                                                        <p>
                                                                            <font style="vertical-align: inherit;">
                                                                                <font style="vertical-align: inherit;">
                                                                                    ???????? ???????????? ???? ?????????????? ??????????????
                                                                                    ?????????? ?????????? ???????????? ?? ??????
                                                                                    ???????????????? ?????????? ?????????????? ???????? ???? ??
                                                                                    ???? ???????? ?????????? ?????? ?????????????? ????
                                                                                    ?????????????? ?????????????????? ???????? ???? ????????
                                                                                    ?????????? ?????????????? ?????? ???? ????.</font>
                                                                            </font>
                                                                        </p>
                                                                    </div>
                                                                    <ul>
                                                                        <li><span class="flaticon-tick"></span>
                                                                            <font style="vertical-align: inherit;">
                                                                                <font style="vertical-align: inherit;">
                                                                                    ?????? ???????????? ?????????????? ????????????????
                                                                                </font>
                                                                            </font>
                                                                        </li>
                                                                        <li><span class="flaticon-tick"></span>
                                                                            <font style="vertical-align: inherit;">
                                                                                <font style="vertical-align: inherit;">
                                                                                    ?????? ???????????? ???????? ?????????? ????????????
                                                                                    ???????? ???????????? ??????????</font>
                                                                            </font>
                                                                        </li>
                                                                        <li><span class="flaticon-tick"></span>
                                                                            <font style="vertical-align: inherit;">
                                                                                <font style="vertical-align: inherit;">
                                                                                    ?????? ???????? ???????? ??????????????</font>
                                                                            </font>
                                                                        </li>
                                                                    </ul>
                                                                    <div class="bottom-box">
                                                                        <div class="icon">
                                                                            <span class=" flaticon-armchair"></span>
                                                                        </div>
                                                                        <div class="title">
                                                                            <h3 class="typo-title-text">
                                                                                <font style="vertical-align: inherit;">
                                                                                    <font
                                                                                        style="vertical-align: inherit;">
                                                                                        ?????????? ???????? ???? 30 ?????????? ????
                                                                                        ???????????? ???????????? ?????????? ?????? ????????
                                                                                        ????????.</font>
                                                                                </font>
                                                                            </h3>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-6">
                                                            <div class="about-style1-image-box">
                                                                <div class="shape3">
                                                                    <img width="193" height="186"
                                                                        src="wp-content/uploads/shape-3.png"
                                                                        class="attachment-full size-full"
                                                                        alt="" loading="lazy">
                                                                </div>
                                                                <div class="main-image">
                                                                    <img width="575" height="585"
                                                                        src="wp-content/uploads/about-1.png"
                                                                        class="attachment-full size-full"
                                                                        alt="" loading="lazy">
                                                                    <div class="icon-box thm-bgclr paroller-2"
                                                                        style="transform: unset; transition: transform 0s linear 0s; will-change: transform;">
                                                                        <span class=" flaticon-wallpaper"></span>
                                                                        <h3>
                                                                            <font style="vertical-align: inherit;">
                                                                                <font style="vertical-align: inherit;">
                                                                                    ?????????? </font>
                                                                            </font><br>
                                                                            <font style="vertical-align: inherit;">
                                                                                <font style="vertical-align: inherit;">
                                                                                    ?????? 1987</font>
                                                                            </font>
                                                                        </h3>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </section>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </section>-->
                <!--<section
                class="elementor-section elementor-top-section elementor-element elementor-element-f1eaf59 elementor-section-full_width elementor-section-height-default elementor-section-height-default"
                data-id="f1eaf59" data-element_type="section">
                <div class="elementor-container elementor-column-gap-no">
                    <div class="elementor-row">
                        <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-9005529"
                            data-id="9005529" data-element_type="column">
                            <div class="elementor-column-wrap elementor-element-populated">
                                <div class="elementor-widget-wrap">
                                    <div class="elementor-element elementor-element-c6df832 elementor-widget elementor-widget-wazors_feature"
                                        data-id="c6df832" data-element_type="widget"
                                        data-widget_type="wazors_feature.default">
                                        <div class="elementor-widget-container">
                                            <section class="featured-style1-area">
                                                <div class="container">
                                                    <div class="row">
                
                
                                                        <div class="col-xl-4 col-lg-4">
                                                            <div class="single-featured-style1 wow fadeInLeft animated"
                                                                data-wow-delay="500ms" data-wow-duration="1500ms"
                                                                style="visibility: visible; animation-duration: 1500ms; animation-delay: 500ms; animation-name: fadeInLeft;">
                                                                <div class="img-holder">
                                                                    <img src="wp-content/uploads/featured-1.jpg"
                                                                        title="???????? -1" alt="???????? -1">
                                                                    <div class="title">
                                                                        <h3><a href="room-wallpaper/" target="_blank"
                                                                                rel="nofollow">
                                                                                <font style="vertical-align: inherit;">
                                                                                    <font
                                                                                        style="vertical-align: inherit;">
                                                                                        ???????? </font>
                                                                                </font><br>
                                                                                <font style="vertical-align: inherit;">
                                                                                    <font
                                                                                        style="vertical-align: inherit;">
                                                                                        ???????????? ????????????</font>
                                                                                </font>
                                                                            </a>
                                                                        </h3>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                
                                                        <div class="col-xl-4 col-lg-4">
                                                            <div class="single-featured-style1 wow fadeInLeft animated"
                                                                data-wow-delay="500ms" data-wow-duration="1500ms"
                                                                style="visibility: visible; animation-duration: 1500ms; animation-delay: 500ms; animation-name: fadeInLeft;">
                                                                <div class="img-holder">
                                                                    <img src="wp-content/uploads/featured-2.jpg"
                                                                        title="???????? -2" alt="???????? -2">
                                                                    <div class="title">
                                                                        <h3><a href="room-wallpaper/" target="_blank"
                                                                                rel="nofollow">
                                                                                <font style="vertical-align: inherit;">
                                                                                </font><br>
                                                                                <font style="vertical-align: inherit;">
                                                                                    <font
                                                                                        style="vertical-align: inherit;">
                                                                                        ?????? ???????? </font>
                                                                                    <font
                                                                                        style="vertical-align: inherit;">
                                                                                        ?????? ??????????</font>
                                                                                </font>
                                                                            </a>
                                                                        </h3>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                
                                                        <div class="col-xl-4 col-lg-4">
                                                            <div class="free-estimate-box text-center"
                                                                style="background-image: url(wp-content/uploads/free-estimate-box-bg.jpg)">
                                                                <div class="icon-box"><span
                                                                        class=" flaticon-alarm-clock"></span>
                                                                </div>
                                                                <h2>
                                                                    <font style="vertical-align: inherit;">
                                                                        <font style="vertical-align: inherit;">
                                                                            ????????????????</font>
                                                                    </font>
                                                                </h2>
                                                                <ul>
                                                                    <li>
                                                                        <p>
                                                                            <font style="vertical-align: inherit;">
                                                                                <font style="vertical-align: inherit;">
                                                                                    ??????????????</font>
                                                                            </font>
                                                                        </p>
                                                                        <h3>
                                                                            <font style="vertical-align: inherit;">
                                                                                <font style="vertical-align: inherit;">
                                                                                    9:00 ???????????? - 6:00 ??????????</font>
                                                                            </font>
                                                                        </h3>
                                                                    </li>
                                                                    <li>
                                                                        <p>
                                                                            <font style="vertical-align: inherit;">
                                                                                <font style="vertical-align: inherit;">
                                                                                    ???????????? ?????? ??????????</font>
                                                                            </font>
                                                                        </p>
                                                                        <h3>
                                                                            <font style="vertical-align: inherit;">
                                                                                <font style="vertical-align: inherit;">
                                                                                    10:00 ???????????? - 4:00 ??????????</font>
                                                                            </font>
                                                                        </h3>
                                                                    </li>
                                                                    <li>
                                                                        <p>
                                                                            <font style="vertical-align: inherit;">
                                                                                <font style="vertical-align: inherit;">
                                                                                    ??????</font>
                                                                            </font>
                                                                        </p>
                                                                        <h3>
                                                                            <font style="vertical-align: inherit;">
                                                                                <font style="vertical-align: inherit;">
                                                                                    ?????????? ??????????</font>
                                                                            </font>
                                                                        </h3>
                                                                    </li>
                                                                </ul>
                                                                <div class="buttom-box">
                                                                    <a class="btn-one" href="contact/"
                                                                        target="_blank" rel="nofollow"><span
                                                                            class="txt">
                                                                            <font style="vertical-align: inherit;">
                                                                                <font style="vertical-align: inherit;">
                                                                                    ???????? ?????? ?????????? ??????????</font>
                                                                            </font>
                                                                        </span></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </section>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </section>-->
                <section
                    class="elementor-section elementor-top-section elementor-element elementor-element-cd353df elementor-section-full_width elementor-section-height-default elementor-section-height-default"
                    data-id="cd353df" data-element_type="section">
                    <div class="elementor-container elementor-column-gap-no">
                        <div class="elementor-row">
                            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-12a5a8a"
                                data-id="12a5a8a" data-element_type="column">
                                <div class="elementor-column-wrap elementor-element-populated">
                                    <div class="elementor-widget-wrap">
                                        <div class="elementor-element elementor-element-a6a9a7f elementor-widget elementor-widget-interior_tab"
                                            data-id="a6a9a7f" data-element_type="widget"
                                            data-widget_type="interior_tab.default">
                                            <div class="elementor-widget-container">
                                                <section class="interior-design-area"
                                                    style="background-image: url(wp-content/uploads/interior-design-area-bg.jpg)">
                                                    <div class="container">
                                                        <div class="row">
                                                            <div class="col-xl-7">
                                                                <div class="interior-design-content-box">
                                                                    <div class="sec-title">
                                                                        <div class="sub-title">
                                                                            <h3 class="typo-tagline-text">
                                                                                <font style="vertical-align: inherit;">
                                                                                    <font style="vertical-align: inherit;">
                                                                                        ???????? ???????? ????????????</font>
                                                                                </font>
                                                                            </h3>
                                                                        </div>
                                                                        <h2 class="typo-header-text">
                                                                            <font style="vertical-align: inherit;">
                                                                                <font style="vertical-align: inherit;">
                                                                                    ???????? ?????? ???????? ?????? ????????????</font>
                                                                            </font>
                                                                        </h2>
                                                                    </div>
                                                                    <div class="interior-design-tab tabs-box">
                                                                        <div class="tab-button-column clearfix">
                                                                            <ul class="tab-buttons clearfix">
                                                                                <li data-tab="#id-1"
                                                                                    class="tab-btn active-btn">
                                                                                    <font style="vertical-align: inherit;">
                                                                                        <font
                                                                                            style="vertical-align: inherit;">
                                                                                            ???????? ????????????</font>
                                                                                    </font>
                                                                                </li>
                                                                                <li data-tab="#id-2" class="tab-btn ">
                                                                                    <font style="vertical-align: inherit;">
                                                                                        <font
                                                                                            style="vertical-align: inherit;">
                                                                                            ???????? ??????????????</font>
                                                                                    </font>
                                                                                </li>
                                                                                <li data-tab="#id-3" class="tab-btn ">
                                                                                    <font style="vertical-align: inherit;">
                                                                                        <font
                                                                                            style="vertical-align: inherit;">
                                                                                            ?????????? ??????????????</font>
                                                                                    </font>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                        <div class="tabs-content">

                                                                            
                                                                            <div class="tab active-tab" id="id-1">
                                                                                <div class="material-tab-content">
                                                                                    <div class="row">
                                                                                        <div class="col-xl-4">
                                                                                            <div class="img-box">
                                                                                                <img src="wp-content/uploads/material-1.png"
                                                                                                    title="???????????? 1"
                                                                                                    alt="???????????? 1">
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="col-xl-8">
                                                                                            <div class="text-box">
                                                                                                <p>
                                                                                                    <font
                                                                                                        style="vertical-align: inherit;">
                                                                                                        <font
                                                                                                            style="vertical-align: inherit;">
                                                                                                            ???????? ?????? ???????? ?????????????? ???????????? ???????? ?????? ???? ?????????? ???????????? ????????????..
                                                                                                        </font>
                                                                                                    </font>
                                                                                                </p>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>

                                                                            <div class="tab" id="id-2">
                                                                                <div class="material-tab-content">
                                                                                    <div class="row">
                                                                                        <div class="col-xl-4">
                                                                                            <div class="img-box">
                                                                                                <img src="wp-content/uploads/material-1.png"
                                                                                                    title="???????????? 1"
                                                                                                    alt="???????????? 1">
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="col-xl-8">
                                                                                            <div class="text-box">
                                                                                                <p>
                                                                                                    <font
                                                                                                        style="vertical-align: inherit;">
                                                                                                        <font
                                                                                                            style="vertical-align: inherit;">
                                                                                                        ???????????? ???????? ???????? ?????????? ???????????????? ?????????? ???????????? ?????????????? ?????? ???????? ?????????? ???? ????????????.. 
                                                                                                        </font>
                                                                                                    </font>
                                                                                                </p>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>

                                                                            <div class="tab" id="id-3">
                                                                                <div class="material-tab-content">
                                                                                    <div class="row">
                                                                                        <div class="col-xl-4">
                                                                                            <div class="img-box">
                                                                                                <img src="wp-content/uploads/material-1.png"
                                                                                                    title="???????????? 1"
                                                                                                    alt="???????????? 1">
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="col-xl-8">
                                                                                            <div class="text-box">
                                                                                                <p>
                                                                                                    <font
                                                                                                        style="vertical-align: inherit;">
                                                                                                        <font
                                                                                                            style="vertical-align: inherit;">
                                                                                                        ???????????? ?????????????? ???????? ???? ???????? ???????? <a href="{{ route('contact.create') }}">???????? ????????</a> ???? ?????????????? ?????? ?????? ??????????????: {{ $settings->phone }}
                                                                                                        </font>
                                                                                                    </font>
                                                                                                </p>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>


                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-xl-5">
                                                                <div class="interior-design-right-content">
                                                                    <ul>
                                                                        <li>
                                                                            <div class="design-single-block">
                                                                                <div class="icon thm-clr">
                                                                                    <span
                                                                                        class=" flaticon-wallpaper-1"></span>
                                                                                </div>
                                                                                <div class="text">
                                                                                    <h3>
                                                                                        <font
                                                                                            style="vertical-align: inherit;">
                                                                                            <font
                                                                                                style="vertical-align: inherit;">
                                                                                                ?????????? ?????????? ????????????
                                                                                            </font>
                                                                                        </font>
                                                                                    </h3>
                                                                                    <p>
                                                                                        <font
                                                                                            style="vertical-align: inherit;">
                                                                                            <font
                                                                                                style="vertical-align: inherit;">
                                                                                                ?????? ?????? ?????????????? ?????? ???????????? ???????? ?????????????? ???????????????? ?????????? ???????? ??????????.</font>
                                                                                        </font>
                                                                                    </p>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                        <li>
                                                                            <div class="design-single-block">
                                                                                <div class="icon thm-clr">
                                                                                    <span
                                                                                        class=" flaticon-wallpaper-2"></span>
                                                                                </div>
                                                                                <div class="text">
                                                                                    <h3>
                                                                                        <font
                                                                                            style="vertical-align: inherit;">
                                                                                            <font
                                                                                                style="vertical-align: inherit;">
                                                                                                ???????? ?????? ???????????? ??????????????
                                                                                            </font>
                                                                                        </font>
                                                                                    </h3>
                                                                                    <p>
                                                                                        <font
                                                                                            style="vertical-align: inherit;">
                                                                                            <font
                                                                                                style="vertical-align: inherit;">
                                                                                                ???????? ???????????????? ???????????? ?????????? ?????????????? ???? ?????? ?????????? ???????????? ??????????????.</font>
                                                                                        </font>
                                                                                    </p>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </section>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!--<section
                class="elementor-section elementor-top-section elementor-element elementor-element-476c253 elementor-section-full_width elementor-section-height-default elementor-section-height-default"
                data-id="476c253" data-element_type="section">
                <div class="elementor-container elementor-column-gap-no">
                    <div class="elementor-row">
                        <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-bce896b"
                            data-id="bce896b" data-element_type="column">
                            <div class="elementor-column-wrap elementor-element-populated">
                                <div class="elementor-widget-wrap">
                                    <div class="elementor-element elementor-element-0a19abe elementor-widget elementor-widget-wazors_projects"
                                        data-id="0a19abe" data-element_type="widget"
                                        data-widget_type="wazors_projects.default">
                                        <div class="elementor-widget-container">
                
                                            <section class="project-style1-area ">
                                                <div class="recent-project-title thm-bgclr text-center paroller-2"
                                                    style="transform: unset; transition: transform 0s linear 0s; will-change: transform;">
                
                                                    <h2 class="typo-title-text clr_white">
                                                        <font style="vertical-align: inherit;">
                                                            <font style="vertical-align: inherit;">
                                                                ???????????????? ??????????????</font>
                                                        </font>
                                                    </h2>
                
                                                </div>
                                                <div class="auto-container-box">
                                                    <div class="row">
                
                                                        <div class="col-xl col-lg-6 col-md-6">
                                                            <div class="single-project-style1">
                                                                <div class="img-holder">
                                                                    <img width="300" height="335"
                                                                        src="wp-content/uploads/project-v1-1.jpg"
                                                                        class="attachment-full size-full"
                                                                        alt="" loading="lazy">
                                                                    <div class="overlay-content">
                                                                        <div class="inner">
                                                                            <h3><a>
                                                                                    <font
                                                                                        style="vertical-align: inherit;">
                                                                                    </font><br>
                                                                                    <font
                                                                                        style="vertical-align: inherit;">
                                                                                        <font
                                                                                            style="vertical-align: inherit;">
                                                                                            ?????????? ???????? </font>
                                                                                        <font
                                                                                            style="vertical-align: inherit;">
                                                                                            ????????????</font>
                                                                                    </font>
                                                                                </a>
                                                                            </h3>
                                                                            <div class="readmore-button">
                                                                                <a><span
                                                                                        class="flaticon-up-arrow"></span></a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                
                
                                                        <div class="col-xl col-lg-6 col-md-6">
                                                            <div class="single-project-style1">
                                                                <div class="img-holder">
                                                                    <img width="300" height="335"
                                                                        src="wp-content/uploads/project-v1-2.jpg"
                                                                        class="attachment-full size-full"
                                                                        alt="" loading="lazy">
                                                                    <div class="overlay-content">
                                                                        <div class="inner">
                                                                            <h3><a>
                                                                                    <font
                                                                                        style="vertical-align: inherit;">
                                                                                    </font><br>
                                                                                    <font
                                                                                        style="vertical-align: inherit;">
                                                                                        <font
                                                                                            style="vertical-align: inherit;">
                                                                                            ?????????? ???????? </font>
                                                                                        <font
                                                                                            style="vertical-align: inherit;">
                                                                                            ????????????</font>
                                                                                    </font>
                                                                                </a>
                                                                            </h3>
                                                                            <div class="readmore-button">
                                                                                <a><span
                                                                                        class="flaticon-up-arrow"></span></a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                
                
                                                        <div class="col-xl col-lg-6 col-md-6">
                                                            <div class="single-project-style1">
                                                                <div class="img-holder">
                                                                    <img width="300" height="335"
                                                                        src="wp-content/uploads/project-v1-3.jpg"
                                                                        class="attachment-full size-full"
                                                                        alt="" loading="lazy">
                                                                    <div class="overlay-content">
                                                                        <div class="inner">
                                                                            <h3><a>
                                                                                    <font
                                                                                        style="vertical-align: inherit;">
                                                                                    </font><br>
                                                                                    <font
                                                                                        style="vertical-align: inherit;">
                                                                                        <font
                                                                                            style="vertical-align: inherit;">
                                                                                            ?????????? ???????? </font>
                                                                                        <font
                                                                                            style="vertical-align: inherit;">
                                                                                            ????????????</font>
                                                                                    </font>
                                                                                </a>
                                                                            </h3>
                                                                            <div class="readmore-button">
                                                                                <a><span
                                                                                        class="flaticon-up-arrow"></span></a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                
                
                                                        <div class="col-xl col-lg-6 col-md-6">
                                                            <div class="single-project-style1">
                                                                <div class="img-holder">
                                                                    <img width="300" height="335"
                                                                        src="wp-content/uploads/project-v1-4.jpg"
                                                                        class="attachment-full size-full"
                                                                        alt="" loading="lazy">
                                                                    <div class="overlay-content">
                                                                        <div class="inner">
                                                                            <h3><a>
                                                                                    <font
                                                                                        style="vertical-align: inherit;">
                                                                                    </font><br>
                                                                                    <font
                                                                                        style="vertical-align: inherit;">
                                                                                        <font
                                                                                            style="vertical-align: inherit;">
                                                                                            ?????????? ???????? </font>
                                                                                        <font
                                                                                            style="vertical-align: inherit;">
                                                                                            ????????????</font>
                                                                                    </font>
                                                                                </a>
                                                                            </h3>
                                                                            <div class="readmore-button">
                                                                                <a><span
                                                                                        class="flaticon-up-arrow"></span></a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                
                
                                                        <div class="col-xl col-lg-6 col-md-6">
                                                            <div class="single-project-style1">
                                                                <div class="img-holder">
                                                                    <img width="300" height="335"
                                                                        src="wp-content/uploads/project-v1-5.jpg"
                                                                        class="attachment-full size-full"
                                                                        alt="" loading="lazy">
                                                                    <div class="overlay-content">
                                                                        <div class="inner">
                                                                            <h3><a>
                                                                                    <font
                                                                                        style="vertical-align: inherit;">
                                                                                    </font><br>
                                                                                    <font
                                                                                        style="vertical-align: inherit;">
                                                                                        <font
                                                                                            style="vertical-align: inherit;">
                                                                                            ?????????? ???????? </font>
                                                                                        <font
                                                                                            style="vertical-align: inherit;">
                                                                                            ????????????</font>
                                                                                    </font>
                                                                                </a>
                                                                            </h3>
                                                                            <div class="readmore-button">
                                                                                <a><span
                                                                                        class="flaticon-up-arrow"></span></a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                
                                                    </div>
                                                </div>
                                            </section>
                
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </section>-->
                <section
                    class="elementor-section elementor-top-section elementor-element elementor-element-3b33b57 elementor-section-full_width elementor-section-height-default elementor-section-height-default"
                    data-id="3b33b57" data-element_type="section">
                    <div class="elementor-container elementor-column-gap-no">
                        <div class="elementor-row">
                            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-7d37326"
                                data-id="7d37326" data-element_type="column">
                                <div class="elementor-column-wrap elementor-element-populated">
                                    <div class="elementor-widget-wrap">
                                        <div class="elementor-element elementor-element-a227b93 elementor-widget elementor-widget-wzors_service_section"
                                            data-id="a227b93" data-element_type="widget"
                                            data-widget_type="wzors_service_section.default">
                                            <div class="elementor-widget-container">
                                                <section class="service-style1-area ">
                                                    <div class="top-gray-bg wow slideInDown animated"
                                                        data-wow-delay="100ms" data-wow-duration="2500ms"
                                                        style="visibility: visible; animation-duration: 2500ms; animation-delay: 100ms; animation-name: slideInDown;">
                                                    </div>
                                                    <div class="container">
                                                        <div class="sec-title style2 text-center">
                                                            <div class="sub-title">
                                                                <h3 class="typo-tagline-text">
                                                                    <font style="vertical-align: inherit;">
                                                                        <font style="vertical-align: inherit;">
                                                                            ?????????? ??????????????</font>
                                                                    </font>
                                                                </h3>
                                                            </div>
                                                            <h2 class="typo-title-text ">
                                                                <font style="vertical-align: inherit;">
                                                                    <font style="vertical-align: inherit;">
                                                                        ?????????????? ???????? ????????????</font>
                                                                </font>
                                                            </h2>
                                                        </div>
                                                        <div class="row">
                                                            @foreach ($companies as $company)
                                                                <div class="col-xl-4 col-lg-4 col-md-12 wow fadeInLeft animated"
                                                                    data-wow-delay="500ms" data-wow-duration="1500ms"
                                                                    style="visibility: visible; animation-duration: 1500ms; animation-delay: 500ms; animation-name: fadeInLeft;">
                                                                    <div class="single-service-style1  text-center">
                                                                        <div class="img-holder">
                                                                            <div class="inner">
                                                                                <img width="330" height="230"
                                                                                    src="{{ url('images_comp/' . $company->image) }}"
                                                                                    class="attachment-full size-full"
                                                                                    style="
                                                         width: 330;
                                                         height: 230;
                                                         object-fit: cover;
                                                         "
                                                                                    alt="" loading="lazy">
                                                                            </div>
                                                                        </div>
                                                                        <div class="text-holder">
                                                                            <div class="inner-text">
                                                                                <h3 class="typo-item_title-text"><a
                                                                                        href="{{ route('companies', $company->id) }}"
                                                                                        target="_self" rel="nofollow">
                                                                                        <font
                                                                                            style="vertical-align: inherit;">
                                                                                            <font
                                                                                                style="vertical-align: inherit;">
                                                                                                {{ $company->name }}</font>
                                                                                        </font>
                                                                                    </a>
                                                                                </h3>
                                                                                <p class="typo-item_content-text">
                                                                                    <font style="vertical-align: inherit;">
                                                                                        <font
                                                                                            style="vertical-align: inherit;">
                                                                                            {{ $company->discription }}
                                                                                        </font>
                                                                                    </font>
                                                                                </p>
                                                                                <div class="readmore-button">
                                                                                    <a href="{{ route('companies', $company->id) }}"
                                                                                        target="_blank"
                                                                                        rel="nofollow"><span
                                                                                            class="flaticon-up-arrow"></span></a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            @endforeach
                                                        </div>
                                                    </div>
                                                </section>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!--<section
                class="elementor-section elementor-top-section elementor-element elementor-element-950c37b elementor-section-full_width elementor-section-height-default elementor-section-height-default"
                data-id="950c37b" data-element_type="section">
                <div class="elementor-container elementor-column-gap-no">
                    <div class="elementor-row">
                        <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-f5e801b"
                            data-id="f5e801b" data-element_type="column">
                            <div class="elementor-column-wrap elementor-element-populated">
                                <div class="elementor-widget-wrap">
                                    <div class="elementor-element elementor-element-ac8847c elementor-widget elementor-widget-wazors_booking_area"
                                        data-id="ac8847c" data-element_type="widget"
                                        data-widget_type="wazors_booking_area.default">
                                        <div class="elementor-widget-container">
                
                                            <section class="booking-area thm-bgclr">
                                                <div class="container">
                                                    <div class="row">
                                                        <div class="col-xl-5 col-lg-4">
                                                            <div class="booking-number-box style2">
                                                                <div class="icon">
                                                                    <span class=" flaticon-time-management"></span>
                                                                </div>
                                                                <div class="title">
                
                                                                    <span class="typo-tagline-text">
                                                                        <font style="vertical-align: inherit;">
                                                                            <font style="vertical-align: inherit;">
                                                                                ???????? ?????????? ????????????</font>
                                                                        </font>
                                                                    </span>
                
                
                                                                    <h2>
                                                                        <a href="tel:6668880000"
                                                                            class="typo-title-text clr_white">
                                                                            <font style="vertical-align: inherit;">
                                                                                <font style="vertical-align: inherit;">
                                                                                    666888 0000</font>
                                                                            </font>
                                                                        </a>
                                                                    </h2>
                
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-7 col-lg-8">
                                                            <div class="booking-content-box style2">
                                                                <div class="text">
                                                                    <p class="typo-content-text">
                                                                        <font style="vertical-align: inherit;">
                                                                            <font style="vertical-align: inherit;">
                                                                                Lorem ipsum dolor sit amet nsectetur
                                                                                cing ndisse suscipit sagitis leo
                                                                                sit.</font>
                                                                        </font>
                                                                    </p>
                                                                </div>
                                                                <div class="buttom-box">
                                                                    <a class="btn-one" href="contact/"
                                                                        target="_blank" rel="nofollow"><span
                                                                            class="txt">
                                                                            <font style="vertical-align: inherit;">
                                                                                <font style="vertical-align: inherit;">
                                                                                    ???????? ?????? ?????????? ??????????</font>
                                                                            </font>
                                                                        </span></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </section>
                
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </section>-->
                <!--<section
                class="elementor-section elementor-top-section elementor-element elementor-element-7551314 elementor-section-full_width elementor-section-height-default elementor-section-height-default"
                data-id="7551314" data-element_type="section">
                <div class="elementor-container elementor-column-gap-no">
                    <div class="elementor-row">
                        <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-f341b64"
                            data-id="f341b64" data-element_type="column">
                            <div class="elementor-column-wrap elementor-element-populated">
                                <div class="elementor-widget-wrap">
                                    <div class="elementor-element elementor-element-254244b elementor-widget elementor-widget-wazors_testimonial"
                                        data-id="254244b" data-element_type="widget"
                                        data-widget_type="wazors_testimonial.default">
                                        <div class="elementor-widget-container">
                
                                            <section class="testimonial-style1-area">
                                                <div class="layer-outer"
                                                    style="background-image: url(wp-content/uploads/testimonial-style1-pattern.png)">
                                                </div>
                                                <div class="container">
                                                    <div class="row">
                                                        <div class="col-xl-6 col-lg-12">
                                                            <div class="testimonial-style1-content">
                                                                <div class="sec-title">
                                                                    <div class="sub-title">
                
                                                                        <h3 class="typo-tagline-text">
                                                                            <font style="vertical-align: inherit;">
                                                                                <font style="vertical-align: inherit;">
                                                                                    ???????????? ????????????</font>
                                                                            </font>
                                                                        </h3>
                
                                                                    </div>
                
                                                                    <h2 class="typo-title-text">
                                                                        <font style="vertical-align: inherit;">
                                                                            <font style="vertical-align: inherit;">
                                                                                ???????? ???????????? ???? ??????????</font>
                                                                        </font>
                                                                    </h2>
                
                                                                </div>
                                                                <div
                                                                    class="testimonial-carousel-rtl owl-carousel owl-theme owl-rtl owl-loaded owl-drag">
                
                
                
                
                
                
                                                                    <div class="owl-stage-outer">
                                                                        <div class="owl-stage"
                                                                            style="transform: translate3d(1320px, 0px, 0px); transition: all 0s ease 0s; width: 3960px;">
                                                                            <div class="owl-item cloned"
                                                                                style="width: 630px; margin-left: 30px;">
                                                                                <div class="single-testimonial-style1">
                                                                                    <div class="text-holder">
                                                                                        <div class="text-box">
                                                                                            <p
                                                                                                class="typo-item_content-text">
                                                                                                <font
                                                                                                    style="vertical-align: inherit;">
                                                                                                    <font
                                                                                                        style="vertical-align: inherit;">
                                                                                                        ?????? ????????
                                                                                                        ???????? ??????????????
                                                                                                        ???? ????????
                                                                                                        ???????????? ??????????
                                                                                                        ?????????????? ??????
                                                                                                        ?????? ??????????.
                                                                                                    </font>
                                                                                                    <font
                                                                                                        style="vertical-align: inherit;">
                                                                                                        ?????? Ben
                                                                                                        ????????????????
                                                                                                        ???????????? ????
                                                                                                        ?????????? ?? ????????
                                                                                                        ???????? ????
                                                                                                        ??????????????
                                                                                                        ?????????????????? ????
                                                                                                        ??????????
                                                                                                        ??????????????.
                                                                                                    </font>
                                                                                                    <font
                                                                                                        style="vertical-align: inherit;">
                                                                                                        ?????? ????????
                                                                                                        ??????.</font>
                                                                                                </font>
                                                                                            </p>
                                                                                        </div>
                                                                                        <div class="client-info">
                                                                                            <div class="image-box">
                                                                                                <img width="80"
                                                                                                    height="80"
                                                                                                    src="wp-content/uploads/tes-v1-1.png"
                                                                                                    class="attachment-full size-full"
                                                                                                    alt=""
                                                                                                    loading="lazy">
                                                                                            </div>
                                                                                            <div class="title-box">
                                                                                                <h3
                                                                                                    class="typo-item_title-text">
                                                                                                    <font
                                                                                                        style="vertical-align: inherit;">
                                                                                                        <font
                                                                                                            style="vertical-align: inherit;">
                                                                                                            ????????????
                                                                                                            ??????????
                                                                                                        </font>
                                                                                                    </font>
                                                                                                </h3>
                                                                                                <span>
                                                                                                    <font
                                                                                                        style="vertical-align: inherit;">
                                                                                                        <font
                                                                                                            style="vertical-align: inherit;">
                                                                                                            ????????
                                                                                                            ????????
                                                                                                        </font>
                                                                                                    </font>
                                                                                                </span>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="owl-item cloned"
                                                                                style="width: 630px; margin-left: 30px;">
                                                                                <div class="single-testimonial-style1">
                                                                                    <div class="text-holder">
                                                                                        <div class="text-box">
                                                                                            <p
                                                                                                class="typo-item_content-text">
                                                                                                <font
                                                                                                    style="vertical-align: inherit;">
                                                                                                    <font
                                                                                                        style="vertical-align: inherit;">
                                                                                                        ?????? ????????
                                                                                                        ???????? ??????????????
                                                                                                        ???? ????????
                                                                                                        ???????????? ??????????
                                                                                                        ?????????????? ??????
                                                                                                        ?????? ??????????.
                                                                                                    </font>
                                                                                                    <font
                                                                                                        style="vertical-align: inherit;">
                                                                                                        ?????? Ben
                                                                                                        ????????????????
                                                                                                        ???????????? ????
                                                                                                        ?????????? ?? ????????
                                                                                                        ???????? ????
                                                                                                        ??????????????
                                                                                                        ?????????????????? ????
                                                                                                        ??????????
                                                                                                        ??????????????.
                                                                                                    </font>
                                                                                                    <font
                                                                                                        style="vertical-align: inherit;">
                                                                                                        ?????? ????????
                                                                                                        ??????.</font>
                                                                                                </font>
                                                                                            </p>
                                                                                        </div>
                                                                                        <div class="client-info">
                                                                                            <div class="image-box">
                                                                                                <img width="80"
                                                                                                    height="80"
                                                                                                    src="wp-content/uploads/tes-v1-1.png"
                                                                                                    class="attachment-full size-full"
                                                                                                    alt=""
                                                                                                    loading="lazy">
                                                                                            </div>
                                                                                            <div class="title-box">
                                                                                                <h3
                                                                                                    class="typo-item_title-text">
                                                                                                    <font
                                                                                                        style="vertical-align: inherit;">
                                                                                                        <font
                                                                                                            style="vertical-align: inherit;">
                                                                                                            ????????????
                                                                                                            ??????????
                                                                                                        </font>
                                                                                                    </font>
                                                                                                </h3>
                                                                                                <span>
                                                                                                    <font
                                                                                                        style="vertical-align: inherit;">
                                                                                                        <font
                                                                                                            style="vertical-align: inherit;">
                                                                                                            ????????
                                                                                                            ????????
                                                                                                        </font>
                                                                                                    </font>
                                                                                                </span>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="owl-item active"
                                                                                style="width: 630px; margin-left: 30px;">
                                                                                <div class="single-testimonial-style1">
                                                                                    <div class="text-holder">
                                                                                        <div class="text-box">
                                                                                            <p
                                                                                                class="typo-item_content-text">
                                                                                                <font
                                                                                                    style="vertical-align: inherit;">
                                                                                                    <font
                                                                                                        style="vertical-align: inherit;">
                                                                                                        ?????? ????????
                                                                                                        ???????? ??????????????
                                                                                                        ???? ????????
                                                                                                        ???????????? ??????????
                                                                                                        ?????????????? ??????
                                                                                                        ?????? ??????????.
                                                                                                    </font>
                                                                                                    <font
                                                                                                        style="vertical-align: inherit;">
                                                                                                        ?????? Ben
                                                                                                        ????????????????
                                                                                                        ???????????? ????
                                                                                                        ?????????? ?? ????????
                                                                                                        ???????? ????
                                                                                                        ??????????????
                                                                                                        ?????????????????? ????
                                                                                                        ??????????
                                                                                                        ??????????????.
                                                                                                    </font>
                                                                                                    <font
                                                                                                        style="vertical-align: inherit;">
                                                                                                        ?????? ????????
                                                                                                        ??????.</font>
                                                                                                </font>
                                                                                            </p>
                                                                                        </div>
                                                                                        <div class="client-info">
                                                                                            <div class="image-box">
                                                                                                <img width="80"
                                                                                                    height="80"
                                                                                                    src="wp-content/uploads/tes-v1-1.png"
                                                                                                    class="attachment-full size-full"
                                                                                                    alt=""
                                                                                                    loading="lazy">
                                                                                            </div>
                                                                                            <div class="title-box">
                                                                                                <h3
                                                                                                    class="typo-item_title-text">
                                                                                                    <font
                                                                                                        style="vertical-align: inherit;">
                                                                                                        <font
                                                                                                            style="vertical-align: inherit;">
                                                                                                            ????????????
                                                                                                            ??????????
                                                                                                        </font>
                                                                                                    </font>
                                                                                                </h3>
                                                                                                <span>
                                                                                                    <font
                                                                                                        style="vertical-align: inherit;">
                                                                                                        <font
                                                                                                            style="vertical-align: inherit;">
                                                                                                            ????????
                                                                                                            ????????
                                                                                                        </font>
                                                                                                    </font>
                                                                                                </span>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="owl-item"
                                                                                style="width: 630px; margin-left: 30px;">
                                                                                <div class="single-testimonial-style1">
                                                                                    <div class="text-holder">
                                                                                        <div class="text-box">
                                                                                            <p
                                                                                                class="typo-item_content-text">
                                                                                                <font
                                                                                                    style="vertical-align: inherit;">
                                                                                                    <font
                                                                                                        style="vertical-align: inherit;">
                                                                                                        ?????? ????????
                                                                                                        ???????? ??????????????
                                                                                                        ???? ????????
                                                                                                        ???????????? ??????????
                                                                                                        ?????????????? ??????
                                                                                                        ?????? ??????????.
                                                                                                    </font>
                                                                                                    <font
                                                                                                        style="vertical-align: inherit;">
                                                                                                        ?????? Ben
                                                                                                        ????????????????
                                                                                                        ???????????? ????
                                                                                                        ?????????? ?? ????????
                                                                                                        ???????? ????
                                                                                                        ??????????????
                                                                                                        ?????????????????? ????
                                                                                                        ??????????
                                                                                                        ??????????????.
                                                                                                    </font>
                                                                                                    <font
                                                                                                        style="vertical-align: inherit;">
                                                                                                        ?????? ????????
                                                                                                        ??????.</font>
                                                                                                </font>
                                                                                            </p>
                                                                                        </div>
                                                                                        <div class="client-info">
                                                                                            <div class="image-box">
                                                                                                <img width="80"
                                                                                                    height="80"
                                                                                                    src="wp-content/uploads/tes-v1-1.png"
                                                                                                    class="attachment-full size-full"
                                                                                                    alt=""
                                                                                                    loading="lazy">
                                                                                            </div>
                                                                                            <div class="title-box">
                                                                                                <h3
                                                                                                    class="typo-item_title-text">
                                                                                                    <font
                                                                                                        style="vertical-align: inherit;">
                                                                                                        <font
                                                                                                            style="vertical-align: inherit;">
                                                                                                            ????????????
                                                                                                            ??????????
                                                                                                        </font>
                                                                                                    </font>
                                                                                                </h3>
                                                                                                <span>
                                                                                                    <font
                                                                                                        style="vertical-align: inherit;">
                                                                                                        <font
                                                                                                            style="vertical-align: inherit;">
                                                                                                            ????????
                                                                                                            ????????
                                                                                                        </font>
                                                                                                    </font>
                                                                                                </span>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="owl-item cloned"
                                                                                style="width: 630px; margin-left: 30px;">
                                                                                <div class="single-testimonial-style1">
                                                                                    <div class="text-holder">
                                                                                        <div class="text-box">
                                                                                            <p
                                                                                                class="typo-item_content-text">
                                                                                                <font
                                                                                                    style="vertical-align: inherit;">
                                                                                                    <font
                                                                                                        style="vertical-align: inherit;">
                                                                                                        ?????? ????????
                                                                                                        ???????? ??????????????
                                                                                                        ???? ????????
                                                                                                        ???????????? ??????????
                                                                                                        ?????????????? ??????
                                                                                                        ?????? ??????????.
                                                                                                    </font>
                                                                                                    <font
                                                                                                        style="vertical-align: inherit;">
                                                                                                        ?????? Ben
                                                                                                        ????????????????
                                                                                                        ???????????? ????
                                                                                                        ?????????? ?? ????????
                                                                                                        ???????? ????
                                                                                                        ??????????????
                                                                                                        ?????????????????? ????
                                                                                                        ??????????
                                                                                                        ??????????????.
                                                                                                    </font>
                                                                                                    <font
                                                                                                        style="vertical-align: inherit;">
                                                                                                        ?????? ????????
                                                                                                        ??????.</font>
                                                                                                </font>
                                                                                            </p>
                                                                                        </div>
                                                                                        <div class="client-info">
                                                                                            <div class="image-box">
                                                                                                <img width="80"
                                                                                                    height="80"
                                                                                                    src="wp-content/uploads/tes-v1-1.png"
                                                                                                    class="attachment-full size-full"
                                                                                                    alt=""
                                                                                                    loading="lazy">
                                                                                            </div>
                                                                                            <div class="title-box">
                                                                                                <h3
                                                                                                    class="typo-item_title-text">
                                                                                                    <font
                                                                                                        style="vertical-align: inherit;">
                                                                                                        <font
                                                                                                            style="vertical-align: inherit;">
                                                                                                            ????????????
                                                                                                            ??????????
                                                                                                        </font>
                                                                                                    </font>
                                                                                                </h3>
                                                                                                <span>
                                                                                                    <font
                                                                                                        style="vertical-align: inherit;">
                                                                                                        <font
                                                                                                            style="vertical-align: inherit;">
                                                                                                            ????????
                                                                                                            ????????
                                                                                                        </font>
                                                                                                    </font>
                                                                                                </span>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="owl-item cloned"
                                                                                style="width: 630px; margin-left: 30px;">
                                                                                <div
                                                                                    class="single-testimonial-style1">
                                                                                    <div class="text-holder">
                                                                                        <div class="text-box">
                                                                                            <p
                                                                                                class="typo-item_content-text">
                                                                                                <font
                                                                                                    style="vertical-align: inherit;">
                                                                                                    <font
                                                                                                        style="vertical-align: inherit;">
                                                                                                        ?????? ????????
                                                                                                        ???????? ??????????????
                                                                                                        ???? ????????
                                                                                                        ???????????? ??????????
                                                                                                        ?????????????? ??????
                                                                                                        ?????? ??????????.
                                                                                                    </font>
                                                                                                    <font
                                                                                                        style="vertical-align: inherit;">
                                                                                                        ?????? Ben
                                                                                                        ????????????????
                                                                                                        ???????????? ????
                                                                                                        ?????????? ?? ????????
                                                                                                        ???????? ????
                                                                                                        ??????????????
                                                                                                        ?????????????????? ????
                                                                                                        ??????????
                                                                                                        ??????????????.
                                                                                                    </font>
                                                                                                    <font
                                                                                                        style="vertical-align: inherit;">
                                                                                                        ?????? ????????
                                                                                                        ??????.</font>
                                                                                                </font>
                                                                                            </p>
                                                                                        </div>
                                                                                        <div class="client-info">
                                                                                            <div class="image-box">
                                                                                                <img width="80"
                                                                                                    height="80"
                                                                                                    src="wp-content/uploads/tes-v1-1.png"
                                                                                                    class="attachment-full size-full"
                                                                                                    alt=""
                                                                                                    loading="lazy">
                                                                                            </div>
                                                                                            <div class="title-box">
                                                                                                <h3
                                                                                                    class="typo-item_title-text">
                                                                                                    <font
                                                                                                        style="vertical-align: inherit;">
                                                                                                        <font
                                                                                                            style="vertical-align: inherit;">
                                                                                                            ????????????
                                                                                                            ??????????
                                                                                                        </font>
                                                                                                    </font>
                                                                                                </h3>
                                                                                                <span>
                                                                                                    <font
                                                                                                        style="vertical-align: inherit;">
                                                                                                        <font
                                                                                                            style="vertical-align: inherit;">
                                                                                                            ????????
                                                                                                            ????????
                                                                                                        </font>
                                                                                                    </font>
                                                                                                </span>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="owl-nav disabled"><button
                                                                            type="button" role="presentation"
                                                                            class="owl-prev"><span
                                                                                class="fa fa-long-arrow-left"></span>
                                                                            <p>
                                                                                <font
                                                                                    style="vertical-align: inherit;">
                                                                                    <font
                                                                                        style="vertical-align: inherit;">
                                                                                        ????????????</font>
                                                                                </font>
                                                                            </p>
                                                                        </button><button type="button"
                                                                            role="presentation"
                                                                            class="owl-next"><span
                                                                                class="fa fa-long-arrow-right right"></span>
                                                                            <p>
                                                                                <font
                                                                                    style="vertical-align: inherit;">
                                                                                    <font
                                                                                        style="vertical-align: inherit;">
                                                                                        ????????????</font>
                                                                                </font>
                                                                            </p>
                                                                        </button></div>
                                                                    <div class="owl-dots disabled"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-6 col-lg-12">
                                                            <div class="testimonial-style2-image-box clearfix">
                                                                <div class="bg-box thm-bgclr"></div>
                                                                <img width="930" height="700"
                                                                    src="wp-content/uploads/tes-style2-image-box-bg.jpg"
                                                                    class="attachment-full size-full" alt=""
                                                                    loading="lazy">
                                                                <div class="title-box">
                                                                    <font style="vertical-align: inherit;">
                                                                        <font style="vertical-align: inherit;">
                                                                            ???????? ??????????????</font>
                                                                    </font>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </section>
                
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </section>-->
                <!--<section
                class="elementor-section elementor-top-section elementor-element elementor-element-32ab36f elementor-section-full_width elementor-section-height-default elementor-section-height-default"
                data-id="32ab36f" data-element_type="section">
                <div class="elementor-container elementor-column-gap-no">
                    <div class="elementor-row">
                        <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-74de32d"
                            data-id="74de32d" data-element_type="column">
                            <div class="elementor-column-wrap elementor-element-populated">
                                <div class="elementor-widget-wrap">
                                    <div class="elementor-element elementor-element-5214d62 elementor-widget elementor-widget-wazors_blog"
                                        data-id="5214d62" data-element_type="widget"
                                        data-widget_type="wazors_blog.default">
                                        <div class="elementor-widget-container">
                                            <section class="blog-style1-area">
                                                <div class="container">
                                                    <div class="sec-title text-center">
                                                        <div class="sub-title">
                                                            <h3 class="blog_heading_two">
                                                                <font style="vertical-align: inherit;">
                                                                    <font style="vertical-align: inherit;">??????????????
                                                                        ????????????????????</font>
                                                                </font>
                                                            </h3>
                                                        </div>
                                                        <h2 class="blog_heading">
                                                            <font style="vertical-align: inherit;">
                                                                <font style="vertical-align: inherit;">????????
                                                                    ??????????????????</font>
                                                            </font>
                                                        </h2>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg-4">
                                                            <div class="single-blog-style1 wow fadeInLeft animated"
                                                                data-wow-delay="0ms" data-wow-duration="1500ms"
                                                                style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: fadeInLeft;">
                                                                <div class="img-holder">
                                                                    <div class="inner">
                                                                        <img loading="lazy" width="370"
                                                                            height="280"
                                                                            src="wp-content/uploads/blog-v2-1-370x280.jpg"
                                                                            class="attachment-wazors-blog-grid size-wazors-blog-grid wp-post-image"
                                                                            alt="">
                                                                        <div class="overlay-icon">
                                                                            <a
                                                                                href="how-to-protect-your-damage-walls-2/"><span
                                                                                    class="flaticon-plus"></span></a>
                                                                        </div>
                                                                        <div class="date-box">
                                                                            <h5> <time class="entry-date published"
                                                                                    datetime="2020-10-05T10:32:12+00:00">
                                                                                    <font
                                                                                        style="vertical-align: inherit;">
                                                                                        <font
                                                                                            style="vertical-align: inherit;">
                                                                                            5 ???????????? 2020</font>
                                                                                    </font>
                                                                                </time></h5>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="text-holder ">
                                                                    <ul class="meta-info">
                                                                        <li><span class="flaticon-user-1"></span><a
                                                                                class="url fn n"
                                                                                href="author/waadmin/">
                                                                                <font
                                                                                    style="vertical-align: inherit;">
                                                                                    <font
                                                                                        style="vertical-align: inherit;">
                                                                                        ???????????? waadmin</font>
                                                                                </font>
                                                                            </a></li>
                                                                        <li><span
                                                                                class="flaticon-speech-bubble-comment"></span><a
                                                                                href="how-to-protect-your-damage-walls-2/#comment-box">
                                                                                <font
                                                                                    style="vertical-align: inherit;">
                                                                                    <font
                                                                                        style="vertical-align: inherit;">
                                                                                        2 ??????????????</font>
                                                                                </font>
                                                                            </a> </li>
                                                                    </ul>
                                                                    <h3 class="blog-title">
                                                                        <a href="how-to-protect-your-damage-walls-2/">
                                                                            <font style="vertical-align: inherit;">
                                                                                <font
                                                                                    style="vertical-align: inherit;">
                                                                                    ?????? ???????? ???????????? ????????????????</font>
                                                                            </font>
                                                                        </a>
                                                                    </h3>
                                                                    <div class="text">
                                                                        <p>
                                                                            <font style="vertical-align: inherit;">
                                                                                <font
                                                                                    style="vertical-align: inherit;">
                                                                                    ???? ???????? ???????????? ???? ?????????? lorem
                                                                                    ipsum ?????????????? ?????????????? ????</font>
                                                                            </font>
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4">
                                                            <div class="single-blog-style1 wow fadeInLeft animated"
                                                                data-wow-delay="300ms" data-wow-duration="1500ms"
                                                                style="visibility: visible; animation-duration: 1500ms; animation-delay: 300ms; animation-name: fadeInLeft;">
                                                                <div class="img-holder">
                                                                    <div class="inner">
                                                                        <img width="370" height="280"
                                                                            src="wp-content/uploads/blog-v2-3-370x280.jpg"
                                                                            class="attachment-wazors-blog-grid size-wazors-blog-grid wp-post-image"
                                                                            alt="" loading="lazy">
                                                                        <div class="overlay-icon">
                                                                            <a
                                                                                href="learn-the-right-way-to-use-wall-sheet-2/"><span
                                                                                    class="flaticon-plus"></span></a>
                                                                        </div>
                                                                        <div class="date-box">
                                                                            <h5> <time class="entry-date published"
                                                                                    datetime="2020-10-05T10:31:52+00:00">
                                                                                    <font
                                                                                        style="vertical-align: inherit;">
                                                                                        <font
                                                                                            style="vertical-align: inherit;">
                                                                                            5 ???????????? 2020</font>
                                                                                    </font>
                                                                                </time></h5>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="text-holder ">
                                                                    <ul class="meta-info">
                                                                        <li><span class="flaticon-user-1"></span><a
                                                                                class="url fn n"
                                                                                href="author/waadmin/">
                                                                                <font
                                                                                    style="vertical-align: inherit;">
                                                                                    <font
                                                                                        style="vertical-align: inherit;">
                                                                                        ???????????? waadmin</font>
                                                                                </font>
                                                                            </a></li>
                                                                        <li><span
                                                                                class="flaticon-speech-bubble-comment"></span><a
                                                                                href="learn-the-right-way-to-use-wall-sheet-2/#comment-box">
                                                                                <font
                                                                                    style="vertical-align: inherit;">
                                                                                    <font
                                                                                        style="vertical-align: inherit;">
                                                                                        3 ??????????????</font>
                                                                                </font>
                                                                            </a> </li>
                                                                    </ul>
                                                                    <h3 class="blog-title">
                                                                        <a
                                                                            href="learn-the-right-way-to-use-wall-sheet-2/">
                                                                            <font style="vertical-align: inherit;">
                                                                                <font
                                                                                    style="vertical-align: inherit;">
                                                                                    ???????? ?????????????? ?????????????? ????????????????
                                                                                    ?????? ????????????</font>
                                                                            </font>
                                                                        </a>
                                                                    </h3>
                                                                    <div class="text">
                                                                        <p>
                                                                            <font style="vertical-align: inherit;">
                                                                                <font
                                                                                    style="vertical-align: inherit;">
                                                                                    ???? ???????? ???????????? ???? ?????????? lorem
                                                                                    ipsum ?????????????? ?????????????? ????</font>
                                                                            </font>
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4">
                                                            <div class="single-blog-style1 wow fadeInLeft animated"
                                                                data-wow-delay="600ms" data-wow-duration="1500ms"
                                                                style="visibility: visible; animation-duration: 1500ms; animation-delay: 600ms; animation-name: fadeInLeft;">
                                                                <div class="img-holder">
                                                                    <div class="inner">
                                                                        <img width="370" height="280"
                                                                            src="wp-content/uploads/blog-v2-2-370x280.jpg"
                                                                            class="attachment-wazors-blog-grid size-wazors-blog-grid wp-post-image"
                                                                            alt="" loading="lazy">
                                                                        <div class="overlay-icon">
                                                                            <a
                                                                                href="difference-between-wallpaper-and-sheets-2/"><span
                                                                                    class="flaticon-plus"></span></a>
                                                                        </div>
                                                                        <div class="date-box">
                                                                            <h5> <time class="entry-date published"
                                                                                    datetime="2020-10-05T10:31:18+00:00">
                                                                                    <font
                                                                                        style="vertical-align: inherit;">
                                                                                        <font
                                                                                            style="vertical-align: inherit;">
                                                                                            5 ???????????? 2020</font>
                                                                                    </font>
                                                                                </time></h5>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="text-holder ">
                                                                    <ul class="meta-info">
                                                                        <li><span class="flaticon-user-1"></span><a
                                                                                class="url fn n"
                                                                                href="author/waadmin/">
                                                                                <font
                                                                                    style="vertical-align: inherit;">
                                                                                    <font
                                                                                        style="vertical-align: inherit;">
                                                                                        ???????????? waadmin</font>
                                                                                </font>
                                                                            </a></li>
                                                                        <li><span
                                                                                class="flaticon-speech-bubble-comment"></span><a
                                                                                href="difference-between-wallpaper-and-sheets-2/#comment-box">
                                                                                <font
                                                                                    style="vertical-align: inherit;">
                                                                                    <font
                                                                                        style="vertical-align: inherit;">
                                                                                        1 ??????????</font>
                                                                                </font>
                                                                            </a> </li>
                                                                    </ul>
                                                                    <h3 class="blog-title">
                                                                        <a
                                                                            href="difference-between-wallpaper-and-sheets-2/">
                                                                            <font style="vertical-align: inherit;">
                                                                                <font
                                                                                    style="vertical-align: inherit;">
                                                                                    ?????????? ?????? ?????? ???????????? ????????????????
                                                                                </font>
                                                                            </font>
                                                                        </a>
                                                                    </h3>
                                                                    <div class="text">
                                                                        <p>
                                                                            <font style="vertical-align: inherit;">
                                                                                <font
                                                                                    style="vertical-align: inherit;">
                                                                                    ???? ???????? ???????????? ???? ?????????? lorem
                                                                                    ipsum ?????????????? ?????????????? ????</font>
                                                                            </font>
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </section>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </section>-->
                <section
                    class="elementor-section elementor-top-section elementor-element elementor-element-d50b037 elementor-section-full_width elementor-section-height-default elementor-section-height-default"
                    data-id="d50b037" data-element_type="section">
                    <div class="elementor-container elementor-column-gap-no">
                        <div class="elementor-row">
                            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-604aa29"
                                data-id="604aa29" data-element_type="column">
                                <div class="elementor-column-wrap elementor-element-populated">
                                    <div class="elementor-widget-wrap">
                                        <div class="elementor-element elementor-element-2e9361f elementor-widget elementor-widget-wazors_fact_counter"
                                            data-id="2e9361f" data-element_type="widget"
                                            data-widget_type="wazors_fact_counter.default">
                                            <div class="elementor-widget-container">
                                                <section class="fact-counter-area">
                                                    <div class="shape wow slideInLeft animated" data-wow-delay="100ms"
                                                        data-wow-duration="3500ms"
                                                        style="visibility: visible; animation-duration: 3500ms; animation-delay: 100ms; animation-name: slideInLeft;">
                                                        <img width="292" height="673"
                                                            src="wp-content/uploads/shape-2.png"
                                                            class="attachment-full size-full" alt=""
                                                            loading="lazy">
                                                    </div>
                                                    <div class="container">
                                                        <div class="row">
                                                            <div class="col-xl-12">
                                                                <div class="fact-counter">
                                                                    <div class="fact-counter-pattern"
                                                                        style="background-image: url(wp-content/uploads/fact-counter-area-bg.png)">
                                                                    </div>
                                                                    <ul class="fact-counter-box clearfix">
                                                                        <li class="single-fact-counter text-center wow fadeInLeft animated"
                                                                            data-wow-delay="500ms"
                                                                            data-wow-duration="1500ms"
                                                                            style="visibility: visible; animation-duration: 1500ms; animation-delay: 500ms; animation-name: fadeInLeft;">
                                                                            <div class="count-box counted">
                                                                                <h2>
                                                                                    <span
                                                                                        class="typo-item_content-text timer"
                                                                                        data-from="1" data-to="8705"
                                                                                        data-speed="5000"
                                                                                        data-refresh-interval="50">
                                                                                        <font
                                                                                            style="vertical-align: inherit;">
                                                                                            <font
                                                                                                style="vertical-align: inherit;">
                                                                                                8705</font>
                                                                                        </font>
                                                                                    </span>
                                                                                    <span class="icon">
                                                                                        <i class="flaticon-plus"></i>
                                                                                    </span>
                                                                                </h2>
                                                                                <div class="sub-title">
                                                                                    <h5 class="typo-item_title-text">
                                                                                        <font
                                                                                            style="vertical-align: inherit;">
                                                                                            <font
                                                                                                style="vertical-align: inherit;">
                                                                                                ???????????????? ??????????????</font>
                                                                                        </font>
                                                                                    </h5>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                        <li class="single-fact-counter text-center wow fadeInLeft animated"
                                                                            data-wow-delay="500ms"
                                                                            data-wow-duration="1500ms"
                                                                            style="visibility: visible; animation-duration: 1500ms; animation-delay: 500ms; animation-name: fadeInLeft;">
                                                                            <div class="count-box counted">
                                                                                <h2>
                                                                                    <span
                                                                                        class="typo-item_content-text timer"
                                                                                        data-from="1" data-to="487"
                                                                                        data-speed="5000"
                                                                                        data-refresh-interval="50">
                                                                                        <font
                                                                                            style="vertical-align: inherit;">
                                                                                            <font
                                                                                                style="vertical-align: inherit;">
                                                                                                487</font>
                                                                                        </font>
                                                                                    </span>
                                                                                    <span class="icon">
                                                                                        <i class="flaticon-plus"></i>
                                                                                    </span>
                                                                                </h2>
                                                                                <div class="sub-title">
                                                                                    <h5 class="typo-item_title-text">
                                                                                        <font
                                                                                            style="vertical-align: inherit;">
                                                                                            <font
                                                                                                style="vertical-align: inherit;">
                                                                                                ?????????????? ??????????????</font>
                                                                                        </font>
                                                                                    </h5>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                        <li class="single-fact-counter text-center wow fadeInLeft animated"
                                                                            data-wow-delay="500ms"
                                                                            data-wow-duration="1500ms"
                                                                            style="visibility: visible; animation-duration: 1500ms; animation-delay: 500ms; animation-name: fadeInLeft;">
                                                                            <div class="count-box counted">
                                                                                <h2>
                                                                                    <span
                                                                                        class="typo-item_content-text timer"
                                                                                        data-from="1" data-to="620"
                                                                                        data-speed="5000"
                                                                                        data-refresh-interval="50">
                                                                                        <font
                                                                                            style="vertical-align: inherit;">
                                                                                            <font
                                                                                                style="vertical-align: inherit;">
                                                                                                620</font>
                                                                                        </font>
                                                                                    </span>
                                                                                    <span class="icon">
                                                                                        <i class="flaticon-plus"></i>
                                                                                    </span>
                                                                                </h2>
                                                                                <div class="sub-title">
                                                                                    <h5 class="typo-item_title-text">
                                                                                        <font
                                                                                            style="vertical-align: inherit;">
                                                                                            <font
                                                                                                style="vertical-align: inherit;">
                                                                                                ?????????????? ??????????????</font>
                                                                                        </font>
                                                                                    </h5>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                        <li class="single-fact-counter text-center wow fadeInLeft animated"
                                                                            data-wow-delay="500ms"
                                                                            data-wow-duration="1500ms"
                                                                            style="visibility: visible; animation-duration: 1500ms; animation-delay: 500ms; animation-name: fadeInLeft;">
                                                                            <div class="count-box counted">
                                                                                <h2>
                                                                                    <span
                                                                                        class="typo-item_content-text timer"
                                                                                        data-from="1" data-to="9704"
                                                                                        data-speed="5000"
                                                                                        data-refresh-interval="50">
                                                                                        <font
                                                                                            style="vertical-align: inherit;">
                                                                                            <font
                                                                                                style="vertical-align: inherit;">
                                                                                                9704</font>
                                                                                        </font>
                                                                                    </span>
                                                                                    <span class="icon">
                                                                                        <i class="flaticon-plus"></i>
                                                                                    </span>
                                                                                </h2>
                                                                                <div class="sub-title">
                                                                                    <h5 class="typo-item_title-text">
                                                                                        <font
                                                                                            style="vertical-align: inherit;">
                                                                                            <font
                                                                                                style="vertical-align: inherit;">
                                                                                                ?????????????? ??????????????</font>
                                                                                        </font>
                                                                                    </h5>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </section>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!--<section
                class="elementor-section elementor-top-section elementor-element elementor-element-47e1f7a elementor-section-full_width elementor-section-height-default elementor-section-height-default"
                data-id="47e1f7a" data-element_type="section">
                <div class="elementor-container elementor-column-gap-no">
                    <div class="elementor-row">
                        <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-9062992"
                            data-id="9062992" data-element_type="column">
                            <div class="elementor-column-wrap elementor-element-populated">
                                <div class="elementor-widget-wrap">
                                    <div class="elementor-element elementor-element-f9538a8 elementor-widget elementor-widget-partner_area"
                                        data-id="f9538a8" data-element_type="widget"
                                        data-widget_type="partner_area.default">
                                        <div class="elementor-widget-container">
                
                                            <section class="partner-style2-area">
                                                <div class="container">
                                                    <div class="row">
                                                        <div class="col-xl-12">
                                                            <div class="partner-box">
                
                                                                <div class="single-partner-logo-box">
                                                                    <a>
                                                                        <img width="234" height="80"
                                                                            src="wp-content/uploads/brand-2.png"
                                                                            class="attachment-full size-full"
                                                                            alt="" loading="lazy"> </a>
                                                                </div>
                
                                                                <div class="single-partner-logo-box">
                                                                    <a>
                                                                        <img width="234" height="80"
                                                                            src="wp-content/uploads/brand-1.png"
                                                                            class="attachment-full size-full"
                                                                            alt="" loading="lazy"> </a>
                                                                </div>
                
                                                                <div class="single-partner-logo-box">
                                                                    <a>
                                                                        <img width="234" height="80"
                                                                            src="wp-content/uploads/brand-3.png"
                                                                            class="attachment-full size-full"
                                                                            alt="" loading="lazy"> </a>
                                                                </div>
                
                                                                <div class="single-partner-logo-box">
                                                                    <a>
                                                                        <img width="234" height="80"
                                                                            src="wp-content/uploads/brand-4.png"
                                                                            class="attachment-full size-full"
                                                                            alt="" loading="lazy"> </a>
                                                                </div>
                
                                                                <div class="single-partner-logo-box">
                                                                    <a>
                                                                        <img width="234" height="80"
                                                                            src="wp-content/uploads/brand-5.png"
                                                                            class="attachment-full size-full"
                                                                            alt="" loading="lazy"> </a>
                                                                </div>
                
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </section>
                
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </section>-->
                <!--<section
                class="elementor-section elementor-top-section elementor-element elementor-element-ce33f96 elementor-section-full_width elementor-section-height-default elementor-section-height-default"
                data-id="ce33f96" data-element_type="section">
                <div class="elementor-container elementor-column-gap-no">
                    <div class="elementor-row">
                        <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-d326bc3"
                            data-id="d326bc3" data-element_type="column">
                            <div class="elementor-column-wrap elementor-element-populated">
                                <div class="elementor-widget-wrap">
                                    <div class="elementor-element elementor-element-71eac87 elementor-widget elementor-widget-wazors_discover_area"
                                        data-id="71eac87" data-element_type="widget"
                                        data-widget_type="wazors_discover_area.default">
                                        <div class="elementor-widget-container">
                                            <section class="discover-area"
                                                style="background-image: url(wp-content/uploads/discover-area-bg.jpg)">
                                                <div class="container">
                                                    <div class="row">
                                                        <div class="col-xl-7">
                                                            <div class="discover-content-box">
                                                                <h2 class="discover_heading">
                                                                    <font style="vertical-align: inherit;">
                                                                        <font style="vertical-align: inherit;">??????
                                                                            ???????? ?????????????? ?????? ???????????????? ???????? </font>
                                                                        <font style="vertical-align: inherit;">
                                                                            ???????? </font>
                                                                    </font><br>
                                                                    <font style="vertical-align: inherit;">
                                                                        <font style="vertical-align: inherit;">
                                                                            ?????????? ??????????</font>
                                                                    </font><br>
                                                                    <font style="vertical-align: inherit;"></font>
                                                                </h2>
                                                                <div class="buttom-box">
                                                                    <a class="btn-one" href="services/"
                                                                        target="_blank" rel="nofollow"><span
                                                                            class="txt">
                                                                            <font style="vertical-align: inherit;">
                                                                                <font
                                                                                    style="vertical-align: inherit;">
                                                                                    ?????????? ????????</font>
                                                                            </font>
                                                                        </span></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-5">
                                                            <div class="discover-image-box">
                                                                <div class="image1 aos-init" data-aos="fade-left"
                                                                    data-aos-easing="linear"
                                                                    data-aos-duration="1500">
                                                                    <img width="300" height="300"
                                                                        src="wp-content/uploads/discover-1.jpg"
                                                                        class="attachment-full size-full"
                                                                        alt="" loading="lazy">
                                                                </div>
                                                                <div class="image2 paroller-2"
                                                                    style="transform: unset; transition: transform 0s linear 0s; will-change: transform;">
                                                                    <img width="300" height="300"
                                                                        src="wp-content/uploads/discover-2.jpg"
                                                                        class="attachment-full size-full"
                                                                        alt="" loading="lazy">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </section>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </section>-->
            </div>
        </div>
    </div>
@endsection
