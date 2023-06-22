@extends('layout')

@section('content')
    <h2>Tampilan Klasemen</h2>

    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Klub</th>
                <th>Ma</th>
                <th>Me</th>
                <th>S</th>
                <th>K</th>
                <th>GM</th>
                <th>GK</th>
                <th>Point</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($clubs as $index => $club)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $club->name }}</td>
                    <td>{{ $club->matches }}</td>
                    <td>{{ $club->wins }}</td>
                    <td>{{ $club->draws }}</td>
                    <td>{{ $club->losses }}</td>
                    <td>{{ $club->goals_for }}</td>
                    <td>{{ $club->goals_against }}</td>
                    <td>{{ $club->points }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
