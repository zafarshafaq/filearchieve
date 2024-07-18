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
                        <option value="" selected>Select Project</option>
                        <option value="Kabul">2020-MI Mazar</option>
                        <option value="Herat">Herat</option>
                        <option value="Bamyan">Bamyan</option>
                        <option value="Mazar">Mazar</option>
                        <option value="Jowzjan">Jowzjan</option>
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

                            <th>Project</th>
                            <th>Department</th>
                            <th>Document Title</th>
                            <th>user</th>
                            <th>View</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>

                            <td>MI Kabul</td>
                            <td>IT</td>
                            <td>Router PRF</td>
                            <td>Hakima</td>
                            <td><i class="typcn typcn-eye"></i></td>
                        </tr>

                        <tr>
                            <th scope="row">2</th>

                            <td>AFV-Health Kabul</td>
                            <td>Finance</td>
                            <td>Salary Document</td>
                            <td>Abdul Ahad</td>
                            <td><i class="typcn typcn-eye"></i></td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>

                            <td>MI Mazar</td>
                            <td>IT</td>
                            <td>Switch PRF</td>
                            <td>Karim</td>
                            <td><i class="typcn typcn-eye"></i></td>
                        </tr>

                        <tr>
                            <th scope="row">4</th>
                            <td>AFV-Health Herat</td>
                            <td>Logistic</td>
                            <td>Camera GRN</td>
                            <td>Momina Chakari</td>
                            <td><i class="typcn typcn-eye"></i></td>
                        </tr>
                        <tr>
                            <th scope="row">5</th>
                            <td>GIZ Herat</td>
                            <td>Pharmacy</td>
                            <td>Drag Lists</td>
                            <td>Abdul Hai</td>
                            <td><i class="typcn typcn-eye"></i></td>
                        </tr>
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