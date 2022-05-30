@forelse($students as $student)
<tr>
    <td>{{$student->firstName}}  {{$student->secondName}}</td>
    <td>{{$student->email}}</td>
</tr>
@empty
@endforelse