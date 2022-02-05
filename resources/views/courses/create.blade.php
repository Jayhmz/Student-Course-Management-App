@extends('layouts.header')
@section('content')
    <div class="m-auto w-4/8 py-24">
        <h3 class="text-center text-3xl mb-5">Create Courses</h3>

        <div class=" flex justify-center pt-20">
            <form action="/course" method="POST">
                @csrf
                <div class="flex flex-col">
                    <input name="title" type="text" class="shadow-5xl p-2 mb-3 placeholder-gray-500"
                        placeholder="Enter Course Title...">

                    <input name="code" type="text" class="shadow-5xl p-2 mb-3 placeholder-gray-500"
                        placeholder="Enter Course Code...">

                    <input type="submit" value="submit" class="uppercase font-bold text-white shadow-5xl bg-blue-700 p-3">
                </div>
            </form>
        </div>

    </div>
@endsection
