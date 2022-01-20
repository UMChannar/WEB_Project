<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.m
in.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="auth.css" type="text/css">
</head>
<title>Order Pizza</title>

<body>
    <nav class="navbar sticky-top navbar-expand-md navbar-dark bg-secondary">
        <div class="container-fluid">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item active">
                    <a class="nav-link border rounded" style="margin-right: .5rem;" href="{{route('dashboard')}}">Deals</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link border rounded " style="margin-right: .5rem;" href="{{route("orderh")}}">Order
                        History</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link border rounded bg-primary" style="margin-right: .5rem;"
                        href="{{ route('order') }}">Order
                        Pizza</a>
                </li>
            </ul>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapseNavbar"
                aria-controls="collapseNavbar" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="navbar-collapse collapse" id="collapseNavbar">
                <ul class="navbar-nav ms-auto">
                    @auth
                        <li>
                            <a href="{{route('profile')}}" class="nav-link border rounded"
                                style="margin-right: .5rem;">{{ auth()->user()->name }}</a></a>
                        </li>
                        <li>
                            <form action="{{ route('logout') }}" method="POST">
                                @csrf
                                <button class="btn btn-danger p-2" type="submit">Logout</button>
                            </form>
                        </li>
                    @endauth
                    @guest
                        <li class="nav-item active">
                            <a class="nav-link border rounded" style="margin-right: .5rem;"
                                href="{{ route('login') }}">Login</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link border rounded bg-primary" style="margin-right: .5rem;"
                                href="route('register') }}">Register</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link border rounded" style="margin-right: .5rem;" href="{{ route('admin') }}">Admin</a>
                        </li>
                    @endguest
                </ul>
            </div>
        </div>
    </nav>
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card my-5">
                    <form class="card-body cardbody-color p-lg-5" action="{{ route('order') }}" method="post">
                        @csrf
                        <div class="text-center">
                            <img src="https://img.freepik.com/free-vector/flying-slice-pizza-cartoon-vector-illustration-fast-food-concept-isolated-vector-flat-cartoon-style_138676-1934.jpg?size=338&ext=jpg"
                                class="img-fluid profile-image-pic img-thumbnail rounded-circle my-3" width="200px"
                                alt="profile">
                        </div>
                        <div class=" mb-3">
                            <input type="text" class="form-control @error('name')
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
                        <div class=" mb-3">
                            <input type="text" class="form-control @error('pizza')
border border-danger
@enderror"
                                name="pizza" aria-describedby="emailHelp" placeholder="Name Your Pizza"
                                value="{{ old('pizza') }}">
                            @error('pizza')
                                <div class=" text-danger mt-2 small">
                                    {{ $message }}
                                </div>
                            @enderror<br />
                        </div>
                        <div class=" mb-3">
                            <input type="text" class="form-control @error('topping1')
border border-danger
@enderror"
                                name="topping1" aria-describedby="emailHelp" placeholder="Topping 1"
                                value="{{ old('topping1') }}">
                            @error('topping1')
                                <div class=" text-danger mt-2 small">
                                    {{ $message }}
                                </div>
                            @enderror<br />
                        </div>
                        <div class=" mb-3">
                            <input type="text" class="form-control @error('topping2')
border border-danger
@enderror"
                                name="topping2" aria-describedby="emailHelp" placeholder="Topping 2"
                                value="{{ old('topping1') }}">
                            @error('topping1')
                                <div class=" text-danger mt-2 small">
                                    {{ $message }}
                                </div>
                            @enderror<br />
                        </div>
                        <div class=" mb-3">
                            <input type="text" class="form-control @error('topping3')
border border-danger
@enderror"
                                name="topping3" aria-describedby="emailHelp" placeholder="Topping 3"
                                value="{{ old('topping3') }}">
                            @error('topping3')
                                <div class=" text-danger mt-2 small">
                                    {{ $message }}
                                </div>
                            @enderror<br />
                        </div>
                        <div class=" mb-3">
                            <input type="hidden" class="form-control @error('status')
border border-danger
@enderror"
                                name="status" aria-describedby="emailHelp" placeholder="status" value="Incomplete">
                            @error('status')
                                <div class=" text-danger mt-2 small">
                                    {{ $message }}
                                </div>
                            @enderror<br />
                        </div>
                        <div class="text-center"><button type="submit" class="btn btn-color px-5 mb-5 w-100">Place
                                your Order</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html
