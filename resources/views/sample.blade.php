
@if($errors->any())
<div>
    <ul>@foreach($errors->all() as $err)
        <li>{{$err}}</li>@endforeach
    </ul>
</div>@endif
    <form action="samplecontroller" method="post">
        NAME<input type="text" name="username"> <br><br>
        {{@csrf_field()}}
        Email <input type="email" name="email"><br><br>
        ADDRESS <input type="text" name="address"><br><br>
        PASSWORD<input type="password" name="password"><br><br>
        <button type="submit">submit</button>
    </form>
