@extends('layouts.admin')

@section('content')
<style>
    td{
        text-align: center;
    }
</style>
<div class="page-wrapper">
    <div class="content container-fluid">
        <div class="page-header">
            <div class="row align-items-center">
                <div class="col-md-12 d-flex justify-content-end">
                    {{-- <div class="doc-badge me-3">
                        Xizmat Kategoriyalari 
                    </div> --}}
                    <a
                        href="#"
                        data-bs-toggle="modal"
                        data-bs-target="#addModal"
                        class="btn btn-primary btn-add"
                        ><i class="feather-plus-square me-1"></i>
                        {{__("key.save")}}</a
                    >
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header border-bottom-0">
                        <div class="row align-items-center">
                            <div class="col">
                                <h5 class="card-title">
                                    {{__("key.qulay")}}
                                </h5>
                            </div>
                            <div class="col-auto d-flex flex-wrap">
                                <div class="form-custom me-2">
                                    <div
                                        id="tableSearch"
                                        class="dataTables_wrapper"
                                    ></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <table
                                class="datatable table table-borderless hover-table"
                                id="data-table"
                            >
                                <thead class="thead-light">
                                    <tr>
                                        <th>ID</th>
                                        <th>{{__("key.name")}}</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($categoies as $category)
                                    <tr>
                                        <td>{{$category->id}}</td>
                                        <td>
                                            <h2
                                                class="table-avatar"
                                            >
                                                <a href="#">
                                                    
                                                    <span>Uz:{{lang($category->name,'uz')}}</span>
                                                    <span>Ru:{{lang($category->name,'ru')}}</span>
                                                    <span>Eng:{{lang($category->name,'en')}}</span>
                                                </a>
                                            </h2>
                                        </td>
                                        <td class="text-end">
                                            <div class="actions">
                                                <a
                                                    class="text-black"
                                                    href="#"
                                                    data-bs-toggle="modal"
                                                    data-bs-target="#editModal{{$category->id}}"
                                                >
                                                    <i
                                                        class="feather-edit-3 me-1"
                                                    ></i>
                                                    {{__("key.edit")}}
                                                </a>
                                                <a
                                                    class="text-danger"
                                                    href="#"
                                                    data-bs-toggle="modal"
                                                    data-bs-target="#deleteModal{{$category->id}}"
                                                >
                                                    <i
                                                        class="feather-trash-2 me-1"
                                                    ></i>
                                                    {{__("key.delete")}}
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                    <div
                                        class="modal fade contentmodal"
                                        id="editModal{{$category->id}}"
                                        tabindex="-1"
                                        aria-hidden="true"
                                        >
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content doctor-profile">
                                                <div class="modal-header">
                                                    <h3 class="mb-0">{{__("key.qulay")}}</h3>
                                                    <button
                                                        type="button"
                                                        class="close-btn"
                                                        data-bs-dismiss="modal"
                                                        aria-label="Close"
                                                    >
                                                        <i class="feather-x-circle"></i>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <form
                                                    method="POST"
                                                        action="/admin/category/edit/{{$category->id}}"
                                                    >
                                                    @csrf
                                                        <div class="add-wrap">
                                                            <div class="form-group form-focus">
                                                                <input
                                                                    type="text"
                                                                    class="form-control floating"
                                                                    required
                                                                    name="uz"
                                                                    value="{{lang($category->name,'uz')}}"
                                                                />
                                                                <label class="focus-label"
                                                                    >{{__("key.name")}}(Uz)<span
                                                                        class="text-danger"
                                                                        >*</span
                                                                    ></label
                                                                >
                                                            </div>
                                                            @error('uz')
                                                                <div class="invalid-feedback" style="display: block;">
                                                                Bo'sh xato
                                                                </div>
                                                            @enderror
                                                            <div class="form-group form-focus">
                                                                <input
                                                                    type="text"
                                                                    name="en"
                                                                    class="form-control floating"
                                                                    required
                                                                    value="{{lang($category->name,'en')}}"
                                                                />
                                                                <label class="focus-label"
                                                                    >{{__("key.name")}}(Eng)<span
                                                                        class="text-danger"
                                                                        >*</span
                                                                    ></label
                                                                >
                                                            </div>
                                                            @error('en')
                                                                <div class="invalid-feedback" style="display: block;">
                                                                Bo'sh xato
                                                                </div>
                                                            @enderror
                                                            <div class="form-group form-focus">
                                                                <input
                                                                    name="ru"
                                                                    type="text"
                                                                    class="form-control floating"
                                                                    required
                                                                    value="{{lang($category->name,'ru')}}"
                                                                />
                                                                <label class="focus-label"
                                                                    >{{__("key.name")}} (Ru)<span
                                                                        class="text-danger"
                                                                        >*</span
                                                                    ></label
                                                                >
                                                            </div>
                                                            @error('ru')
                                                                <div class="invalid-feedback" style="display: block;">
                                                                Bo'sh xato
                                                                </div>
                                                            @enderror
                                                          
                                                            <div class="submit-section">
                                                                <button
                                                                    type="submit"
                                                                    class="btn btn-primary btn-save"
                                                                >
                                                                {{__("key.save")}}
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div
                                    class="modal fade contentmodal"
                                    id="deleteModal{{$category->id}}"
                                    tabindex="-1"
                                    aria-hidden="true"
                                    >
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content doctor-profile">
                                                <div
                                                    class="modal-header border-bottom-0 justify-content-end"
                                                >
                                                    <button
                                                        type="button"
                                                        class="close-btn"
                                                        data-bs-dismiss="modal"
                                                        aria-label="Close"
                                                    >
                                                        <i class="feather-x-circle"></i>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <form
                                                    method="POST"
                                                        action="/admin/category/delete/{{$category->id}}"
                                                    >
                                                    @csrf
                                                        <div class="delete-wrap text-center">
                                                            <div class="del-icon">
                                                                <i class="feather-x-circle"></i>
                                                            </div>
                                                            <h2>{{__("key.delete_model")}}</h2>
                                                            <p>{{lang($category->name,__('key.lang'))}}</p>
                                                            <div class="submit-section">
                                                                <button
                                                                    type="submit"
                                                                    class="btn btn-success me-2"
                                                                >
                                                                {{__("key.yes")}}
                                                                </button>
                                                                <a
                                                                    href="#"
                                                                    class="btn btn-danger"
                                                                    data-bs-dismiss="modal"
                                                                    >{{__("key.no")}}</a
                                                                >
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
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

