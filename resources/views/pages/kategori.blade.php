@extends('layouts.app')

@section('content')

<div class="container mt-4">

    <!-- HEADER ORANGE -->
    <div style="
        background:#f58b00;
        border-radius:30px;
        padding:25px 40px;
        margin-bottom:30px;
    ">
        <h1 style="
            color:black;
            font-weight:bold;
            font-size:50px;
            margin:0;
            font-family:cursive;
        ">
            Kategori > {{ ucfirst($jenis) }}
        </h1>
    </div>

    <!-- SUB KATEGORI -->
    @if($jenis == 'makanan')

    <h4 class="mb-4">Kategori Resep</h4>

    <div class="d-flex gap-3 mb-5 flex-wrap">

        <button class="kategori-btn"
            onclick="filterSub('kuah')"
            style="
                border:3px solid black;
                border-radius:40px;
                background:#f58b00;
                padding:10px 30px;
                font-size:22px;
                font-weight:bold;
            ">
            Kuah →
        </button>

        <button class="kategori-btn"
            onclick="filterSub('tidak-berkuah')"
            style="
                border:3px solid black;
                border-radius:40px;
                background:#f58b00;
                padding:10px 30px;
                font-size:22px;
                font-weight:bold;
            ">
            Tidak Berkuah →
        </button>

    </div>

    @endif

    <!-- REKOMENDASI -->
    <h4 class="mb-4">Rekomendasi Resep</h4>

    <div class="row">

        @foreach($reseps as $index => $resep)

        @if(strtolower($resep['kategori']) == strtolower($jenis))

        <div class="col-md-4 mb-4 resep-item"
            data-sub="{{ $resep['subkategori'] ?? '' }}">

            <div class="card-resep position-relative"
                style="
                    border:2px solid #f58b00;
                    padding:18px;
                    height:210px;
                    display:flex;
                    align-items:center;
                ">

                <!-- LINK DETAIL -->
                <a href="{{ route('detail', $index) }}"
                    style="
                        display:flex;
                        align-items:center;
                        text-decoration:none;
                        width:100%;
                    ">

                    <!-- GAMBAR -->
                    <img src="{{ asset('image/' . $resep['gambar']) }}"
                        style="
                            width:160px;
                            height:150px;
                            object-fit:cover;
                        ">

                    <!-- JUDUL -->
                    <div style="
                        margin-left:25px;
                        flex:1;
                    ">
                        <h4 style="
                            color:#d97800;
                            font-weight:bold;
                            font-style:italic;
                        ">
                            {{ $resep['nama'] }}
                        </h4>
                    </div>

                </a>

                <!-- BOOKMARK -->
                <i class="bi bi-bookmark bookmark position-absolute"
                    style="
                        right:25px;
                        bottom:25px;
                        font-size:35px;
                        color:#f58b00;
                        cursor:pointer;
                    "
                    data-nama="{{ $resep['nama'] }}"
                    onclick="toggleFavorite(event, '{{ $resep['nama'] }}', this)">
                </i>

            </div>

        </div>

        @endif
        @endforeach

    </div>

</div>

<!-- FILTER SUB -->
<script>
function filterSub(sub) {

    let items = document.querySelectorAll(".resep-item");

    items.forEach(item => {

        let kategori = item.getAttribute("data-sub");

        if (kategori === sub) {
            item.style.display = "block";
        } else {
            item.style.display = "none";
        }

    });
}
</script>

@endsection