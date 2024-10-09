@extends($activeTemplate.'layouts.master')
@section('content')
<div class="dashboard py-80 section-bg">
    <div class="container">
        <div class="row">
            <div class="col-xl-3 col-lg-4 pe-xl-4">
                @include($activeTemplate.'partials.sidebar')
            </div>
            <div class="col-xl-9 col-lg-12">
                <div class="dashboard-body">
                    <!-- <div class="dashboard-body__bar">
                        <span class="dashboard-body__bar-icon"><i class="las la-bars"></i></span>
                    </div>  -->
                    <div class="row gy-4">
                        <div class="col-xl-9 col-lg-10">
                            <div class="banner-form-wrap">
                                <div class="contactus-form">
                                    <h3 class="contact__title"> @lang('Create New Escrow')</h3>
                                    <form action="{{route('user.escrow.info')}}" method="post" autocomplete="off">
                                        @csrf
                                        <div class="row gy-md-4 gy-3">
                                        <div class="col-sm-12">
                                            <select class="select form--control" name="type">
                                                                                <option selected="" value="2">@lang('I Am Buying')</option>
                                                <option  value="1">@lang('I Am Selling')</option>
                                            </select>
                                            </div>
                                        <div class="col-sm-12">
                                                <select class="select form--control" name="category_id">
                                                    @foreach ($categories as $item)
                                                    <option value="{{$item->id}}">{{__($item->name)}}</option>
                                                    @endforeach

                                                </select>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="input-group escro-doller">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">{{__($general->cur_sym)}}</span>
                                                </div>
                                                <input type="text" name="amount" class="form--control" placeholder="@lang('For the Amount Of') {{__($general->cur_text)}}">
                                            </div>
                                        </div>


                                            <div class="col-sm-12">
                                                <button class=" btn btn--base w-100"> @lang('Continue')</button>
                                            </div>
                                        </div>
                                        <br>
                                        <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
     <a href="https://escrow.icu/how-to-open-a-solflare-solana-wallet-address-a-beginners-guide/" target="_blank"><img src="https://escrow.icu/wp-content/uploads/2024/09/20240928_134842-scaled.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
         <a href="https://escrow.icu/how-isabipay-escrow-ensures-secure-online-transactions/" target="_blank"><img src="https://escrow.icu/wp-content/uploads/2024/09/1000004607-scaled.jpg" class="d-block w-100" alt="..."> </a> 
    </div>
    <div class="carousel-item">
        <a href="https://escrow.icu/why-you-should-use-escrow-for-peer-to-peer-transactions/" target="_blank"> <img src="https://escrow.icu/storage/2024/09/1000004609-1024x536.jpg" class="d-block w-100" alt="...">
    </div>
      <div class="carousel-item">
        <a href="https://escrow.icu/why-you-should-use-escrow-for-peer-to-peer-transactions/" target="_blank"> <img src="https://escrow.icu/storage/2024/09/20240928_134717-1024x536.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

