<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>update</title>
</head>
<body>

    <form action="UpdateController" method="post">

    <select name="id" >
        <option value="1">rohit</option>
        <option value="2">ved</option>
        <option value="3">prem</option>
        <option value="4">kamlesh</option>
    </select><br><br>
    @csrf
        <input type="text" name="name" placeholder="username"><br><br>
        <input type="text" name="branch" placeholder="branch"><br><br>
        <button type="submit">UPDATE</button>
    </form>
</body>
</html>