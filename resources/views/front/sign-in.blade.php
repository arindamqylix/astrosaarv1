<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Phone OTP Login</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="{{asset('public/assets-front/css/loginPopOtp.css')}}" />
</head>
<body>
  <div class="container">
    <div class="header">Continue With Phone</div>
    <div class="content">
      <p class="info"><strong>You will receive a 4 digit code</strong><br>for verification</p>
      
      <label for="mobile" class="label">Enter Your Mobile Number</label>
      <div class="input-box">
        <img src="https://flagcdn.com/w40/in.png" alt="India Flag" class="flag-img" />
        <span class="country-code">+91</span>
        <input type="text" id="mobile" placeholder="Enter Mobile Number">
      </div>
      
      <button class="otp-btn">Get OTP</button>
      
      <p class="terms">
        By Signing up, you agree to our <a href="#">Terms of Use</a> and <a href="#">Privacy Policy</a>
      </p>
    </div>
  </div>
</body>
</html>
