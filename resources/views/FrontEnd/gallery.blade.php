@extends('Master.MasterFront')

@section('link')

@stop()

@section('script')
    <script type="text/javascript" src="{{asset('instafeed.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/igfeed.js')}}"></script>
    
@stop()

@section('content')
   <!-- gallery -->
    <section id="gallery" class="gallery">
        <div class="container">
            <div class="sec-title text-center titleH1">
                <h2>Gallery</h2>
            </div>
            <div id="instafeed" style="float:left"></div>
            <button id="load-more" class="btn btn-default">Load More</button>
        </div>
    </section>
    <!-- end of gallery -->
@stop()