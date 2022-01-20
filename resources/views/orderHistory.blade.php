<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.m
in.css" rel="stylesheet" integrity="sha384-
1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="auth.css" type="text/css">
</head>
<title>Order History</title>

<body>
    <nav class="navbar sticky-top navbar-expand-md navbar-dark bg-secondary">
        <div class="container-fluid">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item active">
                    <a class="nav-link border rounded" style="margin-right: .5rem;"
                        href="{{ route('dashboard') }}">Deals</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link border rounded bg-primary " style="margin-right: .5rem;"
                        href="{{ route('orderh') }}">Order History</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link border rounded " style="margin-right: .5rem;" href="{{ route('order') }}">Order
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
                            <a class="nav-link border rounded" style="margin-right: .5rem;" href="#{{ route('admin') }}">Admin</a>
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
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Pizza</th>
                                <th scope="col">Topping 1</th>
                                <th scope="col">Topping 2</th>
                                <th scope="col">Topping 3</th>
                                <th scope="col">Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($pizza as $p)
                                <tr>
                                    <td>{{ $p->pizza }}</td>
                                    <td>{{ $p->topping1 }}</td>
                                    <td>{{ $p->topping2 }}</td>
                                    <td>{{ $p->topping3 }}</td>
                                    <td>{{ $p->status }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
