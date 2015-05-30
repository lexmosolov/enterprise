<tr class="treegrid-{{$department['id']}} treegrid-parent-{{$department['parent_id']}}">
    <td><a href="{{ action('DepartmentsController@show', $department) }}">{{ $department['title'] }}</a></td>
</tr>
@if (count($department['childrenRecursive']) > 0)
    @foreach($department['childrenRecursive'] as $department)
        @include('departments.partials._department', $department)
    @endforeach
@endif