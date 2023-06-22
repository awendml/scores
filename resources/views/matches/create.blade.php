<!-- matches/create.blade.php -->

<h1>Input Skor Pertandingan</h1>

<form action="{{ route('matches.store') }}" method="POST">
    @csrf

    <div>
        <p>Multiple:</p>
        <table id="matches-table">
            <thead>
                <tr>
                    <th>Klub 1</th>
                    <th>Klub 2</th>
                    <th>Skor 1</th>
                    <th>Skor 2</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        <select name="matches[0][club1]" required>
                            <option value="">Pilih Klub</option>
                            @foreach ($clubs as $club)
                                <option value="{{ $club->id }}">{{ $club->name }}</option>
                            @endforeach
                        </select>
                    </td>
                    <td>
                        <select name="matches[0][club2]" required>
                            <option value="">Pilih Klub</option>
                            @foreach ($clubs as $club)
                                <option value="{{ $club->id }}">{{ $club->name }}</option>
                            @endforeach
                        </select>
                    </td>
                    <td>
                        <input type="number" name="matches[0][score1]" required>
                    </td>
                    <td>
                        <input type="number" name="matches[0][score2]" required>
                    </td>
                </tr>
            </tbody>
        </table>
        <button type="button" id="add-match">Tambah Pertandingan</button>
    </div>

    <button type="submit">SAVE</button>
</form>

<script>
    var matchCount = 1;

    document.getElementById('add-match').addEventListener('click', function () {
        var tableBody = document.querySelector('#matches-table tbody');
        var newRow = document.createElement('tr');
        newRow.innerHTML = `
            <td>
                <select name="matches[${matchCount}][club1]" required>
                    <option value="">Pilih Klub</option>
                    @foreach ($clubs as $club)
                        <option value="{{ $club->id }}">{{ $club->name }}</option>
                    @endforeach
                </select>
            </td>
            <td>
                <select name="matches[${matchCount}][club2]" required>
                    <option value="">Pilih Klub</option>
                    @foreach ($clubs as $club)
                        <option value="{{ $club->id }}">{{ $club->name }}</option>
                    @endforeach
                </select>
            </td>
            <td>
                <input type="number" name="matches[${matchCount}][score1]" required>
            </td>
            <td>
                <input type="number" name="matches[${matchCount}][score2]" required>
            </td>
        `;
        tableBody.appendChild(newRow);
        matchCount++;
    });
</script>
