<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard</title>
    <style>
        body { min-height: 100vh; margin: 0; display: grid; place-items: center; background: #f5f7fb; color: #172033; font-family: Arial, sans-serif; }
        main { width: min(90%, 600px); padding: 48px; border-radius: 20px; background: #fff; box-shadow: 0 20px 60px rgba(27,39,67,.08); }
        button { height: 44px; padding: 0 18px; border: 0; border-radius: 9px; background: #4268d5; color: #fff; font-weight: 700; cursor: pointer; }
    </style>
</head>
<body>
    <main>
        <h1>Welcome, {{ Auth::user()->name }}</h1>
        <p>You are signed in.</p>
        <form method="POST" action="{{ route('logout') }}">@csrf<button type="submit">Log out</button></form>
    </main>
</body>
</html>
