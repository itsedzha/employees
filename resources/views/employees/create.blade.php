@extends('layouts.app')

@section('content')
    <h1>Create a New Employee</h1>

    <form action="{{ route('employees.store') }}" method="POST">
        @csrf
        <label for="name">Name:</label>
        <input type="text" name="name" required>
        
        <label for="bio">Bio:</label>
        <textarea name="bio" required></textarea>

        <label for="employee_id">Employee ID:</label>
        <input type="number" name="employee_id" required>

        <button type="submit">Create Employee</button>
    </form>
@endsection
