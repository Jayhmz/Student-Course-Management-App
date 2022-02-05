@extends('layouts.header')
@section('content')
<div class="flex flex-col mx-auto justify-center items-center my-5">
  <h3 class="text-center text-3xl py-3 mb-5">Edit Courses</h3>

  <form action="/course/{{ $course->id }}" method="POST" class="mt-5 bg-white p-3 flex flex-col w-96">
    @csrf
    @method('PUT')
    {{-- <input name="name" type="text" class=" my-3 py-1 px-3 bg-gray-100 text-gray-500 border-rounded-md" value="{{$course->name}}"> --}}
    <input name="title" type="text" class="my-3 py-1 px-3 bg-gray-100 text-gray-500 border-rounded-md" value="{{$course->course_title}}">
    <input name="code" type="text" class="my-3 py-1 px-3 bg-gray-100 text-gray-500 border-rounded-md" value="{{$course->course_code}}">
    <input type="submit" value="submit" class="uppercase bg-blue-400 py-1 px-1 text-white cursor-pointer">
  </form>

</div>
@endsection