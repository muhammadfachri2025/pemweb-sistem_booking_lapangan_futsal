@extends('layout')

@section('content')

<div class="card shadow">
    <div class="card-header bg-primary text-white">
        <h5>Data User</h5>
    </div>

    <div class="card-body">

        <form method="POST" action="/user" class="row g-2 mb-3">
            @csrf

            <div class="col">
                <input class="form-control" name="id_user" placeholder="ID User">
            </div>

            <div class="col">
                <input class="form-control" name="nama" placeholder="Nama">
            </div>

            <div class="col">
                <input class="form-control" name="email" placeholder="Email">
            </div>

            <div class="col">
                <input class="form-control" name="password" placeholder="Password">
            </div>

            <div class="col">
                <input class="form-control" name="role" placeholder="Role">
            </div>

            <div class="col-auto">
                <button class="btn btn-success">Tambah</button>
            </div>
        </form>

        <table class="table table-bordered table-striped">
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Aksi</th>
            </tr>

            @foreach($data as $u)
            <tr>
                <td>{{ $u->id_user }}</td>
                <td>{{ $u->nama }}</td>
                <td>{{ $u->email }}</td>
                <td>
                    <form method="POST" action="/user/{{ $u->id_user }}">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger btn-sm">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach

        </table>

    </div>
</div>

@endsection
