


  @include('partials.nav')

  @include('partials.header')



    <div class="container">

      <div class="row">

        @section('content')
        @show

        @include('partials.sidebar')

      </div><!-- /.row -->

    </div><!-- /.container -->

    @include('partials.footer')




