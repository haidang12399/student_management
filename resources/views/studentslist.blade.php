<table class="table">
    <thead>
    <tr>
        <th scope="col">MSV</th>
        <th scope="col">Name</th>
        <th scope="col">DoB</th>
        <th scope="col">Sex</th>
        <th scope="col">Speciality</th>
        <th scope="col">Operations</th>
    </tr>
    </thead>
    <tbody>
    @foreach($students as $student)
    <tr>
        <td>{{$student->MSV}}</td>
        <td>{{$student->name}}</td>
        <td>{{$student->dob}}</td>
        <td>{{$student->sex}}</td>
        <td>{{$student->speciality}}</td>
        <td>

            <a href="{{url('/edit/'.$student->id)}}" class="btn btn-sm btn-info">Edit</a>
            <a href="{{url('/delete/'.$student->id)}}" class="btn btn-sm btn-danger">Delete</a>

        </td>
    <tr>
    @endforeach
    </tbody>
</table>
