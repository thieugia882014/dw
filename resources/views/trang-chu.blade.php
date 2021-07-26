    <div class="container">
        <table class="table">
            <thead>
            <tr>
                <th>STT</th>
                <th>Student Name</th>
                <th>Student Email</th>
                <th>Student Phone Number</th>
                <th>Student Feedback</th>
            </tr>
            </thead>
            <tbody>
            @foreach($st as $value)
            <tr>
                <td scope="row">{{$loop->index+1}}</td>
                <td>{{$value->student_name}}</td>
                <td>{{$value->student_email}}</td>
                <td>{{$value->student_telephone}}</td>
                <td>{{$value->Feedback}}</td>
            </tr>
            @endforeach
            </tbody>
        </table>
    </div>
