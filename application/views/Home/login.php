<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>

    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <style>
        body, html {
            height: 100%;
            margin: 0;
            font-family: Arial, sans-serif;
            color: white;
            text-align: center;
            background-color: #000;
        }

        .bg {
            background: url('') ;\no-repeat center center fixed;
            background-size: cover;
            height: 100%;
            filter: brightness(50%);
            position: absolute;
            width: 100%;
            z-index: -1;
        }

        .container {
            position: relative;
            top: 50%;
            transform: translateY(-50%);
        }

        .form-control {
            margin-bottom: 10px;
        }

        .form-group {
            position: relative;
        }

        .form-group .fa-eye {
            position: absolute;
            right: 10px;
            top: 50%;
            transform: translateY(-50%);
            cursor: pointer;
        }

        .btn-login {
            background-color: #6c757d;
            border: none;
            color: white;
            padding: 10px 20px;
            text-align: center;
            font-size: 16px;
            cursor: pointer;
            border-radius: 5px;
        }

        .register-link {
            color: orange;
        }

        h1, h2, h3 {
            margin-bottom: 15px;
        }

        .text-end {
            margin-bottom: 15px;
        }
    </style>
</head>
<body>
    <div class="bg"></div>
    <div class="container">
        <h1 class="display-4"><strong>Selamat datang</strong></h1>
        <h2 class="mb-4">Bersama dalam Kepedulian, Berbagi dalam Kehilangan</h2>
        
        <form>
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Username...">
            </div>

            <div class="form-group">
                <input type="password" class="form-control" placeholder="Password...">
                <i class="fa fa-eye"></i>
            </div>

            <div class="form-group text-end">
                <a href="#" class="text-white">Lupa Password?</a>
            </div>

            <button type="submit" class="btn-login">Login</button>
        </form>

        <p class="mt-3">Kamu Tidak Punya Akun ? <a href="#" class="register-link">Register</a></p>

        <h3 class="mt-5"><strong>Paguyuban Kedukaan Perum RG</strong></h3>
    </div>

    <script>
        document.querySelector('.fa-eye').addEventListener('click', function() {
            const passwordInput = this.previousElementSibling;
            if (passwordInput.type === 'password') {
                passwordInput.type = 'text';
                this.classList.add('fa-eye-slash');
                this.classList.remove('fa-eye');
            } else {
                passwordInput.type = 'password';
                this.classList.add('fa-eye');
                this.classList.remove('fa-eye-slash');
            }
        });
    </script>
</body>
</html>
