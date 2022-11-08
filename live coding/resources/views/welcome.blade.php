@foreach ($results as $task)
<h1>{{$task->name}}</h1>
<h1>{{$task->omar->name}}</h1>

@endforeach


@foreach ($results as $task)
    <h1>{{$task->name}}</h1>
        @foreach ($task->omarMany as $item)
            <h1>{{$item->name}}</h1>
        @endforeach

@endforeach