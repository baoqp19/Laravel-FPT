<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        Đăng nhập
    </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>

    <div class="container mt-5">
        <h3>Đăng nhập</h3> 
        @if (session('message'))
            <p class="text-danger">{{session('message')}}</p>
        @endif
        <form action="{{route('postLogin')}}" method="post">
            @csrf
            <div class="mb-3">
                <label for="email">Email</label>
                <input type="email" class="form-control" placeholder="email" name="email">
            </div>
            <div class="mb-3">
                <label for="password">Password</label>
                <input type="password" class="form-control" placeholder="password" name="password">
            </div>
            <div class="mb-3">
                <input type="checkbox" id="remember" name="remember">
                <label for="password">Remember Me</label>
            </div>
           
            <button class="btn btn-primary">Đăng nhập</button>
            <a href="{{route('register')}}">Đăng ký</a>
        </form>
    </div>





    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>


</html>