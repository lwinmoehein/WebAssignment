@extends('layouts.master')

@section('title', 'Student List')

@section('content')

        <table>
            <th>Name</th>
            <th>Date Of Birth</th>
            <th>Email</th>
            <th>NRC</th>
            <th>Courses</th>

            @foreach ($students as $student)
                <tr>
                    <td>{{$student->name}}</td>
                    <td>{{$student->dob}}</td>
                    <td>{{$student->email}}</td>
                    <td>{{$student->nrc}}</td>
                    <td>
                        @foreach ($student->courses as $course)
                            <span>{{$course->name}} </span>
                            @if(!$loop->last)
                              <span>,</span>
                            @endif
                        @endforeach
                    </td>
                </tr>

            @endforeach
            @if($students->isEmpty())
            <tr>
               <td colspan="5" class="no-data-wrapper">
                No Students Found.
               </td>
            </tr>
        @endif
        </table>


@stop
