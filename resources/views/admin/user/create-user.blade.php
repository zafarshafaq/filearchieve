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
                    <a href="{{route('users.create')}}"
                        class="nav-link @if(Str::contains($url, 'create'))  active @endif ">
                        <i class="typcn typcn-user-add"></i>&nbsp; &nbsp; Create User</a>
                    <a href="{{ route('users.index')}}" class="nav-link @if(Str::contains($url, 'index'))  active @endif"><i
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
                <span>Create User</span>

            </div>
            <h3>User Form</h3>
            <br />



            <form method="POST" action="{{ route('register') }}">
                @csrf
                <div class="row row-sm">
                    <div class="col-lg-6">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="username">
                                    User Name</span>
                            </div>
                            <input type="text" class="form-control" id="" aria-label="Username"name ="name" value ="{{ old('name') }} "
                                aria-describedby="username" required autofocus autocomplete="name" />
                            <x-input-error :messages="$errors->get('name')" class="mt-2" />
                        </div>
                        <!-- input-group -->
                    </div>
                    <!-- col -->

                    <div class="col-lg-6">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="email"> Email</span>
                            </div>
                            <input type="email" class="form-control" aria-label="email"
                                aria-describedby="email" name="email" value="{{ old('email')}}" required autofocus autocomplete="email" />
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
                                <span class="input-group-text" id="phone">Phone</span>
                            </div>
                            <input type="text" class="form-control" aria-label="phone"
                                aria-describedby="phone" name="phone" value="{{ old('phone')}}" />
                        </div>
                        <!-- input-group -->
                    </div>
                    <!-- col -->
                    <div class="col-lg-6">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1">
                                    Position</span>
                            </div>
                            <input type="text" class="form-control" aria-label="Position"
                                aria-describedby="basic-addon1" />
                        </div>
                        <!-- input-group -->
                    </div>

                </div>
                <!-- row -->


                <div class="row row-sm">
                    <div class="col-lg-6">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1">Password</span>
                            </div>
                            <input type="password" class="form-control" aria-label="password"
                                aria-describedby="basic-addon1" />
                        </div>
                        <!-- input-group -->
                    </div>
                    <!-- col -->
                </div>
                <!-- row -->


                <div class="row row-sm">
                    <div class="col-lg-6">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>


            </form>
        </div>
    </div>

</div>
< @endsection