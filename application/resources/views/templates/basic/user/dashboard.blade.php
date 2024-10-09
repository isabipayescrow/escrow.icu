@extends($activeTemplate.'layouts.master')
@section('content')


    <div class="dashboard py-80 section-bg">
        <div class="container">
            <div class="row">
                <br>                <br>                
                <h2  class="dashboard-body">Welcome back {{__($user->firstname)}} &#128540; <!-- {{__($pageTitle)}} --> </h2>
                <div class="col-xl-3 col-lg-4 pe-xl-4">
                    @include($activeTemplate.'partials.sidebar')
                </div>
                <div class="col-xl-9 col-lg-12">
                    <div class="dashboard-body">
                        <!-- <div class="dashboard-body__bar">
                            <span class="dashboard-body__bar-icon"><i class="las la-bars"></i></span> -->
                        </div>
                        <div class="row gy-4 justify-content-center">
                            <div class="col-xl-4 col-lg-6 col-sm-6">
                                <div class="dashboard-card card-info">
                                    <div class="dashboard-card__icon">
                                        <i class="las la-hand-holding-usd"></i>
                                    </div>
                                    <div class="dashboard-card__content">
                                        <h5 class="dashboard-card__title">@lang('Wallet Balance')</h5>
                                        <h4 class="dashboard-card__amount">{{showAmount($user['balance'])}} {{$general->cur_text}} </h4>
                                    </div>
                                     <div class="dashboard-card__link mt-4">
                                        <a href="{{route('user.deposit')}}">
                                            <i class="las la-link"></i> @lang('Add')
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-6 col-sm-6">
                                <div class="dashboard-card card-violet">
                                    <div class="dashboard-card__link mt-4">
                                        <a href="{{route('user.deposit.pending.all')}}">
                                            <i class="las la-link"></i> @lang('View All')
                                        </a>
                                    </div>
                                    <div class="dashboard-card__icon">
                                        <i class="las la-info-circle"></i>
                                    </div>
                                    <div class="dashboard-card__content">
                                        <h5 class="dashboard-card__title">@lang('Pending Deposits')</h5>
                                        <h4 class="dashboard-card__amount">{{__($user['deposit_pending'])}}</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-6 col-sm-6">
                                <div class="dashboard-card card-success">
                                    <div class="dashboard-card__link mt-4">
                                        <a href="{{route('user.withdraw.pending.all')}}">
                                            <i class="las la-link"></i> @lang('View All')
                                        </a>
                                    </div>
                                    <div class="dashboard-card__icon">
                                        <i class="las la-file-invoice-dollar"></i>
                                    </div>
                                    <div class="dashboard-card__content">
                                        <h5 class="dashboard-card__title">@lang('Pending Withdrawals')</h5>
                                        <h4 class="dashboard-card__amount">{{__($user['withdraw_pending'])}}</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-6 col-sm-6">
                                <div class="dashboard-card card-violet-1">
                                    <div class="dashboard-card__link mt-4">
                                        <a href="{{route('user.escrow.list')}}">
                                            <i class="las la-link"></i> @lang('View All')
                                        </a>
                                    </div>
                                    <div class="dashboard-card__icon">
                                        <i class="la la-handshake"></i>
                                    </div>
                                    <div class="dashboard-card__content">
                                        <h5 class="dashboard-card__title">@lang('Total Escrow')</h5>
                                        <h4 class="dashboard-card__amount">{{__($escrow['total'])}}</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-6 col-sm-6">
                                <div class="dashboard-card card-warning">
                                    <div class="dashboard-card__link mt-4">
                                        <a href="{{route('user.escrow.list','not_accepted')}}">
                                            <i class="las la-link"></i> @lang('View All')
                                        </a>
                                    </div>
                                    <div class="dashboard-card__icon">
                                        <i class="las la-radiation-alt"></i>
                                    </div>
                                    <div class="dashboard-card__content">
                                        <h5 class="dashboard-card__title">@lang('Declined Escrow')</h5>
                                        <h4 class="dashboard-card__amount">{{__($escrow['not_accepted'])}}</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-6 col-sm-6">
                                <div class="dashboard-card card-info">
                                    <div class="dashboard-card__link mt-4">
                                        <a href="{{route('user.escrow.list','accepted')}}">
                                            <i class="las la-link"></i> @lang('View All')
                                        </a>
                                    </div>
                                    <div class="dashboard-card__icon">
                                        <i class="las la-redo-alt"></i>
                                    </div>
                                    <div class="dashboard-card__content">
                                        <h5 class="dashboard-card__title">@lang('Running Escrow')</h5>
                                        <h4 class="dashboard-card__amount">{{__($escrow['running'])}}</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-6 col-sm-6">
                                <div class="dashboard-card card-success-1">
                                    <div class="dashboard-card__link">
                                        <a href="{{route('user.escrow.list','dispatched')}}">
                                            <i class="las la-link"></i> @lang('View All')
                                        </a>
                                    </div>
                                    <div class="dashboard-card__icon">
                                        <i class="lar la-check-circle"></i>
                                    </div>
                                    <div class="dashboard-card__content">
                                        <h5 class="dashboard-card__title">@lang('Completed Escrow')</h5>
                                        <h4 class="dashboard-card__amount">{{__($escrow['dispatched'])}}</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-6 col-sm-6">
                                <div class="dashboard-card card-info">
                                    <div class="dashboard-card__link">
                                        <a href="{{route('user.escrow.list','disputed')}}">
                                            <i class="las la-link"></i> @lang('View All')
                                        </a>
                                    </div>
                                    <div class="dashboard-card__icon">
                                        <i class="las la-bomb"></i>
                                    </div>
                                    <div class="dashboard-card__content">
                                        <h5 class="dashboard-card__title">@lang('Disputed Escrow ')</h5>
                                        <h4 class="dashboard-card__amount">{{__($escrow['disputed'])}}</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-6 col-sm-6">
                                <div class="dashboard-card card-danger">
                                    <div class="dashboard-card__link">
                                        <a href="{{route('user.escrow.list','canceled')}}">
                                            <i class="las la-link"></i> @lang('View All')
                                        </a>
                                    </div>
                                    <div class="dashboard-card__icon">
                                        <i class="las la-times"></i>
                                    </div>
                                    <div class="dashboard-card__content">
                                        <h5 class="dashboard-card__title">@lang('Canceled Escrow ')</h5>
                                        <h4 class="dashboard-card__amount">{{__($escrow['canceled'])}}</h4>
                                    </div>
                                </div>
                                <br>    <br>    <br>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/66de8486ea492f34bc0fb92d/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
@endsection
