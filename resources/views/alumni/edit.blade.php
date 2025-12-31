<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Edit Profile</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
body {font-family:Arial;background:#fafafa;margin:0;padding:0;}
.container {max-width:900px;margin:40px auto;background:white;padding:25px;border-radius:8px;box-shadow:0 4px 16px rgba(0,0,0,0.1);}
label {font-weight:bold;margin-top:10px;display:block;}
input, select {width:100%;padding:10px;margin-top:4px;border:1px solid #ccc;border-radius:6px;}
button {margin-top:20px;width:100%;background:#B22222;color:white;border:none;padding:14px;border-radius:6px;font-size:17px;}
button {
    margin-top: 20px;
    width: 100%;
    background: #B22222;
    color: white;
    border: none;
    padding: 14px;
    border-radius: 6px;
    font-size: 17px;
    cursor: pointer;
    transition: background 0.3s ease;
}
button:hover {
    background: #8b0000;
}
img.profile-preview {
    max-width: 150px;
    margin-top: 10px;
    border-radius: 8px;
    display: block;
}
.alert {
    padding: 12px;
    margin-bottom: 20px;
    border-radius: 6px;
}
.alert.success {
    background: #d4edda;
    color: #155724;
}
.alert.error {
    background: #f8d7da;
    color: #721c24;
}
</style>
</head>

<body>

<div class="container">
 <img src="https://res.cloudinary.com/dhxdkejh3/image/upload/v1761476209/FB_IMG_1761475995419_boq5m0.jpg" width="200" height="180" class="logo" alt="Logo">
   
<h2 style="color:#B22222;">Edit Profile</h2>

<form action="{{ route('profile.update') }}" method="POST" enctype="multipart/form-data">
    @csrf


    <!-- Pass old image URL and public ID -->
    <input type="hidden" name="old_image_url" value="{{ $alumni['image'] }}">
    <input type="hidden" name="old_image_id" value="{{ $alumni['image_public_id'] ?? '' }}">

    <label>Full Name *</label>
    <input type="text" name="name" value="{{ $alumni['name'] }}" required>

    <label>Nickname</label>
    <input type="text" name="nickname" value="{{ $alumni['nickname'] }}">

    <label>House *</label>
    <input type="text" name="house" value="{{ $alumni['house'] }}" required>

    <label>Entry *</label>
    <input type="text" name="entry" value="{{ $alumni['entry'] }}" required>

    <label>Profession</label>
    <input type="text" name="profession" value="{{ $alumni['profession'] }}">

    <label>Location / City</label>
    <input type="text" name="location" value="{{ $alumni['location'] }}">

    <label>Country</label>
    <input type="text" name="country" value="{{ $alumni['country'] }}">

    <label>Residence</label>
    <input type="text" name="residence" value="{{ $alumni['residence'] }}">

    <label>Business Category</label>
    <input type="text" name="business_category" value="{{ $alumni['business_category'] }}">

    <label>Business Interest</label>
    <input type="text" name="business_interest" value="{{ $alumni['business_interest'] }}">

    <label>Trade / Work</label>
    <input type="text" name="trade" value="{{ $alumni['trade'] }}">

    
    <label>Website URL</label>
    <input type="text" name="website_url" value="{{ $alumni['website_url'] }}">
    
    <label>Contact Phone / WhatsApp</label>
    <input type="text" name="contact" value="{{ $alumni['contact'] }}">

    <label>Email *</label>
    <input type="email" name="email" value="{{ $alumni['email'] }}" required readonly>

    <label>Profile Photo</label>
    <input type="file" name="image" accept="image/*">

    <button type="submit">Save Changes</button>

</form>
</div>
</body>
</html>
