<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Test     </title>
</head>
<body>
        <h1>Test Package laravel</h1>
        <form action="{{ route('contact')}}" method="POST">
            @csrf
            <input type="text" name="name" placeholder="Your name">
            <input type="email" name="email" placeholder="Your email">
            <button type="submit">
                Send
            </button>
        </form>
</body>
</html>