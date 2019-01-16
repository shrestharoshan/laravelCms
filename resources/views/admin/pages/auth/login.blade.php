<!DOCTYPE html>
<html>
<head>
    <title>Web Site</title>

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Laravel Assets -->

    <link rel="stylesheet" href="{{ asset('css/admin.css') }}" />

    <!-- Main JS File -->
    <script src="{{ asset('js/admin.js') }}"></script>
</head>
@include('admin.inc.messages')
<div class="wrapper">
    <form class="form-signin" action="{{ route('admin.auth') }}" method="post">
        <h2 class="form-signin-heading">Admin login</h2>
        <input type="text" class="form-control" name="username" placeholder="Email Address" required="" autofocus="" />
        <input type="password" class="form-control" name="password" placeholder="Password" required=""/>
        <label class="checkbox">
            <input type="checkbox" value="remember-me" id="rememberMe" name="rememberMe"> Remember me
        </label>
        {{ csrf_field() }}
        <button class="btn btn-lg btn-primary btn-block" type="submit">Login</button>
    </form>
</div>
</html>
