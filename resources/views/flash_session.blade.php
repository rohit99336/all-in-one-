<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
<h3>Flash session</h3>
    <form action="sessioncontroller" method="post">
        <h3>{{session('status')}}</h3>
        NAME<input type="text" name="username"> <br><br>
        PASSWORD<input type="password" name="password"><br><br>
        {{@csrf_field()}}
        <button type="submit">submit</button>
    </form>
</body>
</html>