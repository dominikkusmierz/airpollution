<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{config('app.name')}}</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Spartan&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/2edd8b2c7a.js" crossorigin="anonymous"></script>
    <!-- Styles -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <style>
        body{
            height:100vh;
            background-color:#F9F9F8;
            background:url("/images/background.jpg");
            background-size:100vw;
            font-family: 'spartan';
            overflow:hidden;
        }
        h1{
            font-size:70px;
            color:#A09E9B;
        }
        .container {
            height:100%;
            display:flex;
            margin-top:5%;
            align-items:center;
            flex-direction:column;
            
            
        }
       .scroll{
           overflow:auto;
           height:90vh;
       }
        a{
            color:#A09E9B;
            font-decoration:none;
        }
        a:hover{
            color:#A09E9B;
            text-decoration-style:dotted;
        }
        li{
            transition:0.3s;
        }
        li:hover{
            background-color:#A09E9B;
        }
        input[type="text"]{
            background:none;
            border:none;
            border-bottom:1px solid;
        }
        .btn{
            border:none;
            border-bottom:1px solid;
            border-left:1px dotted;
        }


    </style>
</head>

<body>
        
            @yield('content')
        
    </div>

    <!-- Bootstrap Javascript -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>
</body>

</html>