<nav class="navbar bg-light shadow-sm px-4">
    <div class="container d-flex justify-content-between align-items-center">

        <!-- LOGO -->
        <div class="d-flex align-items-center gap-2">
            <img src="{{ asset('image/logo.png') }}" style="width:45px;">
            <h4 class="fw-bold text-warning m-0">NusaRecipe</h4>
        </div>

        <!-- SEARCH (SUDAH DIPERBAIKI) -->
        <form action="/search" method="GET" class="position-relative">

            <input type="text"
                   name="q"
                   class="form-control"
                   placeholder="Cari resep masakan"
                   style="width:280px; border-radius:25px; padding-right:40px;">

            <button type="submit"
                    style="border:none; background:none; position:absolute; right:10px; top:50%; transform:translateY(-50%);">
                <i class="bi bi-search"></i>
            </button>

        </form>

        <!-- MENU -->
        <div class="d-flex align-items-center gap-4">

            <div class="text-center">
                <i class="bi bi-bookmark fs-4 text-warning"></i>
                <div style="font-size:12px;">Favorit</div>
            </div>

            <i class="bi bi-person-circle fs-3 text-warning"></i>

        </div>

    </div>
</nav>