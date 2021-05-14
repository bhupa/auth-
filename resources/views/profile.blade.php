@extends('layout')

@section('content')
<section  class="d-flex align-items-center">
    


      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-12">
              <div class=" text-center" style="    margin-top: 112px;">
                <h4>Please click the link to redirect shopify </h4>
                <p>We have use  home link check in to browser it will go to home</p>
                <a href="{{ route('home') }}" class="btn btn-primary"> Shppify</a>
              </div>
            
          </div>
        </div>
      </div>
  </section><!-- End Hero -->



@endsection