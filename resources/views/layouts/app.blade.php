<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>@yield('title')</title>
    @livewireStyles
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.6/dist/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.2.1/dist/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
    <script src="{{asset('js/bootstrap.bundle.js')}}"></script>
</head>
<body class="bg-body"  x-data="{ atTop:false }">
  @livewire('navbar-link')
  <div class="toTop"  @scroll.window='atTop=(window.pageYOffset >100) ? true : false '>
  <div class="scrollup position-fixed  bottom-0 end-0 translate-middle btn btn-sm btn-primary rounded-pill z-scrollbtn" 
  x-show="atTop" x-on:click="window.scrollTo(0, 0)">
  <i class="fa-solid fa-circle-arrow-up"></i>
  </div>
  </div>
    {{$slot}}
    @livewireScripts
    <script>
Livewire.on('postAdded',()=> {
 $('#createModal').modal('hide');
})
Livewire.on('companyUpdated',()=> {
 $('#updateModal').modal('hide');
})
window.addEventListener('modalshow',()=> {
 $('#deleteModal').modal('show');
})
window.addEventListener('demoved',(event)=> {
 $('#deleteModal').modal('hide');
 toastr.success(event.detail.message,'Success!');
})
</script>
    <script defer src="https://unpkg.com/alpinejs@3.9.0/dist/cdn.min.js" defer></script>
    <script src="{{asset('js/app.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/gh/livewire/turbolinks@v0.1.x/dist/livewire-turbolinks.js" 
    data-turbolinks-eval="false"></script>

  </body>

</html>