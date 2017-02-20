<!DOCTYPE HTML>
<html lang="en-US">
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <ul>
            @foreach($tasks as $task)
            <li><a href="/tasks/{{$task->id}}">{{$task->title}}</a></li>
             <li>{{$task->content}}</li>
            @endforeach
        </ul>
    </body>
</html>