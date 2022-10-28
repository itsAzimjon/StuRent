@extends('layouts.user')

@section('content')
<section class="pb-100">
  <div class="search-area">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <form
            action="/search/city"
            method="post"
            class="search-form"
          >
          @csrf
            <div class="row align-items-end gy-3">
              <div class="col-lg-4 col-sm-6">
                <select name="shaxar_id" class="select2-basic">
                  <option value=""> {{__('key.choose')}}</option>
                  @foreach($shaxar as $c)
                  <option
                    @if($shaxar_id??"0"==$c->id)
                    selected 
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
                    @if($mahalla_id??"0"==$c->id)
                    selected 
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
                <button type="submit" class="btn btn--success">
                  <i class="las la-search"></i>  {{__('key.search')}}
                </button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

  <div class="container pt-50">
    <div class="row">
      <div class="col-lg-3 mb-lg-0 mb-3">
        <button class="action-sidebar-open">
          <i class="las la-sliders-h"></i><font style="color: #009273">{{__("key.qulay")}}</font>  {{__("key.filter")}}
        </button>
        <div class="action-sidebar">
          <button class="action-sidebar-close">
            <i class="las la-times"></i>
          </button>
          <form
            action="?"
            method="post"
            class="search-form"
          >
          @csrf
          <input type="hidden" name="shaxar_id" id="{{$shaxar_id??0}}">
          <input type="hidden" name="mahalla_id" id="{{$mahalla_id??0}}">
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
                      id="{{$c->id}}"
                    />
                    <label class="form-check-label" for="{{$c->id}}">
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
          <div class="col-lg-8 col-md-6 col-sm-6">
            <p>{{__('key.result_count')}} <b>{{$elons->count()}}</b></p>
          </div>

          <div class="col-md-2 col-sm-3 col-5 ms-auto">
            <div class="card-view-btn-area">
              <button class="list-view-btn">
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
            href="/elon/{{$elon->id}}" style="color:#373e4a;"
            >
            <div class="property-card">
              <div class="property-card__thumb" style="overflow: hidden;">
                <div id="carouselExampleControls{{$elon->id}}" class="carousel slide" data-bs-interval="false" data-bs-ride="carousel" style="height: 200px">
                  <div class="carousel-inner">
                    <?php $aa=0;?>
                    @foreach(json_decode($elon->rasm) as $ra)
                    @if($aa++==0)
                    <div class="carousel-item active">
                      <img src="{{ asset($ra)}}" class="d-block w-100" alt="image" style="object-fit: cover;
                      width:100%;">
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
                  <h4 class="title mt-2">
                   {{$elon->izoh}}
                  </h4>
                  <p class="location" style="color:#373e4a;">
                    <i style="color: #009273" class="las la-map-marked-alt"></i>{{lang($elon->shaxar->name,__('key.lang'))}} {{lang($elon->mahalla->name,__('key.lang'))}}
                  </p>
                </div>
                <ul class="row">
                  <li class="col-6" >
                    <i style="color: #009273" class="las la-hourglass"></i>
                    <span style="color:#373e4a;">{{ \Carbon\Carbon::parse($elon->created_at)->format('d.m.Y')}}</span>
                  </li>
                  <li class="col-6" style="color:#373e4a;">
                    <i style="color: #009273" class="las la-money-bill"></i><span style="color: blue;">{{$elon->narx}}</span>sum
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