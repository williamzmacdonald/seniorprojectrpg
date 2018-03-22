<nav class="navbar-expand-md navbar-fixed-top navbar-custom">
    <div class="container">
        <div class="navbar-header">

            <!-- Collapsed Hamburger -->
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse" style="font-size: 22px; line-height: 80%;">
                menu
            </button>

            <!-- Branding Image -->
            <a class="navbar-brand" href="{{ url('/') }}" style="font-size: 24px;">
                {{ config('app.name', 'laravel') }}
            </a>
        </div>

            
        <div class="collapse navbar-collapse" id="app-navbar-collapse">
            <!-- Left Side Of Navbar -->
            <ul class="nav navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('about') }}">about</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('services') }}">services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('rooms') }}">rooms</a>
                </li>
            </ul>
                
            <!-- Right Side Of Navbar -->
            <ul class="nav navbar-nav navbar-right">
                <!-- Authentication Links -->
                @if (Auth::guest())
                    <li><a href="{{ route('login') }}">login</a></li>
                    <li><a href="{{ route('register') }}">register</a></li>
                @else
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" style="text-transform: lowercase;">
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <ul class="dropdown-menu" role="menu">
                            <li>
                                <a href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                                    logout
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
