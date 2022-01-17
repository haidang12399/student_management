<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Students Management System</title>
</head>
<body>
@include("navbar")
@if($layout == 'index')
    <div class="container">
        <div class="row">
            <section class="col-md-7">
                @include("studentslist")
            </section>
            <section class="col-md-5"></section>
        </div>
    </div>
@elseif($layout == 'create')
    <div class="container">
        <div class="row">
            <section class="col">
                @include("studentslist")
            </section>
            <section class="col">
                <form action="{{url('/store')}}" method="post">
                    @csrf
                    <div class="mb-3">
                        <label>MSV</label>
                        <input name="MSV" type="text" class="form-control" placeholder="Nhập MSV">
                    </div>
                    <div class="mb-3">
                        <label>Name</label>
                        <input name="name" type="text" class="form-control" placeholder="Nhập họ tên">
                    </div>
                    <div class="mb-3">
                        <label>DoB</label>
                        <input name="dob" type="date" class="form-control" placeholder="Nhập ngày tháng năm sinh">
                    </div>
                    <div class="mb-3">
                        <label>Sex</label>
                        <input name="sex" type="text" class="form-control" placeholder="Nhập giới tính">
                    </div>
                    <div class="mb-3">
                        <label>Speciality</label>
                        <input name="speciality" type="text" class="form-control" placeholder="Nhập chuyên ngành">
                    </div>
                    <input type="submit" class="info" value="Save">
                    <input type="reset" class="warning" value="Reset">
                </form>
            </section>
        </div>
    </div>
@elseif($layout == 'show')
    <div class="container">
        <div class="row">
            <section class="col">
                @include("studentslist")
            </section>
            <section class="col"></section>
        </div>
    </div>
@elseif($layout == 'edit')
    <div class="container">
        <div class="row">
            <section class="col">
                @include("studentslist")
            </section>
            <section class="col">
                <form action="{{url('/update/'.$student->id)}}" method="post">
                    @csrf
                    <div class="mb-3">
                        <label>MSV</label>
                        <input value="{{$student->MSV}}" name="MSV" type="text" class="form-control" placeholder="Nhập MSV">
                    </div>
                    <div class="mb-3">
                        <label>Name</label>
                        <input value="{{$student->name}}" name="name" type="text" class="form-control" placeholder="Nhập họ tên">
                    </div>
                    <div class="mb-3">
                        <label>DoB</label>
                        <input value="{{$student->dob}}" name="dob" type="date" class="form-control" placeholder="Nhập ngày tháng năm sinh">
                    </div>
                    <div class="mb-3">
                        <label>Sex</label>
                        <input value="{{$student->sex}}" name="sex" type="text" class="form-control" placeholder="Nhập giới tính">
                    </div>
                    <div class="mb-3">
                        <label>Speciality</label>
                        <input value="{{$student->speciality}}" name="speciality" type="text" class="form-control" placeholder="Nhập chuyên ngành">
                    </div>
                    <input type="submit" class="info" value="Update">
                    <input type="reset" class="warning" value="Reset">
                </form>
            </section>
        </div>
    </div>
@endif



    <!-- Optional JavaScript; choose one of the two! -->

<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

<!-- Option 2: Separate Popper and Bootstrap JS -->
<!--
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
-->
</body>
</html>
