<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Dashboard')</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <style>
        /* Global Styles */
        * { margin:0; padding:0; box-sizing:border-box; font-family:'Poppins', sans-serif; }
        body { background:#1c1c1c; color:#fff; }
        a { text-decoration:none; }

        /* Header/Nav */
        header {
            background:#242424;
            padding:15px 30px;
            display:flex;
            justify-content:space-between;
            align-items:center;
            box-shadow:0 0 10px rgba(255,139,160,0.2);
        }
        header h1 { color:#FF8BA0; font-size:24px; }
        nav a { color:#fff; margin-left:20px; font-weight:600; transition:0.2s; }
        nav a:hover { color:#FF8BA0; }
        nav form button {
            background:#FF8BA0;
            color:#000;
            padding:6px 12px;
            border:none;
            border-radius:6px;
            cursor:pointer;
            font-weight:600;
        }
        nav form button:hover { opacity:0.85; }

        main { padding:30px; }

        /* Card */
        .card {
            background:#242424;
            padding:25px;
            border-radius:14px;
            box-shadow:0 0 20px rgba(255,139,160,0.2);
            margin-bottom:30px;
        }
        .card h2 { color:#FF8BA0; margin-bottom:20px; }

        /* Button */
        .btn {
            background:#FF8BA0;
            color:#000;
            padding:10px 16px;
            border:none;
            border-radius:8px;
            font-weight:600;
            cursor:pointer;
            transition:0.2s;
            display:inline-block;
            margin-bottom:10px;
        }
        .btn:hover { opacity:0.85; }

        /* Portfolio Grid */
        .portfolio-grid {
            display:grid;
            grid-template-columns:repeat(auto-fill,minmax(250px,1fr));
            gap:20px;
        }
        .portfolio-item {
            background:#1c1c1c;
            border-radius:12px;
            overflow:hidden;
            display:flex;
            flex-direction:column;
            justify-content:space-between;
            box-shadow:0 0 15px rgba(255,139,160,0.15);
            transition:transform 0.2s;
        }
        .portfolio-item:hover { transform:translateY(-5px); }
        .portfolio-item img { width:100%; height:160px; object-fit:cover; }
        .portfolio-item .content { padding:15px; }
        .portfolio-item h3 { color:#FF8BA0; font-size:18px; margin-bottom:8px; }
        .portfolio-item p { font-size:14px; opacity:0.8; margin-bottom:12px; }
        .portfolio-item .actions { display:flex; gap:10px; flex-wrap:wrap; }
    </style>
</head>
<body>
    <header>
        <h1>CMS Dashboard</h1>
        <nav>
            <a href="{{ route('dashboard') }}">Home</a>
            <a href="{{ route('portfolio.index') }}">Portfolio</a>
            <form method="POST" action="{{ route('logout') }}" style="display:inline;">
                @csrf
                <button type="submit">Logout</button>
            </form>
        </nav>
    </header>
    <main>
        @yield('content')
    </main>
</body>
</html>
