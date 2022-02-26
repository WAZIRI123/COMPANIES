<nav class="navbar navbar-expand-lg navbar-light bg-darks" >
        <div class="container-fluid ">
            <a class="navbar-brand" href="{{ url('/') }}">
                <img src="{{asset('images/cityimage.png')}}" alt="" width="200" height="50" class="d-inline-block align-text-top">
            </a>
            <button class="navbar-toggler bg-light" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse d-lg-flex  justify-content-center " id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item text-light px-2">
                        <a class="nav-link text-light {{ (request()->is('/')) ? 'active' : '' }}" aria-current="page" href="{{ url('/') }}">Home</a>
                    </li>
                    <li class="nav-item px-2 dropdown">
                        <a class="nav-link dropdown-toggle text-light {{ (request()->is('Video') or request()->is('NewAudio')) ? 'active' : '' }}" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Video & Audio
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li> <a class=" dropdown-item text-dark {{ (request()->is('Video')) ? 'active' : '' }}" href="{{ url('/Video') }}" aria-current="page">Video</a></li>
                            <li> <a class=" dropdown-item text-dark {{ (request()->is('NewAudio')) ? 'active' : '' }}" href="{{ url('/NewAudio') }}" aria-current="page">NewAudio</a></li>
                        </ul>
                    </li>
                    <li class="nav-item px-2">
                        <a class="nav-link text-light {{ (request()->is('AboutUs')) ? 'active' : '' }}" href="{{ url('/AboutUs') }}" aria-current="page">About Us</a>
                    </li>
                    <li class="nav-item px-2">
                        <a class="nav-link text-light {{ (request()->is('ENews')) ? 'active' : '' }}" href="{{ url('/ENews') }}" aria-current="page">ENews</a>
                    </li>
                    <li class="nav-item px-2">
                        <a class="nav-link text-light {{ (request()->is('Gospel')) ? 'active' : '' }}" href="{{ url('/Gospel') }}" aria-current="page">Gospel</a>
                    </li>
                    <li class="nav-item px-2">
                        <a class="nav-link text-light {{ (request()->is('Cover')) ? 'active' : '' }}" href="{{ url('/Cover') }}" aria-current="page">Cover</a>
                    </li>
                    <li class="nav-item px-2">
                        <a class="nav-link text-light {{ (request()->is('ContactUs')) ? 'active' : '' }}" href="{{ url('/ContactUs') }}" aria-current="page">ContactUs</a>
                    </li>
                    <li class="nav-item px-2"> 
                        <form class="d-flex position-absolute top-100 start-50 translate-middle w-50 mt-4">
                            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                            <div class="btn btn-outline-dark" type="submit" wire:click='togglesearch'><i class="fa-solid fa-magnifying-glass text-light"></i></div>
                        </form>
                    </li>
                </ul>
            </div>
        </div>
    </nav>