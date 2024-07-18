<div class="az-header">


    <?php  $url = request()->url();
    ?>

    <div class="container">
        <div class="az-header-left">
            <a href="index.html" class="az-logo"><span>Union</span> <span style="color: #000">Aid</span>
            </a>
            <a href="" id="azMenuShow" class="az-header-menu-icon d-lg-none"><span></span></a>
        </div>
        <!-- az-header-left -->
        <div class="az-header-menu">
            <div class="az-header-menu-header">
                <a href="index.html" class="az-logo"><span></span> azia</a>
                <a href="" class="close">&times;</a>
            </div>
            <!-- az-header-menu-header -->
            <ul class="nav">

                <li class="nav-item @if(Str::contains($url, 'dashboard'))  active @endif">
                    <a href="{{ route('dashboard')}}" class="nav-link"><i class="typcn typcn-chart-area-outline"></i>
                        Dashboard</a>
                </li>

                <li class="nav-item">
                    <a href=".html" class="nav-link with-sub"><i class="typcn typcn-chart-pie"></i> Projects
                    </a>

                    <nav class="az-menu-sub">
                        <a href="{{ route('projects.create')}}" class="nav-link">Create Project</a>
                        <a href="{{ route('projects.index')}}" class="nav-link">All Projects</a>
                    </nav>
                </li>
                <li class="nav-item @if(Str::contains($url, 'users')) active @endif">
                    <a href="" class="nav-link with-sub"><i class="typcn typcn-user"></i> Users</a>
                    <nav class="az-menu-sub">
                        <a href="{{route('users.create')}}" class="nav-link">Create User</a>
                        <a href="{{route('users.index')}}" class="nav-link">All Users</a>
                    </nav>
                </li>

                <li class="nav-item">
                    <a href="{{ route('document')}}" class="nav-link"><i class="typcn typcn-document-text"></i>
                        Document</a>
                </li>
            </ul>
        </div>
        <!-- az-header-menu -->
        <div class="az-header-right">
            <div class="dropdown az-profile-menu">
                <a href="" class="az-img-user"><img src="{{ asset('assets/img/faces/face1.jpg')}}" alt="" /></a>
                <div class="dropdown-menu">
                    <div class="az-dropdown-header d-sm-none">
                        <a href="" class="az-header-arrow"><i class="icon ion-md-arrow-back"></i></a>
                    </div>
                    <div class="az-header-profile">
                        <div class="az-img-user">
                            <img src="{{ asset('assets/img/faces/face1.jpg')}}" alt="" />
                        </div>
                        <!-- az-img-user -->
                        <h6>Aziana Pechon</h6>
                        <span>Premium Member</span>
                    </div>
                    <!-- az-header-profile -->
                    <a href="{{ route('profile.edit')}}" class="dropdown-item"><i class="typcn typcn-user-outline"></i>
                        My Profile</a>
                    <a href="" class="dropdown-item"><i class="typcn typcn-time"></i> Activity Logs</a>
                    <!-- Authentication -->
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <a href="{{ route('logout')}}" class="dropdown-item" onclick="event.preventDefault();
                                                this.closest('form').submit();"><i
                                class="typcn typcn-power-outline"></i> Sign
                            Out</a>

                    </form>

                </div>
                <!-- dropdown-menu -->
            </div>
        </div>
        <!-- az-header-right -->
    </div>
    <!-- container -->
</div>