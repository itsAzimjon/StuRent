@extends('layouts.admin')

@section('content')
<div class="page-wrapper">
    {{-- hozircha bosh --}}
    <div class="content container-fluid pb-0">
        <h4 class="mb-3">Overview</h4>
        <div class="row">
            <div class="col-xl-4 col-sm-4 col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="dash-widget-header">
                            <span
                                class="dash-widget-icon bg-primary"
                            >
                                <i class="feather-user-plus"></i>
                            </span>
                            <div class="dash-count">
                                <h5 class="dash-title"> {{__('key.sorov1')}}</h5>
                                <div class="dash-counts">
                                    <p>{{$count1}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-sm-4 col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="dash-widget-header">
                            <span class="dash-widget-icon bg-blue">
                                <i class="feather-users"></i>
                            </span>
                            <div class="dash-count">
                                <h5 class="dash-title"> {{__('key.sorov2')}}</h5>
                                <div class="dash-counts">
                                    <p>{{$count2}}</p>
                                </div>
                            </div>
                        </div>
                       
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-sm-4 col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="dash-widget-header">
                            <span class="dash-widget-icon bg-blue">
                                <i class="feather-users"></i>
                            </span>
                            <div class="dash-count">
                                <h5 class="dash-title"> {{__('key.sorov3')}}</h5>
                                <div class="dash-counts">
                                    <p>{{$count3}}</p>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
        
    </div>
</div>
@endsection