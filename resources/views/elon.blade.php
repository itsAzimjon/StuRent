@extends('layouts.user')

@section('content')
<section class="pb-100">
 

  <div class="container pt-50">
    <div class="row">
      <div class="col-10 offset-1" style="    background-color: #fff;border-radius: 10px;box-shadow: 0 0 2px 0 rgb(0 0 0 / 10%);border: 1px solid #e5e5e5;">
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel" style="max-height: 400px;overflow: hidden;">
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
        <div class="property-card__content">
          <div class="property-card__details">
            <h4 class="title mb-3 mt-2">
              <span style="color:green;" class="mb-2">
                {{__('key.ijarachi_about')}}: 
              </span>
              {{$elon->izoh}}
              <br>
              <span style="color:green;" class="mb-2">
                {{__('key.ijarachi')}}: 
              </span>
              {{$elon->name}}
              <br>
              <span style="color:green;" class="mb-2">
                {{__('key.ijarachi_tel')}}: 
              </span>
              {{$elon->phone}}
              <br>
              <span style="color:green;" class="mb-2">
                {{__('key.mulk_turi')}}: 
              </span>
              @if($elon->mulk_turi==1)
                {{__('key.hovli')}}
              @else
                {{__('key.dom')}}
              @endif
              <br>
              <span style="color:green;" class="mb-2">
                {{__('key.kimga')}}: 
              </span>
              @if($elon->kimga==1)
                {{__('key.bola_qiz')}}
              @elseif($elon->kimga==2)
                {{__('key.bollar')}}
              @else
                {{__('key.qizlar')}}
              @endif
            </h4>
         
          </div>
          <ul class="row">
                <li class="col-12 col-md-6 mb-3">
                  <i style="color: green" class="las la-map-marked-alt"></i>{{lang($elon->shaxar->name,__('key.lang'))}} {{lang($elon->mahalla->name,__('key.lang'))}}
                </li>
                <li class="col-12 col-md-6 mb-3" >
                  <i style="color: green" class="las la-hourglass"></i>
                  <span style="color:#373e4a;">{{ \Carbon\Carbon::parse($elon->created_at)->format('d.m.Y')}}</span>
                </li>
                <li class="col-12 col-md-6 mb-3" >
                  <h4>{{__('key.um_narx')}}</h4>
                </li>
                <li class="col-12 col-md-6 mb-4" style="color:#373e4a;">
                  <h4>
                    <span style="color: blue;">{{$elon->narx}} </span> so'm
                  </h4>
                  
                </li>
                <li class="col-12">
                  <h4 class="mb-3">{{__('key.qo_malumot')}}</h4>
                </li>
                <li class="col-12">
                  <div class="row">
                  @foreach($elon->qulaylik as $c)

                  <div class="form-group col-lg-3 col-6">
                      <div class="form-check">
                          <label class="form-check-label" for="malumot{{$c->id}}">
                            <h6 style="color:green;">
                              {{lang($c->name,__('key.lang'))}}
                            </h6>
                          </label>

                      </div>
                  </div>
                  @endforeach
                  </div>
                </li>
              </ul>
        </div>
      </div>
      
    </div>
  </div>
</section>
@stop 