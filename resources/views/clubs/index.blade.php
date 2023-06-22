@extends('layout')

@section('content')
    <h1>Club Standings</h1>

    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Club</th>
                <th>Matches</th>
                <th>Wins</th>
                <th>Draws</th>
                <th>Losses</th>
                <th>Goals For</th>
                <th>Goals Against</th>
                <th>Points</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($clubs as $key => $club)
                <tr>
                    <td>{{ $key + 1 }}</td>
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
