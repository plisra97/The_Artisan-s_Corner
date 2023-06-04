<div class="container-fluid bgCategorie ">
    <div class="row">
        <hr>
        <div class="col-12 col-md-3 d-flex flex-column align-items-center py-5">
            <a  href="{{ route('category', ['category' => 7]) }}">
            <span class="icon"><i class="fa-solid fa-music"></i></span>
            </a>
            <p class="text-center  fs-5 fw-bold">{{ __('ui.categorieIcone1') }}</p>
            <p class="text-center textDark px-5 fs-7">La musica accompagna l’uomo dall’alba dei tempi.</p>
        </div>
        <div class="col-12 col-md-3 d-flex flex-column align-items-center py-5">
            <a  href="{{ route('category', ['category' => 2]) }}">
            <span class="icon"><i class="fa-solid fa-palette"></i></span>
            </a>
            <p class="text-center  fs-5 fw-bold">{{ __('ui.categorieIcone2') }}</p>
            <p class="text-center textDark px-5  fs-7">Prima sogno i miei dipinti, poi dipingo i miei sogni.</p>
        </div>
        <div class="col-12 col-md-3 d-flex flex-column align-items-center py-5">
            <a  href="{{ route('category', ['category' => 3]) }}">
            <span class="icon"><i class="fa-solid fa-camera"></i></span>
            </a>
            <p class="text-center  fs-5 fw-bold">{{ __('ui.categorieIcone3') }}</p>
            <p class="text-center textDark px-5 fs-7">La fotografia è un arte; anzi è più che un’arte.</p>
        </div>
        <div class="col-12 col-md-3 d-flex flex-column align-items-center py-5">
            <a href="{{route('article.index')}}">
                <span class="icon"><i class="fa-regular fa-window-restore"></i>
                </span>
            </a>
            <p class="text-center fs-5 fw-bold">{{ __('ui.categorieIcone4') }}</p>

            <p class="text-center textDark px-5 fs-7">Scopri di più su tutte le categorie disponibili nel sito.</p>
        </div>
        <hr>
    </div>
</div>
