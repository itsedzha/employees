@extends('layouts.app')

@section('content')
    <h1>Edit Employee</h1>

    <form action="{{ route('employees.update', $employee->id) }}" method="POST">
        @csrf
        @method('PUT')

        <label for="name">Name:</label>
        <input type="text" name="name" value="{{ $employee->name }}" required>

        <label for="bio">Bio:</label>
        <textarea name="bio" required>{{ $employee->bio }}</textarea>

        <label for="employee_id">Employee ID:</label>
        <input type="number" name="employee_id" value="{{ $employee->employee_id }}" required>

        <button type="submit">Update Employee</button>
    </form>
@endsection
