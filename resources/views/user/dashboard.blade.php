@extends('layouts.user')
<!-- 

@section('sidebar')


<a href="giz.html" class="nav-link"><i class="typcn typcn-chart-pie"></i> &nbsp;
    &nbsp;WASH Herat (2021)</a>
@endsection -->

@section('content')


<div class="row row-sm mg-b-20 mg-lg-b-0">
    @foreach ($folders as $folder)
        <div class="col-lg-2 col-xl-2 mg-t-20 mg-lg-t-0 text-center">
            <div class="dropdown" style="float: left">
                <a class="" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img src="../assets/3dot.svg" alt="" />
                </a>
                <div class="dropdown-menu tx-13">
                    <!-- <a class="dropdown-item" href="#"> <i cplass="fa fa-edit"></i>&nbsp; Edit Folder</a>
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
                <span>


                    @if($folder->parent_id !== null)

                        {{ $folder->name}} - {{  $folder->parentRecursive->name}}</span>

                    @else

                        {{ $folder->name}}

                    @endif




            </a>
        </div>
    @endforeach
</div>

@endsection