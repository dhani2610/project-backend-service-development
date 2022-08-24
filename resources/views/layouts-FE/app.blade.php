<!DOCTYPE html>
<html lang="en">
  <head>
    @include('layouts-FE.partials.head')
  </head>
  <body >
   
    {{-- navbar --}}
    @include('layouts-FE.partials.navbar')
    {{-- end-navbar --}}
   
    @yield('content')


    {{-- footer --}}
    @include('layouts-FE.partials.footer')
    {{-- end-footer --}}
   
  </body>
  @include('layouts-FE.partials.foot')
 
</html>