<div
    class="modal fade contentmodal"
    id="addModal"
    tabindex="-1"
    aria-hidden="true"
    >
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content doctor-profile">
            <div class="modal-header">
                <h3 class="mb-0">{{__("key.add")}}</h3>
                <button
                    type="button"
                    class="close-btn"
                    data-bs-dismiss="modal"
                    aria-label="Close"
                >
                    <i class="feather-x-circle"></i>
                </button>
            </div>
            <div class="modal-body">
                <form
                method="POST"
                    action="/admin/category/save"
                >
                @csrf
                    <div class="add-wrap">
                        <div class="form-group form-focus">
                            <input
                                type="text"
                                class="form-control floating"
                                required
                                name="uz"
                            />
                            <label class="focus-label"
                                >{{__("key.name")}} (Uz)<span
                                    class="text-danger"
                                    >*</span
                                ></label
                            >
                        </div>
                        @error('uz')
                            <div class="invalid-feedback" style="display: block;">
                            Bo'sh xato
                            </div>
                        @enderror
                        
                        <div class="form-group form-focus">
                            <input
                                type="text"
                                name="en"
                                class="form-control floating"
                                required
                            />
                            <label class="focus-label"
                                >{{__("key.name")}} (Eng)<span
                                    class="text-danger"
                                    >*</span
                                ></label
                            >
                        </div>
                        @error('en')
                            <div class="invalid-feedback" style="display: block;">
                            Bo'sh xato
                            </div>
                        @enderror
                        <div class="form-group form-focus">
                            <input
                                name="ru"
                                type="text"
                                class="form-control floating"
                                required
                            />
                            <label class="focus-label"
                                >{{__("key.name")}} (Ru)<span
                                    class="text-danger"
                                    >*</span
                                ></label
                            >
                        </div>
                        @error('ru')
                            <div class="invalid-feedback" style="display: block;">
                            Bo'sh xato
                            </div>
                        @enderror
                        
                        {{-- <div class="change-photo-btn">
                            <div>
                                <i class="feather-upload"></i>
                                <p>Upload File</p>
                            </div>
                            <input type="file" class="upload" />
                        </div> --}}
                        {{-- <p class="text-success">
                            Successfully specialityimage.jpg
                            uploaded
                            <a href="#" class="text-danger"
                                ><i class="feather-x"></i
                            ></a>
                        </p> --}}
                        <div class="submit-section">
                            <button
                                type="submit"
                                class="btn btn-primary btn-save"
                            >
                            {{__("key.save")}}
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


@stop