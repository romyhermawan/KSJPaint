@extends('Master.MasterFront')

@section('link')

@stop()

@section('script')
    
@stop()

@section('content')
<!-- ini faq -->
    <section>
        <div class="container">
            <div class="sec-title text-center titleH2">
                <h2>FAQ</h2>
            </div>

            <div class="faq-content">
                <div class="panel-group" id="accordion">
                  <div class="panel panel-default">
                    <div class="panel-heading">
                      <a class="a-collapse" data-toggle="collapse" data-parent="#accordion" href="#collapse1">
                      <h4 class="panel-title">
                        1. Pertanyaan nomor 1
                      </h4>
                      </a>
                    </div>
                    <div id="collapse1" class="panel-collapse collapse in">
                      <div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                      sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad
                      minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                      commodo consequat.</div>
                    </div>
                  </div>

                  <div class="panel panel-default">
                    <div class="panel-heading">
                      <a class="a-collapse" data-toggle="collapse" data-parent="#accordion" href="#collapse2">
                      <h4 class="panel-title">
                        2. Pertanyaan nomor 2
                      </h4>
                      </a>
                    </div>
                    <div id="collapse2" class="panel-collapse collapse">
                      <div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                      sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad
                      minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                      commodo consequat.</div>
                    </div>
                  </div>

                  <div class="panel panel-default">
                    <div class="panel-heading">
                      <a class="a-collapse" data-toggle="collapse" data-parent="#accordion" href="#collapse3">
                      <h4 class="panel-title">
                        3. Pertanyaan nomor 3
                      </h4>
                      </a>
                    </div>
                    <div id="collapse3" class="panel-collapse collapse">
                      <div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                      sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad
                      minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                      commodo consequat.</div>
                    </div>
                  </div>
                </div>
            </div>
        
        </div>
    </section>
    <!-- end faq     -->
@stop()