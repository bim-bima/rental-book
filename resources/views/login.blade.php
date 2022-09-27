<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css">
    <title>Book Rent|Login</title>
    <style>
        .main{
            height: 100vh;
            box-sizing: border-box ;
        }
        .login-box{
            width: 400px;
        }
    </style>

</head>
<body>
    <div class="main d-flex flex-column justify-content-center align-items-center">
        @if (session('status'))
        <div class="alert alert-danger align-items-center">
            {{ session('message') }}
        </div>
        @endif
        <div class="login-box container">
            <form action="" method="post">
                @csrf
                <div class="mb-3">
                    <label for="" class="form-label">Username</label>
                    <input type="text" name="username" class="form-control" id="username" placeholder="username" required>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" name="password" class="form-control" id="password" placeholder="password" required>
                </div>
                <div class="mt-4 mb-3">
                    <button type="submit" class="btn btn-primary form-control">Login</button>
                </div>
                <div class="text-center">
                    <a href="register">Sign up</a>
                </div>
            </form>
            
            
                

        </div>
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>