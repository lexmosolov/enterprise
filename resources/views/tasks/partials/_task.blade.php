<tr class="treegrid-{{$task['id']}} treegrid-parent-{{$task['parent_id']}}">
    <td><a href="{{ action('TasksController@show', $task) }}">{{ $task['name'] }}</a></td>
    <td><input type="checkbox" {{ $task['completed'] ? 'checked' : 'unchecked' }} disabled></td>
</tr>
{{--@if (count($task['childrenRecursive']) > 0)--}}
{{--@foreach($task['childrenRecursive'] as $task)--}}
{{--@include('tasks.partials._task', $task)--}}
{{--@endforeach--}}
{{--@endif--}}