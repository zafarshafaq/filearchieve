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
                    <select name="" class="form-control" id="">

                        <option value="">---</option>

                        @foreach($folders as $folder)s
                            <option value="{{ $folder->id}}" selected>{{ $folder->name}} </option>
                        @endforeach

                    </select>
                </div>

                <!-- col -->
                <div class="col-lg mg-t-10 mg-lg-t-0">
                    <input type="text" class="form-control" placeholder="Document Title" />
                </div>
                <!-- col -->
                <div class="col-lg mg-t-10 mg-lg-t-0">
                    <button class="btn btn-primary">
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
                    <p class="mg-b-20">{{ $files->count() }} Result found.</p>
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
            <div class="table-responsive">
                <table class="table table-striped mg-b-0">
                    <thead>
                        @foreach($files as $key => $file)
                            <tr>
                                <td>{{ $key + 1}}</td>
                                <td>{{ $file->folder->name }}</td>
                                <td>{{ $file->name }}</td>
                                <td> {{ $file->location}} </td>
                            </tr>
                        @endforeach

                    </thead>
                    <tbody>

                    </tbody>
                </table>
            </div>
            <!-- bd -->
            <!-- End Table -->
        </div>
        <!-- az-content-body -->
    </div>
</div>
<!-- az-content -->



@endsection