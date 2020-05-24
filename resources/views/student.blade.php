<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resource Controller</title>
</head>
<body>
    <h3>Resource Controller</h3>
    <form action="StudentCont/1" method="post">
        @method('put')
        @csrf
    <button type="submit">send request</button>

    </form>
</body>
</html>
