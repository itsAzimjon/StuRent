@extends('layouts.user')

@section('content')
<section class="pb-100">
 

  <div class="container pt-50">
    <div class="row">
      <div class="col-md-5 col-12" style="    background-color: #fff;border-radius: 10px;box-shadow: 0 0 2px 0 rgb(0 0 0 / 10%);border: 1px solid #e5e5e5;">
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel" >
          <div class="carousel-inner">
            <?php $aa=0;?>
            @foreach(json_decode($elon->rasm) as $ra)
            @if($aa++==0)
            <div class="carousel-item active">
              <img src="{{ asset($ra)}}" class="d-block w-100" alt="image" style="object-fit: contain;
              height: 100%;">
            </div>
            @else
            <div class="carousel-item ">
              <img src="{{ asset($ra)}}" class="d-block w-100" alt="image" style="object-fit: contain;
              height: 100%;">
            </div>
            @endif
            @endforeach
          </div>
          <button style="" class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button style="" class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
        
      </div>
      <div class=" col-12 col-md-6 offset-md-1"  style="background-color: #fff;border-radius: 10px;box-shadow: 0 0 2px 0 rgb(0 0 0 / 10%);border: 1px solid #e5e5e5;">
        <div class="property-card__content">
          <div class="property-card__details">
            <div class="row">
              <div class="col-12">
                <h4 class="mb-1 all-elon-head">
                  {{__('key.ijara_about')}}:
                </h4>
              </div>
              <div class="col-6">
                
                <label class="mb-3" style="font-size: 1rem;">
                  <svg width="22" height="25" viewBox="0 0 22 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M10.4248 20.8667C8.5053 18.9097 4.58337 14.4779 4.58337 10.9375C4.58337 6.25 7.33337 3.125 11.4584 3.125C15.5834 3.125 18.3334 7.03125 18.3334 10.9375C18.3334 13.9147 14.3398 18.7071 12.4401 20.8184C11.9002 21.4185 10.99 21.443 10.4248 20.8667ZM13.75 9.89583C13.75 11.3341 12.724 12.5 11.4584 12.5C10.1927 12.5 9.16671 11.3341 9.16671 9.89583C9.16671 8.45759 10.1927 7.29167 11.4584 7.29167C12.724 7.29167 13.75 8.45759 13.75 9.89583Z" fill="#009273"/>
                    </svg>
                    
                  {{lang($elon->shaxar->name,__('key.lang'))}} {{lang($elon->mahalla->name,__('key.lang'))}}</label>
              </div>
              <div class="col-6 mb-3">
                <label class="mb-3" for="">
                  <svg width="19" height="21" viewBox="0 0 19 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path opacity="0.3" fill-rule="evenodd" clip-rule="evenodd" d="M9.5 19.25C5.56497 19.25 2.375 15.7242 2.375 11.375C2.375 7.02576 5.56497 3.5 9.5 3.5C13.435 3.5 16.625 7.02576 16.625 11.375C16.625 15.7242 13.435 19.25 9.5 19.25Z" fill="#009273"/>
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M9.07645 6.96149C9.09209 6.73679 9.27893 6.5625 9.50417 6.5625C9.726 6.5625 9.9112 6.7317 9.93118 6.95262L10.2917 10.9375L12.8476 12.5517C12.9814 12.6363 13.0626 12.7835 13.0626 12.9417C13.0626 13.2509 12.7643 13.4726 12.4682 13.3833L9.09059 12.3652C8.86704 12.2978 8.71989 12.0847 8.7361 11.8518L9.07645 6.96149Z" fill="#090909"/>
                    </svg>
                    <span style="color:#373e4a;">{{ \Carbon\Carbon::parse($elon->created_at)->format('d.m.Y')}}</span>
                </label>
              </div>
              <div class="col-6">
                <h4 class="mb-5">
                  {{__('key.um_narx')}}
                </h4>
              </div>
              <div class="col-6">
                <h4 class="mb-3 all-elon-head" style="color: #009273; font-size:20px; letter-spacing: 0.6px;">
                  {{$elon->narx}}<span class="ml-1">so'm </span>
                </h4>
              </div>
              <div class="col-12">
                <h4 class="mb-1 all-elon-head">
                  {{__('key.qulay')}}
                </h4>
              </div>
              <div class="col-12">
                <div class="row">
                  
                  @foreach($elon->qulaylik as $c)

                  <div class="form-group col-lg-3 col-6">
                      <div class="form-check p-0">
                          <label class="form-check-label mb-3" for="malumot{{$c->id}}">
                            <h6 style="color:#009273;">
                              {{lang($c->name,__('key.lang'))}}
                            </h6>
                          </label>

                      </div>
                  </div>
                  @endforeach
                  </div>
              </div>
              <div class="col-md-4 col-12">
                <h4 class="mb-1 all-elon-head">
                  {{__('key.kimga')}}: 
                </h4>
                <label class="mb-3" for="">
                    <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M8.99996 7.71429C6.86972 7.71429 5.14282 5.98738 5.14282 3.85714C5.14282 1.7269 6.86972 0 8.99996 0C11.1302 0 12.8571 1.7269 12.8571 3.85714C12.8571 5.98738 11.1302 7.71429 8.99996 7.71429Z" fill="#009273"/>
                        <path d="M0.000651684 17.2277C0.388259 12.6255 4.26191 10.2856 8.98334 10.2856C13.7712 10.2856 17.7049 12.4969 17.9979 17.2285C18.0096 17.417 17.9979 17.9999 17.2467 17.9999C13.5411 17.9999 8.03473 17.9999 0.727502 17.9999C0.476712 17.9999 -0.0204618 17.4784 0.000651684 17.2277Z" fill="#009273"/>
                    </svg>
    
                      @if($elon->kimga==1)
                        {{__('key.bola_qiz')}}
                      @elseif($elon->kimga==2)
                        {{__('key.bollar')}}
                      @else
                        {{__('key.qizlar')}}
                      @endif
                  <br>
                  {{$elon->talaba_soni}} {{__('key.ta')}}
                </label>
              </div>
              <div class="col-md-4 col-12">
                <h4 class="mb-1 all-elon-head">{{__('key.ijarachi')}}: </h4>
                <label class="mb-3" for=""> {{$elon->name}}</label>
              </div>
              <div class="col-md-4 col-12">
                <h4 class="mb-1 all-elon-head">{{__('key.mulk_turi')}}:</h4>
                <label class="mb-3" for=""> @if($elon->mulk_turi==1)
                  {{__('key.hovli')}}
                @else
                  {{__('key.dom')}}
                @endif</label>
              </div>
              
              <div class="col-12">
                <h4 class="mb-1 all-elon-head">
                  {{__('key.ijarachi_about')}}:
                </h4>
              </div>
              <div class="col-12">
                <label class="mb-3" for="">
                  {{$elon->izoh}}
                </label>
              </div>
            </div>
            <div class="col-12 "style="display: flex; justify-content: center;" >
              <a href="tel:{{$elon->phone}}" class="btn btn--success center phone-href" >
                <svg width="34" height="34" viewBox="0 0 34 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M13.2635 17.3122L15.0259 20.3649C15.5127 21.208 16.4844 21.645 17.4381 21.4498L17.7475 21.3865C18.7013 21.1913 19.6729 21.6284 20.1597 22.4715L22.345 26.2566C22.5012 26.527 22.4085 26.8728 22.1381 27.029C22.0854 27.0593 22.0282 27.0811 21.9687 27.0932L19.2337 27.6529C17.1414 28.0811 15.0099 27.1223 13.942 25.2728L9.14503 16.9641C7.98269 14.9509 8.05757 12.4538 9.33844 10.5138L10.9243 8.11191C11.0964 7.8513 11.4471 7.77953 11.7077 7.95159C11.781 7.99996 11.842 8.06472 11.8859 8.14074L14.006 11.8129C14.4927 12.656 14.3854 13.716 13.7395 14.4444L13.53 14.6807C12.8841 15.4091 12.7767 16.4691 13.2635 17.3122Z" fill="white"/>
                    <path opacity="0.3" fill-rule="evenodd" clip-rule="evenodd" d="M24.6674 21.8115L26.7886 22.5965C28.0648 19.148 27.7718 15.3001 25.8972 12.0531C24.0251 8.8106 20.8453 6.6343 17.2266 6.01191L16.8432 8.24095C19.8067 8.75064 22.4059 10.5296 23.9384 13.184C25.473 15.842 25.7125 18.9875 24.6674 21.8115ZM20.4195 20.256L22.5382 21.0478C23.3602 18.8482 23.1769 16.3886 21.9796 14.3149C20.7863 12.248 18.7572 10.8616 16.4501 10.4684L16.0701 12.6981C17.7206 12.9793 19.1678 13.9681 20.0209 15.4458C20.8768 16.9283 21.0075 18.6825 20.4195 20.256Z" fill="white"/>
                </svg>
                <span class"mr-1">+998</span>
                {{$elon->phone}}
              </a>
            </div>

            {{-- <h4 class="title mb-3 mt-2 all-elon-head">
              <span style="color:#009273;" class="mb-1">
                {{__('key.ijarachi')}}: 
              </span>
              {{$elon->name}}
              <br>
              <span style="color:#009273;" class="mb-1">
                {{__('key.mulk_turi')}}: 
              </span>
              @if($elon->mulk_turi==1)
                {{__('key.hovli')}}
              @else
                {{__('key.dom')}}
              @endif
              <br>
            </h4> --}}
        
          </div>
          
        </div>
      </div>
    </div>
  </div>
</section>
@stop 