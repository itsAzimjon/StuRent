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
            <div class="row">
              <div class="col-12">
                <h4 class="mb-2">
                  {{__('key.ijarachi_about')}}:
                </h4>
              </div>
              <div class="col-6">
                
                <label class="" style="font-size: 1rem;">
                  <svg width="22" height="25" viewBox="0 0 22 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M10.4248 20.8667C8.5053 18.9097 4.58337 14.4779 4.58337 10.9375C4.58337 6.25 7.33337 3.125 11.4584 3.125C15.5834 3.125 18.3334 7.03125 18.3334 10.9375C18.3334 13.9147 14.3398 18.7071 12.4401 20.8184C11.9002 21.4185 10.99 21.443 10.4248 20.8667ZM13.75 9.89583C13.75 11.3341 12.724 12.5 11.4584 12.5C10.1927 12.5 9.16671 11.3341 9.16671 9.89583C9.16671 8.45759 10.1927 7.29167 11.4584 7.29167C12.724 7.29167 13.75 8.45759 13.75 9.89583Z" fill="#009273"/>
                    </svg>
                    
                  {{lang($elon->shaxar->name,__('key.lang'))}} {{lang($elon->mahalla->name,__('key.lang'))}}</label>
              </div>
              <div class="col-6 mb-4">
                <label for="">
                  <svg width="19" height="21" viewBox="0 0 19 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path opacity="0.3" fill-rule="evenodd" clip-rule="evenodd" d="M9.5 19.25C5.56497 19.25 2.375 15.7242 2.375 11.375C2.375 7.02576 5.56497 3.5 9.5 3.5C13.435 3.5 16.625 7.02576 16.625 11.375C16.625 15.7242 13.435 19.25 9.5 19.25Z" fill="#009273"/>
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M9.07645 6.96149C9.09209 6.73679 9.27893 6.5625 9.50417 6.5625C9.726 6.5625 9.9112 6.7317 9.93118 6.95262L10.2917 10.9375L12.8476 12.5517C12.9814 12.6363 13.0626 12.7835 13.0626 12.9417C13.0626 13.2509 12.7643 13.4726 12.4682 13.3833L9.09059 12.3652C8.86704 12.2978 8.71989 12.0847 8.7361 11.8518L9.07645 6.96149Z" fill="#090909"/>
                    </svg>
                    <span style="color:#373e4a;">{{ \Carbon\Carbon::parse($elon->created_at)->format('d.m.Y')}}</span>
                </label>
              </div>
              <div class="col-6">
                <h4 class="mb-3">
                  {{__('key.um_narx')}}
                </h4>
              </div>
              <div class="col-6">
                <h4 class="mb-3">
                  {{$elon->narx}}
                </h4>
              </div>
              <div class="col-12">
                <h4 class="mb-2">
                  {{__('key.qulay')}}
                </h4>
              </div>
              <div class="col-12">
                <div class="row">
                  
                  @foreach($elon->qulaylik as $c)

                  <div class="form-group col-lg-3 col-6">
                      <div class="form-check">
                          <label class="form-check-label" for="malumot{{$c->id}}">
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
                <h4 class="mb-2">
                  {{__('key.kimga')}}: 
                </h4>
                <label for="">
                  @if($elon->kimga==1)
                    {{__('key.bola_qiz')}}
                  @elseif($elon->kimga==2)
                    {{__('key.bollar')}}
                  @else
                    {{__('key.qizlar')}}
                  @endif
                </label>
              </div>
              <div class="col-md-4 col-12">
                <h4 class="mb-2">{{__('key.ijarachi')}}: </h4>
                <label for=""> {{$elon->name}}</label>
              </div>
              <div class="col-md-4 col-12">
                <h4 class="mb-2">{{__('key.mulk_turi')}}:</h4>
                <label for=""> @if($elon->mulk_turi==1)
                  {{__('key.hovli')}}
                @else
                  {{__('key.dom')}}
                @endif</label>
              </div>
              
              <div class="col-12">
                <h4 class="mb-2">
                  {{__('key.ijarachi_about')}}:
                </h4>
              </div>
              <div class="col-12">
                <label for="">
                  {{$elon->izoh}}
                </label>
              </div>
            </div>
            <div class="col-12"style="display: flex;justify-content: center;" >
              <button class="btn btn--success center" >
                {{$elon->phone}}
              </button>
            </div>

            {{-- <h4 class="title mb-3 mt-2">
              <span style="color:#009273;" class="mb-2">
                {{__('key.ijarachi')}}: 
              </span>
              {{$elon->name}}
              <br>
              <span style="color:#009273;" class="mb-2">
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