@extends('layouts.user')

@section('content')
<section class="pb-100">

  <div class="container pt-50">
    <div class="row">
      
      <div class="col-lg-12">
        <div class="row align-items-center mb-3">
          <div class="col-lg-8 col-md-6 col-sm-6">
            <p>{{__('key.elonlaringiz')}} </p>
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

        <div class="row gy-3 card-view-area grid-view">
          @foreach($elons as $elon)
          <div class="col-xl-3 col-md-6 card-view">
            
            <div class="property-card">
              <div class="property-card__thumb" style="overflow: hidden;">
                <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel" style="height: 200px">
                  <div class="carousel-inner">
                    <?php $aa=0;?>
                    @foreach(json_decode($elon->rasm) as $ra)
                    @if($aa++==0)
                    <div class="carousel-item active">
                      <img src="{{ asset($ra)}}" class="d-block w-100" alt="image" style="object-fit: contain;
                      height: 200px;">
                    </div>
                    @else
                    <div class="carousel-item ">
                      <img src="{{ asset($ra)}}" class="d-block w-100" alt="image" style="object-fit: contain;
                      height: 200px;">
                    </div>
                    @endif
                    @endforeach
                  </div>
                  <button style="background: none;" class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                  </button>
                  <button style="background: none;" class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                  </button>
                </div>
                <div class="property-status"><a href="/delete/{{$elon->id}}">{{__('key.delete')}}</a></div>
                <div style="font-size: 12px;
                position: absolute;
                top: 10px;
                left: 10px;
                padding: 0 10px;
                background-color: #fff;
                color: #777;
                border-radius: 999px;">
                    <a href="/edit/{{$elon->id}}">{{__('key.edit')}}</a>
                </div>
              </div>
              <a
            href="/elon/{{$elon->id}}" style="colo:#373e4a;"
            >
              <div class="property-card__content">
                <div class="property-card__details">
                  <h4 class="title mt-2">
                   {{$elon->izoh}}
                  </h4>
                  <p class="location" style="color:#373e4a;">
                    <i style="color: green" class="las la-map-marked-alt"></i>{{lang($elon->shaxar->name,__('key.lang'))}} {{lang($elon->mahalla->name,__('key.lang'))}}
                  </p>
                </div>
                <ul class="row">
                  <li class="col-12" >
                    <i style="color: green" class="las la-hourglass"></i>
                    <span style="color:#373e4a;">{{ \Carbon\Carbon::parse($elon->created_at)->format('d.m.Y')}}</span>
                  </li>
                  <li class="col-12" style="color:#373e4a;">
                    <i style="color: green" class="las la-money-bill"></i><span style="color: blue;">{{$elon->narx}} </span> so'm
                  </li>
                </ul>
              </div>
            </a>
            </div>
          </div>
          @endforeach
        </div>
      </div>
    </div>
  </div>
</section>
@stop 