 <x-layouts.app/>
<!DOCTYPE html>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://kit.fontawesome.com/07fa3d3b0b.js"></script>
 <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-element-bundle.min.js"></script>
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"/>
 
<style>
body {font-family: Arial, sans-serif; background:#fafafa; margin:0; padding:0;}
.container {max-width:400px; margin:80px auto; background:#fff; padding:25px; border-radius:8px; box-shadow:0 4px 14px rgba(0,0,0,0.1);}
h2 {text-align:center; color:#B22222;}
input {width:100%; padding:12px; margin-top:8px; border:1px solid #bbb; border-radius:6px;}
form button {width:100%; background:#B22222; color:#fff; border:none; padding:12px; border-radius:6px; margin-top:15px; cursor:pointer;}
.alert {padding:10px; background:#ffecec; border:1px solid #ffb3b3; color:#a70000; border-radius:6px; margin-bottom:10px;}
</style>
    <link rel="stylesheet" href="{{ asset('css/header.css') }}">
 <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
<div class="container">
<h2>Login</h2>

@if(session('success'))
<div class="alert" style="background:#e6ffed;border-color:#b2f0c0;color:#0a662a;">
    {{ session('success') }}
</div>
@endif

@if($errors->any())
<div class="alert">
    {{ $errors->first() }}
</div>
@endif

<form method="POST" action="{{ route('login.submit') }}">
    @csrf
    <input type="email" name="email" placeholder="Email" value="{{ old('email') }}" required>
    <input type="password" name="password" placeholder="Password" required>
    <button type="submit">Login</button>
</form>
<p style="text-align:center;margin-top:10px;">
<a href="{{ route('password.forgot') }}">Forgot Password?</a>
</p>
</div>
</body>
</html>
 <script src="{{ asset('js/header.js') }}"></script>
