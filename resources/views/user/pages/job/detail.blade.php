@extends('user.layouts.master')

@section('content')

 <!-- Page Content -->
 <div class="page-heading about-heading header-text" style="background-image: url({{asset('assets/images/heading-6-1920x500.jpg')}});">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="text-content">
            <h4>{{$job->career->name}}</h4>

            <h2>{{$job->title}}</h2>
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
                 <i class="fa fa-map-marker"></i> {{$job->city->name}} &nbsp;&nbsp;
                 <i class="fa fa-calendar"></i> {{$job->post_date}} &nbsp;&nbsp;
                 <i class="fa fa-file"></i> {{$job->type->name}}
            </p>

            <br>
            <br>

            <div class="form-group">
              <h5>{{$job->title}}</h5>
            </div>

            <p>{!! $job->description !!}</p>

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
            <img src="{{asset($job->image)}}" alt="" class="img-fluid wc-image">
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
            <h2>About {{$job->company_name}}</h2>
          </div>

          <p class="lead">
                 <i class="fa fa-map-marker"></i> {{$job->city->name}}
            </p>

             <p> {!! $job->company_des !!}</p>
        </div>

        <div class="col-md-3">
          <div class="section-heading">
            <h2>Contact Details</h2>
          </div>

          <div class="left-content">
            <p>
              <span>Name</span>

              <br>

              <strong>
                <a href="#">{{$job->employer_name}}</a>
              </strong>
            </p>

            <p>
              <span>Phone</span>

              <br>

              <strong>
                <a href="#">{{$job->phone}}</a>
              </strong>
            </p>

            <p>
              <span>Mobile phone</span>

              <br>

              <strong>
                <a href="#">{{$job->phone}}</a>
              </strong>
            </p>

            <p>
              <span>Email</span>

              <br>

              <strong>
                <a href="#">{{$job->email}}</a>
              </strong>
            </p>

            <p>
              <span>Website</span>

              <br>
              <strong>
                <a href="#">{{$job->website}}</a>
              </strong>
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>

@endsection
