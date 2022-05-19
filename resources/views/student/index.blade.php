@extends('layouts.master')

@section('title', 'Student List')

@section('content')
    <ul>
    @foreach ($students as $student)
        <li>{{$student->name}}</li>
    @endforeach
    </ul>
@stop
