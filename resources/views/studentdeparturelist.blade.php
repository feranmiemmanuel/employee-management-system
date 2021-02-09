
<div class="card mb-3">
    <img src="https://cdn.pixabay.com/photo/2015/05/19/14/55/educational-773651_960_720.jpg" class="card-img-top" alt="...">
    <div class="card-body">
        <h5 class="card-title">List Of Workers</h5>
        <p class="card-text">You can find here all the information about workers in the system</p>

        <table class="table">
            <thead class="thead-light">
            <tr>
                <th scope="col">Tag</th>
                <th scope="col">First Name</th>
                <th scope="col">Second Name</th>
                <th scope="col">Time Of Entry</th>
                <th scope="col">Time Of Departure</th>
                <th scope="col">Department</th>
                <th scope="col">Operations</th>

            </tr>
            </thead>
            <tbody>
            @foreach($students as $student)
                <tr>
                    <td>{{ $student->cne }}</td>
                    <td>{{ $student->firstName }}</td>
                    <td>{{ $student->secondName }}</td>
                    <td>{{ $student->created_at }}</td>
                    <td>{{ $student->updated_at }}</td>
                    <td>{{ $student->speciality }}</td>
                    <td>

                        <a href="{{ url('/edit/'.$student->id) }}" class="btn btn-sm btn-warning">Edit</a>
                        <br>
                        <a href="{{ url('/delete/'.$student->id) }}" class="btn btn-sm btn-danger">Delete</a>

                    </td>


                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>






