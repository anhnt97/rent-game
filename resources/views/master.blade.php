<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <link href="css/header/header.css" rel="stylesheet">
    <link href="css/footer/footer.css" rel="stylesheet">
    <link href="css/home/home.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <div class="row custom-page-header">
            <div class="col-md-1"></div>
            <div class="col-md-10 header-item">
                @include('header')
            </div>
            <div class="col-md-1"></div>

        </div>
        <div class="row custom-page-background"></div>
        <div class="row custom-page-content">
            <div class="col-md-1"></div>
            <div class="col-md-10 content">
                @yield('content')
            </div>
            <div class="col-md-1"></div>
        </div>
        <div class="row custom-page-footer">
            <div class="col-md-1"></div>
            <div class="col-md-10">
                @include('footer')
            </div>
            <div class="col-md-1"></div>
        </div>
    </div>
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>