<!doctype html>
<html class="no-js" lang="en">
  <head>
    @yield("head")
  </head>
  <body>
    <div class="container">
      @include("_partials/nav")

      <main class="mt-4">
          @yield("content")
      </main>



    </div>
  </body>

  <footer>
    @include("_partials/footer")
  </footer>
</html>