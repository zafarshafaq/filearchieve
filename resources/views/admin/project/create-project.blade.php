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
            <h3>Add Project Form</h3>
            <br />


            <form action="">
                <br />
                <div class="row row-sm">
                    <div class="col-lg-6">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1">Project Name</span>
                            </div>
                            <input type="text" class="form-control" aria-label="project_name"
                                aria-describedby="basic-addon1" />
                        </div>
                        <!-- input-group -->
                    </div>
                    <!-- col -->

                    <div class="col-lg-6">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1"> Donar</span>
                            </div>
                            <input type="text" class="form-control" />
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
                                <span class="input-group-text" id="basic-addon1">Location</span>
                            </div>
                            <input type="text" class="form-control" aria-label="location"
                                aria-describedby="basic-addon1" />
                        </div>
                        <!-- input-group -->
                    </div>
                    <!-- col -->

                    <div class="col-lg-6">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1">Project Manager</span>
                            </div>
                            <input type="text" class="form-control" aria-label="project_manager" />
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
                            <input id="dateMask" type="text" class="form-control" placeholder="MM/DD/YYYY" />
                        </div>
                    </div>
                    <!-- col -->

                    <div class="col-lg-6">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <div class="input-group-text">End Date:</div>
                            </div>
                            <input id="dateMask" type="text" class="form-control" placeholder="MM/DD/YYYY" />
                        </div>
                    </div>
                    <!-- col -->
                </div>
                <!-- row -->

                <div class="row row-sm">
                    <div class="col-lg-6">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1">Sector</span>
                            </div>
                            <select name="" id="" class="form-control">
                                <option value="Health">Health</option>
                                <option value="">Education</option>
                                <option value="">Humaritarian/Emergency</option>
                                <option value="">WASH</option>
                                <option value="">Livelihood</option>
                            </select>
                        </div>
                        <!-- input-group -->
                    </div>

                    <div class="col-lg-6">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1">Description</span>
                            </div>
                            <textarea name="" class="form-control" id=""></textarea>
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
< @endsection