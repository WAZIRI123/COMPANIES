<nav class="navbar navbar-expand-lg navbar-light bg-darks sticky-top" id="nav"
@scroll.window='atTop=(window.pageYOffset >100) ? true : false '  :class="{' nav' : atTop, '' : !atTop}"
>
    <div class="container-fluid ">
        <a class="navbar-brand" href="{{ url('/') }}">
            <img src="{{asset('images/MAYOCOO-logo-black.png')}}" alt="" width="200" height="50" class="d-inline-block align-text-top">
        </a>
        <button class="navbar-toggler bg-light" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse d-lg-flex  justify-content-center " id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item text-light px-2">
                    <a class="nav-link text-light {{ (request()->is('/')) ? 'active' : '' }}" aria-current="page" href="{{ url('/') }}">Home</a>
                </li>
                <li class="nav-item px-2">
                    <a class="nav-link text-light {{ (request()->is('Tour')) ? 'active' : '' }}" href="{{ url('/Tour') }}" aria-current="page">Tour Operator</a>
                </li>
                <li class="nav-item px-2">
                    <form class="d-flex" x-data='{ open : false }'>
                    <div class="btn btn-outline-dark" @click="open = ! open">
                            <i class="fa-solid  text-light"  :class="{'fa-xmark' : open, 'fa-magnifying-glass' : !open}"></i>
                        </div>
                        <input class="form-control me-2 position-absolute top-100 start-50 translate-middle w-50 mt-4 z-scrollbtn"
                        type="search" placeholder="Search" aria-label="Search" x-show="open" x-transition.duration.500ms >
                    </form>
                </li>
            </ul>
        </div>
    </div>
</nav>