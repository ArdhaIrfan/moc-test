<style>
    .main {
        display: flex;
        flex-direction: column;
        align-items: center;
    }
</style>
<div class="main">
<h1>Dashboard</h1>
<br>

<table border="1">
    <tr>
        <th>Nama</th>
        <th>Email</th>
        <th>No. Telepon</th>
        <th>Provinsi</th>
        <th>Kota</th>
        <th>Kecamatan</th>
        <th>Referal</th>
    </tr>
    <tr>
        <td>Halo</td>
        <td>halooo@gmail.com</td>
        <td>628479246830</td>
        <td>Jambi</td>
        <td>Anyar</td>
        <td>Kebon Jeruk</td>
        <td>91486324</td>
    </tr>
    @foreach($accounts as $a)
    <tr>
        <td>{{$a->nama}}</td>
        <td>{{$a->email}}</td>
        <td>{{$a->no_telepon}}</td>
        <td>{{$a->provinsi}}</td>
        <td>{{$a->kota}}</td>
        <td>{{$a->kecamatan}}</td>
        <td>{{$a->referal}}</td>
    </tr>
    @endforeach
</table>

<br>
<a href="/">Register di sini</a>
</div>
