<!DOCTYPE html>
 <x-layouts.app/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://kit.fontawesome.com/07fa3d3b0b.js"></script>
 <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-element-bundle.min.js"></script>
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"/>

  <link rel="stylesheet" href="{{ asset('css/header.css') }}">
 <link rel="stylesheet" href="{{ asset('css/app.css') }}">
<style>
body {font-family: Arial, sans-serif; background:#fafafa; margin:0; padding:0;}
.container {max-width:400px; margin:80px auto; background:#fff; padding:25px; border-radius:8px; box-shadow:0 4px 14px rgba(0,0,0,0.1);}
h2 {text-align:center; color:#B22222;}
input {width:100%; padding:12px; margin-top:8px; border:1px solid #bbb; border-radius:6px;}
form button {width:100%; background:#B22222; color:#fff; border:none; padding:12px; border-radius:6px; margin-top:15px; cursor:pointer;}
.alert {padding:10px; background:#ffecec; border:1px solid #ffb3b3; color:#a70000; border-radius:6px; margin-bottom:10px;}
    .button{
       width: 120px;
        height: 45px;
        display: flex;
        justify-content: center;
        align-items: center;
        color: white;
        background-color: red;
        margin-left: 45%;
        border: 0px;
        border-radius: 12px;
    }
</style>
</head>
<body>
<div class="form-container">

<h2>Create Alumni Account</h2>
  {{-- Success flash --}}
  @if(session('success'))
    <div class="alert success">{{ session('success') }}</div>
  @endif

  {{-- Validation errors --}}
  @if ($errors->any())
    <div class="alert error">
      <ul style="margin:0; padding-left:18px;">
        @foreach ($errors->all() as $e)
          <li>{{ $e }}</li>
        @endforeach
      </ul>
    </div>
  @endif

  <form action="{{ route('auth.create.account') }}" method="post" enctype="multipart/form-data">
    @csrf
      <div class="fields">
        <label>Your Email *</label>
        <input type="email" name="email" value="{{ old('email') }}" required>
      </div>

      <div class="fields">
        <label>Password *</label>
        <input type="password" name="password"  value="{{ old('password') }}" required>
      </div>

      <div class="fields">
        <label>Confirm Password *</label>
        <input type="password" name="confirm_password" value="{{ old('confirm_password') }}" required>
      </div>
    </div>

    <button type="submit">Submit</button>
  </form>
</div>
</body>
</html>
 <script src="{{ asset('js/header.js') }}"></script>


