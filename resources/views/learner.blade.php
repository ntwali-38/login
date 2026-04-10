<div>
             <form action="/students" method="POST">
                @csrf
        <input name="last_name" class="form-control" value="{{$student->last_name}}">
        <input name="first_name" class="form-control" value="{{$student->first_name}}">
        <input type="date" name="dob" class="form-control" value="{{$student->dob}}">
       <button class="btn btn-primary">submit</button>
</div>
