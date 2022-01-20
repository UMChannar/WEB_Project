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
    <link rel="stylesheet" href="home.css">

    <title>Home Page</title>
</head>

<body>

    <!-- NavBar -->
    <nav class="navbar sticky-top navbar-expand-md navbar-dark bg-secondary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">WEB Project</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapseNavbar"
                aria-controls="collapseNavbar" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="navbar-collapse collapse" id="collapseNavbar">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item active">
                        <a class="nav-link border rounded" style="margin-right: .5rem;" href="{{route('login')}}">User</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link border rounded" style="margin-right: .5rem;" href="{{ route('admin') }}">Admin</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link border rounded" style="margin-right: .5rem;"
                            href="https://laravel.com/">About</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- ------------------------------------------------------------------------------------------------------------ -->

    <!-- Carousel -->
    <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
        <ol class="carousel-indicators">
            <li data-bs-target="#myCarousel" data-bs-slide-to="0" class="active"></li>
            <li data-bs-target="#myCarousel" data-bs-slide-to="1"></li>
            <li data-bs-target="#myCarousel" data-bs-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">

            <div class="carousel-item active">
                <div class="overlay-image"
                    style="background-image: url(https://images.unsplash.com/photo-1513104890138-7c749659a591?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxleHBsb3JlLWZlZWR8MXx8fGVufDB8fHx8&w=1000&q=80)">
                </div>
                <div class="container">
                    <h1>
                        Best Pizza in town
                    </h1>
                    <p>
                        She counted. One. She could hear the steps coming closer. Two. Puffs of breath could be seen
                        coming
                        from
                        his mouth. Three. He stopped beside her. Four. She pulled the trigger of the gun.
                    </p>
                    <a href="https://laravel.com/" class="btn btn-lg btn-primary">Want to Know more</a>
                </div>
            </div>

            <div class="carousel-item">
                <div class="overlay-image"
                    style="background-image: url(https://png.pngtree.com/thumb_back/fh260/back_our/20190622/ourmid/pngtree-seafood-vegetable-pizza-gourmet-background-poster-image_214182.jpg)">
                </div>
                <div class="container">
                    <h1>
                        Best Chef in town
                    </h1>
                    <p>
                        She counted. One. She could hear the steps coming closer. Two. Puffs of breath could be seen
                        coming
                        from
                        his mouth. Three. He stopped beside her. Four. She pulled the trigger of the gun.
                    </p>
                    <a href="https://laravel.com/" class="btn btn-lg btn-primary">Want to Know more</a>
                </div>

            </div>
            <div class="carousel-item">
                <div class="overlay-image"
                    style="background-image: url(https://ae01.alicdn.com/kf/Hf1ff70fa0226486ba64394cb964bc837X/Custom-Wallpaper-Mural-HD-Western-Restaurant-Burger-Pizza-Restaurant-Background-Wall-photo-Dining-Decoration-Mural-3d.jpg_640x640.jpg)">
                </div>
                <div class="container">
                    <h1>
                        Best Deals in town
                    </h1>
                    <p>
                        She counted. One. She could hear the steps coming closer. Two. Puffs of breath could be seen
                        coming
                        from
                        his mouth. Three. He stopped beside her. Four. She pulled the trigger of the gun.
                    </p>
                    <a href="https://laravel.com/" class="btn btn-lg btn-primary">Want to Know more</a>
                </div>
            </div>
        </div>
        <a href="#myCarousel" class="carousel-control-prev" data-bs-slide="prev">
            <span class="sr-only"></span>
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        </a>
        <a href="#myCarousel" class="carousel-control-next" data-bs-slide="next">
            <span class="sr-only"></span>
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
        </a>
    </div>

    <!-- ------------------------------------------------------------------------------------------------------------ -->

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
        integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
        integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous">
    </script>

</body>

</html>
