<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <form action="Csrfcontroller" method="post">
        NAME<input type="text" name="username"> <br><br>
        {{@csrf_field()}}
        PASSWORD<input type="password" name="password"><br><br>
        <button type="submi">submit</button>
    </form>
</body>
</html>