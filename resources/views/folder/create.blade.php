@extends('layouts.application')

@section('content')


<div class="az-content pd-y-20 pd-lg-y-30 pd-xl-y-40">
    <div class="container">
        <div class="az-content-body pd-lg-l-40 d-flex flex-column">

            @if(session('msg'))
                <div class="alert alert-success alert-dismissable" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    {{session('msg')}}.
                </div>
            @elseif(session('error'))
                <div class="alert alert-danger alert-dismissable" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    {{session('error')}}.
                </div>
            @endif


            <div class="az-content-breadcrumb">
                <span>Dashboard</span>
                <span>Documents</span>


                @foreach ($parents as $parent)

                    <span>

                        <a href="{{ url('folders/create?id=' . $parent['id'])  }}">
                            {{ $parent['name'] }}

                        </a>

                    </span>
                @endforeach

                <span>
                    {{$folder->name}}
                </span>


            </div>

            <div class="row">
                <div class="col-lg-6">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search for..." />
                        <span class="input-group-btn">
                            <button class="btn btn-primary" type="button">
                                <i class="fa fa-search"></i>
                            </button>
                        </span>
                    </div>
                </div>
                <div class="col-lg-6 text-right">
                    <div class="dropdown">
                        <button class="btn btn-primary" type="button" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">
                            New
                        </button>
                        <div class="dropdown-menu tx-13">
                            <a class="dropdown-item" data-toggle="modal" data-target="#create-folder-modal">Folder</a>
                            <a class="dropdown-item" data-toggle="modal" data-target="#create-file-modal">File</a>
                        </div>
                    </div>
                </div>
            </div>
            <br /><br />
            <div class="row row-sm mg-b-20 mg-lg-b-0">
                @foreach ($children as $child)


                    <div class="col-lg-2 col-xl-2 mg-t-20 mg-lg-t-0 text-center">
                        <div class="dropdown" style="float: left">
                            <a class="" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img src="{{ asset('assets/3dot.svg')}}" alt="" />
                            </a>
                            <div class="dropdown-menu tx-13">
                                <a class="dropdown-item" href="#"
                                    onclick="handleEdit('{{route('folders.edit', $child->id)}}', 'update-folder-modal')">
                                    <i class="fa fa-edit"></i>&nbsp; Edit Folder</a>
                                <a class="dropdown-item"
                                    onclick="handleDelete('{{route('folders.destroy', $child->id)}}', 'delete-folder-form', 'folder')">
                                    <i class="fa fa-trash"></i>&nbsp; Delete Folder</a>
                                <a class="dropdown-item" href="#"> <i class="fa fa-download"></i>&nbsp; Download</a>
                                <a class="dropdown-item" href="#"><i class="fa fa-share"></i>&nbsp; Share</a>
                                <a class="dropdown-item" href="#"
                                    onclick="handleAccess('{{route('folders.access-modal')}}', 'access-modal', {{$child->id }})"><i
                                        class="fa fa-universal-access"></i>&nbsp; Give
                                    access</a>

                            </div>
                        </div>

                        <a href="{{ url('folders/create?id=' . $child->id)  }}">
                            <i style="color: #0099d4; font-size: 100px" class="fa fa-folder-open" aria-hidden="true"></i>
                            <br />
                            <span> {{ $child->name}} </span>
                        </a>
                    </div>
                @endforeach


                @foreach ($files as $file)
                    <div class="col-lg-2 col-xl-2 mg-t-20 mg-lg-t-0 text-center">
                        <div class="dropdown" style="float: left">
                            <a class="" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img src="../assets/3dot.svg" alt="" />
                            </a>
                            <div class="dropdown-menu tx-13">
                                <a class="dropdown-item" href="#"><i class="fa fa-trash"></i>&nbsp; Delete File</a>
                                <a class="dropdown-item" href="{{ url('storage' . $file['url'])}}"><i
                                        class="fa fa-download"></i>&nbsp; Download</a>
                                <a class="dropdown-item" href="#"><i class="fa fa-share"></i>&nbsp; Share</a>
                            </div>
                        </div>
                        <a href="" style="padding:">

                            <i class="fa fa-file-pdf" style="font-size: 80px; color: rgb(123, 27, 27)"></i>
                            <br />
                            <br>
                            <span> {{ $file['name']}} </span>

                            <!-- <img src="{{asset('storage' . $file['url'])}}" alt="" height="80px" width="50px" height="100px"> -->

                        </a>
                    </div>



                @endforeach
            </div>
            <!-- az-content-body -->
        </div>
        <!-- container -->
    </div>
    <!-- az-content -->
    <br>
    <!--  folder modal -->
    <div class="modal fade" id="create-folder-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">
                        New Folder
                    </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <form action="{{ route('folders.store')}}" method="Post" id="create-folder-form">
                        @csrf

                        <input type="hidden" name="parent_folder_id" value="{{$folder->id}}">
                        <div class="row row-sm">
                            <div class="col-lg-12">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            Folder Name</span>
                                    </div>
                                    <input type="text" class="form-control" name="name" />
                                </div>
                                <!-- input-group -->
                            </div>
                        </div>

                        <!-- row -->

                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">
                        Close
                    </button>
                    <button type="submit" form="create-folder-form" class="btn btn-primary">
                        Create
                    </button>

                </div>
            </div>
        </div>
    </div>



    <!-- Edit Folder Modal -->


    <div class="modal fade" id="update-folder-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">
                        Update Folder
                    </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">
                        Close
                    </button>
                    <button type="submit" form="update-folder-form" class="btn btn-primary">
                        Update
                    </button>

                </div>
            </div>
        </div>
    </div>



    <!-- ------------------------------------ File Modal-------------------------------------------- -->


    <div class="modal fade" id="create-file-modal" tabindex="-1" role="dialog" aria-labelledby="FileModal"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="FileModal">
                        New Folder
                    </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('files.store')}}" method="Post" id="create-file-form"
                        enctype="multipart/form-data">
                        @csrf

                        <input type="hidden" name="parent_folder_id" value="{{$folder->id}}">
                        <div class="row row-sm">
                            <div class="col-lg-12">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            File Name</span>
                                    </div>
                                    <input type="text" class="form-control" name="name" value="{{ old('name')}}" />
                                </div>
                                <!-- input-group -->
                            </div>
                        </div>
                        <!-- row -->

                        <div class="row row-sm">
                            <div class="col-lg-12">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            Location</span>
                                    </div>
                                    <input type="text" class="form-control" name="location"
                                        value="{{ old('location')}}" />
                                </div>
                                <!-- input-group -->
                            </div>
                        </div>
                        <div class="row row-sm">
                            <div class="col-lg-12">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            Choose File</span>
                                    </div>
                                    <input type="file" class="form-control" name="file" value="{{ old('file')}}" />
                                </div>
                                <!-- input-group -->
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">
                        Close
                    </button>
                    <button type="submit" form="create-file-form" class="btn btn-primary">
                        Create
                    </button>

                </div>
            </div>
        </div>
    </div>


    <form action="" method="post" id="delete-folder-form">
        @csrf
        @method('delete')

    </form>



    <!-- access modal -->

    <div class="modal fade" id="access-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">


            <form action="{{ route('folders.access')}}" method="post" id="access-form">
                @csrf

                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">
                            Give Access
                        </h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">


                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">
                            Close
                        </button>
                        <button type="submit" class="btn btn-primary">
                            Submit
                        </button>

                    </div>
                </div>

            </form>
        </div>
    </div>










    @endsection



    @section('validator')
    {!! JsValidator::formRequest('App\Http\Requests\FolderRequest', '#create-folder-form') !!}
    {!! JsValidator::formRequest('App\Http\Requests\FileRequest', '#create-file-form') !!}

    @endsection


    @section('custom-js')


    <script>


        // Ajax Pagination in laravel
        $(document).on('click', '.pagination a', function (e) {
            e.preventDefault();
            let page = $(this).attr('href').split('page=')[1];
            paginate(page);
        });


        const paginate = (page) => {

            $.ajax({
                url: '/pagination/paginate-data?page=' + page,
                method: "GET",
                success: function (res) {

                    $('.table-responsive').html(res);
                }

            });
        }




        // Ajax Search 
        $(document).on('click', '#search-btn', function (e) {
            let search_string = $('#search-input').val();

            $.ajax({
                url: "/users/search",
                method: 'GET',
                data: { search_string: search_string },
                success: function (res) {

                    $('.table-responsive').html(res);

                    if (res.status == "noting_found") {
                        $('.table-responsive').html('<span class="text-danger" >' + 'Noting Found' + ' </span>');

                    }

                }
            });


        });



    </script>
    @endsection