<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Rent Game</title>
    <base href="{{asset('')}}">
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
            @yield('content')
        <div class="row custom-page-footer">
            <div class="col-md-2"></div>
            <div class="col-md-8 footer">
                @include('footer')
            </div>
            <div class="col-md-2"></div>
        </div>
    </div>
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.6.5/angular.min.js"></script>
    <script src="js/detail.js"></script>
</body>
</html>