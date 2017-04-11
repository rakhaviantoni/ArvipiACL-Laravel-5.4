<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/dataTables.bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/jquery.dataTables.min.css') }}" rel="stylesheet">
    <script src="{{ asset('js/jquery-3.2.0.min.js') }}" charset="utf-8"></script>

    <!-- Scripts -->
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/') }}">
                        {{ config('app.name', 'Laravel') }}
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                      @if (Auth::check())
                          <li><a href="{{ url('/home') }}">Dashboard</a></li>
                          @if (Auth::user()->role == 'admin')
                              <li><a href="{{ url('/home/press') }}">Press Release Management</a></li>
                              <li><a href="{{ url('/home/users') }}">Users Management</a></li>
                          @elseif (Auth::user()->role == 'editorial')
                              <li><a href="{{ url('/home/news') }}">News Management</a></li>
                          @elseif (Auth::user()->role == 'finance')
                              <li><a href="{{ url('/home/payroll') }}">Payroll</a></li>
                          @elseif (Auth::user()->role == 'hrd')
                              <li><a href="{{ url('/home/employees') }}">Employees Database</a></li>
                              <li><a href="{{ url('/home/recruitment') }}">Recruitment Tracking</a></li>
                          @elseif (Auth::user()->role == 'marketing')
                              <li><a href="{{ url('/home/marketing') }}">Marketing Report</a></li>
                          @elseif (Auth::user()->role == 'sales')
                              <li><a href="{{ url('/home/sales') }}">Sales Report</a></li>
                          @endif
                      @endif
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                        @else

                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} - {{ Auth::user()->position }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
        </nav>

        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js//dataTables.bootstrap.min.js') }}"></script>
    <script src="{{ asset('js//jquery.dataTables.min.js') }}"></script>
    @yield('scripts')
</body>
</html>