@extends('layouts.header')
@section('content')
    <div class="m-auto w-4/5 py-12">
        <h3 class="text-center text-5xl mb-5">Edit Student Courses</h3>

        <div class=" flex justify-center pt-14">
            <form action="/student" method="POST" class="w-2/4">
                @csrf
                <div class="flex flex-col">
                    <input name="name" type="text" class="shadow-5xl p-2 mb-3 placeholder-gray-500 placeholder-italic"
                        placeholder="Enter Name...">

                    <input name="email" type="text" class="shadow-5xl p-2 mb-3 placeholder-gray-500 placeholder-italic"
                        placeholder="Enter email...">

                    <input name="phone" type="text" class="shadow-5xl p-2 mb-3 placeholder-gray-500 placeholder-italic"
                        placeholder="Enter Phone...">

                    <input name="address" type="text" class="shadow-5xl p-2 mb-3 placeholder-gray-500 placeholder-italic"
                        placeholder="Enter Address...">
                    <select name="subjects[]" id="subjects" multiple class="w-full py-3 mb-4 space-y-2 rounded-md px-3">
                      @foreach ($courses as $course)
                      <option class="bg-blue-100 pl-3 py-1" value="{{$course->id}}">{{$course->course_code}} &nbsp; {{$course->course_title}} </option>
                      @endforeach 
                    </select>
                    <input type="submit" value="submit" class="uppercase font-bold text-white shadow-5xl bg-blue-700 p-3">
                </div>
            </form>
        </div>

    </div>
@endsection
