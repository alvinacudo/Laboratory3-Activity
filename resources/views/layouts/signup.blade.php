@extends('layouts.welcome')

@section('content') 
  <div class="container">
  <form method="POST" action="{{ route ('signup') }}">
  @csrf
        <div class="form sign-up">
        <h2>Sign Up</h2>
        <label>
          <span>Name</span>
          <input type="text">
        </label>
        <label>
          <span>Email</span>
          <input type="email">
        </label>
        <label>
          <span>Password</span>
          <input type="password">
        </label>
        <label>
          <span>Confirm Password</span>
          <input type="password">
        </label>
        <button type="button" class="submit">Sign Up Now</button>
      </div>
    </div>
  <script type="text/javascript" src="script.js"></script>
@endsection
