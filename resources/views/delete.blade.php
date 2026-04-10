<div>
   @foreach($students as $student)
       <p>{{$student->first_name}}</p>
       <p>{{$student->last_name}}</p>
       <p>{{$student->dob}}</p>
       <form action="/students/{{$student->id}}" method="POST">
           @csrf
           @method('DELETE')
           <button type="submit">Delete</button>
       </form>
   @endforeach
</div>