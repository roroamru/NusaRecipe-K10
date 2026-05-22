@extends('layouts.app')

@section('content')

<div class="container mt-4">

    <!-- HEADER -->
    <div class="d-flex justify-content-between align-items-center mb-5">

        <h1 style="
            font-weight:bold;
            font-size:55px;
            font-family:serif;
        ">
            Kelola Resep
        </h1>

        <h2 style="
            color:orange;
            font-weight:bold;
            font-style:italic;
        ">
            Dashboard Admin
        </h2>

    </div>

    <!-- TABLE -->
    <div class="table-responsive">

        <table class="table text-center align-middle"
            style="
                border:2px solid #f3dca0;
                background:#fff;
            ">

            <thead style="background:#f9e7bb;">

                <tr>
                    <th>NO</th>
                    <th>Nama Resep</th>
                    <th>Kategori</th>
                    <th>Sub Kategori</th>
                    <th>Aksi</th>
                </tr>

            </thead>

            <tbody>

                @foreach($reseps as $index => $resep)

                <tr>

                    <td>{{ $index + 1 }}</td>

                    <td>{{ $resep['nama'] }}</td>

                    <td>
                        {{ ucfirst($resep['kategori']) }}
                    </td>

                    <td>
                        {{ $resep['subkategori'] ?? '-' }}
                    </td>

                    <td>

                        <a href="/admin/edit/{{ $index }}"
                            style="
                                color:red;
                                text-decoration:none;
                                font-weight:500;
                            ">
                            EDIT
                        </a>

                        |

                        <a href="#"
                            style="
                                color:blue;
                                text-decoration:none;
                                font-weight:500;
                            ">
                            HAPUS
                        </a>

                    </td>

                </tr>

                @endforeach

            </tbody>

        </table>

    </div>

    <!-- BUTTON -->
    <div class="text-end mt-4">

        <a href="/admin/tambah"
            class="btn"
            style="
                background:#f4e08a;
                border-radius:40px;
                padding:18px 60px;
                font-size:22px;
                color:#2ecc71;
                font-weight:bold;
            ">
            + Menu Baru
        </a>

    </div>

</div>

@endsection