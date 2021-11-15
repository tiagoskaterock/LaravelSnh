<!--  Page wrapper  -->
<div>

  <div id="demo" class="carousel slide" data-ride="carousel">
    <ul class="carousel-indicators">
      <li data-target="#demo" data-slide-to="0" class="active"></li>
      <li data-target="#demo" data-slide-to="1"></li>
      <li data-target="#demo" data-slide-to="2"></li>
    </ul>
    <div class="carousel-inner">

      <div class="carousel-item active">
        <img src="{{ asset('/img/carousel2.jpg') }}" class="d-block w-100" alt="..." width="1100">
        <div class="carousel-caption">
          <h3>Los Angeles</h3>
          <p>We had such a great time in LA!</p>
        </div>   
      </div>

      <div class="carousel-item">
        <img src="{{ asset('/img/carousel3.jpg') }}" class="d-block w-100" alt="..." width="1100">
        <div class="carousel-caption">
          <h3>Chicago</h3>
          <p>Thank you, Chicago!</p>
        </div>   
      </div>

      <div class="carousel-item">
        <img src="{{ asset('/img/carousel4.jpg') }}" class="d-block w-100" alt="..." width="1100">
        <div class="carousel-caption">
          <h3>New York</h3>
          <p>We love the Big Apple!</p>
        </div>   
      </div>
      
    </div>
    <a class="carousel-control-prev" href="#demo" data-slide="prev">
      <span class="carousel-control-prev-icon"></span>
    </a>
    <a class="carousel-control-next" href="#demo" data-slide="next">
      <span class="carousel-control-next-icon"></span>
    </a>
  </div>
