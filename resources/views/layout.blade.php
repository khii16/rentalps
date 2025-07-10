<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> @yield('judul') | Rental Playstation </title>
    <link rel="stylesheet" href="/bulma/css/bulma.min.css">
</head>
<body>
    <div class="container">
        <nav class="navbar" role="navigation" aria-label="main navigation">
            <div class="navbar-brand">
                <a class="navbar-item" href="/">
                    <b>Rental Playstation</b>
                </a>

                <a href="" role="button" class="navbar-burger" aria-label="menu" aria-expanded="false" data-target="navbarSIFIKOM">
                    <span aria-hidden="true"></span>
                    <span aria-hidden="true"></span>
                    <span aria-hidden="true"></span>
                    <span aria-hidden="true"></span>
                </a>
            </div>

            <div id="navbarSIFIKOM" class="navbar-menu">
                <div class="navbar-start">
                    
                    <a class="navbar-item" href="/barang">Barang</a>
                </div>
            </div>
        </nav>
        @yield('konten')
    </div>

    <script type="text/javascript" src="/js/jquery-3.7.1.min.js"></script>

    <script type="text/javascript">
        $(document).ready(function(){

            //check for click events on the burger icon
            $(".navbar-burger").click(function(){

                //toogle the is active class on both the navbar-burger and the navbar-menu
                $(".navbar-burger").toggleClass("is-active");
                $(".navbar-menu").toggleClass("is-active");
            });
        });
    </script>
</body>
</html>
