@extends('base')
@section('title', 'Student Lists')

<table class="table">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Age</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($students as $key => $data)
        <tr>
            <th scope="row">{{ $key + 1 }}</th>
            <td>{{ $data->name }}</td>
            <td>{{ $data->age }}</td>
        </tr>
        @endforeach
    </tbody>
</table>