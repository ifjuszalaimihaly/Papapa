<nav class="navbar navbar-light navbar-toggleable-md">
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navigation-menu" aria-controls="navigation-menu" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand" href="#">WELCOME</a>
    <div class="navbar-collapse collapse" id="navigation-menu">
        <div class="navbar-nav ml-auto">
            <a class="nav-item nav-link active" href="#section1">link1</a>
            <a class="nav-item nav-link" href="#section2">link2</a>
            <a href="{{ route('logout') }}"
               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                Logout
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
            </form>
        </div>
    </div>
</nav>