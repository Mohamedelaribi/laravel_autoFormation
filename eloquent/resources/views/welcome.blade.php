@foreach ($tasks as $task)
    <h1>{{$task->nameBriefs}}</h1>
    @foreach ($task->task as $item)
        
    @endforeach
    <h1>{{$item->taskName}}</h1>
@endforeach