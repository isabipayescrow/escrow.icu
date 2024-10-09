@php
   $faq = getContent('faq.content',true);
   $faq_elements = getContent('faq.element',false,6);

@endphp


<section class="accordion-area py-80">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="section-heading  text-center">
                    <h2>Swap Crypto</h2><br><iframe id='iframe-widget' src='https://changenow.io/embeds/exchange-widget/v2/widget.html?FAQ=false&amount=5000&amountFiat&backgroundColor=FFFFFF&darkMode=false&from=usdttrc20&horizontal=false&isFiat=false&lang=en-US&link_id=4a04d02d0c4f50&locales=false&logo=true&primaryColor=4682B4&to=sol&toTheMoon=false' style="height: 360px; width: 100%; border: none"></iframe>
    <script defer type='text/javascript' src='https://changenow.io/embeds/exchange-widget/v2/stepper-connector.js'></script><br><br><br>
                    <span class="section-heading__subtitle">{{__($faq->data_values->subheading)}}</span>
                    <h2 class="section-heading__title ">{{__($faq->data_values->heading)}}</h2>
                    <p class="section-heading__desc mb-30">{{__($faq->data_values->description)}}</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="accordion custom--accordion" id="accordionExample">
                    @foreach ($faq_elements as $key=>$item)
                    @if(($key == 0) || ($key%2 == 0))
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="@php echo 'heading'.$key; @endphp">
                          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="@php echo '#collapse'.$key; @endphp" aria-expanded="false">
                            {{$item->data_values->question}}
                          </button>
                        </h2>
                        <div id="@php echo 'collapse'.$key; @endphp" class="accordion-collapse collapse" aria-labelledby="@php echo 'heading'.$key; @endphp" data-bs-parent="#accordionExample">
                          <div class="accordion-body">
                            @php echo $item->data_values->answer ; @endphp
                          </div>
                        </div>
                      </div>
                      @endif
                    @endforeach

                </div>
            </div>
            <div class="col-lg-6">
                <div class="accordion custom--accordion" id="accordionExampleTwo">
                    @foreach($faq_elements as $key=>$item)
                    @if( $key%2!=0)

                      <div class="accordion-item">
                        <h2 class="accordion-header" id="@php echo 'heading'.$key; @endphp">
                          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="@php echo '#collapse'.$key; @endphp" aria-expanded="false">
                            {{$item->data_values->question}}
                          </button>
                        </h2>
                        <div id="@php echo 'collapse'.$key; @endphp" class="accordion-collapse collapse" aria-labelledby="@php echo 'heading'.$key; @endphp" data-bs-parent="#accordionExample">
                          <div class="accordion-body">
                            @php echo $item->data_values->answer ; @endphp
                          </div>
                        </div>
                      </div>

                    @endif
                    @endforeach



                  </div>
            </div>
        </div>
    </div>
</section>
