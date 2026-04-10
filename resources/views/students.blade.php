<x-layout>
<div>
    
    <table>
        <thead>
            <tr>
                <th>Lastname</th>
                <th>Firstname</th>
                <th>Date of Birth</th>
                <th>Actions</th>
            </tr>
        </thead>

        <tbody>
    @foreach($students as $student)
        <tr>
            <td>{{ $student->last_name }}</td>
            <td>{{ $student->first_name }}</td>
            <td>{{ $student->dob }}</td>

            <td>
                <a href="/students/{{ $student->id }}">Update</a>
            </td>

            <td>
                <form action="/students/{{ $student->id }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
                </form>
            </td>
        </tr>
    @endforeach
</tbody>
    </table>
</div>      
 <form action="students" method="POST">
        <input name="last_name">
        <input name="first_name">
        <input type="date" name="dob">
       <button>submit</button>
       </form>

</div>
</x-layout>