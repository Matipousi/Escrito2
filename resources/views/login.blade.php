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

@media (min-width: 768px) {
.gradient-form {
height: 100vh !important;
}
}
@media (min-width: 769px) {
.gradient-custom-2 {
border-top-right-radius: .3rem;
border-bottom-right-radius: .3rem;
}
}
</style>
<section class="vh-100 bg-image"
  style="background-image: url('https://mdbcdn.b-cdn.net/img/Photos/new-templates/search-box/img4.webp');">
  <div class="vh-100 mask gradient-custom-3">

<form action="{{ route('menu') }}" method="POST">
@csrf
<section class="h-100 gradient-form" >
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-xl-10">
          <div class="card rounded-3 text-black">
            <div class="row g-0">
              <div class="col-lg-6">
                <div class="card-body p-md-5 mx-md-4">
  
                  <div class="text-center">
                    <h4 class="mt-1 mb-5 pb-1">Welcome to TruchAmazon</h4>
                  </div>
  
                  <form>
                    <p>Please login to your account</p>
  
                    <div class="form-outline mb-4">
                      <label class="form-label" for="form2Example11">Username</label>
                      <input type="email" id="form2Example11" class="form-control"
                      placeholder="Phone number or email address" />
                    </div>
  
                    <div class="form-outline mb-4">
                      <label class="form-label" for="form2Example22">Password</label>
                      <input type="password" id="form2Example22" class="form-control" />
                    </div>
  
                    <div class="text-center pt-1 mb-5 pb-1">
                      <button class="btn btn-primary btn-block fa-lg gradient-custom-2 mb-3" type="button"><a class="text-white" href="action={{ route('menu')}} method('POST')">Log in</a>
                      </button>
                      <a class="text-muted" href="#!">Forgot password?</a>
                    </div>
  
                    <div class="d-flex align-items-center justify-content-center pb-4">
                      <p class="mb-0 me-2">Don't have an account?</p>
                      <button onclick="location.href='/registerpage'" type="button" class="btn btn-outline-danger">Create new</button>
                    </div>
  
                  </form>
  
                </div>
              </div>
              <div class="col-lg-6 d-flex align-items-center gradient-custom-2">
                <div class="text-white px-3 py-4 p-md-5 mx-md-4">
                  <h4 class="mb-4">What is TruchAmazon?</h4>
                  <p class="small mb-0">TruchAmazon is a website created specificaly for publishing and selling products and services, there is no moderaton, so the website is on the hands of the user</div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</form>
@endsection
