@extends('layouts.header')
@section('title', 'Student Page')
@section('content')
    <div class="flex flex-col mx-auto justify-center items-center my-5">
        <h3 class="text-center text-5xl py-3 mb-5">Course Registrations</h3>

        <div class="w-3/4 text-right">
            <a href="/student/create" class="text-white bg-green-400 rounded text-center px-5 py-2  text-md"> Register
                Student</a>
        </div>
        <table class="table-auto w-4/5 mt-4">
            <thead class=" border-2 border-blue-400 mt-3 bg-blue-400 ">
                <tr>
                    <th class="p-2 text-white">S/N</th>
                    <th class="p-2 text-white">Name</th>
                    <th class="p-2 text-white">Email</th>
                    <th class="p-2 text-white">Phone</th>
                    <th class="p-2 text-white">Address</th>
                    <th class="p-2 text-white"></th>
                    <th class="p-2 text-white"></th>
                </tr>
            </thead>
            <tbody class="justify-center">
                @for ($i = 1; $i <= count($students);)
                    @foreach ($students as $student)
                        <tr class="bg-blue-200 mb-1">
                            <td class="text-center py-3">{{ $i++}} </td>
                            <td class="text-center py-3">{{ $student->name }}</td>
                            <td class="text-center py-3">{{ $student->email }}</td>
                            <td class="text-center py-3">{{ $student->phone }}</td>
                            <td class="text-center py-3">{{ $student->address }}</td>
                            <td class="text-center py-3"><a href="/student/{{ $student->id }}"
                                    class="cursor-pointer text-md italic text-green-600 uppercase">view courses</a></td>
                            <td class="text-center py-3">
                                <div class="flex flex-col space-y-2">
                                    <a href="/student/{{ $student->id }}/edit" class="text-blue-500 text-md m-auto">Edit
                                        Student &rarr;</a>
                                    <form action="/student/{{ $student->id }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="text-red-500 text-md m-auto">Delete Student
                                            &rarr;</button>
                                    </form>
                                </div>
                            </td>

                        </tr>
                    @endforeach
                @endfor
            </tbody>

        </table>

    </div>
@endsection
