@extends('layouts.validasi')

@section('form')
<form action="/api/auth/login" method="post" class="form-container">
    <h2>Login</h2>
    <input type="text" name="username" placeholder="username" required/>
    <input type="password" name="password" placeholder="Password" required />
    <button type="submit"> Login </button>
    <div class="redirect">
        <button style="left: 0"><a href="/registrasi" class="btn btn-primary">Register</a></button>
        <button ><a href="/" class="btn btn-primary">Home</a></button>
    </div>
</form>
@endsection