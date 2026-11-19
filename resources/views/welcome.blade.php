<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#f5f7fb">
    <title>Welcome back</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Manrope:wght@500;600;700;800&display=swap" rel="stylesheet">
    <style>
        :root {
            color-scheme: light;
            font-family: "DM Sans", sans-serif;
            color: #172033;
            background: #f5f7fb;
            font-synthesis: none;
            text-rendering: optimizeLegibility;
        }

        * { box-sizing: border-box; }
        body { min-width: 320px; min-height: 100vh; margin: 0; }
        button, input { font: inherit; }
        .page {
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .brand { display: flex; align-items: center; gap: 12px; font-family: "Manrope", sans-serif; font-size: 19px; font-weight: 800; letter-spacing: -.5px; }
        .brand-mark {
            display: grid;
            width: 38px;
            height: 38px;
            place-items: center;
            border: 0;
            border-radius: 12px;
            background: #e8eefc;
            color: #4268d5;
            font-size: 20px;
        }
        .form-panel { display: flex; flex-direction: column; align-items: center; gap: 24px; width: 100%; padding: 48px 28px; }
        .system-title { margin: 0; color: #172033; font-family: "Manrope", sans-serif; font-size: clamp(22px, 4vw, 30px); letter-spacing: -1px; text-align: center; }
        .login-card { width: min(100%, 430px); padding: 42px; border: 1px solid #e8ebf2; border-radius: 20px; background: #fff; box-shadow: 0 20px 60px rgba(27, 39, 67, .08); }
        .login-card h2 { margin: 0; font-family: "Manrope", sans-serif; font-size: 29px; letter-spacing: -1px; }
        .intro { margin: 8px 0 30px; color: #727d91; font-size: 14px; line-height: 1.6; }
        .field { display: block; margin-bottom: 19px; }
        .field span { display: block; margin-bottom: 8px; color: #364156; font-size: 13px; font-weight: 600; }
        .field input {
            width: 100%;
            height: 49px;
            padding: 0 14px;
            border: 1px solid #dfe4ed;
            border-radius: 9px;
            outline: none;
            background: #fff;
            color: #172033;
            transition: border-color .2s, box-shadow .2s;
        }
        .field input::placeholder { color: #a5adba; }
        .field input:focus { border-color: #5378e8; box-shadow: 0 0 0 3px rgba(83, 120, 232, .13); }
        .form-options { display: flex; justify-content: space-between; align-items: center; gap: 12px; margin: 3px 0 23px; font-size: 12px; }
        .remember { display: flex; align-items: center; gap: 8px; color: #687387; }
        .remember input { accent-color: #4268d5; }
        .text-link { color: #4268d5; font-weight: 600; text-decoration: none; }
        .text-link:hover { text-decoration: underline; }
        .actions { display: grid; gap: 11px; }
        .button {
            display: inline-flex;
            min-height: 49px;
            align-items: center;
            justify-content: center;
            border: 1px solid transparent;
            border-radius: 9px;
            font-size: 14px;
            font-weight: 700;
            text-decoration: none;
            transition: transform .18s, background-color .18s, box-shadow .18s;
        }
        .button:hover { transform: translateY(-1px); }
        .button-primary { background: #4268d5; box-shadow: 0 7px 16px rgba(66, 104, 213, .2); color: #fff; }
        .button-primary:hover { background: #3459c1; }
        .button-secondary { border-color: #dfe4ed; background: #fff; color: #364156; }
        .button-secondary:hover { background: #f8f9fc; }
        .signup-note { margin: 24px 0 0; color: #7d8798; font-size: 12px; line-height: 1.6; text-align: center; }
        @media (max-width: 800px) {
            .form-panel { padding: 28px 20px; }
            .login-card { padding: 34px 28px; }
        }
        @media (max-width: 420px) {
            .login-card { padding: 28px 22px; }
            .form-options { align-items: flex-start; }
        }
    </style>
</head>
<body>
    <main class="page">
        <section class="form-panel" aria-labelledby="login-title">
            <h1 class="system-title">SSG Attendance and Sanction System</h1>
            <div class="login-card">
                <h2 id="login-title">Welcome back</h2>
                <p class="intro">Enter your details to sign in to your account.</p>
                @if ($errors->any())
                    <div style="margin:0 0 18px;padding:12px;border-radius:9px;background:#fff1f1;color:#a52a2a;font-size:13px;">
                        {{ $errors->first() }}
                    </div>
                @endif
                <form method="POST" action="{{ route('login.submit') }}">
                    @csrf
                    <label class="field">
                        <span>Email address</span>
                        <input type="email" name="email" value="{{ old('email') }}" autocomplete="email" placeholder="you@example.com" required>
                    </label>
                    <label class="field">
                        <span>Password</span>
                        <input type="password" name="password" autocomplete="current-password" placeholder="Enter your password" required>
                    </label>
                    <div class="form-options">
                        <label class="remember"><input type="checkbox" name="remember"> Remember me</label>
                        <a class="text-link" href="{{ url('/forgot-password') }}">Forgot password?</a>
                    </div>
                    <div class="actions">
                        <button class="button button-primary" type="submit">Log in</button>
                        <a class="button button-secondary" href="{{ url('/register') }}">Create account</a>
                    </div>
                </form>
                <p class="signup-note">By continuing, you agree to our <a class="text-link" href="#">Terms</a> and <a class="text-link" href="#">Privacy Policy</a>.</p>
            </div>
        </section>
    </main>
</body>
</html>
