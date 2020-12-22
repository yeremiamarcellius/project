<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Hello {{Auth::user()->team_name}} !</h1>
    <form action="{{route('logout')}}" method="POST">
    @csrf
    <div>
        <button type="submit"> Logout</button>
    </div>
    
    </form>
</body>
</html>