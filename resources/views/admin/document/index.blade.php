@extends('layouts.application')


@section('content')




<div class="az-content pd-y-20 pd-lg-y-30 pd-xl-y-40">
    <div class="container">
        <div class="az-content-body pd-lg-l-40 d-flex flex-column">
            <div class="az-content-breadcrumb">
                <span>Dashboard</span>
                <span>Documents</span>
            </div>

            <br />

            <div class="new-folder-div">
                <!-- The Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">

                                <h5 class="modal-title" id="exampleModalLabel">
                                    <i class="fa fa-folder"></i> <i class="fa fa-plus"></i> New Folder
                                </h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <div class="row row-sm">
                                    <div class="col-lg-12">
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="basic-addon1">
                                                    Project</span>
                                            </div>
                                            <select name="" id="" class="form-control">
                                                <option value="">AFV-Health</option>
                                                <option value="">GIZ kabul</option>
                                                <option value="">DAHW</option>
                                                <option value="">MI</option>
                                                <option value="">AFV Kabul</option>
                                            </select>
                                        </div>
                                        <!-- input-group -->
                                    </div>
                                </div>
                                <!-- row -->

                                <div class="row row-sm">
                                    <div class="col-lg-12">
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="basic-addon1">
                                                    Department</span>
                                            </div>
                                            <select name="" id="" class="form-control">
                                                <option value="">AFV-Health</option>
                                                <option value="">GIZ kabul</option>
                                                <option value="">DAHW</option>
                                                <option value="">MI</option>
                                                <option value="">AFV Kabul</option>
                                            </select>
                                        </div>
                                        <!-- input-group -->
                                    </div>
                                </div>

                                <div class="row row-sm">
                                    <div class="col-lg-12">
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="basic-addon1">
                                                    Folder Name</span>
                                            </div>
                                            <input type="text" class="form-control" />
                                        </div>
                                        <!-- input-group -->
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">
                                    Close
                                </button>
                                <button type="button" class="btn btn-primary">
                                    Create
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <br />

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
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                        <i class="fa fa-plus"></i>&nbsp; New Folder
                    </button>
                </div>
            </div>
            <!-- row -->

            <br />
            <br />

            <!-- Folders -->

            <div class="row row-sm mg-b-20 mg-lg-b-0">
                <div class="col-lg-2 col-xl-2 mg-t-20 mg-lg-t-0 text-center">
                    <div class="dropdown" style="float: left">
                        <a class="" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img src="../assets/3dot.svg" alt="" />
                        </a>
                        <div class="dropdown-menu tx-13">
                            <a class="dropdown-item" href="#"> <i class="fa fa-edit"></i>&nbsp; Edit Folder</a>
                            <a class="dropdown-item" href="#"> <i class="fa fa-trash"></i>&nbsp; Delete Folder</a>
                            <a class="dropdown-item" href="#"> <i class="fa fa-download"></i>&nbsp; Download</a>
                            <a class="dropdown-item" href="#"><i class="fa fa-share"></i>&nbsp; Share</a>
                        </div>
                    </div>

                    <a href="mi-herat.html">
                        <i style="color: #0099d4; font-size: 100px" class="fa fa-folder-open" aria-hidden="true"></i>
                        <br />
                        <span> MI Herat </span>
                    </a>
                </div>
                <div class="col-lg-2 col-xl-2 mg-t-20 mg-lg-t-0 text-center">
                    <div class="dropdown" style="float: left">
                        <a class="" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img src="../assets/3dot.svg" alt="" />
                        </a>
                        <div class="dropdown-menu tx-13">
                            <a class="dropdown-item" href="#"> <i class="fa fa-edit"></i>&nbsp; Edit Folder</a>
                            <a class="dropdown-item" href="#"> <i class="fa fa-trash"></i>&nbsp; Delete Folder</a>
                            <a class="dropdown-item" href="#"> <i class="fa fa-download"></i>&nbsp; Download</a>
                            <a class="dropdown-item" href="#"><i class="fa fa-share"></i>&nbsp; Share</a>
                        </div>
                    </div>

                    <a href="">
                        <i style="color: #0099d4; font-size: 100px" class="fa fa-folder" aria-hidden="true"></i>
                        <br />
                        <span> MI Herat </span>
                    </a>
                </div>
                <div class="col-lg-2 col-xl-2 mg-t-20 mg-lg-t-0 text-center">
                    <div class="dropdown" style="float: left">
                        <a class="" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img src="../assets/3dot.svg" alt="" />
                        </a>
                        <div class="dropdown-menu tx-13">
                            <a class="dropdown-item" href="#"> <i class="fa fa-edit"></i>&nbsp; Edit Folder</a>
                            <a class="dropdown-item" href="#"> <i class="fa fa-trash"></i>&nbsp; Delete Folder</a>
                            <a class="dropdown-item" href="#"> <i class="fa fa-download"></i>&nbsp; Download</a>
                            <a class="dropdown-item" href="#"><i class="fa fa-share"></i>&nbsp; Share</a>
                        </div>
                    </div>

                    <a href="">
                        <i style="color: #0099d4; font-size: 100px" class="fa fa-folder" aria-hidden="true"></i>
                        <br />
                        <span> MI Herat </span>
                    </a>
                </div>
                <div class="col-lg-2 col-xl-2 mg-t-20 mg-lg-t-0 text-center">
                    <div class="dropdown" style="float: left">
                        <a class="" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img src="../assets/3dot.svg" alt="" />
                        </a>
                        <div class="dropdown-menu tx-13">
                            <a class="dropdown-item" href="#"> <i class="fa fa-edit"></i>&nbsp; Edit Folder</a>
                            <a class="dropdown-item" href="#"> <i class="fa fa-trash"></i>&nbsp; Delete Folder</a>
                            <a class="dropdown-item" href="#"> <i class="fa fa-download"></i>&nbsp; Download</a>
                            <a class="dropdown-item" href="#"><i class="fa fa-share"></i>&nbsp; Share</a>
                        </div>
                    </div>

                    <a href="">
                        <i style="color: #0099d4; font-size: 100px" class="fa fa-folder" aria-hidden="true"></i>
                        <br />
                        <span> MI Herat </span>
                    </a>
                </div>

                <div class="col-lg-2 col-xl-2 mg-t-20 mg-lg-t-0 text-center">
                    <div class="dropdown" style="float: left">
                        <a class="" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img src="../assets/3dot.svg" alt="" />
                        </a>
                        <div class="dropdown-menu tx-13">
                            <a class="dropdown-item" href="#"> <i class="fa fa-edit"></i>&nbsp; Edit Folder</a>
                            <a class="dropdown-item" href="#"> <i class="fa fa-trash"></i>&nbsp; Delete Folder</a>
                            <a class="dropdown-item" href="#"> <i class="fa fa-download"></i>&nbsp; Download</a>
                            <a class="dropdown-item" href="#"><i class="fa fa-share"></i>&nbsp; Share</a>
                        </div>
                    </div>

                    <a href="">
                        <i style="color: #0099d4; font-size: 100px" class="fa fa-folder" aria-hidden="true"></i>
                        <br />
                        <span> MI Herat </span>
                    </a>
                </div>

                <div class="col-lg-2 col-xl-2 mg-t-20 mg-lg-t-0 text-center">
                    <div class="dropdown" style="float: left">
                        <a class="" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img src="../assets/3dot.svg" alt="" />
                        </a>
                        <div class="dropdown-menu tx-13">
                            <a class="dropdown-item" href="#"> <i class="fa fa-edit"></i>&nbsp; Edit Folder</a>
                            <a class="dropdown-item" href="#"> <i class="fa fa-trash"></i>&nbsp; Delete Folder</a>
                            <a class="dropdown-item" href="#"> <i class="fa fa-download"></i>&nbsp; Download</a>
                            <a class="dropdown-item" href="#"><i class="fa fa-share"></i>&nbsp; Share</a>
                        </div>
                    </div>
                    <a href="">
                        <i style="color: #0099d4; font-size: 100px" class="fa fa-folder" aria-hidden="true"></i>
                        <br />
                        <span> MI Herat </span>
                    </a>
                </div>
            </div>


        </div>
        <!-- az-content-body -->
    </div>
    <!-- container -->
</div>
<!-- az-content -->
@endsection