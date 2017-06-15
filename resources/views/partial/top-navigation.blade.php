<div class="hero mb-3">
    <nav class="navbar navbar-toggleable-md shadow20 zindex-navbar">
        <div class="container">
            <div class="row full-width no-margin">
                <div class="col-lg-2 col-md-12 pl-lg-0">
                    <a href="{{ url('/') }}" class="navbar-brand">
                        <img src="{{ url('storage/logo/Angkor-Pool-logo-s-1.png') }}">
                    </a>
                    <button class="navbar-toggler navbar-toggler-right"
                        type="button"
                        data-toggle="collapse"
                        data-target="#navbarNav"
                        aria-controls="navbarNav"
                        aria-expanded="false"
                        aria-label="Toggle navigation">
                        <span></span>
                        <span></span>
                        <span></span>
                    </button>
                </div>
                <div class="col-lg-7 hidden-md-down">
                    <div class="collapse navbar-collapse">
                        <ul class="navbar-nav align-items-center">
                            @if(auth()->guard('web.employees')->check())
                                <li class="nav-item mr-3">
                                    <a class="nav-link text-uppercase" href="{{ url('job/post') }}">Search Jobs</a>
                                </li>
                                <li class="nav-item mr-3">
                                    <a class="nav-link text-uppercase" href="{{ url('job/post') }}">Job Alerts</a>
                                </li>
                                <li class="nav-item mr-3">
                                    <a class="nav-link text-uppercase" href="{{ url('job/post') }}">CV</a>
                                </li>
                                <li class="nav-item mr-3">
                                    <a class="nav-link text-uppercase" href="{{ url('job/post') }}">Message</a>
                                </li>
                                <li class="nav-item mr-3">
                                    <a class="nav-link text-uppercase" href="{{ url('job/post') }}">Resources</a>
                                </li>
                            @elseif(auth()->guard('web.employers')->check())
                                <li class="nav-item mr-3">
                                    <a class="nav-link text-uppercase" href="{{ url('job/post') }}">Post Job</a>
                                </li>
                                <li class="nav-item mr-3">
                                    <a class="nav-link text-uppercase" href="{{ url('job/post') }}">Candidates</a>
                                </li>
                                <li class="nav-item mr-3">
                                    <a class="nav-link text-uppercase" href="{{ url('job/post') }}">Message</a>
                                </li>
                                <li class="nav-item mr-3">
                                    <a class="nav-link text-uppercase" href="{{ url('job/post') }}">Resources</a>
                                </li>
                            @endif
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 hidden-md-down pr-lg-0">
                    <div class="collapse navbar-collapse justify-content-end">
                        <ul class="navbar-nav align-items-center">
                            @if(auth()->guard('web.employees')->check())
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle text-gray" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <img src="{{ url('storage/images/64x64.png') }}" class="rounded-circle img-32x32">
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                                        <a class="dropdown-item" href="#">Action</a>
                                        <a class="dropdown-item" href="#">Another action</a>
                                        <a class="dropdown-item" href="#">Something else here</a>
                                    </div>
                                </li>
                            @elseif(auth()->guard('web.employers')->check())
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle text-gray" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <img src="{{ url('storage/images/64x64.png') }}" class="rounded-circle img-32x32">
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                                        <a class="dropdown-item" href="#">Action</a>
                                        <a class="dropdown-item" href="#">Another action</a>
                                        <a class="dropdown-item" href="#">Something else here</a>
                                    </div>
                                </li>
                            @else
                                <li class="nav-item mr-1">
                                    <a class="nav-link" href="{{ url('login') }}"><i class="fa fa-key mr-1"></i>Login</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ url('register') }}"><i class="fa fa-user mr-1"></i>Register</a>
                                </li>
                            @endif
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <div class="collapse-menu full-width no-margin hidden-lg-up">
        <div class="container">
            <div class="col">
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
</div>
