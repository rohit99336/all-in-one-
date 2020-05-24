<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert DATA in DB</title>
</head>
<body>
    <form action="InsDBcontroller" method="post">
    @csrf
    Name<input type="text" name="name"><br><br>
    Branch<input type="text" name="branch"><br><br>
    Sem<input type="text" name="sem"><br><br>
    <button type="submit">Insert</button>
    </form>
</body>
</html>