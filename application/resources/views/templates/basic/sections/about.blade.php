@php
$about = getContent('about.content',true);
$pages = App\Models\Page::get();
@endphp

<div class="about-section section-bg py-80">
    <div class="container">
        <div class="row gy-4 align-items-center flex-wrap-reverse">
            <div class="col-lg-6">
                <div class="about-thumb">
                    <div class="about-thumb__video">
                        <div class="popup-vide-wrap">
                            <div class="video-main">
                                <div class="promo-video">
                                    <div class="waves-block">
                                        <div class="waves wave-1"></div>
                                        <div class="waves wave-2"></div>
                                        <div class="waves wave-3"></div>
                                    </div>
                                </div>
                                <a class="play-video popup_video" data-fancybox=""
                                    href="{{ $about->data_values->video_link }}">
                                    <span class="play-btn"> <i class="fa fa-play"></i></span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="about-thumb__inner">

                        <img src="{{getImage(getFilePath('frontend').'/about/'.$about->data_values->about_image)}}"
                            alt="">
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="about-right-content">
                    <div class="section-heading">
                       <h2>Buy Crypto with Card</h2><br><iframe width="100%" height="500" frameborder='none' allow="camera" src="https://widget.changelly.com?from=usdto=sol&amount=500&address=&fromDefault=usd&toDefault=sol&merchant_id=XQHabdPnfWNlNbW8&payment_id=&v=3&type=no-rev-share&color=4682B4&headerId=1&logo=hide&buyButtonTextId=2">Can't load widget</iframe>
<br><br><br>
<!--
                        <span class="section-heading__subtitle">{{__($about->data_values->subheading)}}</span>
                        <h2 class="section-heading__title ">{{__($about->data_values->heading)}}</h2>
                        <p class="section-heading__desc mb-30">{{__($about->data_values->description)}}</p>

                        @foreach ($pages as $page)
                        @if($page->slug == 'about')
                        <a href="{{route('pages',$page->slug)}}"
                            class="btn btn--base">{{__($about->data_values->subheading)}}</a>
                        @endif
                        @endforeach -->

                    </div> 
                </div>
            </div>
        </div>
    </div>
</div>