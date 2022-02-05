@extends('layouts.header')
@section('title' , 'Homepage')
@section('content')
<div class="flex flex-col mx-auto justify-center items-center my-5">
  <h3 class="text-center text-3xl py-3 mb-5">List of Courses</h3>
 
  <div class="w-2/4 text-right ">
    <a href="course/create" class="text-white  text-md bg-green-400 rounded px-2 py-2">New Course</a>
  </div>

  <table class="table-auto w-2/4 mx-auto mt-4">
    <thead class="text-center bg-blue-400">
      <tr>
        <th class="py-3">S/N</th>
        <th class="py-3">Course Title</th>
        <th class="py-3">Course Code</th>
        <th class="py-3"></th>
        <th class="py-3"></th>
      </tr>
    </thead>

    <tbody class="text-center bg-blue-200">
    <tr>
      @for ($i = 1; $i <= count($courses); )
    @foreach ($courses as $course)
      <td class="py-2">{{$i++}}</td>
      
      <td class="py-2">{{$course->course_title}}</td>
      <td class="py-2">{{$course->course_code}}</td>
      <td class="py-2"> <a href="/course/{{ $course->id }}/edit" class="text-blue-500 text-md m-auto">Edit
        course &rarr;</a></td>
      
      <td class="py-2">
        <form action="/course/{{$course->id}}" class="text-center">
          @csrf
          @method('DELETE')
          <input type="submit" value="delete" class="uppercase text-red-500 mt-2">
        </form>
      </td>
    </tr>
    @endforeach
    @endfor
    </tbody>
  </table>


</div>
@endsection
