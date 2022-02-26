<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>@yield('title')</title>
    @livewireStyles
    <script src="{{asset('js/bootstrap.bundle.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.8.2/dist/alpine.min.js" defer></script>
</head>

<body class="bg-body"  x-data="{ atTop:false }">
  @livewire('navbar-link');
  <div class="toTop"  @scroll.window='atTop=(window.pageYOffset >100) ? true : false'>
  <div class="scrollup position-fixed  bottom-0 end-0 translate-middle btn btn-sm btn-primary rounded-pill z-scrollbtn" 
  x-show="atTop" x-on:click="window.scrollTo(0, 0)">
  <i class="fa-solid fa-circle-arrow-up"></i>
  </div>
  </div>
  
    {{$slot}}
    @livewireScripts
    <script src="{{asset('js/app.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/gh/livewire/turbolinks@v0.1.x/dist/livewire-turbolinks.js" data-turbolinks-eval="false"></script>
  </body>

</html>