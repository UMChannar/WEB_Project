<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- Local Styling -->
    <link rel="stylesheet" href="auth.css">

    <title>Register</title>
</head>

<body>

    <!-- NavBar -->
    <nav class="navbar sticky-top navbar-expand-md navbar-dark bg-secondary">
        <div class="container-fluid">
            <a class="navbar-brand" style="font-size:larger;" href="route('home') }}">WEB Semester Project</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapseNavbar"
                aria-controls="collapseNavbar" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="navbar-collapse collapse" id="collapseNavbar">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item active">
                        <a class="nav-link border rounded" style="margin-right: .5rem;"
                            href="{{ route('login') }}">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link border rounded bg-primary" style="margin-right: .5rem;"
                            href="{{ route('register') }}">Register</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link border rounded" style="margin-right: .5rem;" href="#">Admin</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>



    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="card my-5">
                    <form class="card-body cardbody-color p-lg-5" action="{{ route('register') }}" method="post">
                        @csrf
                        <div class="text-center">
                            <img src="https://img.freepik.com/free-vector/flying-slice-pizza-cartoon-vector-illustration-fast-food-concept-isolated-vector-flat-cartoon-style_138676-1934.jpg?size=338&ext=jpg"
                                class="img-fluid profile-image-pic img-thumbnail rounded-circle my-3" width="200px"
                                alt="profile">
                        </div>
                        <div class="mb-3">
                            <input type="email"
                                class="form-control @error('email')
        border border-danger
        @enderror"
                                name="email" aria-describedby="emailHelp" placeholder="Email"
                                value="{{ old('email') }}">
                            @error('email')
                                <div class=" text-danger mt-2 small">
                                    {{ $message }}
                                </div>
                            @enderror
                            <br />
                        </div>
                        <div class=" mb-3">
                            <input type="text"
                                class="form-control @error('name')
        border border-danger
        @enderror"
                                name="name" aria-describedby="emailHelp" placeholder="Your Name"
                                value="{{ old('name') }}">
                            @error('name')
                                <div class=" text-danger mt-2 small">
                                    {{ $message }}
                                </div>
                            @enderror<br />
                        </div>
                        <div class="mb-3">
                            <input type="password"
                                class="form-control @error('password')
        border border-danger
        @enderror"
                                name="password" placeholder="Password">
                            @error('password')
                                <div class=" text-danger mt-2 small">
                                    {{ $message }}
                                </div>
                            @enderror<br />
                        </div>
                        <div class="mb-3">
                            <input type="password" class="form-control" name="password_confirmation"
                                placeholder="Confirm Password"><span id="password_confirmation"></span><br />
                        </div>
                        <div class="text-center"><button type="submit"
                                class="btn btn-color px-5 mb-5 w-100">SignUp</button>
                        </div>
                        <div id="emailHelp" class="form-text text-center mb-5 text-dark">Already
                            Registered? <a href="{{ route('login') }}" class="text-dark fw-bold">Login in to your
                                Account</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


</body>

</html>
