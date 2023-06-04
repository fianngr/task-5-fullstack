@extends('layouts.validasi')

@section('form')
<form action="/api/auth/register" method="post" class="form-container">
    <h2>Register Form</h2>
    <div class="name">
        <input type="text" name="username" placeholder="username" required />
        <input type="text" name="name" placeholder="name" required />
    </div>
    <input type="email" name="email" placeholder="Email" required/>
    <input type="password" name="password" placeholder="Password" required />
    <button type="submit"> Register Now </button>
    <div >
        <button style="width:10vw"><a href="/masuk" class="btn btn-primary">Login</a></button>
    </div>
    <a href="/" class="btn btn-primary">Home</a>
</form>
@endsection