<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'Simple Attendance') }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
            min-height: 100vh;
            display: flex;
            align-items: center;
        }
        .welcome-container {
            max-width: 500px;
            margin: 0 auto;
            padding: 2rem;
            text-align: center;
        }
        .logo {
            font-size: 3rem;
            margin-bottom: 1.5rem;
            color: #4a5568;
        }
        .btn-primary {
            padding: 0.5rem 2rem;
            font-weight: 500;
        }
        .btn-outline-primary {
            padding: 0.5rem 2rem;
            font-weight: 500;
        }
    </style>
</head>
<body>
    <div class="welcome-container">
        <div class="logo">📊</div>
        <h1 class="h3 mb-4">Simple Attendance</h1>
        <p class="text-muted mb-4">A simple and efficient way to manage student attendance.</p>
        
        @auth
            <a href="{{ route('dashboard') }}" class="btn btn-primary">Go to Dashboard</a>
        @else
            <div class="d-grid gap-2">
                <a href="{{ route('login') }}" class="btn btn-primary">Login</a>
                <a href="{{ route('signup') }}" class="btn btn-outline-primary">Create Account</a>
            </div>
        @endauth
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
