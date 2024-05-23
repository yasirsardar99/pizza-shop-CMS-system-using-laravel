{{-- <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">Pizza-Shop</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        
      </ul>
      <form class="form-inline my-2 my-lg-0">
        <ul class="navbar-nav collapse navbar-collapse justify-content-end ms-auto mr-auto align-items-center">
                    @auth
                        <!-- User is authenticated -->
                        <li class="nav-item mx-2">
                            <span class="navbar-text">
                                {{ Auth::user()->name }}
                            </span>
                        </li>
                        <li class="nav-item ">
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: inline;">
                                @csrf
                                <button type="submit" class="btn btn-sm btn-danger border rounded rounded-pill ms-2">Logout</button>
                            </form>
                        </li>
                    @else
                        <!-- User is not authenticated -->
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">Login</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">Register</a>
                        </li>
                    @endauth
                </ul>
      </form>
    </div>

</nav> --}}

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <!-- Include Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">MyApp</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    @auth
                        <!-- User is authenticated -->
                        <li class="nav-item mx-2">
                            <span class="navbar-text">
                                {{ Auth::user()->name }}
                            </span>
                        </li>
                        <li class="nav-item">
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: inline;">
                                @csrf
                                <button type="submit" class="btn btn-danger ms-2">Logout</button>
                            </form>
                        </li>
                    @else
                        <!-- User is not authenticated -->
                        <li class="nav-item">
                            <a class="nav-link mx-2" href="{{ route('login') }}">Login</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">Register</a>
                        </li>
                    @endauth
                </ul>
            </div>
        </div>
    </nav>

    <!-- Include Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/js/bootstrap.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Ensure elements are present before manipulating them
            var navbarToggler = document.querySelector('.navbar-toggler');
            if (navbarToggler) {
                navbarToggler.addEventListener('click', function() {
                    var target = document.getElementById('navbarNav');
                    if (target) {
                        target.classList.toggle('show');
                    }
                });
            }
        });
    </script>
</body>
</html>
