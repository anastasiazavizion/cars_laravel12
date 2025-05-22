@extends('layouts.base')

@section('section')
   @include('layouts.partials.header')

    @yield('content')

   <footer>
      @section('footerLinks')

        <a href="">Link1</a>
        <a href="">Link2</a>

      @show
   </footer>

@endsection
