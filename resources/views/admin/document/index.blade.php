@extends('layouts.application')


@section('content')




<div class="az-content pd-y-20 pd-lg-y-30 pd-xl-y-40">
    <div class="container">
        <div class="az-content-body pd-lg-l-40 d-flex flex-column">
            <div class="az-content-breadcrumb">
                <span>Dashboard</span>
                <span>Documents</span>
            </div>

            <br>
            <br>
            @if(session('msg'))
                <div class="alert alert-success alert-dismissable" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    {{session('msg')}}.
                </div>
            @endif



            @if(session('error'))
                <div class="alert alert-danger alert-dismissable" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    {{session('error')}}.
                </div>
            @endif





            <div class="row row-sm">
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
                    <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                        <i class="fa fa-plus"></i>&nbsp; New Folder
                    </button> -->
                </div>
            </div>
            <!-- row -->

            <br />
            <br />

            <!-- Folders -->

            <div class="row row-sm mg-b-20 mg-lg-b-0">
                @foreach ($folders as $folder)
                    <div class="col-lg-2 col-xl-2 mg-t-20 mg-lg-t-0 text-center">
                        <div class="dropdown" style="float: left">
                            <a class="" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img src="../assets/3dot.svg" alt="" />
                            </a>
                            <div class="dropdown-menu tx-13">
                                <!-- <a class="dropdown-item" href="#"> <i class="fa fa-edit"></i>&nbsp; Edit Folder</a>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        <a class="dropdown-item" href="#"> <i class="fa fa-trash"></i>&nbsp; Delete Folder</a> -->
                                <a class="dropdown-item" href="#"> <i class="fa fa-download"></i>&nbsp; Download</a>
                                <a class="dropdown-item" href="#"><i class=" fa fa-share"></i>&nbsp;
                                    Share</a>
                                <a class="dropdown-item" href="#"
                                    onclick="handleAccess('{{ route('folders.access-modal')}}', 'access-modal', {{$folder->id}})"><i
                                        class=" fa fa-universal-access"></i>&nbsp;
                                    Give Access</a>
                            </div>
                        </div>

                        <a href="{{ url('folders/create?id=' . $folder->id) }}">
                            <i style="color: #0099d4; font-size: 100px" class="fa fa-folder-open" aria-hidden="true"></i>
                            <br />
                            <span> {{ $folder->name}} </span>
                        </a>
                    </div>
                @endforeach

            </div>










        </div>
        <!-- az-content-body -->
    </div>
    <!-- container -->
</div>
<!-- az-content -->




<!--  access modal -->
<div class="modal fade" id="access-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">



        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">
                    Access Folder
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
                <button type="button" id="access-btn" class="btn btn-primary">
                    submit
                </button>

            </div>
        </div>

    </div>
</div>



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


    $(document).on('click', '#access-btn', function () {



        let data = [];

        $('#access-table > tbody  > tr').each(function (index, tr) {
            let user_id = $(tr).data('id');
            let read_checkbox = $(tr).find('input')[0];
            let update_checkbox = $(tr).find('input')[1];
            let read = 0
            let update = 0;
            if ($(read_checkbox).is(":checked")) {
                read = 1;
            }
            if ($(update_checkbox).is(":checked")) {
                update = 1;
            }

            let d = { user_id: user_id, read: read, update: update };
            data.push(d);


        });

        $.ajax({
            method: 'Post',
            url: '{{route('folders.access')}}',
            data: data,
            beforeSend: function () {

            },
            complete: function () {

            },
            success: function (data) {
                console.log(data);
            }
        });
    });



</script>
@endsection