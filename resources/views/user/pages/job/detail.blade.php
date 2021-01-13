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

            <p>{{$job->description}}</p>

            <br>
            <br>
        </div>

        <div class="col-md-3 col-sm-4">
          <div class="contact-form">
            <div class="form-group">
                <button data-toggle="modal" data-target="#applyModal" class="filled-button btn-apply" data-job="{{ $job->id }}">
                    Apply for this job
                </button>
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

             <p>{{$job->company_des}}</p>
        </div>

        <div class="col-md-3">
          <div class="section-heading">
            <h2>Contact Details</h2>
          </div>

          <div class="left-content">
            <p>
              <span>Name</span>

              <br>

              <strong>{{$job->employer_name}}</strong>
            </p>

            <p>
              <span>Phone</span>

              <br>

              <strong>
                <a href="tel:123-456-789">{{$job->phone}}</a>
              </strong>
            </p>

            <p>
              <span>Mobile phone</span>

              <br>

              <strong>
                <a href="tel:456789123">{{$job->phone}}</a>
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
 @auth
     <!-- Modal -->
     <div class="modal fade" id="applyModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
         <div class="modal-dialog modal-lg" role="document">
             <div class="modal-content">
                 <div class="modal-header">
                     <p class="modal-title modal-title-apply">
                         Bạn đang ứng tuyển cho vị trí <b> {{ $job->title }}</b>
                     </p>
                     <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                         <span aria-hidden="true">&times;</span>
                     </button>
                 </div>
                 <div class="modal-body">
                     <div class="contact-form">
                         <p class="modal-title-apply">Chọn profile của bạn</p>
                         <form action="{{ route('user.application.store') }}" method="POST" class="apply-form">
                             @csrf
                             <input type="hidden" name="job_id" id="jobIdApply">
                             @foreach($profiles as $profile)
                                 <div class="form-check">
                                     <label class="form-check-label">
                                         <input type="radio" class="form-check-input" name="profile_id" value="{{ $profile->id }}">
                                         {{ $profile->name }}
                                     </label>
                                 </div>
                             @endforeach
                             <button type="submit" class="btn btn-primary filled-button modal-btn-apply">Apply</button>
                         </form>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 @else
     <!-- Modal -->
     <div class="modal fade" id="applyModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
         <div class="modal-dialog modal-lg" role="document">
             <div class="modal-content">
                 <div class="modal-header">
                     <h5 class="modal-title" id="exampleModalLabel">Login to apply</h5>
                     <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                         <span aria-hidden="true">&times;</span>
                     </button>
                 </div>
                 <div class="modal-body">
                     <div class="contact-form">
                         <a href="{{ route('login') }}" class="btn btn-primary">Login</a>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 @endauth
@endsection
@section('script')
    <script>
        $('.btn-apply').click(function () {
            let jobId = $(this).data('job');
            $('#jobIdApply').val(jobId);
        })
    </script>
@endsection
