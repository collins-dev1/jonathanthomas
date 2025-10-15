<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('admin_dashboard/css/style.css') }}">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('landing_page/images/logo/logo.avif') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>

<body>
    @include('sweetalert::alert')

    <!-- Overlay for mobile sidebar -->
    <div class="sidebar-overlay"></div>

    <!-- Sidebar -->
    <div class="sidebar">
        <div class="sidebar-header">
            <img src="{{asset('landing_page/images/logo/logo.avif')}}" alt="" width="80px" height="80px">
        </div>
        <div class="sidebar-menu">
            <ul>
                <li class="active">
                    <a href="{{route('home')}}">
                        <div class="menu-text">
                            <i class="fas fa-home"></i>
                            <span>Dashboard</span>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="#" class="has-dropdown">
                        <div class="menu-text">
                            <i class="fas fa-hand-holding-heart"></i>
                            <span>Donation</span>
                        </div>
                        <i class="fas fa-chevron-right dropdown-arrow"></i>
                    </a>
                    <ul class="submenu">
                        <li><a href="{{route('manage_donation')}}">Manage Donation</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#" class="has-dropdown">
                        <div class="menu-text">
                            <i class="fas fa-users"></i>
                            <span>Team</span>
                        </div>
                        <i class="fas fa-chevron-right dropdown-arrow"></i>
                    </a>
                    <ul class="submenu">
                        <li><a href="{{route('add_team')}}">Add Team</a></li>
                        <li><a href="{{route('manage_team')}}">Manage Team</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#" class="has-dropdown">
                        <div class="menu-text">
                            <i class="fas fa-blog"></i>
                            <span>Blog</span>
                        </div>
                        <i class="fas fa-chevron-right dropdown-arrow"></i>
                    </a>
                    <ul class="submenu">
                        <li><a href="{{route('add_blog')}}">Add Blog</a></li>
                        <li><a href="{{route('manage_blog')}}">Manage Blog</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#" class="has-dropdown">
                        <div class="menu-text">
                            <i class="fas fa-handshake"></i>
                            <span>Partners</span>
                        </div>
                        <i class="fas fa-chevron-right dropdown-arrow"></i>
                    </a>
                    <ul class="submenu">
                        <li><a href="{{route('add_partner')}}">Add Partners</a></li>
                        <li><a href="{{route('manage_partner')}}">Manage Partners</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#" class="has-dropdown">
                        <div class="menu-text">
                            <i class="fas fa-images"></i>
                            <span>Gallery</span>
                        </div>
                        <i class="fas fa-chevron-right dropdown-arrow"></i>
                    </a>
                    <ul class="submenu">
                        <li><a href="{{route('add_gallery')}}">Add Gallery</a></li>
                        <li><a href="{{route('manage_gallery')}}">Manage Gallery</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#" class="has-dropdown">
                        <div class="menu-text">
                            <i class="fas fa-address-book"></i>
                            <span>Contact Information</span>
                        </div>
                        <i class="fas fa-chevron-right dropdown-arrow"></i>
                    </a>
                    <ul class="submenu">
                        <li><a href="{{route('contact_information')}}">Manage Contact Information</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>

    <!-- Main Content -->
    <div class="main-content">
        <!-- Header -->
        <div class="header">
            <div class="header-left">
                <button class="mobile-menu-toggle">
                    <i class="fas fa-bars"></i>
                </button>
                <h1>Admin Dashboard</h1>
            </div>
            <div class="header-right">
                <div class="user-profile">
                    <img src="https://i.pravatar.cc/150?img=32" alt="User">
                    @auth
                        <span>{{auth()->user()->name}}</span>
                    @endauth
                    <div class="user-dropdown">
                        <a href="{{route('admin_profile')}}">
                            <i class="fas fa-user"></i>
                            <span>Profile</span>
                        </a>
                        <a href="{{route('admin_setting')}}">
                            <i class="fas fa-cog"></i>
                            <span>Settings</span>
                        </a>
                        <div class="divider"></div>
                        <a href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            <i class="fas fa-sign-out-alt"></i>
                            <span>Logout</span>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        @yield('content')
    </div>

    <script src="{{ asset('admin_dashboard/js/script.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>

</html>
