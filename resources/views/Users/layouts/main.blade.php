<!DOCTYPE html>
<html lang="en">
<head>
    @include('Users.Template.head')
</head>

<body class="g-sidenav-show  bg-gray-100">
    {{-- sidebar --}}
 @include('Users.Template.sidebar')
    {{-- endsidebar --}}
  <main class="main-content border-radius-lg">
    <div class="container-fluid">
    {{-- content --}}
      @yield('container')
      
      <footer class="footer pt-3  ">
        @include('Users.Template.footer')
      </footer>
    </div>
  </main>
  <!--   Core JS Files   -->
  @include('Users.Template.script')
</body>

</html>