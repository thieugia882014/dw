<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset("bootstrap/css/bootstrap.css")}}">
    <title>Trang chu</title>
</head>
<body>
        <div class="jumbotron jumbotron-fluid">
            <div class="container">
                <h1 class="display-3">Feedback Students</h1>
                <p class="lead">Feedback Manager</p>
                <hr class="my-2">
                <p>Choose function</p>
                <p class="lead">
                    <a class="btn btn-primary btn-lg"  onclick="addStudent();" role="button">Add Student</a>
                    <a class="btn btn-primary btn-lg" id="showinfo" onclick="showInfo();"  role="button">Show Student</a>
                </p>
            </div>
        </div>
        <div class="col-md-12 body">

        </div>

<script src="{{asset("bootstrap/jquery.js")}}"></script>
<script src="{{asset("bootstrap/js/bootstrap.js")}}"></script>
        <script>
            function showInfo() {
                $.ajax({
                    url:"{{url("/home")}}",
                }).done(function (response) {
                    $(".body").empty();
                    $(".body").html(response);
                })
            }
            function addStudent() {
                $.ajax({
                    url:"{{url("/add")}}",
                }).done(function (response) {
                    $(".body").empty();
                    $(".body").html(response);
                })
            }
            function addGetSt() {
                var _name = $("#name1").val();
                var _email = $("#email1").val();
                var _phone = $("#phone1").val();
                var _f1 = $("#f1").val();
                var _token = $("#token").val();
                if (_name == ""){
                    alert("Name not be blank");
                    return false;
                }
                if (_email == ""){
                    alert("Email not be blank");
                    return false;
                }
                if (_phone == ""){
                    alert("Phone not be blank");
                    return false;
                }
                if (_f1 == ""){
                    alert("Feedback not be blank");
                    return false;
                }

                $.ajax({
                    url:"{{url("/add-info")}}",
                    method:"POST",
                    data:{
                        _token:_token,
                        _method:"POST",
                        student_name:_name,
                        student_email:_email,
                        student_telephone:_phone,
                        Feedback:_f1,
                    },success: function () {
                        alert("Thêm Thành công...")
                    }

                })

            }
        </script>
</body>
</html>
