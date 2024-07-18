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
                        <tr>
                            <td>1</td>
                            <td>AFV-Health</td>
                            <td>AFV</td>
                            <td>Kabul</td>
                            <td>Mohammad Karim</td>
                            <td>12/03/2023</td>
                            <td>12/03/2024</td>

                            <td>
                                <a href="">
                                    <i style="font-size: 20px" class="typcn typcn-edit"></i></a>
                                <a href="">
                                    <i style="font-size: 20px" class="typcn typcn-trash"></i></a>
                            </td>
                        </tr>

                        <tr>
                            <td>2</td>
                            <td>MI Mazar</td>
                            <td>MI</td>
                            <td>Mazar</td>
                            <td>Mohammad Ali</td>
                            <td>12/03/2019</td>
                            <td>12/03/2020</td>

                            <td>
                                <a href="">
                                    <i style="font-size: 20px" class="typcn typcn-edit"></i></a>
                                <a href="">
                                    <i style="font-size: 20px" class="typcn typcn-trash"></i></a>
                            </td>
                        </tr>

                        <tr>
                            <td>3</td>
                            <td>GIZ Herat</td>
                            <td>GIZ</td>
                            <td>Herat</td>
                            <td>Abdul Rasool</td>
                            <td>12/03/2015</td>
                            <td>12/03/2017</td>

                            <td>
                                <a href="">
                                    <i style="font-size: 20px" class="typcn typcn-edit"></i></a>
                                <a href="">
                                    <i style="font-size: 20px" class="typcn typcn-trash"></i></a>
                            </td>
                        </tr>

                        <tr>
                            <td>4</td>
                            <td>AFV-Health</td>
                            <td>AFV</td>
                            <td>Jowzjan</td>
                            <td>Mohammad Jalal</td>
                            <td>12/03/2017</td>
                            <td>12/03/2018</td>

                            <td>
                                <a href="">
                                    <i style="font-size: 20px" class="typcn typcn-edit"></i></a>
                                <a href="">
                                    <i style="font-size: 20px" class="typcn typcn-trash"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>DAHW-Health</td>
                            <td>DAHW</td>
                            <td>Kabul</td>
                            <td>Abdul Satar</td>
                            <td>12/03/2023</td>
                            <td>12/03/2024</td>

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

            <div class="ht-40"></div>
            <div class="az-footer ht-40">
                <div class="container ht-100p pd-t-0-f">
                    <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © <span
                            style="color: #0099d4">Union</span>&nbsp;
                        <span style="color: black; font-weight: bold">Aid</span>
                        2024</span>
                    <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">
                        Developed By
                        <a href="https://www.bootstrapdash.com/bootstrap-admin-template/" target="_blank">
                            <span style="color: black">IT Department at</span></a>

                        <span style="color: #0099d4">Union</span>&nbsp;
                        <span style="color: black; font-weight: bold">Aid</span>
                    </span>
                </div>
                <!-- container -->
            </div>
            <!-- az-footer -->
        </div>
        <!-- az-content-body -->
    </div>
    <!-- container -->
</div>




@endsection