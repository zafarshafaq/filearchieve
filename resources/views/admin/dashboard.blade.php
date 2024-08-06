@extends('layouts.application')
@section('content')
<div class="az-content az-content-dashboard">
    <div class="container">
        <div class="az-content-body">
            <div class="az-dashboard-one-title text-center">
                <h2 class="az-dashboard-title">Archieve System</h2>
                <div class="az-content-header-right">
                    <img src="../assets/img/logo.jpg" class="mx-auto d-block" width="100px" alt="" />
                </div>
            </div>
            <!-- az-dashboard-one-title -->

            <!-- Search Form -->

            <div class="az-content-label mg-b-5">Search Documents Hear</div>
            <!-- <p class="mg-b-20">A basic form control input and textarea with disabled and readonly mode.</p> -->

            <div class="row row-sm">
                <div class="col-lg">
                    <select name="" class="form-control" id="select-project">

                        <option value="">Select Project</option>

                        @foreach($folders as $folder)s
                            <option value="{{ $folder->name}}" selected>{{ $folder->name}} </option>
                        @endforeach

                    </select>
                </div>

                <!-- col -->
                <div class="col-lg mg-t-10 mg-lg-t-0">
                    <input type="text" class="form-control" placeholder="Document Title"  id="search-input" />
                </div>
                <!-- col -->
                <div class="col-lg mg-t-10 mg-lg-t-0">
                    <button class="btn btn-primary" id="search-btn" >
                        <i class="typcn typcn-zoom-outline"></i>Search
                    </button>
                </div>
                <!-- col -->
            </div>
            <!-- row -->
            <!-- End Search Form -->

            <br />
            <br />
            <!-- table -->

            <div class="row">
                <div class="col-lg-6">
                    <div class="az-content-label mg-b-5">Search Result</div>
                    <p id="result-msg" class="mg-b-20"> </p>
                </div>
                <div class="col-lg-6 text-right">
                    <div class="text-right">
                        <button class="btn" style="background-color: #dd8787">
                            PDF
                        </button>
                        <button class="btn" style="background-color: #e5ecdc">
                            Excel
                        </button>
                    </div>
                </div>
            </div>
            <div class="table-responsive" id="file-table-container">
                <table class="table table-striped mg-b-0">
                    <thead>
                     

                    <tr>
                        <th>#</th>
                        <th>Project</th>
                        <th>Folder</th>
                        <th>File Name</th>
                        <th>Location</th>
                    </tr>
                    </thead>
                    <tbody>

                    @foreach($files as $key => $file)
                            <tr>
                                <td>{{ $key + 1}}</td>
                <td>{{ $file->folder->parentRecursive->name}}</td>

                                <td>{{ $file->folder->name }}</td>
                                <td>{{ $file->name }}</td>
                                <td> {{ $file->location}} </td>
                            </tr>
                        @endforeach


                    </tbody>
                </table>

                {{ $files->links()}}
            </div>
            <!-- bd -->
            <!-- End Table -->
        </div>
        <!-- az-content-body -->
    </div>
</div>
<!-- az-content -->



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
        let project =$('#select-project').val(); 


    
        $.ajax({
            url: "/files/search",
            method: 'GET',
            data: { 
                search_string: search_string ,
                project :project
            
            },
            success: function (res) {
                $('#result-msg').html(''); 
                $('.table-responsive').html(res);

                if (res.status == "noting_found") {
                    $('#result-msg').html('<span class="text-danger" >' + 'Noting Found' + ' </span>');

                }

            }
        });


    });

        
</script>

@endsection