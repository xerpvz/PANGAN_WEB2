<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CMS Login</title>

    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: 'Poppins', sans-serif;
            background: #1c1c1c;
            color: #fff;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            display: flex;
            gap: 80px;
            align-items: center;
        }

        /* RIGHT LOGIN CARD */
        .card {
            background: #242424;
            padding: 45px;
            width: 380px;
            border-radius: 14px;
            box-shadow: 0px 0px 20px rgba(255, 139, 160, 0.2);
        }

        .card h2 {
            margin-bottom: 30px;
            font-weight: 600;
            color: #FF8BA0;
        }

        .input-group {
            display: flex;
            flex-direction: column;
            margin-bottom: 18px;
        }

        .input-group label {
            margin-bottom: 6px;
            font-size: 14px;
        }

        .input-group input {
            padding: 12px;
            border-radius: 8px;
            border: none;
            background: #1c1c1c;
            color: #fff;
        }

        .forgot {
            font-size: 13px;
            margin-bottom: 15px;
            opacity: 0.8;
            color: #FF8BA0;
        }

        .btn {
            width: 100%;
            padding: 12px;
            background: #FF8BA0;
            border: none;
            color: #000;
            font-weight: bold;
            border-radius: 8px;
            cursor: pointer;
            transition: 0.2s;
            font-size: 16px;
        }

        .btn:hover {
            opacity: 0.85;
        }

        /* LEFT TEXT */
        .info {
            max-width: 450px;
        }

        .info h1 {
            font-size: 42px;
            margin-bottom: 15px;
        }

        .info span {
            color: #FF8BA0;
            font-weight: bold;
        }

        .info p {
            opacity: 0.85;
            line-height: 1.6;
            font-size: 15px;
        }
    </style>
</head>

<body>

<div class="container">

    <!-- LEFT TEXT -->
    <div class="info">
        <h1>CMS Portfolio Login</h1>
        <p>This login area is exclusively for the <span>admin</span> of this portfolio.
           Access is restricted. Unauthorized users should leave this page.</p>
    </div>

    <!-- RIGHT LOGIN CARD -->
    <div class="card">
        <h2>Login</h2>

        @if(session('error'))
            <p style="color:#FF8BA0; font-size:14px;">{{ session('error') }}</p>
        @endif

        <form action="/login" method="POST">
            @csrf

            <div class="input-group">
                <label>Email</label>
                <input type="email" name="email" required>
            </div>

            <div class="input-group">
                <label>Password</label>
                <input type="password" name="password" required>
            </div>

            <div class="forgot">Forgot password?</div>

            <button class="btn" type="submit">Login</button>
        </form>
    </div>

</div>

</body>
</html>
