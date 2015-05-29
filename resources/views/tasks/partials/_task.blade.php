<li class="list-group-item"><input type="checkbox" {{ $task->completed ? 'checked' : 'unchecked' }} disabled>
    <a href="{{ action('TasksController@show', $task) }}">{{ $task->name }}</a></li>
@if (count($task['childrenRecursive']) > 0)
    <ul>
        @foreach($task['childrenRecursive'] as $task)
            @include('tasks.partials._task', $task)
        @endforeach
    </ul>
@endif