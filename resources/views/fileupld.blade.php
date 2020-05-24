<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FileUpload</title>
</head>
<body>
    <form action="FlupldController" method="post" enctype="multipart/form-data">
        <input type="file" name="img"><br><br>
        @csrf
        <button type="submit">Upload Image</button>
    </form>
</body>
</html>