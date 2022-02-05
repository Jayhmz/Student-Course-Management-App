@extends('layouts.header')
@section('content')
<div class="mx-auto ">
  <h3 class="text-center text-2xl uppercase py-3 mb-5">Edit Student</h3>

  <div class="flex bg-white w-2/5 shadow-5xl mx-auto justify-center px-4">
    <form action="/student/{{$student->id}}" method="POST" class="w-full px-2">
      @csrf
      @method('PUT')
     <div class="block mt-2 ">
      <label for="name" class="px-2">Name</label>
      <input name="name" type="text" value="{{$student->name}}" class="m-2 p-2 rounded-md bg-gray-100 text-gray-500 w-4/5 ">
     </div>
     <div class="block mt-2 ">
      <label for="name" class="px-2">Email</label>
      <input name="email" type="text" value="{{$student->email}}" class="m-2 p-2 rounded-md bg-gray-100 text-gray-500 w-4/5 ">
     </div>
     <div class="block mt-2 ">
      <label for="name" class="px-2">Phone</label>
      <input name="phone" type="text" value="{{$student->phone}}" class="m-2 p-2 rounded-md bg-gray-100 text-gray-500 w-4/5 ">
     </div>
     <div class="block mt-2 ">
      <label for="name" class="px-2">Address</label>
      <input name="address" type="text" value="{{$student->address}}" class="m-2 p-2 rounded-md bg-gray-100 text-gray-500 w-4/5 ">
     </div>

     <div class="flex justify-center mt-2">
      <button type="submit" class="uppercase py-2 cursor-pointer text-white bg-green-500 text-center w-2/4 rounded">Submit</button>
     </div>
      
    </form>
  </div>
</div>
@endsection