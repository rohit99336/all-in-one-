<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>display project databse ,users table datas</title>
        <style>
            table{
                border:2px solid red;
                background-color: skyblue;
                width:500px;
                height:300px;
                color:white;
            }

            li{

            }
        </style>
    </head>
    <body>
        <!-- <h2>welcome Users list page</h2>
        @foreach($data as $item)
            <ul>
                <li>{{$item->name}}</li>
                <li>{{$item->branch}}</li>
                <li>{{$item->sem}}</li>
            </ul>
        @endforeach -->

        <table>
            <th>name</th>
            <th>branch</th>
            <th>sem</th>

            @foreach($data as $item)
            <tr align="center">
                <td>{{$item->name}}</td>
                <td>{{$item->branch}}</td>
                <td>{{$item->sem}}</td>
            </tr>
            @endforeach
        </table>
        {{$data->links()}}
    </body>
</html>
