@extends('app')

@section('content')


<style>
    .gradient-custom-2 {
/* fallback for old browsers */
background: #fccb90;

/* Chrome 10-25, Safari 5.1-6 */
background: -webkit-linear-gradient(to right, #ee7724, #d8363a, #dd3675, #b44593);

/* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
background: linear-gradient(to right, #ee7724, #d8363a, #dd3675, #b44593);
}
.gradient-custom-3 {
    /* fallback for old browsers */
    background: #84fab0;
    
    /* Chrome 10-25, Safari 5.1-6 */
    background: -webkit-linear-gradient(to right, rgba(238, 119, 36, 0.5), rgba(216, 54, 58 , 0.5));
    
    /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
    background: linear-gradient(to right, rgba(238, 119, 36, 0.5), rgba(216, 54, 58 , 0.5));
    }
    .gradient-custom-4 {
    /* fallback for old browsers */
    background: #84fab0;
    
    /* Chrome 10-25, Safari 5.1-6 */
    background: -webkit-linear-gradient(to right, rgba(238, 119, 36, 0.5), rgba(216, 54, 58 , 0.5));
    
    /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
    background: linear-gradient(to right, rgba(238, 119, 36, 0.5), rgba(216, 54, 58 , 0.5));
    }

</style>


<section>

    <div class="w-100 p-3 d-block align-items-center gradient-custom-2">
        <div class="text-white px-5 py-4 p-md-5 mx-md-4">
          <h4 class="big mb-4">What is TruchAmazon?</h4>
          <p class="medium mb-1">TruchAmazon is a website created specificaly for publishing and selling products and services, there is no moderaton, so the website is on the hands of the user</div>
      </div>

</section>

@endsection