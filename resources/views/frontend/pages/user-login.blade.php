<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Login Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f2f2f2;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .login-box {
            background: #fff;
            padding: 30px;
            border-radius: 8px;
            width: 350px;
            box-shadow: 0 0 15px rgba(0,0,0,0.1);
        }
        .login-box h2 {
            text-align: center;
            margin-bottom: 20px;
        }
        .input-group {
            margin-bottom: 15px;
        }
        .input-group label {
            display: block;
            margin-bottom: 5px;
            font-size: 14px;
        }
        .input-group input {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        .btn {
            width: 100%;
            background: #007bff;
            color: white;
            padding: 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }
        .btn:hover {
            background: #0056b3;
        }
        .text-center {
            text-align: center;
            margin-top: 10px;
        }
    </style>
</head>
<body>

    <div class="login-box">
        <h2>Login</h2>

        @if(session('error'))
            <p style="color:red;">{{ session('error') }}</p>
        @endif

    <form action="{{ route('user.login') }}" method="POST">
        @csrf
            <div class="input-group">
                <label>Email</label>
                <input type="email" placeholder="Enter email" name="email" required>
            </div>

            <div class="input-group">
                <label>Password</label>
                <input type="password" placeholder="Enter password" name="password" required>
            </div>

            <button class="btn" type="submit">Login</button>

            <p class="text-center">
                Don't have an account? <a href="#">Register</a>
            </p>
        </form>
    </div>

</body>
</html>
