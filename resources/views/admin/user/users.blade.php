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
                    <a href="{{route('users.create')}}"
                        class="nav-link @if(Str::contains($url, 'create-user'))  active @endif ">
                        <i class="typcn typcn-user-add"></i>&nbsp; &nbsp; Create User</a>
                    <a href="{{ route('users.index')}}"
                        class="nav-link @if(Str::contains($url, 'users'))  active @endif"><i
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

            <!-- row -->
            <br />

            <div class="row">
                <div class="col-lg-6">
                    <div class="az-content-label mg-b-5">Search Result</div>
                    <p class="mg-b-20">{{$users->count()}} Result found.</p>
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
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Position</th>
                            <th>Type</th>
                            <th>Action</th>
                        </tr>
                    </thead>

                    <tbody style="font-size: 12px">


                        @foreach ($users as $key => $user)


                            <tr>
                                <td>{{$key + 1}}</td>
                                <td>{{$user->name}}</td>
                                <td>{{$user->email}}</td>
                                <td>{{$user->phone}}</td>
                                <td>{{$user->position}}</td>
                                <td>{{$user->type}}</td>

                                <td>
                                    <a href="{{ route('users.edit', $user->id)}}">
                                        <i style="font-size: 20px" class="typcn typcn-edit"></i></a>
                                    <a href="#" onclick="handleDelete('delete-user-modal')">
                                        <i style="font-size: 20px" class="typcn typcn-trash"></i></a>
                                </td>
                            </tr>


                        @endforeach


                    </tbody>
                </table>
            </div>


            {{ $users->links() }}


        </div>
    </div>


</div>


<!-- delete modal -->


<div class="modal fade" id="delete-user-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">

            <div class="modal-body">

                <form action="{{ route('users.destroy', $user->id)}}" method="post" id="delete-user-form">
                    @csrf
                    @method('delete')
                    <h4> Are you sure? you want to delete this user?</h4>

                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-sm btn-secondary" data-dismiss="modal">
                    No
                </button>
                <button type="submit" form="delete-user-form" class="btn btn-sm btn-danger">
                    Yes
                </button>

            </div>
        </div>
    </div>
</div>

@endsection