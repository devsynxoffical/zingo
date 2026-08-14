<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $mail_data['title'] }}</title>
</head>
<body>
    <p>Email: {{ $mail_data['email'] }}</p>
    <p>Phone: {{ $mail_data['phone'] }}</p>
    <p>message: {{ $mail_data['message'] }}</p>
</body>
</html>
