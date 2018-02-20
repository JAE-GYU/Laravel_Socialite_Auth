<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
    <div class="container">
        <!-- Brand/logo -->
        <a class="navbar-brand" href="#">Laravel Test Page</a>

        <ul class="navbar-nav ml-auto">
            @if(Auth::check())
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        {{ Auth::user()->user_name }}
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="/logout">Logout</a>
                    </div>
                </li>
            @else
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Login
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <span class="dropdown-item">
                        <button class="btn btn-block btn-facebook" onclick="document.location.href='/login/facebook/redirect';"><i class="fab fa-facebook"></i> Continue with Facebook</button>
                    </span>
                    <span class="dropdown-item">
                        <button class="btn btn-block btn-google" onclick="document.location.href='/login/google/redirect';"><i class="fab fa-google"></i> Continue with Google+</button>
                    </span>
                    </div>
                </li>
            @endif
        </ul>
    </div>
</nav>