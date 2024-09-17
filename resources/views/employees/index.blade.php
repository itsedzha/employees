@extends('layouts.app')

@section('content')
    <h1>Employees</h1>
    <a href="{{ route('employees.create') }}">Create New Employee</a>

    @if (session('success'))
        <p>{{ session('success') }}</p>
    @endif

    @foreach ($employees as $employee)
        <h2>{{ $employee->name }}</h2>
        <p>{{ $employee->bio }}</p>
        <p>Employee ID: {{ $employee->employee_id }}</p>
        <a href="{{ route('employees.edit', $employee->id) }}">Edit</a>
        <form action="{{ route('employees.destroy', $employee->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit">Delete</button>
        </form>
    @endforeach
@endsection
