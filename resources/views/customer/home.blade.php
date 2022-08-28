<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
    <title>home</title>
</head>
<body class="bg-dark">
    <div class="container ">
    <div class="card shadow-sm px-3 py-5 col-4 offset-4 mt-5">
    @if (session('authMessage'))
        <p class="text-danger">{{session('authMessage')}}</p>
    @endif
    <div class="d-flex gap-3">
    <span><a href="{{url('customer/home')}}">home</a></span> |
    <span><a href="{{url('customer/about')}}">about</a></span> |
    <span><a href="{{url('customer/service')}}">service</a></span>
</div>
    <h1>Home Page</h1>
    <h3>Role->{{Auth::user()->role}}</h3>
    <div class="mt-3">
    <form action="{{route('logout')}}" method='post'>
        @csrf
        <button type="submit" class="btn btn-danger">Logout</button>
    </form>
</div>
</div>
</div>
</body>
</html>
