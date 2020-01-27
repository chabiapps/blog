<!DOCTYPE html>
<html>
<head>
    <title>{{ $pageTitle }}</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css" rel="stylesheet">

    <!-- Styles -->
    <style>
        html, body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            height: 100vh;
            margin: 0;
        }

        .edit__table--td-padding{
            padding: 10px;
        }
        .edit__table--input-padding{
            padding: 0 5px;
        }
    </style>
</head>
<body>

<div class="container">
    @yield('content')
</div>

</body>
</html>
