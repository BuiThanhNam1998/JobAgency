@extends('user.layouts.master')

@section('content')

 <!-- Page Content -->
 <div class="page-heading about-heading header-text" style="background-image: url({{asset('assets/images/heading-6-1920x500.jpg')}});">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="text-content">
            <h4>Lorem ipsum dolor sit amet</h4>
            <h2>Jobs</h2>
          </div>
        </div>
      </div>
    </div>
  </div>

    <div class="job-filter">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="text-content">
                        <form action="" method="GET" class="job-filter-form">
                            <select name="career_id" class="filter-select" style="width: 172px;">
                                <option value="">Tất cả ngành nghề</option>
                                @foreach($careers as $career)
                                    <option value="{{$career->id}}" {{$params['career_id'] == $career->id ? 'selected' : ''}}>
                                        {{$career->name}}
                                    </option>
                                @endforeach
                            </select>
                            <select name="type_id" class="filter-select" id="">
                                <option value="">Tất cả hình thức</option>
                                @foreach($jobTypes as $jobType)
                                    <option value="{{$jobType->id}}" {{$params['type_id'] == $jobType->id ? 'selected' : ''}}>
                                        {{$jobType->name}}
                                    </option>
                                @endforeach
                            </select>
                            <select name="city_id" class="filter-select" style="width: 172px;">
                              <option value="">Tất cả tỉnh thành</option>
                              @foreach($cities as $city)
                                  <option value="{{$city->id}}" {{$params['city_id'] == $city->id ? 'selected' : ''}}>
                                      {{$city->name}}
                                  </option>
                              @endforeach
                          </select>
                            <button type="submit" class="filled-button">Tìm</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

  <div class="products">
    <div class="container">
      <div class="row">
        <div class="col-md-3">
           <div class="contact-form">
              <form action="#">
               <h5 style="margin-bottom: 15px">Type</h5>

               <div>
                    <label>
                         <input type="checkbox">

                         <small>Contract (5)</small>
                    </label>
               </div>

               <div>
                    <label>
                         <input type="checkbox">

                         <small>Full time (5)</small>
                    </label>
               </div>

               <div>
                    <label>
                         <input type="checkbox">

                         <small>Internship (5)</small>
                    </label>
               </div>

               <br>

               <h5 style="margin-bottom: 15px">Category</h5>

               <div>
                    <label>
                         <input type="checkbox">

                         <small>Accounting / Finance / Insurance Jobs (5)</small>
                    </label>
               </div>

               <div>
                    <label>
                         <input type="checkbox">

                         <small>Accounting / Finance / Insurance Jobs (5)</small>
                    </label>
               </div>

               <div>
                    <label>
                         <input type="checkbox">

                         <small>Accounting / Finance / Insurance Jobs (5)</small>
                    </label>
               </div>

               <br>

               <h5 style="margin-bottom: 15px">Career levels</h5>

               <div>
                    <label>
                         <input type="checkbox">

                         <small>Entry Level (5)</small>
                    </label>
               </div>

               <div>
                    <label>
                         <input type="checkbox">

                         <small>Entry Level (5)</small>
                    </label>
               </div>

               <div>
                    <label>
                         <input type="checkbox">

                         <small>Entry Level (5)</small>
                    </label>
               </div>

               <br>

               <h5 style="margin-bottom: 15px">Education levels</h5>

               <div>
                    <label>
                         <input type="checkbox">

                         <small>Associate Degree (5)</small>
                    </label>
               </div>

               <div>
                    <label>
                         <input type="checkbox">

                         <small>Associate Degree (5)</small>
                    </label>
               </div>

               <div>
                    <label>
                         <input type="checkbox">

                         <small>Associate Degree (5)</small>
                    </label>
               </div>

               <br>


               <h5 style="margin-bottom: 15px">Years of experience</h5>

               <div>
                    <label>
                         <input type="checkbox">

                          <small>&lt; 1 (5)</small>
                    </label>
               </div>

               <div>
                    <label>
                         <input type="checkbox">

                          <small>&lt; 1 (5)</small>
                    </label>
               </div>

               <div>
                    <label>
                         <input type="checkbox">

                          <small>&lt; 1 (5)</small>
                    </label>
               </div>
          </form>
           </div>
        </div>

        <div class="col-md-9">
          <div class="row">
              @foreach($jobs as $job)
                <div class="col-md-6">
                  <div class="product-item">
                    <a href="{{route('job.detail', ['id' => $job->id])}}" title="{{$job->title}}">
                        <img src="{{asset($job->image)}}" alt="{{$job->title}}">
                    </a>
                    <div class="down-content">
                      <a href="{{route('job.detail', ['id' => $job->id])}}" title="{{$job->title}}">
                          <h4>{{$job->title}}</h4>
                      </a>

                      <h6>{{number_format($job->salary)}} &#8363;</h6>

                      <h4>
                          <small>
                              <i class="fa fa-briefcase"></i> {{$job->career->name}} <br>
                              <strong><i class="fa fa-building"></i> BMI Kings Park Hospital</strong>
                          </small>
                      </h4>

                      <small>
                           <strong title="Posted on"><i class="fa fa-calendar"></i> 15-06-2020</strong> &nbsp;&nbsp;&nbsp;&nbsp;
                           <strong title="Type"><i class="fa fa-file"></i> {{$job->type->name}}</strong> &nbsp;&nbsp;&nbsp;&nbsp;
                           <strong title="Location"><i class="fa fa-map-marker"></i> London</strong>
                      </small>
                    </div>
                  </div>
                </div>
              @endforeach

            <div class="col-md-12">
              <ul class="pages">
                <li><a href="#">1</a></li>
                <li class="active"><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#"><i class="fa fa-angle-double-right"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Book Now</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="contact-form">
            <form action="#" id="contact">
                <div class="row">
                     <div class="col-md-6">
                        <fieldset>
                          <input type="text" class="form-control" placeholder="Pick-up location" required="">
                        </fieldset>
                     </div>

                     <div class="col-md-6">
                        <fieldset>
                          <input type="text" class="form-control" placeholder="Return location" required="">
                        </fieldset>
                     </div>
                </div>

                <div class="row">
                     <div class="col-md-6">
                        <fieldset>
                          <input type="text" class="form-control" placeholder="Pick-up date/time" required="">
                        </fieldset>
                     </div>

                     <div class="col-md-6">
                        <fieldset>
                          <input type="text" class="form-control" placeholder="Return date/time" required="">
                        </fieldset>
                     </div>
                </div>
                <input type="text" class="form-control" placeholder="Enter full name" required="">

                <div class="row">
                     <div class="col-md-6">
                        <fieldset>
                          <input type="text" class="form-control" placeholder="Enter email address" required="">
                        </fieldset>
                     </div>

                     <div class="col-md-6">
                        <fieldset>
                          <input type="text" class="form-control" placeholder="Enter phone" required="">
                        </fieldset>
                     </div>
                </div>
            </form>
         </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
          <button type="button" class="btn btn-primary">Book Now</button>
        </div>
      </div>
    </div>
  </div>

@endsection
