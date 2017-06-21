<div class="hero">
    <nav class="navbar navbar-toggleable-md shadow20 zindex-navbar">
        <div class="container">
            <div class="row full-width no-margin">
                <div class="col-lg-2 col-md-12 pl-lg-0">
                    <a href="{{ url('/') }}" class="navbar-brand">
                        <img src="{{ url('storage/logo/Angkor-Pool-logo-s-1.png') }}">
                    </a>
                    <button class="navbar-toggler navbar-toggler-right mobile"
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
                                    <a class="nav-link text-uppercase" href="{{ route('employee.job.search')}}">Search Jobs</a>
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
                                    <a class="nav-link text-uppercase" href="{{ route('employer.job.post') }}">Post Job</a>
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
                        <button class="navbar-toggler navbar-toggler-right desktop" style="display: block;"
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
                </div>
            </div>
        </div>
    </nav>
</div>

@section('script')
<script type="text/javascript">
    $('.navbar-toggler.desktop').on('click', function(){
        $('.page-sidebar.desktop').toggleClass('open');
    });

    $('.navbar-toggler.mobile').on('click', function(){
        var sidebar = $('.page-sidebar.mobile');
        $(sidebar).toggleClass('open')
        if($(sidebar).hasClass('open')){
            $(sidebar).css('height', $('.page-sidebar.mobile ul').height() + 'px');
        }else{
            $(sidebar).css('height', 0);
        }
    });
</script>
@stop
