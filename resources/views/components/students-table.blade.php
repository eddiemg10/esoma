<table class="table-auto rounded-md">
    <thead class="text-white bg-gray-700">
        <th class="px-6 py-3">First Name</th>
        <th class="px-6 py-3">Last Name</th>
        <th class="px-6 py-3">email</th>
        <th class="px-6 py-3">Joined</th>
    </thead>

    <tbody>

        @foreach($students as $student)
        <tr class=" border-b odd:bg-white even:bg-gray-50">
            <td class="px-6 py-4">{{$student->firstName}}</td>
            <td class="px-6 py-4">{{$student->secondName}}</td>
            <td class="px-6 py-4">{{$student->email}}</td>
            <td class="px-6 py-4">{{\Carbon\Carbon::parse($student->joined_on)->format('d M Y')}}</td>

        </tr>
        @endforeach
    </tbody>
</table>