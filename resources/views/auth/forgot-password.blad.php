<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Forgot Password</title>

<style>
body {
    font-family: Arial, sans-serif;
    background:#fafafa;
    margin:0;
}
.container {
    max-width:400px;
    margin:80px auto;
    background:#fff;
    padding:25px;
    border-radius:8px;
    box-shadow:0 4px 14px rgba(0,0,0,.1);
}
h2 {
    text-align:center;
    color:#B22222;
}
input {
    width:100%;
    padding:12px;
    margin-top:10px;
    border:1px solid #bbb;
    border-radius:6px;
}
button {
    width:100%;
    background:#B22222;
    color:#fff;
    border:none;
    padding:12px;
    border-radius:6px;
    margin-top:15px;
    cursor:pointer;
}
.alert {
    padding:10px;
    background:#ffecec;
    border:1px solid #ffb3b3;
    color:#a70000;
    border-radius:6px;
    margin-bottom:10px;
}
@media (max-width: 480px) {
    .container {
        margin:40px 15px;
        padding:20px;
    }
}
</style>
</head>

<body>
<div class="container">
<h2>Forgot Password</h2>

@if($errors->any())
<div class="alert">{{ $errors->first() }}</div>
@endif

<form method="POST" action="{{ route('password.reset.direct') }}">
@csrf
<input type="email" name="email" placeholder="Registered Email" required>
<input type="password" name="password" placeholder="New Password" required>
<input type="password" name="confirm_password" placeholder="Confirm Password" required>
<button type="submit">Reset Password</button>
</form>

<p style="text-align:center;margin-top:12px;">
<a href="/login">Back to Login</a>
</p>

</div>
</body>
</html>
