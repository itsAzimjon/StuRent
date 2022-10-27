@extends('layouts.user')

@section('content')
<style>
    .form-check-input:checked {
    background-color: #009273;
    border-color: #009273;
    }
</style>
<section class="pt-100 pb-100 section--bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <form method="POST" action="/add/save" class="apply-form p-sm-5 p-3 rounded-3 box--shadow"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-lg-12">
                            <h4 class="mb-3">{{__('key.uy_malumotlari')}}</h4>
                        </div>
                        {{-- <div class="form-group col-lg-3">
                            <label for="title">Izoh <sup class="text--danger">*</sup></label>
                            <input type="text" id="title" name="title" value="" placeholder="Enter Title"
                                autocomplete="off" class="form--control" required="">
                        </div> --}}

                        <div class="form-group col-lg-4">
                            <label for="property_type">{{__('key.mulk_turi')}} <sup class="text--danger">*</sup></label>
                            <select class="form--control" name="mulk_turi" id="property_type" required="">
                                <option value="1">{{__('key.hovli')}}</option>
                                <option value="2">{{__('key.dom')}}</option>
                            </select>
                        </div>

                        <div class="form-group col-lg-4">
                            <label for="city">{{__('key.shaxar')}} <sup class="text--danger">*</sup></label>
                            <select name="shaxar_id" id="city" class="form--control" required="">
                                <option value="" selected="" disabled="">{{__('key.tanlang')}}</option>
                                @foreach($shaxar as $c)
                                    <option
                                        value="{{$c->id}}"
                                        data-locations='{{json_encode($c->mahalla)}}'
                                    >
                                        {{lang($c->name,__('key.lang'))}}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group col-lg-4">
                            <label for="location">{{__('key.mahalla')}} <sup class="text--danger">*</sup></label>
                            <select name="mahalla_id" id="location" class="form--control" required="">
                                <option value="" selected="" disabled="">{{__('key.tanlang')}}</option>
                            </select>
                        </div>




                        <div class="form-group col-lg-4" id="rasmlar_con">
                            <label for="file">{{__('key.rasmlar')}} <sup class="text--danger">*</sup></label>
                            <input type="file" id="file"  name="rasm[]" class="form--control custom-file-upload"
                                required accept="image/png, image/jpeg, image/jpg">
                        </div>
                       <div class="form-group col-lg-12 text-center" >

                            <div style="background:#009273; color: white;font-size:1.5rem;width:40px; height:40px;" id="rasm_b"><i class="las la-plus"></i></div>
                       </div>
                        <div class="form-group col-lg-8">
                        </div>
                        <div class="col-lg-12 mt-5 row">
                            <div class="col-12">
                                <h4 class="mb-3">{{__('key.boshqa_malumotlar')}}</h4>

                            </div>
                            <div class="form-group col-lg-3">
                                <label>{{__('key.xonalar_soni')}} <sup class="text--danger">*</sup></label>
                                <input type="number" name="xona_soni" autocomplete="off" value=""
                                    placeholder="{{__('key.xonalar_soni')}}" class="form--control" required="">
                            </div>

                            <div class="form-group col-lg-3">
                                <label>{{__('key.um_narx')}} <sup class="text--danger">*</sup></label>
                                <input type="number" name="narx" autocomplete="off" value="" placeholder="Sum"
                                    class="form--control" required="">
                            </div>
                            <div class="form-group col-lg-3">
                                <label>{{__('key.talaba_soni')}} <sup class="text--danger">*</sup></label>
                                <input type="number" name="talaba_soni" autocomplete="off" value="" placeholder="{{__('key.talaba_soni')}} "
                                    class="form--control" required="">
                            </div>
                            <div class="form-group col-lg-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="kimga" id="kim1" value="1" checked>
                                    <label class="form-check-label" for="kim1">
                                        {{__('key.bola_qiz')}}
                                    </label>
                                </div>
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
                        
                        <div class="col-lg-12 mt-5 row">
                            <div class="col-12">
                                <h4 class="mb-3">{{__('key.qo_malumot')}}</h4>

                            </div>
                            @foreach($category as $c)

                            <div class="form-group col-lg-3 col-6">
                                <div class="form-check">
                                    <label class="form-check-label" for="malumot{{$c->id}}">
                                        {{lang($c->name,__('key.lang'))}}
                                    </label>
                                    <input class="form-check-input" type="checkbox" value="{{$c->id}}" id="malumot{{$c->id}}" name="malumot[]">

                                </div>
                            </div>
                            @endforeach
                              



                        </div>
                        
                        <div class="col-lg-12 mt-5 row">
                            <div class="col-12">
                                <h4 class="mb-3">{{__('key.ijara_malumot')}}</h4>

                            </div>
                            <div class="form-group col-lg-3">
                                <label>Ijarachi ismi <sup class="text--danger">*</sup></label>
                                <input type="text" name="name" autocomplete="off" value=""
                                    placeholder="Ismi" class="form--control" required="">
                            </div>
                            <div class="form-group col-lg-3">
                                <label>Telefon nomeri <sup class="text--danger">*</sup></label>
                                <input type="text" name="phone" autocomplete="off" value=""
                                    placeholder="Telefon" class="form--control" required="">
                            </div>
                        </div>
                        <div class="form-group col-lg-12">
                            <label>Ijarachi talablari <sup class="text--danger">*</sup></label>
                            <textarea name="izoh" placeholder="Qolib ketgan narsalarni yozib qoldiring"
                                class="form--control" required=""></textarea>
                        </div>
                        <div class="col-lg-12">
                            <button type="submit" class="btn btn--base">Submit Now</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>


@endsection
@section('js')
<script>
    var sonr=1;
    $("#rasm_b").on("click", function () {
        if(sonr<6)
        $("#rasmlar_con").append(`
            <input type="file" id="file"  name="rasm[]" class="form--control custom-file-upload"
                required="">
        `);
        if(sonr==5){
            this.remove()
        }
        sonr++;
        });
</script>
@stop
