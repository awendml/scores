<!-- klasemen/index.blade.php -->

<table>
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
    @foreach ($klasemen as $key => $klub)
        <tr>
            <td>{{ $key + 1 }}</td>
            <td>{{ $klub->nama }}</td>
            <td>{{ $klub->menang + $klub->seri + $klub->kalah }}</td>
            <td>{{ $klub->menang }}</td>
            <td>{{ $klub->seri }}</td>
            <td>{{ $klub->kalah }}</td>
            <td>{{ $klub->goal_menang }}</td>
            <td>{{ $klub->goal_kalah }}</td>
            <td>{{ $klub->point }}</td>
        </tr>
    @endforeach
</table>
