<header>
    <nav class="navbar navbar-toggleable-md navbar-light bg-faded">
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand" href="{{route('dashboard')}}">Socialize</a>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto mr-lg-0 ml-auto">
                <img src="{{ route('account.image', ['filename' => $user->first_name . '-' . $user->id . '.jpg']) }}" alt="" class="img-responsive">
                <li class="nav-item active"><a class="nav-link" href="{{route('account')}}">Accout <span class="sr-only">(current)</span></a></li>
                <li class="nav-item active"><a class="nav-link" href="{{route('logout')}}">Logout <span class="sr-only">(current)</span></a></li>
            </ul>
            <!--    <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="#">Disabled</a>
                </li>
            </ul>
            -->

        </div>
    </nav>
</header>