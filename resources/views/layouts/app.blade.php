@extends('layouts.base')

@section('section')
   @include('layouts.partials.header')

    @yield('content')

   @include('layouts.partials.footer')

@endsection
