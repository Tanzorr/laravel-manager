<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create Product</title>
</head>
<body>
    <h1>Create Product</h1>
    <div>
        @if($errors->any())
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        @endif
    </div>
    <form action="{{route('task.store')}}" method="post">
        @csrf
        @method('post')
        <div>
            <label>Title</label>
            <input type="text" name="title" placeholder="Enter task title"/>
        </div>
        <div>
            <label>Description</label>
            <textarea name="description"></textarea>
        </div>
        <div>
            <input type="submit" value="save task">
        </div>
    </form>
</body>
</html>
