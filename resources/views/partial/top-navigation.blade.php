{{-- <nav class="nav">
    <div class="container">
        <div class="nav-left">
            <a class="nav-item is-brand" href="{{ url('/') }}">
                <img src="{{ url('storage/logo/Angkor-Pool-logo-s-1.png') }}">
            </a>
        </div>

        <span id="nav-toggle" class="nav-toggle">
            <span></span>
            <span></span>
            <span></span>
        </span>

        <div id="nav-menu" class="nav-right nav-menu">
            @if(auth()->check())
                <div class="nav-item">
                    <div class="field is-grouped">
                        <div class="control">
                            <a class="button is-primary" href="{{ url('job/post') }}">Post job</a>
                        </div>
                    </div>
                </div>
                <div class="nav-item dropdown">
                    <button class="dropdown-toggle"><img src="{{ url('storage/images/64x64.png') }}" class="avatar-photo"></a></button>
                    <ul class="dropdown-options">
                        <li class="no-hover">
                            <article class="media is-flex-center-all">
                                <div class="media-left">
                                    <figure class="image is-64x64">
                                        <img src="{{ url('storage/images/64x64.png') }}" class="avatar-photo">
                                    </figure>
                                </div>
                                <div class="media-content">
                                    <div class="content">
                                        <p><strong>{{ auth()->user()->fullname }}</strong></p>
                                    </div>
                                </div>
                            </article>
                        </li>
                        <li class="divider"></li>
                        <li><a href="{{ url('user/profile') }}">Profile</a></li>
                        <li><a href="{{ url('user/profile') }}">Change Password</a></li>
                        <li><a href="{{ url('user/logout') }}">Sign out</a></li>
                    </ul>
                </div>
            @else
                <div class="nav-item">
                    <div class="field is-grouped">
                        <p class="control">
                            <a id="twitter" class="button is-primary" href="{{ url('user/login') }}">
                                <span class="icon"><i class="fa fa-key"></i></span>
                                <span>Login</span>
                            </a>
                        </p>
                        <p class="control">
                            <a class="button is-primary" href="{{ url('user/register') }}">
                                <span class="icon"><i class="fa fa-user"></i></span>
                                <span>Register</span>
                            </a>
                        </p>
                    </div>
                </div>
            @endif
        </div>
    </div>
</nav>
@if(auth()->check())
    <div class="nav-menu menu-2">
        <div class="container">
            <div class="nav-left">
                <ul class="menu-list">
                    <li class="menu">
                        <a href="#">Job</a>
                        <ul>
                            <li><a href="#">Search</a></li>
                            <li><a href="#">Post Job</a></li>
                            <li><a href="#">Favourite</a></li>
                        </ul>
                    </li>
                    <li class="menu"><a href="#">Employee</a></li>
                    <li class="menu"><a href="#">Company</a></li>
                    <li class="menu">
                        <a href="#">Message</a>
                        <ul>
                            <li><a href="#">Inbox</a></li>
                            <li><a href="#">Outbox</a></li>
                            <li><a href="#">Draft</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>
@endif --}}


<div class="hero">
    <nav class="navbar navbar-toggleable-md navbar-light">
        <div class="container">
            <div class="row full-width">
                <div class="col">
                    <a href="{{ url('/') }}" class="navbar-brand">
                        <img src="{{ url('storage/logo/Angkor-Pool-logo-s-1.png') }}">
                    </a>
                </div>
                <div class="col">
                    <button class="navbar-toggler navbar-toggler-right"
                        type="button"
                        data-toggle="collapse"
                        data-target="#navbarNav"
                        aria-controls="navbarNav"
                        aria-expanded="false"
                        aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                        <ul class="navbar-nav">
                          <li class="nav-item active">
                            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="#">Features</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="#">Pricing</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link disabled" href="#">Disabled</a>
                          </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </nav>
</div>
