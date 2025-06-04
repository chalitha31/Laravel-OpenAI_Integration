<!DOCTYPE html>
<html>
<head>
    <title>Laravel Codex Assistant</title>
</head>
<body>
    <h2>Enter Your Prompt</h2>
    <form method="POST" action="{{ route('generate.code') }}">
        @csrf
        <textarea name="prompt" rows="5" cols="60"></textarea><br>
        <button type="submit">Generate Code</button>
    </form>
</body>
</html>
