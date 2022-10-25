@extends('layouts.admin')

@section('content')
<style>
    td{
        text-align: center;
    }
</style>
<div class="page-wrapper">
    <div class="content container-fluid">
        

        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    
                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <table
                                class="datatable table table-borderless hover-table"
                                id="data-table"
                            >
                                <thead class="thead-light">
                                    <tr>
                                        <th>ID</th>
                                        <th>{{__('key.ijarachi')}}</th>
                                        <th>{{__('key.ijarachi_tel')}}</th>
                                        <th>{{__('key.um_narx')}}</th>
                                        <th>{{__('key.xonalar_soni')}}</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($elons as $elon)
                                    <tr>
                                        <td>{{$elon->id}}</td>
                                        <td>
                                            {{$elon->name}}
                                        </td>
                                        <td>
                                            {{$elon->phone}}
                                        </td>
                                        <td>
                                            {{$elon->narx}}
                                        </td>
                                        <td>
                                            {{$elon->xona_soni}}
                                        </td>
                                        <td>
                                            @if($elon->type==0)
                                            {{__('key.faol')}}
                                            @elseif($elon->type==1)
                                            {{__('key.sorov1')}}
                                            @elseif($elon->type==2)
                                            {{__('key.sorov3')}}
                                            @else
                                            {{__('key.sorov3')}}
                                            @endif
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div
                    id="tablepagination"
                    class="dataTables_wrapper"
                ></div>
            </div>
        </div>
    </div>
</div>



@stop