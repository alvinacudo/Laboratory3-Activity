<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <title>bubble chat</title>
        
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <script src="{{ asset('js/app.js') }}" defer></script>
    </head>
      <body>
      <div class="cont">
        <div class="form sign-in">
        <h2>WELCOME TO BUBBLE APPLICATION</h2>
        <h2>Sign In</h2>
          <label>
            <span>Email Address</span>
            <input type="email" name="email">
          </label>
          <label>
            <span>Password</span>
            <input type="password" name="password">
          </label>
            <button class="submit" type="button">Sign In</button>
          <p class="forgot-pass">Forgot Password ?</p>

      <div class="social-media">
        <ul>
          <li><img src="images/facebook.png"></li>
          <li><img src="images/twitter.png"></li>
          <li><img src="images/linkedin.png"></li>
          <li><img src="images/instagram.png"></li>
        </ul>
      </div>
    </div>

    <div class="sub-cont">
      <div class="img">
        <div class="img-text m-up">
          <h2>New here?</h2>
          <p>Sign up and discover great amount of new opportunities!</p>
        </div>
        <div class="img-text m-in">
          <h2>One of us?</h2>
          <p>If you already has an account, just sign in. We've missed you!</p>
        </div>
        <div class="img-btn">
          <span class="m-up">Sign Up</span>
          <span class="m-in">Sign In</span>
        </div>
      </div>
      <div class="form sign-up">
        <button type="button" class="submit">Sign Up Now</button>
      </div>
    </div>
  </div>
<script type="text/javascript" src="script.js"></script>
    </body>
</html>
