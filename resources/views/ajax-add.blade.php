<div class="container">
    <form action="{{route("add-student")}}" method="POST">
        <input type="hidden" class="" id="token" name="_token" value="{{csrf_token()}}">
        @method("POST")
        <div class="form-group">
            <label for="">Student Name</label>
            <input type="text" name="student_name" required id="name1" class="form-control @error("student_name") is-invalid  @enderror" placeholder="Enter Name" aria-describedby="helpId">
            @error("student_name")
            <span class="error invalid-feedback">{{$message}}</span>
            @enderror
        </div>
        <div class="form-group">
            <label for="">Student Email</label>
            <input type="email" name="student_email" id="email1" required class="form-control @error("student_email") is-invalid  @enderror" placeholder="Enter Email" aria-describedby="helpId">
            @error("student_email")
            <span class="error invalid-feedback">{{$message}}</span>
            @enderror
        </div>
        <div class="form-group">
            <label for="">Student Phonenumber1</label>
            <input type="number" name="student_telephone" required id="phone1" class="form-control @error("student_telephone") is-invalid  @enderror" placeholder="Enter Name" aria-describedby="helpId">
            @error("student_telephone")
            <span class="error invalid-feedback">{{$message}}</span>
            @enderror
        </div>
        <div class="form-group">
            <label for="">Feedback</label>
            <textarea class="form-control @error("Feedback") is-invalid  @enderror" required name="Feedback" id="f1" rows="3"></textarea>
            @error("Feedback")
            <span class="error invalid-feedback">{{$message}}</span>
            @enderror
        </div>
        <button type="button" onclick="addGetSt();" class="btn btn-primary">Submit</button>
{{--        <button type="submit"  class="btn btn-primary">Submit1</button>--}}
    </form>
</div>
