<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <h1>User list</h1>

        <ul>
            @forelse($users as $user)
                <li>{{$user->name}}</li>
            @empty
            <li>List is empty</li>
            @endforelse
        </ul>

</head>
<body>
    
</body>
</html>