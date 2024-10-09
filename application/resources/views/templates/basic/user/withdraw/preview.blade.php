@extends($activeTemplate.'layouts.master')
@section('content')

<div class="dashboard py-80 section-bg">
    <div class="container">
        <div class="row ">
            <div class="col-xl-3 col-lg-4 pe-xl-4">
                @include($activeTemplate.'partials.sidebar')
            </div>

            <div class="col-xl-9 col-lg-12">
                <div class="dashboard-body">
                   <!-- <div class="dashboard-body__bar">
                        <span class="dashboard-body__bar-icon"><i class="las la-bars"></i></span>
                    </div> -->
                    <div class="row gy-4">
                        <div class="col-xl-9 col-lg-10">
                            <div class="contactus-form">
                                <h3 class="contact__title"> @lang('Withdraw Using') {{ $withdraw->method->name }}</h3>
                                <form action="{{route('user.withdraw.submit')}}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="mb-2">
                                        @php
                                        echo $withdraw->method->description;
                                        @endphp
                                    </div>
                                    <x-custom-form identifier="id" identifierValue="{{ $withdraw->method->form_id }}"></x-custom-form>
                                    @if(auth()->user()->ts)
                                    <div class="form-group ">
                                        <label>@lang('Google Authenticator Code')</label>
                                        <input type="text" name="authenticator_code" class="form-control form--control" required>
                                    </div>
                                    @endif
                                    <div class="form-group mt-2">
                                        <button type="submit" class="btn btn--base w-100">@lang('Proceed')</button>
                                    </div>
                                         <br>
                                        <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="https://escrow.icu/wp-content/uploads/2024/09/20240928_134842-scaled.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="https://escrow.icu/wp-content/uploads/2024/09/1000004607-scaled.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="https://escrow.icu/wp-content/uploads/2024/09/20240928_134717-scaled.jpg" class="d-block w-100" alt="...">
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
@endsection
