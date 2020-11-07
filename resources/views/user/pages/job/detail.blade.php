@extends('user.layouts.master')

@section('content')

 <!-- Page Content -->
 <div class="page-heading about-heading header-text" style="background-image: url({{asset('assets/images/heading-6-1920x500.jpg')}});">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="text-content">
            <h4>Security / Protective Services Jobs</h4>

            <h2>Security Officer - Luxury Retail</h2>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="products">
    <div class="container">
      <div class="row">
        <div class="col-md-9 col-sm-8">
            <p class="lead">
                 <i class="fa fa-map-marker"></i> London &nbsp;&nbsp;
                 <i class="fa fa-calendar"></i> 20-06-2020 &nbsp;&nbsp;
                 <i class="fa fa-file"></i> Contract
            </p>

            <br>
            <br>
            
            <div class="form-group">
              <h5>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</h5>
            </div>

            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Qui, delectus totam non est excepturi expedita, illum vitae vel dolore exercitationem nobis quasi dicta illo id  quas. Error commodi, modi minus. <br><br>
              Perferendis, quidem, facilis. Aspernatur alias numquam saepe deleniti dolorem quos repudiandae eaque ad eligendi quam, ratione, error minima culpa suscipit nostrum magni omnis est. Suscipit dolor sint aut maiores eius, id nemo, optio, quos tempora cum est quas. At recusandae obcaecati consequatur ipsa dignissimos, eius commodi qui quae exercitationem fugiat, voluptatem, nesciunt!
            </p>   

            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem voluptatem vero culpa rerum similique labore, nisi minus voluptatum numquam fugiat. <br><br>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Placeat fugit sint reiciendis quas temporibus quam maxime nulla vitae consectetur perferendis, fugiat assumenda ex dicta molestias soluta est quo totam cum?</p> 

            <br>
            <br>
        </div>

        <div class="col-md-3 col-sm-4">
          <div class="contact-form">
            <div class="form-group">
              <button type="submit" class="filled-button btn-block">Apply for this job</button>
            </div>
          </div>

          <div>
            <img src="{{asset('assets/images/product-1-370x270.jpg')}}" alt="" class="img-fluid wc-image">
          </div>

          <br>

          <ul class="social-icons text-center">
            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
            <li><a href="#"><i class="fa fa-envelope"></i></a></li>
            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
            <li><a href="#"><i class="fa fa-behance"></i></a></li>
          </ul>

          <br>
          <br>
        </div>
      </div>
    </div>
  </div>

  <div class="section">
    <div class="container">
      <div class="row">
        <div class="col-md-9">
          <div class="section-heading">
            <h2>About Cannon Guards Security ltd</h2>
          </div>

          <p class="lead">
                 <i class="fa fa-map-marker"></i> London 
            </p>

          <p>Looking to improve the security at your place of business? If so, we will provide you with the trained security officers and professionally licensed personnel needed for any business. From a security guard for construction site security to private event security, you can be sure to get the very best from our staff. Alternatively we provide tailor-made security guard training for your existing security staff.</p>
          <br>
          <p>Looking to improve the security at your place of business? If so, we will provide you with the trained security officers and professionally licensed personnel needed for any business. From a security guard for construction site security to private event security, you can be sure to get the very best from our staff. Alternatively we provide tailor-made security guard training for your existing security staff.</p>
        </div>

        <div class="col-md-3">
          <div class="section-heading">
            <h2>Contact Details</h2>
          </div>
          
          <div class="left-content">
            <p>
              <span>Name</span>

              <br>

              <strong>John Smith</strong>
            </p>

            <p>
              <span>Phone</span>

              <br>
              
              <strong>
                <a href="tel:123-456-789">123-456-789</a>
              </strong>
            </p>

            <p>
              <span>Mobile phone</span>

              <br>
              
              <strong>
                <a href="tel:456789123">456789123</a>
              </strong>
            </p>

            <p>
              <span>Email</span>

              <br>
              
              <strong>
                <a href="mailto:john@carsales.com">john@carsales.com</a>
              </strong>
            </p>

            <p>
              <span>Website</span>

              <br>
              
              <strong>
                <a href="http://www.cannonguards.com/">http://www.cannonguards.com/</a>
              </strong>
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>

@endsection