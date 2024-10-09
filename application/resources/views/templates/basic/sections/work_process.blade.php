@php
$workProcess = getContent('work_process.content',true);
@endphp

<section class="how-work-area py-80">
    <div class="container">
        <div class="row gy-5 align-items-center flex-wrap-reverse">
            <div class="col-lg-6">
                <div class="how-work-content">
                    <div class="section-heading mb-0">
                        <span class="section-heading__subtitle">{{__($workProcess->data_values->subheading)}}</span>
                        <h2 class="section-heading__title ">{{__($workProcess->data_values->heading)}} </h2> 
                        
                        <p class="section-heading__desc mb-30">{{__($workProcess->data_values->description)}}</p>
                        <div class="how-work-content__hork-items">
                            <ul>
                                <li>
                                    <h6><i class="fa-solid fa-users"></i>{{__($workProcess->data_values->purchaser)}}
                                    </h6>
                                    <h6><i
                                            class="fa-solid fa-paper-plane"></i>{{__($workProcess->data_values->goodsOrService)}}
                                    </h6>
                                </li>
                                <li>
                                    <h6><i class="fa-solid fa-money-bill-1-wave"></i>
                                        {{__($workProcess->data_values->paymentToSeller)}}</h6>
                                    <h6><i class="fa-solid fa-credit-card"></i>
                                        {{__($workProcess->data_values->dischargesInstallment)}}</h6>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="how-work">
                    <div class="how-work__thumb">
                     <h2>Sell Crypto</h2><br><iframe id='iframe-widget' src='https://changenow.io/embeds/exchange-widget/v2/widget.html?FAQ=false&amount=5000&amountFiat=40&backgroundColor=FFFFFF&darkMode=false&from=usdttrc20&fromFiat=sol&horizontal=false&isFiat=true&lang=en-US&link_id=4a04d02d0c4f50&locales=false&logo=true&primaryColor=4682B4&to=sol&toFiat=usd&toTheMoon=true' style="height: 400px; width: 100%; border: none"></iframe>
    <script defer type='text/javascript' src='https://changenow.io/embeds/exchange-widget/v2/stepper-connector.js'></script><br>
                     <!-- <iframe id='iframe-widget' src='https://changenow.io/embeds/exchange-widget/v2/widget.html?FAQ=false&amount=5000&amountFiat=40&backgroundColor=FFFFFF&darkMode=false&from=usdttrc20&fromFiat=sol&horizontal=false&isFiat=true&lang=en-US&link_id=4a04d02d0c4f50&locales=false&logo=true&primaryColor=4682B4&to=sol&toFiat=usd&toTheMoon=true' style="height: 400px; width: 100%; border: none"></iframe>
    <script defer type='text/javascript' src='https://changenow.io/embeds/exchange-widget/v2/stepper-connector.js'></script>  
    
    <iframe id='iframe-widget' src='https://crypto.paybis.com/?refId=25790&currencyCodeFrom=NGN&currencyCodeTo=USDT-TRC20' style="height: 900px; width: 100%; border: none"></iframe>  -->
  <!--  <iframe
	id="ycWidgetIframe"
	src="https://sandbox--payments-widget.netlify.app/landing/{yourApiKey}"
	title="Buy crypto with Yellow Card"  style="height: 900px; width: 100%; border: none"
></iframe> 
<a 
href="https://widget.paychant.com/buy?env=sandbox&assetAmount=20.5&partnerApiKey=[YOUR_SANDBOX_PARTNER_API_KEY]&partnerLogoUrl=[YOUR_BRAND_LOGO_URL]&partnerThemeColor=[YOUR_BRAND_THEME_COLOR]"
target="_blank">Buy & Sell Stablecoins with Paychant</a>-->

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>