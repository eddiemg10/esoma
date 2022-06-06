@forelse($students as $student)
<tr class="border-b odd:bg-white even:bg-gray-50">
    <td class="px-6 py-4">{{$student->firstName}}</td>
    <td class="px-6 py-4"> {{$student->secondName}}</td>
    <td class="px-6 py-4">{{$student->email}}</td>
</tr>
@empty
@endforelse