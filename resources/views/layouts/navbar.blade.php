<nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom border-top border-dark">
    <div class="container">
        <a class="navbar-brand" href="{{route('home')}}">WijnIt</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample07" aria-controls="navbarsExample07" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarsExample07">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{route('home')}}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('order')}}">Order</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('about')}}">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('contact')}}">Contact</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('login')}}">Login</a>
                </li>
            </ul>
            <form class="form-inline my-2 my-md-0">
                <input style="background-color: white" class="form-control" type="text" placeholder="Search" aria-label="Search"><i class="fas fa-search" style="margin-left: 1em"></i>
            </form>
        </div>
    </div>
</nav>


