<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - CMS Portfolio</title>

    <style>
        body {
            margin: 0;
            padding: 0;
            background: #1c1c1c;
            font-family: Arial, Helvetica, sans-serif;
            color: white;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            width: 900px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .form-box {
            background: #242424;
            padding: 40px;
            width: 380px;
            border-radius: 10px;
            box-shadow: 0px 0px 20px rgba(255, 139, 160, 0.2);
        }

        .form-box h2 {
            margin-bottom: 15px;
            font-size: 30px;
            color: #FF8BA0;
        }

        label {
            font-size: 14px;
            opacity: 0.8;
        }

        input {
            width: 100%;
            padding: 12px;
            margin: 8px 0 18px 0;
            border-radius: 6px;
            border: none;
            background: #333;
            color: white;
        }

        input:focus {
            outline: 2px solid #FF8BA0;
        }

        button {
            width: 100%;
            padding: 14px;
            background: #FF8BA0;
            border: none;
            border-radius: 6px;
            font-size: 16px;
            font-weight: bold;
            cursor: pointer;
        }

        button:hover {
            background: #ff9fb1;
        }

        .text {
            width: 420px;
            padding-left: 40px;
        }

        .text h1 {
            font-size: 40px;
            margin-bottom: 10px;
        }

        .text p {
            opacity: 0.8;
            line-height: 1.6;
        }

        .text a {
            color: #FF8BA0;
            text-decoration: none;
        }

        .text a:hover {
            text-decoration: underline;
        }

        .alert {
            background: rgba(255, 139, 160, 0.2);
            padding: 10px;
            border-left: 4px solid #FF8BA0;
            margin-bottom: 15px;
            border-radius: 5px;
        }

    </style>
</head>
<body>

<div class="container">

    <div class="form-box">
        <h2>Create Account</h2>

        @if(session('error'))
        <div class="alert">{{ session('error') }}</div>
        @endif

        @if ($errors->any())
        <div class="alert">
            @foreach ($errors->all() as $error)
                • {{ $error }} <br>
            @endforeach
        </div>
        @endif

        <form action="/register" method="POST">
            @csrf

            <label>Name</label>
            <input type="text" name="name" placeholder="Your name" required>

            <label>Email</label>
            <input type="email" name="email" placeholder="email@example.com" required>

            <label>Password</label>
            <input type="password" name="password" placeholder="password" required>

            <label>Confirm Password</label>
            <input type="password" name="password_confirmation" placeholder="confirm password" required>

            <button type="submit">Register</button>

        </form>
    </div>

    <div class="text">
        <h1>CMS Portfolio Register</h1>
        <p>
            Create an administrator account to manage your portfolio content.
            Once registered, you can login and access your dashboard.
        </p>

        <p>Already have an account? <a href="/login">Login here</a>.</p>
    </div>

</div>

</body>
</html>
