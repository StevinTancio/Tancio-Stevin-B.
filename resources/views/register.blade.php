<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Create account</title>
    <style>
        :root { font-family: Arial, sans-serif; color: #172033; background: #f5f7fb; }
        * { box-sizing: border-box; }
        body { min-height: 100vh; margin: 0; display: grid; place-items: center; padding: 24px; }
        .card { width: min(100%, 430px); padding: 40px; border: 1px solid #e8ebf2; border-radius: 20px; background: #fff; box-shadow: 0 20px 60px rgba(27,39,67,.08); }
        h1 { margin: 0 0 8px; font-size: 29px; }
        p { margin: 0 0 28px; color: #727d91; }
        label { display: block; margin-bottom: 18px; color: #364156; font-size: 13px; font-weight: 600; }
        input { width: 100%; height: 49px; margin-top: 8px; padding: 0 14px; border: 1px solid #dfe4ed; border-radius: 9px; }
        input:focus { border-color: #5378e8; outline: 3px solid rgba(83,120,232,.13); }
        button, .back { display: inline-flex; width: 100%; min-height: 49px; align-items: center; justify-content: center; border: 0; border-radius: 9px; font-weight: 700; text-decoration: none; }
        button { margin-top: 4px; background: #4268d5; color: #fff; cursor: pointer; }
        .back { margin-top: 11px; border: 1px solid #dfe4ed; color: #364156; }
        .errors { margin: 0 0 18px; padding: 12px; border-radius: 9px; background: #fff1f1; color: #a52a2a; font-size: 13px; }
    </style>
</head>
<body>
    <main class="card">
        <h1>Create account</h1>
        <p>Start your SSG Attendance and Sanction System account.</p>
        @if ($errors->any())
            <div class="errors">
                @foreach ($errors->all() as $error)<div>{{ $error }}</div>@endforeach
            </div>
        @endif
        <form method="POST" action="{{ route('register') }}">
            @csrf
            <label>Name<input type="text" name="name" value="{{ old('name') }}" autocomplete="name" required></label>
            <label>Email address<input type="email" name="email" value="{{ old('email') }}" autocomplete="email" required></label>
            <label>Password<input type="password" name="password" autocomplete="new-password" minlength="8" required></label>
            <label>Confirm password<input type="password" name="password_confirmation" autocomplete="new-password" minlength="8" required></label>
            <button type="submit">Create account</button>
        </form>
        <a class="back" href="{{ route('login') }}">Back to login</a>
    </main>
</body>
</html>
