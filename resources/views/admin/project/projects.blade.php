@extends('layouts.application')

@section('content')




<div class="az-content pd-y-20 pd-lg-y-30 pd-xl-y-40">
    <div class="container">
        <div class="az-content-left az-content-left-components">
            <div class="component-item">
                <img src="../assets/img/logo.jpg" width="100px" alt="" />
                <br /><br />
                <label>Project</label>
                <nav class="nav flex-column">
                    <a href="{{ route('projects.create')}}" class="nav-link">
                        <i class="typcn typcn-user-add"></i>&nbsp; &nbsp; Create
                        Project</a>
                    <a href="{{ route('projects.index') }}" class="nav-link active"><i class="typcn typcn-group"></i>
                        &nbsp; &nbsp;
                        All Projects</a>
                </nav>
            </div>
            <!-- component-item -->
        </div>
        <!-- az-content-left -->
        <div class="az-content-body pd-lg-l-40 d-flex flex-column">
            <div class="az-content-breadcrumb">
                <span>Dashboard</span>
                <span>All Projects</span>
            </div>

            <h3>
                All Projects of <span style="color: #0099d4">Union</span>
                <span>Aid</span>
            </h3>
            <br />
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



            <div class="row row-sm">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search for..." />
                    <span class="input-group-btn">
                        <button class="btn btn-primary" type="button">
                            <i class="fa fa-search"></i>
                        </button>
                    </span>
                </div>
            </div>
            <!-- row -->
            <br />
            <div class="row">
                <div class="col-lg-6">
                    <div class="az-content-label mg-b-5">Search Result</div>
                    <p class="mg-b-20">{{ $projects->count()}} Result.</p>
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
                        <tr>
                            <th>#</th>
                            <th>Project Name</th>
                            <th>Donar</th>
                            <th>Location</th>
                            <th>Project Manager</th>
                            <th>Start Date</th>
                            <th>End Date</th>
                            <th>Action</th>
                        </tr>
                    </thead>

                    <tbody style="font-size: 12px">

                        @foreach ($projects as $key => $project)

                            <tr>

                                <td>{{$key++}}</td>
                                <td>{{ $project->name }}</td>
                                <td>{{ $project->donar }}</td>
                                <td>{{ $project->location }}</td>
                                <td>{{ $project->proj_manager }}</td>
                                <td>{{ $project->start_date }}</td>
                                <td>{{ $project->end_date }}</td>

                                <td>
                                    <a href="{{ route('projects.edit', $project->id)}}">
                                        <i style="font-size: 20px" class="typcn typcn-edit"></i></a>
                                    <a href="#" onclick="handleDelete('delete-project-modal')">
                                        <i style="font-size: 20px" class="typcn typcn-trash"></i></a>
                                </td>
                            </tr>

                        @endforeach


                    </tbody>
                </table>
            </div>



            <!-- az-footer -->
        </div>
        <!-- az-content-body -->
    </div>
    <!-- container -->
</div>

<!-- Project Delete Modal -->



<div class="modal fade" id="delete-project-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">

            <div class="modal-body">

                <form action="{{ route('projects.destroy', $project->id)}}" method="post" id="delete-project-form">
                    @csrf
                    @method('delete')
                    <h4> Are you sure? you want to delete this project?</h4>

                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-sm btn-secondary" data-dismiss="modal">
                    No
                </button>
                <button type="submit" form="delete-project-form" class="btn btn-sm btn-danger">
                    Yes
                </button>

            </div>
        </div>
    </div>
</div>



@endsection