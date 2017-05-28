<nav class="nav has-shadow">
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
            <a class="nav-item" href="{{ url('employer/post/job') }}">Post job</a>

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
        </div>
    </div>
</nav>