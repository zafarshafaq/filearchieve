@extends('layouts.application')


@section('content')




<?php  $url = request()->url(); ?>





<div class="az-content pd-y-20 pd-lg-y-30 pd-xl-y-40">
    <div class=" container az-content-body">
        <div class="az-content-left az-content-left-components">
            <div class="component-item">
                <img src="../assets/img/logo.jpg" width="100px" alt="" />
                <br /><br />
                <label>User Management</label>
                <nav class="nav flex-column">
                    <a href="{{route('projects.create')}}"
                        class="nav-link @if(Str::contains($url, 'create'))  active @endif ">
                        <i class="typcn typcn-user-add"></i>&nbsp; &nbsp; Create Project</a>
                    <a href="{{ route('projects.index')}}" class="nav-link"><i class="typcn typcn-group"></i> &nbsp;
                        &nbsp; All
                        Projects</a>
                </nav>
            </div>
            <!-- component-item -->
        </div>
        <!-- az-content-left -->
        <div class="az-content-body pd-lg-l-40 d-flex flex-column">

            <div class="az-content-breadcrumb">
                <span>Dashboard</span>
                <span>Create Project</span>


            </div>



    
            <h3>Update Project </h3>
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

            <form id="edit-project-form" method="Post" action="{{ route('projects.update', $project->id)}}">
                @csrf
                @method('put')
                <br />
                <div class="row row-sm">
                    <div class="col-lg-6">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="project_name">Project Name</span>
                            </div>
                            <input type="text" class="form-control" aria-label="project_name" name="name" value="{{ $project->name }}"
                                aria-describedby="name"  />
                                <span id="name-error"></span>
                        </div>
                        <!-- input-group -->
                    </div>
                    <!-- col -->

                    <div class="col-lg-6">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1"> Donar</span>
                            </div>
                            <input type="text" class="form-control" name="donar" value="{{ $project->donar }}" />
                        </div>
                        <!-- input-group -->
                    </div>
                    <!-- col -->
                </div>
                <!-- row -->

                <div class="row row-sm">
                    <div class="col-lg-6">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="location">Location</span>
                            </div>
                            <input type="text" class="form-control" aria-label="location"
                                aria-describedby="location" name="location" value="{{ $project->location }}" />
                        </div>
                        <!-- input-group -->
                    </div>
                    <!-- col -->

                    <div class="col-lg-6">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="proj_manager">Project Manager</span>
                            </div>
                            <input type="text" aria-describedby="proj_manager" class="form-control" aria-label="proj_manager" name="proj_manager"
                                value="{{ $project->proj_manager}}" />
                        </div>
                        <!-- input-group -->
                    </div>
                    <!-- col -->
                </div>
                <!-- row -->

                <div class="row row-sm">
                    <div class="col-lg-6">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <div class="input-group-text">Start Date:</div>
                            </div>
                            <input id="start_date" type="date" name="start_date" value="{{ $project->start_date }}"
                                class="form-control" placeholder="MM/DD/YYYY" />
                        </div>
                    </div>
                    <!-- col -->

                    <div class="col-lg-6">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <div class="input-group-text">End Date:</div>
                            </div>
                            <input id="dateMask" name="end_date" value="{{ $project->end_date}}" type="date"
                                class="form-control" placeholder="MM/DD/YYYY" />
                        </div>
                    </div>
                    <!-- col -->
                </div>
                <!-- row -->

                <div class="row row-sm">
                    <div class="col-lg-6">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="sectore">Sector</span>
                            </div>
                            
                       
                            <select name="sectore" id="sectore" class="form-control">
                                <option value="">---</option>
                            @foreach ($sectores as $sectore )
                            <option value="{{ $sectore->id }}" @if($project->sectore->name === $sectore->name) selected @endif>{{ $sectore->name }}</option>
                            @endforeach
                            </select>
                        </div>
                        <!-- input-group -->
                    </div>

                    <div class="col-lg-6">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1">Description</span>
                            </div>
                            <textarea name="description" value="{{ old('description')}}" class="form-control"
                                id="">{{$project->description}}</textarea>
                        </div>
                        <!-- input-group -->
                    </div>
                </div>

                <div class="row row-sm">
                    <div class="col-lg-6">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                    <!-- col -->
                </div>
            </form>

        </div>
    </div>

</div>
@endsection


@section('validator')
{!! JsValidator::formRequest('App\Http\Requests\UpdateProjectRequest','#edit-project-form') !!}
@endsection

