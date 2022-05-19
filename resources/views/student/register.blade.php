

@extends('layouts.master')

@section('content')
<div>
    <section class="input-form">

       <form action="{{route('students.store')}}" method="POST" enctype="multipart/form-data">
        @csrf

            <input type="text" name="name" placeholder="Student Name"/>
            <input type="email" name="email" placeholder="Student Email"/>
            <input type="text" name="nrc" placeholder="Student NRC"/>
            <input type="date" name="dob" placeholder="Student Birthday"/>


            <p>Select Courses:</p>

            <div class="course-wrapper">
                @foreach ($courses as $course)
                    <div>
                        <input type="checkbox" value="{{$course->id}}" id="{{$course->id}}"  name="courses[]"
                            >
                        <label for="{{$course->id}}">{{$course->name}}</label>
                    </div>
                @endforeach
            </div>
          </div>
          <div class="store-btn-wrapper">
            <button class="btn add-btn" type="submit">Register Student</button>
          </div>
       </form>
    </section>
</div>
@endsection
