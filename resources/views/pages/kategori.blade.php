@extends('layouts.app')

@section('content')

<a href="/" class="btn btn-warning mb-4 rounded-pill px-4 shadow-sm">
    ← kembali
</a>

<div class="container py-2">

    <!-- HEADER -->
    <div style="
        background:#ead28f;
        border-radius:25px;
        padding:20px 35px;
        margin-bottom:35px;
        box-shadow:0 4px 10px rgba(0,0,0,.08);
    ">

        <h1 style="
            color:#5c3b00;
            font-weight:600;
            font-size:32px;
            margin:0;
        ">
            Kategori > {{ ucfirst($jenis) }}
        </h1>

    </div>


    <!-- SUB KATEGORI -->
    @if($jenis == 'makanan')

    <h5 class="fw-semibold mb-3">
        Kategori Resep
    </h5>

    <div class="d-flex gap-3 flex-wrap mb-5">

        <button class="sub-btn active"
            onclick="filterSub('all', this)">
            Semua
        </button>

        <button class="sub-btn"
            onclick="filterSub('kuah', this)">
            🍲 Kuah
        </button>

        <button class="sub-btn"
            onclick="filterSub('tidak berkuah', this)">
            🍛 Tidak Berkuah
        </button>

    </div>

    @elseif($jenis == 'minuman')

    <h5 class="fw-semibold mb-3">
        Kategori Minuman
    </h5>

    <div class="d-flex gap-3 flex-wrap mb-5">

        <button class="sub-btn active"
            onclick="filterSub('all', this)">
            Semua
        </button>

        <button class="sub-btn"
            onclick="filterSub('dingin', this)">
            🧊 Dingin
        </button>

        <button class="sub-btn"
            onclick="filterSub('hangat', this)">
            ☕ Hangat
        </button>

    </div>

    @endif


    <!-- REKOMENDASI -->
    <h5 class="fw-semibold mb-4">
        Rekomendasi Resep
    </h5>

    <div class="row g-4">

        @foreach($reseps as $resep)

        <div class="col-12 col-md-6 col-lg-4 resep-item"
            data-sub="all">

            <div class="card-resep position-relative h-100">

                <a href="/detail/{{ $resep->id_resep }}"
                    class="text-decoration-none text-dark d-flex align-items-center gap-3 h-100">

                    <img src="{{ asset('image/' . $resep->gambar) }}"
                        class="gambar-resep">

                    <div class="flex-grow-1">

                        <div class="judul-resep">
                            {{ $resep->nama_resep }}
                        </div>

                    </div>

                </a>

                <i class="bi bi-bookmark bookmark-icon"
                    data-nama="{{ $resep->nama_resep }}"
                    onclick="toggleFavorite(event, '{{ $resep->nama_resep }}', this)">
                </i>

            </div>

        </div>

        @endif
        @endforeach

    </div>

</div>


<style>

/* BUTTON SUB */
.sub-btn{
    background:#f7b047;
    border:2px solid #2d2d2d;
    border-radius:40px;
    padding:12px 28px;
    font-size:18px;
    font-weight:600;
    transition:all .25s ease;
    box-shadow:0 3px 8px rgba(0,0,0,.12);
}

.sub-btn:hover{
    transform:translateY(-6px);
    background:#ffbb55;
    box-shadow:0 10px 20px rgba(0,0,0,.15);
}

.sub-btn.active{
    background:#2d2d2d;
    color:white;
}

/* CARD RESEP */
.card-resep{
    border:2px solid #f2c06b;
    border-radius:22px;
    background:#fffaf1;
    padding:18px;
    min-height:180px;
    transition:.3s ease;
    box-shadow:0 4px 10px rgba(0,0,0,.08);
}

.card-resep:hover{
    transform:translateY(-7px);
    box-shadow:0 10px 22px rgba(0,0,0,.12);
}

/* IMAGE */
.gambar-resep{
    width:110px;
    height:110px;
    object-fit:cover;
    border-radius:16px;
    flex-shrink:0;
}

/* TITLE */
.judul-resep{
    color:#d98900;
    font-size:28px;
    font-weight:700;
    line-height:1.4;
}

/* SUB CATEGORY BADGE */
.badge{
    background:#ffe4b5;
    color:#7a4d00;
    font-weight:500;
}

/* BOOKMARK */
.bookmark-icon{
    position:absolute;
    right:20px;
    bottom:18px;
    font-size:30px;
    color:#f4a000;
    cursor:pointer;
}

/* RESPONSIVE */
@media(max-width:768px){

    .judul-resep{
        font-size:22px;
    }

    .gambar-resep{
        width:90px;
        height:90px;
    }

}

</style>


<script>

function filterSub(sub, element){

    let items =
        document.querySelectorAll(".resep-item");

    items.forEach(item => {

        let kategori =
            item.getAttribute("data-sub");

        if(sub === "all"){
            item.style.display = "block";
        }

        else if(kategori === sub){
            item.style.display = "block";
        }

        else{
            item.style.display = "none";
        }

    });

    document.querySelectorAll('.sub-btn')
        .forEach(btn => {
            btn.classList.remove('active');
        });

    element.classList.add('active');
}

</script>

@endsection