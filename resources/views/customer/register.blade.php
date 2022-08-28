<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://kit.fontawesome.com/1b23bc593b.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body class="bg-dark">
    <div class="container mt-5">
        <div class="col-4 offset-4 card shadow-sm px-4 py-5">
            <a href="{{url('/')}}" class="btn btn-dark position-absolute"><i class="fa-solid fa-arrow-left text-light"></i> Back</a>
            <h3 class="text-center">Register Page</h3>
            <form action="{{route('register')}}" method="post">
                @csrf
                @error('terms')
                    <p class="text-danger">{{$message}}</p>
                @enderror
                <div class="mt-4">
                    <label for="name">Name</label>
                    <input type="text" name="name" placeholder="Enter Your Name" class="form-control" value="{{old('name')}}">
                </div>
                @error('name')
                    <p class="text-danger">{{$message}}</p>
                @enderror
                <div class="mt-4">
                    <label for="email">Email</label>
                    <input type="email" name="email" placeholder="Enter Your Email" class="form-control">
                </div>
                @error('email')
                    <p class="text-danger">{{$message}}</p>
                @enderror
                <div class="mt-4">
                    <label for="role">Role</label>
                    <select name="role" id="" class="form-control">

                        <option value="admin">Admin</option>
                        <option value="user">User</option>
                    </select>
                </div>
                @error('role')
                    <p class="text-danger">{{$message}}</p>
                @enderror

                <div class="mt-4">
                    <label for="name">Password</label>
                    <input type="text" name="password" placeholder="Enter Your Password" class="form-control">
                </div>
                @error('password')
                    <p class="text-danger">{{$message}}</p>
                @enderror
                <div class="mt-4">
                    <label for="name">Password Confirmation</label>
                    <input type="text" name="password_confirmation" placeholder="Confirm Password " class="form-control">
                </div>
                @error('confirm_password')
                    <p class="text-danger">{{$message}}</p>
                @enderror
                <div class="mt-4">
                    <button type="submit" class="btn btn-danger">Submit</button>
                    <a href="{{url('customer/login')}}" class="btn btn-success">Login</a>
                </div>

            </form>
        </div>
    </div>
</body>
</html>
