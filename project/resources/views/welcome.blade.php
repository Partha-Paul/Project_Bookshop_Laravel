<!-- resources/views/welcome.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>
    <!-- Header Bar -->
    <header class="header-bar">
        <div class="left">
            <a href="{{ route('home') }}" class="home">Home</a>
        </div>
        <div class="right">
            @guest
                <a href="{{ route('login') }}" class="login">Login</a>
                <a href="{{ route('register') }}" class="register">Register</a>
            @endguest
        </div>
    </header>

    <!-- Main Content -->
    <div class="content">
        <h1>Welcome to Our Shop!</h1>
        <p>To see our collection log in and get to the dashboard.</p>
    </div>
</body>
</html>
