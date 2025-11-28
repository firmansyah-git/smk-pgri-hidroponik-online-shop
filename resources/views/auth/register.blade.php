<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{ route('register') }}" method="POST" enctype="multipart/form-data" >
        @csrf
        <div>
            <label for="name">Nama</label>
            <input type="text" id="name" name="name" value="{{ old('name') }}">
            @error('name')
                <div style="color: red; font-size: 0.875rem;">{{ $message }}</div>
            @enderror
        </div>
        <div>
            <label for="username">Username</label>
            <input type="username" id="username" name="username" value="{{ old('username') }}">
            @error('username')
                <div style="color: red; font-size: 0.875rem;">{{ $message }}</div>
            @enderror
        </div>
        <div>
            <label for="email">Email</label>
            <input type="email" id="email" name="email" value="{{ old('email') }}">
            @error('email')
                <div style="color: red; font-size: 0.875rem;">{{ $message }}</div>
            @enderror
        </div>
        <div>
            <label for="password">Password</label>
            <input type="password" id="password" name="password" value="{{ old('password') }}">
            @error('password')
                <div style="color: red; font-size: 0.875rem;">{{ $message }}</div>
            @enderror
        </div>
        <div>
            <label for="password_confirmation">Confim Password</label>
            <input type="password" id="password_confirmation" name="password_confirmation" value="{{ old('password_confirmation') }}">
            @error('password_confirmation')
                <div style="color: red; font-size: 0.875rem;">{{ $message }}</div>
            @enderror
        </div>
        <button type="submit">Register</button>
    </form>
</body>
</html>