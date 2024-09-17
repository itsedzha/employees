@extends('layouts.app')

@section('content')
    <h1>{{ $employee->name }}</h1>
    <p>{{ $employee->bio }}</p>
    <p>Employee ID: {{ $employee->employee_id }}</p>
@endsection
