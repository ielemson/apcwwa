<div id="header">
  <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="frontend/images/slider/slider-1d.jpg" class="d-block w-100" alt="...">
      <div class="title">
        <h1 class="animated slideInDown">Our Core Principle</h1>
        <span class="animated ext slideInLeft">We do not root for any individual. <br/> We root for the institution of Party and Government.</span>
      </div>
    </div>
    <div class="carousel-item">
      <img src="frontend/images/slider/slider-4_1200x600.jpg" class="d-block w-100" alt="...">
      <div class="title">
        <section>
          <h1 class="animated slideInUp">His Excellency</h1>
        <span class="animated ext slideInRight">Muhammadu Buhari</span>
        </section>
      </div>
    </div>
    <div class="carousel-item">
      <img src="frontend/images/slider/slider-2.jpg" class="d-block w-100" alt="...">
      <div class="title">
        <h1 class="animated fadeInRight">APC</h1>
        <span class="animated ext fadeInLeft">All Progressive Congress</span>
      </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div>

@section('styles')
<style>
  #header {
    width: 100%;
    height: 90vh;
  }
  #header .carousel {
    height: 100%;
  }
  #header .carousel .carousel-inner {
    height: 100%;
  }
  #header .carousel .carousel-inner .carousel-item {
    height: 100%;
  }
  #header .carousel .carousel-inner .carousel-item .title {
      background-color: rgba(0, 0, 0, 0.5);
      border-radius: 5px;
      padding: 10px;
      color: #fff !important;
      position: absolute;
      text-align: center;
      width: auto;
      left: 50%;
      top: 60%;
      transform: translate(-50%, -50%);
  }
  #header .carousel .carousel-inner .carousel-item .title h1 {
    font-size: 3vw;
    color:#fff;
  }
  .ext{
    color:;
    font-size:1.5vw;
  }
  #header .carousel .carousel-inner .carousel-item .title .animated {
    animation-duration: 1.3s;
    animation-delay: 0.5s;
  }
  #header .carousel .carousel-inner .carousel-item img {
    object-fit: cover;
    height: 100%;
  }
  
  
      </style>
@endsection