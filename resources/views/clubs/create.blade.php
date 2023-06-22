<!-- clubs/create.blade.php -->

<h1>Input Data Klub</h1>

<form action="{{ route('clubs.store') }}" method="POST">
    @csrf

    <div>
        <label for="nama">Nama Klub:</label>
        <input type="text" name="name" id="name" required>
    </div>

    <div>
        <label for="kota">Kota Klub:</label>
        <input type="text" name="city" id="city" required>
    </div>

    <button type="submit">SAVE</button>
</form>
