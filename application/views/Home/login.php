<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
        body, html {
            height: 100%;
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
        }
        .bg {
            background-image: url('https://placehold.co/1920x1080');
            background-size: cover;
            background-position: center;
            height: 100%;
            position: relative;
            filter: grayscale(100%);
        }
        .overlay {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: rgba(0, 0, 0, 0.5);
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            text-align: center;
            color: white;
        }
        .form-container {
            background-color: rgba(255, 255, 255, 0.8);
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
        }
        .form-control {
            margin-bottom: 10px;
        }
        .form-check-label {
            color: white;
        }
        .forgot-password, .register {
            color: white;
        }
        .register {
            color: orange;
        }
    </style>
</head>
<body>
    <div class="bg">
        <div class="overlay">
            <h1>Paguyuban kedukaan Perumahan gardenia RW 11</h1>
            <div class="form-container">
                <form>
                    <div class="mb-3">
                        <input type="text" class="form-control" placeholder="Username...">
                    </div>
                    <div class="mb-3">
                        <input type="password" class="form-control" placeholder="Password...">
                    </div>
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="rememberMe">
                            <label class="form-check-label" for="rememberMe">Remember Me</label>
                        </div>
                        <a href="#" class="forgot-password">Lupa Password?</a>
                    </div>
                    <button type="submit" class="btn btn-secondary w-100">Login</button>
                </form>
                <p class="mt-3">Kamu Tidak Punya Akun ? <a href="#" class="register">Register</a></p>
            </div>
        </div>
    </div>
</body>
</html>