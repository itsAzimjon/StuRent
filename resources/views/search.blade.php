@extends('layouts.user')

@section('content')
<section class="pb-100">
  <div class="search-area">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 pt-5">
          <form
            action="/search/city"
            method="post"
            class="search-form"
          >
          @csrf
            <div class="row align-items-end gy-3 justify-content-end">
              <div class="col-lg-4 col-sm-6">
                <select name="shaxar_id" class="select2-basic">
                  <option value=""> {{__('key.choose')}}</option>
                  @foreach($shaxar as $c)
                  <option
                    @if(!empty($shaxar_id))
                    @if($shaxar_id==$c->id)
                    selected 
                    @endif
                    @endif
                    value="{{$c->id}}"
                    data-locations='{{json_encode($c->mahalla)}}'
                  >
                    {{lang($c->name,__('key.lang'))}}
                  </option>
                  @endforeach
                </select>
              </div>
              <div class="col-lg-4 col-sm-6">
                <select name="mahalla_id" class="select2-basic">
                  <option value="" selected disabled> {{__('key.choose')}}</option>
                  @foreach($mahalla??[] as $c)
                  <option
                    @if(!empty($mahalla_id))
                    @if($mahalla_id==$c->id)
                    selected 
                    @endif
                    @endif  
                    value="{{$c->id}}"
                  >
                    {{lang($c->name,__('key.lang'))}}
                  </option>
                  @endforeach
                </select>
              </div>
              {{-- <div class="col-lg-4">
                <input
                  type="text"
                  name="search"
                  value=""
                  placeholder=" {{__('key.search')}}..."
                  autocomplete="off"
                  class="form--control"
                />
              </div> --}}
              <div class="col-lg-4 col-6">
                <button type="submit" class="btn btn--success w-100" style="height: 50px; padding: 13px;">
                  <i class="las la-search"></i>  {{__('key.search')}}
                </button>
                
              </div>
            </div>
          </form>
          <button class="action-sidebar-open">
          <i style="color: #009273" class="las la-sliders-h"></i><font style="color: #009273">{{__("key.filter")}}</font>  <!--{{__("key.qulay")}}-->
        </button>
        </div>
      </div>
    </div>
  </div>

  <div class="container">
    <div class="row">
      <div class="col-lg-3 mb-lg-0 mb-3">
        
        <div class="action-sidebar">
          <button class="action-sidebar-close">
            <i class="las la-times"></i>
          </button>
          <form
            action="/search"
            method="post"
            class="search-form"
          >
          @csrf
          <input type="hidden" name="shaxar_id" value="{{$shaxar_id??0}}">
          <input type="hidden" name="mahalla_id" value="{{$mahalla_id??0}}">
            <div class="action-widget mt-4">
              <h6 class="action-widget__title"><font style="color: #009273">{{__("key.qulay")}}</font>  {{__("key.filter")}}</h6>
              <div class="action-widget__body">
                @foreach($category as $c)
                  <div class="form-check custom--checkbox">
                    <input
                      class="form-check-input propertyTypes"
                      name="category[]"
                      type="checkbox"
                      @if(in_array($c->id, $s_c??[]))
                      checked 
                      @endif
                      value="{{$c->id}}"
                      id="aa{{$c->id}}"
                    />
                    <label class="form-check-label" for="aa{{$c->id}}">
                        {{lang($c->name,__('key.lang'))}}
                    </label>
                  </div>
                @endforeach
              </div>
            </div>

            <div class="action-widget mt-4">
              <h6 class="action-widget__title"><font style="color: #009273">{{__("key.qulay")}}</font>  {{__("key.filter")}}</h6>
              <div class="action-widget__body">
                <div class="form-check custom--radio">
                  <input
                    class="form-check-input propertyPurpose"
                    type="radio"
                    value="1"
                    name="mulk_turi"
                    id="flexRadioDefault1"
                  />
                  <label class="form-check-label" for="flexRadioDefault1">
                      {{__('key.hovli')}}
                  </label>
                </div>
                <div class="form-check custom--radio">
                  <input
                    class="form-check-input propertyPurpose"
                    type="radio"
                    value="2"
                    name="mulk_turi"
                    id="flexRadioDefault2"
                  />
                  <label class="form-check-label" for="flexRadioDefault2">
                      {{__('key.dom')}}
                    </label>
                </div>
              </div>
            </div>
            <div class="action-widget mt-4">
              <h6 class="action-widget__title"><font style="color: #009273">{{__("key.qulay")}}</font>  {{__("key.filter")}}</h6>
              <div class="action-widget__body">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="kimga" id="kim2" value="2">
                    <label class="form-check-label" for="kim2">
                        {{__('key.bollar')}}
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="kimga" id="kim3" value="3">
                    <label class="form-check-label" for="kim3">
                        {{__('key.qizlar')}}

                    </label>
                </div>
              </div>
            </div>
            <div class="action-widget mt-4">
              <h6 class="action-widget__title"><font style="color: #009273">{{__("key.narxlar")}}</font>  {{__("key.filter")}}</h6>
              <div class="action-widget__body">
                <div class="row">
                  <div class="col-6">
                    <input
                      value="{{$min??''}}"
                      type="text"
                      name="min_price"
                      placeholder="min"
                      value=""
                      class="form--control form-control-sm"
                    />
                  </div>
                  <div class="col-6">
                    <input
                      value="{{$max??''}}"
                      type="text"
                      name="max_price"
                      placeholder="max"
                      class="form--control form-control-sm"
                    />
                  </div>
                  
                  <div class="col-12 mt-3">
                    <button
                      type="submit"
                      class="btn btn-sm btn--success w-100"
                    >
                    {{__('key.search')}}
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
      <div class="col-lg-9">
        <div class="row align-items-center mb-3">
          <div class="col-lg-8 col-md-6 col-6">
            <p>{{__('key.result_count')}} <b>{{$elons->count()}}</b></p>
          </div>

          <div class="col-md-2 col-sm-3 col-5 ms-auto">
            <div class="card-view-btn-area">
              <button class="list-view-btn">
                <i class="las la-bars"></i>
                <i class="las la-bars"></i>
              </button>
              <button class="grid-view-btn active">
                <i class="las la-th-large"></i>
              </button>
            </div>
          </div>
        </div>
        <!-- row end -->

        <div class="row gy-4 card-view-area grid-view">
          @foreach($elons as $elon)
          <div class="col-xl-4 col-md-6 card-view">
          <a
            href="/elon/{{$elon->id}}" style="color:#373e4a; width:100%;"
            >
            <div class="property-card">
              <div class="property-card__thumb" style="overflow: hidden;">
                <div id="carouselExampleControls{{$elon->id}}" class="carousel slide" data-bs-interval="false" data-bs-ride="carousel" style="height: 200px">
                  <div class="carousel-inner">
                    <?php $aa=0;?>
                    @foreach(json_decode($elon->rasm) as $ra)
                    @if($aa++==0)
                    <div class="carousel-item active">
                      <img src="{{ asset($ra)}}" class="d-block w-100" alt="image" style="object-fit: cover; width:100%; height:200px;">
                    </div>
                    @else
                    <div class="carousel-item ">
                      <img src="{{ asset($ra)}}" class="d-block w-100" alt="image" style="object-fit: cover;
                      width:100%;">
                    </div>
                    @endif
                    @endforeach
                  </div>
                  <button style="background: none;" class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls{{$elon->id}}" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                  </button>
                  <button style="background: none;" class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls{{$elon->id}}" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                  </button>
                </div>
                @if($elon->kimga==1)
                <div class="property-status"> {{__('key.bola_qiz')}}</div>
                @elseif($elon->kimga==2)
                <div class="property-status"> {{__('key.bollar')}}</div>
                @else
                <div class="property-status"> {{__('key.qizlar')}}</div>
                @endif
              </div>
             
              <div class="property-card__content">
                <div class="property-card__details">
                  <h4 class=" mt-2 d-none">
                   {{$elon->izoh}}
                  </h4>
                    <h4 class="title mb-2" style="margin-bottom: -4px; font-size-22px;">
                        @if($elon->mulk_turi==1)
                          {{__('key.hovli')}}
                        @else
                          {{__('key.dom')}}
                        @endif
                     </h4>
               
                  <p class="location mb-3" style="color:#373e4a;">
                    <svg style="margin-top: -4px;" width="14" height="15" viewBox="0 0 12 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M5.41538 12.1015C3.83204 10.7297 0.797607 7.79339 0.797607 5.4375C0.797607 2.25 3.01951 0.125 6.35237 0.125C9.68523 0.125 11.9071 2.78125 11.9071 5.4375C11.9071 7.41634 8.8243 10.5745 7.25191 12.0567C6.73553 12.5434 5.9517 12.5662 5.41538 12.1015ZM8.20396 4.72917C8.20396 5.70717 7.37498 6.5 6.35237 6.5C5.32977 6.5 4.50078 5.70717 4.50078 4.72917C4.50078 3.75116 5.32977 2.95833 6.35237 2.95833C7.37498 2.95833 8.20396 3.75116 8.20396 4.72917Z" fill="#009273"/>
                    </svg>
                    {{lang($elon->shaxar->name,__('key.lang'))}} {{lang($elon->mahalla->name,__('key.lang'))}}
                  </p>
                </div>
                <ul class="row">
                  <li class="col-6" >
                    <svg style="margin-top: -4px;" width="18" height="17" viewBox="0 0 18 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path opacity="0.3" fill-rule="evenodd" clip-rule="evenodd" d="M8.98212 15.5833C5.30075 15.5833 2.31641 12.7291 2.31641 9.20825C2.31641 5.68744 5.30075 2.83325 8.98212 2.83325C12.6635 2.83325 15.6478 5.68744 15.6478 9.20825C15.6478 12.7291 12.6635 15.5833 8.98212 15.5833Z" fill="#009273"/>
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M8.58169 5.68606C8.59866 5.47507 8.77484 5.3125 8.98651 5.3125C9.19445 5.3125 9.3688 5.46957 9.39042 5.67639L9.72269 8.85417L12.1196 10.1641C12.24 10.2299 12.3149 10.3562 12.3149 10.4934C12.3149 10.7392 12.0827 10.9186 11.8449 10.8566L8.64724 10.0225C8.41252 9.96129 8.2556 9.74042 8.27505 9.49862L8.58169 5.68606Z" fill="#090909"/>
                    </svg>

                    <span style="color:#373e4a;">{{ \Carbon\Carbon::parse($elon->created_at)->format('d.m.Y')}}</span>
                  </li>
                  <li class="col-6" style="color:#373e4a; font-size: 22px; line-height: 20px; letter-spacing: 0.6px; margin-top: 2px;">
                    <!--<i style="color: #009273" class="las la-money-bill"></i>--><span style="float: right;"><b style="color: #009273;">{{$elon->narx}}</b>so‘m</span>
                  </li>
                </ul>
              </div>
            </div>
          </a>

          </div>

          @endforeach
        </div>
        
      </div>
    </div>
  </div>
</section>
@stop 