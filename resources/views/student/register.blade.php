

@extends('layouts.master')
@section('title', 'Student Register')

@section('content')
<div>
    <section class="register-form">

       <form action="{{route('students.store')}}" method="POST" enctype="multipart/form-data">
        @csrf

            <input type="text" name="name" value="{{ old('name') }}" placeholder="Student Name"/>
            @if($errors->has('name'))
                <span class="form-error">{{ $errors->first('name');}}</span>
            @endif
            <input type="email" name="email" value="{{ old('email') }}" placeholder="Student Email"/>
            @if($errors->has('email'))
                <span class="form-error">{{ $errors->first('email');}}</span>
            @endif
            <input type="text" name="nrc" value="{{ old('nrc') }}" placeholder="Student NRC"/>
            @if($errors->has('nrc'))
                <span class="form-error">{{ $errors->first('nrc');}}</span>
            @endif
            <input type="date" name="dob" value="{{ old('dob') }}" placeholder="Student Birthday"/>
            @if($errors->has('dob'))
                <span class="form-error">{{ $errors->first('dob');}}</span>
            @endif


            <p>Select Courses:
                @if($errors->has('courses'))
                    <span class="form-error">{{ $errors->first('courses');}}</span>
                @endif
            </p>
            <div class="course-wrapper">
                @foreach ($courses as $course)
                    <div>
                        <input type="checkbox" {{collect(old('courses'))->contains($course->id)?'checked':''}} value="{{$course->id}}" id="{{$course->id}}"  name="courses[]"
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
