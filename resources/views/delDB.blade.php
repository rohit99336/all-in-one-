<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>delete data from DataBase</title>
</head>
<body>
    <form action="Delcontroller" method="POST">
        <select name="id">
            <option value="1">PHP</option>
            <option value="3">C++</option>
            <option value="4">C</option>
            <option value="2">JAVA</option>
            <option value="5">HTML</option>
        </select>
        @csrf
        <button type="submit"> Delete Data</button>
    </form>
</body>
</html>