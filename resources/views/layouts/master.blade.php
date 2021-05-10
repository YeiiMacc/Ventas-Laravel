<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Products</title>
</head>
<body>
    @if (session()->has('error'))
        <div class="alertalert-danger">
            {{ session()->get('error') }}
        </div>
    @endif
    @yield('content')
</body>
</html>