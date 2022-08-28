<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
    <script src="https://kit.fontawesome.com/1b23bc593b.js" crossorigin="anonymous"></script>
    <title>Customer Login</title>
</head>
<body class="bg-dark">
    <div class="container mt-5">
        <div class="col-4 offset-4">
            <form action="{{route('login')}}" class="card shadow-sm px-4 py-5" method="post">
                @csrf

                <a href="{{url('/')}}" class="btn btn-dark position-absolute"><i class="fa-solid fa-arrow-left text-light"></i> Back</a>
                <h3 class="text-center">Login Page</h3>
                <div class="mt-4">
                    <label for="email">Email</label>
                    <input type="email" name="email" placeholder="Enter Your Email" class="form-control">
                </div>
                @error('email')
                    <p class="text-danger">{{$message}}</p>
                @enderror
                <div class="mt-4">
                    <label for="password">Password</label>
                    <input type="password" name="password" placeholder="Enter Your Password" class="form-control">
                </div>
                @error('password')
                    <p class="text-danger">{{$message}}</p>
                @enderror
                <div class="mt-4">
                    <button type="submit" value="login"class="btn btn-danger">Login</button>
                    <a href="{{url('customer/register')}}" class="btn btn-success">register</a>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
