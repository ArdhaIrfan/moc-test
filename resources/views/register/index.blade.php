<style>
    form {
        display: flex;
        max-width: 400px;
        flex-direction: column;
        margin: auto;
    }
</style>

<h1 style="text-align: center;">Registrasi</h1>
<br>

<form action="/dashboard/store" method="POST">
    @csrf
    <label for="nama">Nama</label>
    <input type="text" placeholder="Nama" name="nama">
    <br>
    <label for="email">Email</label>
    <input type="text" placeholder="Email" name="email">
    <br>
    <label for="no_telepon">No. Telepon</label>
    <input type="text" placeholder="No. Telepon" name="no_telepon">
    <br>
    <label for="provinsi">Provinsi</label>
    <input type="text" placeholder="Provinsi" name="provinsi">
    <br>
    <label for="kota">Kota</label>
    <input type="text" placeholder="Kota" name="kota">
    <br>
    <label for="kecamatan">Kecamatan</label>
    <input type="text" placeholder="Kecamatan" name="kecamatan">
    <br>
    <label for="referal">Referal</label>
    <input type="text" placeholder="Referal" name="referal">

    <br>
    <input type="submit" name="submit" value="Daftar" style="cursor: pointer; height: 28px;">
</form>
