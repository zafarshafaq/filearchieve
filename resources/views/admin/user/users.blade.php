@extends('layouts.application')


@section('content')



<?php 
    $url = request()->url(); 
?>


<div class="az-content pd-y-20 pd-lg-y-30 pd-xl-y-40">
    <div class=" container az-content-body">
        <div class="az-content-left az-content-left-components">
            <div class="component-item">
                <img src="../assets/img/logo.jpg" width="100px" alt="" />
                <br /><br />
                <label>User Management</label>
                <nav class="nav flex-column">
                    <a href="{{route('create-user')}}"
                        class="nav-link @if(Str::contains($url, 'create-user'))  active @endif ">
                        <i class="typcn typcn-user-add"></i>&nbsp; &nbsp; Create User</a>
                    <a href="{{ route('users')}}" class="nav-link @if(Str::contains($url, 'users'))  active @endif"><i
                            class="typcn typcn-group"></i> &nbsp; &nbsp; All
                        Users</a>
                </nav>
            </div>
            <!-- component-item -->
        </div>
        <!-- az-content-left -->
        <div class="az-content-body pd-lg-l-40 d-flex flex-column">

            <div class="az-content-breadcrumb">
                <span>Dashboard</span>
                <span>Users</span>


            </div>
            <h3 class=" ">All System Users</h3>
            <br />
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

            <!-- row -->
            <br />

            <div class="row">
                <div class="col-lg-6">
                    <div class="az-content-label mg-b-5">Search Result</div>
                    <p class="mg-b-20">5 Result found.</p>
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



            <!-- table -->


            <div class="table-responsive">
                <table class="table table-striped mg-b-0">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>User Name</th>
                            <th>Phone</th>
                            <th>Email</th>
                            <th>Project</th>
                            <th>Department</th>
                            <th>Position</th>
                            <th>Action</th>
                        </tr>
                    </thead>

                    <tbody style="font-size: 12px">
                        <tr>
                            <td>1</td>
                            <td>Hakima</td>
                            <td>0747043094</td>
                            <td>hakima.merzaie@gmail.com</td>
                            <td>AFV-Health</td>
                            <td>IT</td>
                            <td>IT Assistant</td>
                            <td>
                                <a href="">
                                    <i style="font-size: 20px" class="typcn typcn-edit"></i></a>
                                <a href="">
                                    <i style="font-size: 20px" class="typcn typcn-trash"></i></a>
                            </td>
                        </tr>

                        <tr>
                            <td>2</td>
                            <td>Mohibullah Mehr</td>
                            <td>0747043094</td>
                            <td>mehr@unionaid.org</td>

                            <td>AFV-Health</td>

                            <td>Finance</td>
                            <td>Finance Manger</td>
                            <td>
                                <a href="">
                                    <i style="font-size: 20px" class="typcn typcn-edit"></i></a>
                                <a href="">
                                    <i style="font-size: 20px" class="typcn typcn-trash"></i></a>
                            </td>
                        </tr>

                        <tr>
                            <td>3</td>
                            <td>Obaidullah Hashimi</td>
                            <td>0747043094</td>
                            <td>obaidullah.hashimi@unionaid.org</td>
                            <td>MI</td>
                            <td>HR</td>
                            <td>HR Officer</td>
                            <td>
                                <a href="">
                                    <i style="font-size: 20px" class="typcn typcn-edit"></i></a>
                                <a href="">
                                    <i style="font-size: 20px" class="typcn typcn-trash"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>Haji Shirindel</td>
                            <td>0747043094</td>
                            <td>shirindel@unionaid.org</td>
                            <td>DAHW</td>
                            <td>Pharmacy</td>
                            <td>Pharmacy Officer</td>
                            <td>
                                <a href="">
                                    <i style="font-size: 20px" class="typcn typcn-edit"></i></a>
                                <a href="">
                                    <i style="font-size: 20px" class="typcn typcn-trash"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td>Safia Merzayee</td>
                            <td>0747043094</td>
                            <td>safia@unionaid.org</td>
                            <td>GIZ</td>
                            <td>Admin</td>
                            <td>Admin Assistant</td>
                            <td>
                                <a href="">
                                    <i style="font-size: 20px" class="typcn typcn-edit"></i></a>
                                <a href="">
                                    <i style="font-size: 20px" class="typcn typcn-trash"></i></a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>




        </div>
    </div>


</div>

@endsection