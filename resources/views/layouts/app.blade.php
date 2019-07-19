<!doctype html>

<html lang="en">

  <head>

  @include('includes.head')

  </head>

  <body id="page-top">

    <div id="wrapper">

      <!-- sidebar content -->
        <div id="sidebar">
          @include('includes.sidebar')
        </div>

      <!-- <header> -->
      <!-- Content Wrapper -->
      <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">
            @include('includes.header')
          <!-- </header> -->

          <!-- main content -->
            @yield('content')
          
         <!--  <footer> -->

          @include('includes.footer')

          <!-- </footer> -->
        </div>
      </div>
    </div>

  </body>

</html>