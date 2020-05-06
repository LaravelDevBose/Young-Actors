<nav class="navbar navbar-expand-lg py-4" style="width: 100%; max-width: 1100px; margin: 0 auto">
    <a class="navbar-brand" href="{{ route('index') }}">LOGO</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent" style="float: right;">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
                <a class="nav-link" href="#">Meet The Coaches <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('login') }}">Member Login</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('order.page') }}">Enroll Now </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Contact Us</a>
            </li>
        </ul>
    </div>
</nav>
