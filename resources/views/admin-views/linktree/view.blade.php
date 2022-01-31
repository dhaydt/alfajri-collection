@extends('layouts.back-end.app')
@section('title', \App\CPU\translate('Linktree'))
@push('css_or_js')
    <meta name="csrf-token" content="{{ csrf_token() }}">
@endpush

@section('content')
    <div class="content container-fluid">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">{{\App\CPU\translate('Dashboard')}}</a>
                </li>
                <li class="breadcrumb-item" aria-current="page">{{\App\CPU\translate('Link Tree')}}</li>
            </ol>
        </nav>
        <!-- Page Heading -->
        <div class="row">
            <div class="col-md-12" id="banner-btn">
                <button id="main-banner-add" class="btn btn-primary"><i
                        class="tio-add-circle"></i> {{ \App\CPU\translate('add_wa_link')}}</button>
                <button id="secondary-banner-add"
                        class="btn btn-primary ml-2"><i
                        class="tio-add-circle"></i> {{ \App\CPU\translate('add_social_media_link')}}</button>
            </div>
        </div>
        <!-- Content Row -->
        <div class="row pt-4" id="main-banner" style="display: none;text-align: {{Session::get('direction') === "rtl" ? 'right' : 'left'}};">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        {{ \App\CPU\translate('add_whatsapp_link')}}
                    </div>
                    <div class="card-body">
                        <form action="{{route('admin.linktree.store')}}" method="post" enctype="multipart/form-data"
                              class="banner_form">
                            @csrf
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-6">
                                        <input type="hidden" id="id" name="id">
                                        <label for="name">{{ \App\CPU\translate('Name')}}</label>
                                        <input type="text" name="name" class="form-control" id="name" required>
                                        <label for="link" class="mt-2">{{ \App\CPU\translate('no_whatsapp')}} <small class="badge-soft-danger">(Ex: 62823111111)</small></label>
                                        <input type="number" name="link" class="form-control" id="link" required>
                                        <input type="hidden" id="type" name="type" value="wa">
                                        <label for="name">{{ \App\CPU\translate('Logo')}}</label><span
                                        class="badge mt-2 badge-soft-danger">( {{ \App\CPU\translate('Ex')}} 1:1 )</span>
                                    <br>
                                    <div class="custom-file" style="text-align: left">
                                        <input type="file" name="logo" id="fmimageFileUploader"
                                               class="custom-file-input"
                                               accept=".jpg, .png, .jpeg, .gif, .bmp, .tif, .tiff|image/*">
                                        <label class="custom-file-label"
                                               for="mbimageFileUploader">{{\App\CPU\translate('choose')}} {{\App\CPU\translate('file')}}</label>
                                    </div>
                                    </div>
                                    <div class="col-md-6">
                                        <center>
                                            <img
                                                style="width: auto;border: 1px solid; border-radius: 10px; max-height:200px;"
                                                id="mbImageviewer"
                                                src="{{asset('assets\back-end\img\400x400\img2.jpg')}}"
                                                alt="banner image"/>
                                        </center>
                                    </div>
                                </div>
                            </div>

                            <div class="card-footer">
                                <a class="btn btn-secondary text-white cancel">{{ \App\CPU\translate('Cancel')}}</a>
                                <button id="add" type="submit"
                                        class="btn btn-primary">{{ \App\CPU\translate('save')}}</button>
                                <a id="update" class="btn btn-primary"
                                   style="display: none; color: #fff;">{{ \App\CPU\translate('update')}}</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="row pt-4" id="secondary-banner" style="display: none">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        {{ \App\CPU\translate('social_media_link')}}
                    </div>
                    <div class="card-body">
                        <form class="banner_form" action="{{route('admin.linktree.store')}}" method="post"
                              style="text-align: {{Session::get('direction') === "rtl" ? 'right' : 'left'}};"
                              enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-6">
                                        <input type="hidden" id="idSosmed" name="id">
                                        <label for="name">{{ \App\CPU\translate('name')}}</label>
                                        <input type="text" name="name" class="form-control" id="sosmedName" required>
                                        <label for="link" class="mt-2">{{ \App\CPU\translate('link')}}</label><span
                                        class="badge mt-2 badge-soft-danger">( {{ \App\CPU\translate('ratio')}} https://www.instagram.com/alfajri_official01/ )</span>
                                    <br>
                                        <input type="text" name="link" class="form-control" id="sosmedLink" required>
                                        <input type="hidden" id="footertype" name="type" value="sosmed">
                                        <label for="name">{{ \App\CPU\translate('Logo')}}</label><span
                                            class="badge mt-2 badge-soft-danger">( {{ \App\CPU\translate('Ex')}} 1:1 )</span>
                                        <br>
                                        <div class="custom-file" style="text-align: left">
                                            <input type="file" name="logo" id="fbimageFileUploader"
                                                   class="custom-file-input"
                                                   accept=".jpg, .png, .jpeg, .gif, .bmp, .tif, .tiff|image/*">
                                            <label class="custom-file-label"
                                                   for="fbimageFileUploader">{{\App\CPU\translate('choose')}} {{\App\CPU\translate('file')}}</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <center>
                                            <img
                                                style="width: auto;border: 1px solid; border-radius: 10px; max-height:200px;"
                                                id="fbImageviewer"
                                                src="{{asset('assets\back-end\img\400x400\img2.jpg')}}"
                                                alt="banner image"/>
                                        </center>
                                    </div>
                                </div>
                            </div>

                            <div class="card-footer">
                                <a class="btn btn-secondary text-white cancel">{{ \App\CPU\translate('Cancel')}}</a>
                                <button type="submit" id="addfooter"
                                        class="btn btn-primary">{{ \App\CPU\translate('save')}}</button>
                                <a id="footerupdate" class="btn btn-primary"
                                   style="display: none; color: #fff;">{{ \App\CPU\translate('update')}}</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="row" style="margin-top: 20px" id="banner-table">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="flex-between row justify-content-between align-items-center flex-grow-1 mx-1">
                            <div class="flex-between">
                                <div><h5>{{ \App\CPU\translate('linktree_table')}}</h5></div>
                                <div class="mx-1"><h5 style="color: red;">({{ $banners->total() }})</h5></div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body" style="padding: 0">
                        <div class="table-responsive">
                            <table id="columnSearchDatatable"
                                   style="text-align: {{Session::get('direction') === "rtl" ? 'right' : 'left'}};"
                                   class="table table-borderless table-thead-bordered table-nowrap table-align-middle card-table">
                                <thead class="thead-light">
                                <tr>
                                    <th>{{\App\CPU\translate('No')}}</th>
                                    <th>{{\App\CPU\translate('name')}}</th>
                                    <th>{{\App\CPU\translate('image')}}</th>
                                    <th>{{\App\CPU\translate('link')}}</th>
                                    <th>{{\App\CPU\translate('type')}}</th>
                                    <th style="width: 50px">{{\App\CPU\translate('action')}}</th>
                                </tr>
                                </thead>
                                @foreach($banners as $key=>$banner)
                                <tbody>

                                    <tr>
                                        <th scope="row">{{$banners->firstItem()+$key}}</th>
                                        <td>{{$banner->name}}</td>
                                        <td>
                                            <img width="80"
                                                 onerror="this.src='{{asset('assets/front-end/img/image-place-holder.png')}}'"
                                                 src="{{asset('storage/linktree')}}/{{$banner['logo']}}">
                                        </td>
                                        <td>
                                            {{ $banner->link }}
                                        </td>
                                        <td>{{$banner->type}}</td>
                                        <td>
                                            <div class="dropdown">
                                                <button class="btn btn-outline-secondary dropdown-toggle" type="button"
                                                        id="dropdownMenuButton" data-toggle="dropdown"
                                                        aria-haspopup="true"
                                                        aria-expanded="false">
                                                    <i class="tio-settings"></i>
                                                </button>
                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                    <a class="dropdown-item  edit" style="cursor: pointer;"
                                                       id="{{$banner['id']}}"> {{ \App\CPU\translate('Edit')}}</a>
                                                    <a class="dropdown-item delete" style="cursor: pointer;"
                                                       id="{{$banner['id']}}"> {{ \App\CPU\translate('Delete')}}</a>
                                                </div>
                                            </div>

                                        </td>
                                    </tr>

                                </tbody>
                                @endforeach
                            </table>
                        </div>
                    </div>
                    <div class="card-footer">
                        {{$banners->links()}}
                    </div>
                    @if(count($banners)==0)
                        <div class="text-center p-4">
                            <img class="mb-3" src="{{asset('assets/back-end')}}/svg/illustrations/sorry.svg" alt="Image Description" style="width: 7rem;">
                            <p class="mb-0">{{ \App\CPU\translate('No_data_to_show')}}</p>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection

@push('script')
    <script src="{{asset('assets/back-end')}}/js/select2.min.js"></script>
    <script>
        function mbimagereadURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#mbImageviewer').attr('src', e.target.result);
                }

                reader.readAsDataURL(input.files[0]);
            }
        }

        $("#mbimageFileUploader").change(function () {
            mbimagereadURL(this);
        });

        function fbimagereadURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#fbImageviewer').attr('src', e.target.result);
                }

                reader.readAsDataURL(input.files[0]);
            }
        }

        $("#fbimageFileUploader").change(function () {
            fbimagereadURL(this);
        });


        function pbimagereadURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#pbImageviewer').attr('src', e.target.result);
                }

                reader.readAsDataURL(input.files[0]);
            }
        }

        $("#pbimageFileUploader").change(function () {
            pbimagereadURL(this);
        });

    </script>
    <script>
        $('#main-banner-add').on('click', function () {
            $('#main-banner').show();
            $('#secondary-banner').hide();
            $('#popup-banner').hide();
            $('#banner-table').hide();
            $('#header-banner').hide();
            $('#floating-banner').hide();
        });
        $('#secondary-banner-add').on('click', function () {
            $('#main-banner').hide();
            $('#secondary-banner').show();
            $('#popup-banner').hide();
            $('#banner-table').hide();
            $('#header-banner').hide();
            $('#floating-banner').hide();
        });

        $('.cancel').on('click', function () {
            $('.banner_form').attr('action', "{{route('admin.banner.store')}}");
            $('#main-banner').hide();
            $('#secondary-banner').hide();
            $('#popup-banner').hide();
            $('#header-banner').hide();
            $('#banner-table').show();
            $('#floating-banner').hide();
        });

        $(document).on('click', '.delete', function () {
            var id = $(this).attr("id");
            Swal.fire({
                title: "{{\App\CPU\translate('Are_you_sure_delete_this_link')}}?",
                text: "{{\App\CPU\translate('You_will_not_be_able_to_revert_this')}}!",
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: '{{\App\CPU\translate('Yes')}}, {{\App\CPU\translate('delete_it')}}!'
            }).then((result) => {
                if (result.value) {
                    $.ajaxSetup({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                        }
                    });
                    $.ajax({
                        url: "{{route('admin.linktree.delete')}}",
                        method: 'POST',
                        data: {id: id},
                        success: function () {
                            toastr.success('{{\App\CPU\translate('linktree_deleted_successfully')}}');
                            location.reload();
                        }
                    });
                }
            })
        });

        $(document).on('click', '.edit', function () {
            var id = $(this).attr("id");
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                }
            });
            $.ajax({
                url: "{{route('admin.linktree.edit')}}",
                method: 'POST',
                data: {id: id},
                success: function (data) {
                    $('.banner_form').attr('action', "{{route('admin.linktree.update')}}");
                    // console.log(data);
                    if (data.type == 'wa') {

                        $('#main-banner').show();
                        $('#banner-table').hide();
                        $('#add').html("{{ \App\CPU\translate('update')}}");
                        // $('#add').hide();
                        $('#id').val(data.id);
                        $('#name').val(data.name);
                        $('#link').val(data.link);
                        $('#url').siblings('#id').val(data.id);
                        $('#mbImageviewer').attr('src', "{{asset('storage/linktree')}}" + "/" + data.photo);
                        $('#cate-table').hide();

                    } else if (data.type == 'sosmed') {

                        $('#secondary-banner').show();
                        $('#banner-table').hide();
                        // $('#addfooter').hide();
                        $('#addfooter').html("{{ \App\CPU\translate('update')}}");
                        // $('#footerupdate').show();
                        $('#idSosmed').val(data.id);
                        $('#sosmedName').val(data.name);
                        $('#sosmedLink').val(data.link);
                        $('#footerurl').siblings('#id').val(data.id);
                        $('#fbImageviewer').attr('src', "{{asset('storage/linktree')}}" + "/" + data.logo);
                        $('#cate-table').hide();

                    } else {
                        $('#popup-banner').show();
                        $('#banner-table').hide();
                        $('#addpopup').html("{{ \App\CPU\translate('update')}}");
                        // $('#addpopup').hide();
                        // $('#popupupdate').show();
                        // $('#id').val(data.id);
                        $('#popupurl').val(data.url);
                        $('#popupurl').siblings('#id').val(data.id);
                        $('#pbImageviewer').attr('src', "{{asset('storage/linktree')}}" + "/" + data.photo);
                        $('#cate-table').hide();
                    }


                }
            });
        });
        $('#update').on('click', function () {
            $('#update').attr("disabled", true);
            var id = $('#id').val();
            var name = $('#link').val();
            var type = 'wa';

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                }
            });

            $.ajax({
                url: "{{route('admin.linktree.update')}}",
                method: 'POST',
                data: {
                    id: id,
                    link: link,
                    name: name,
                    type: type,

                },
                success: function (data) {
                    console.log(data);
                    $('#url').val('');
                    $.ajax({
                        type: 'get',
                        url: '{{route('image-remove',[0,'main_banner_image_modal'])}}',
                        dataType: 'json',
                        success: function (data) {
                            if (data.success === 1) {
                                $("#img-suc").hide();
                                $("#img-err").hide();
                                $("#crop").hide();
                                $("#show-images").html(data.photo);
                                $("#image-count").text(data.count);
                            } else if (data.success === 0) {
                                $("#img-suc").hide();
                                $("#img-err").show();
                            }
                        },
                    });
                    toastr.success('{{\App\CPU\translate('linktree_updated_Successfully')}}.');


                    location.reload();
                }
            });
            $('#save').hide();

        });
        $('#footerupdate').on('click', function () {
            $('#footerupdate').attr("disabled", true);
            var id = $('#idSosmed').val();
            var name = $('#sosmedName').val();
            var link = $('#sosmedLink').val();
            var type = 'sosmed';
            console.log(type)

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                }
            });

            $.ajax({
                url: "{{route('admin.linktree.update')}}",
                method: 'POST',
                data: {
                    id: id,
                    name: name,
                    link: link,
                    type: type,

                },
                success: function (data) {

                    $('#url').val('');
                    $.ajax({
                        type: 'get',
                        url: '{{route('image-remove',[0,'secondary_banner_image_modal'])}}',
                        dataType: 'json',
                        success: function (data) {
                            if (data.success === 1) {
                                $("#img-suc").hide();
                                $("#img-err").hide();
                                $("#crop").hide();
                                $("#show-images").html(data.photo);
                                $("#image-count").text(data.count);
                            } else if (data.success === 0) {
                                $("#img-suc").hide();
                                $("#img-err").show();
                            }
                        },
                    });
                    toastr.success('{{\App\CPU\translate('linktree_updated_Successfully')}}.');


                    location.reload();
                }
            });
            $('#save').hide();

        });

    </script>
    <!-- Page level plugins -->
    <script src="{{asset('assets/back-end')}}/vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="{{asset('assets/back-end')}}/vendor/datatables/dataTables.bootstrap4.min.js"></script>
    <script>
        $(document).ready(function () {
            $('#dataTable').DataTable();
        });
    </script>
@endpush
