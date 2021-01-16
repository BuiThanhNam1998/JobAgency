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
                              <input type="text" name="search" placeholder="Search here" value="{{ $params['search'] }}">
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
        <div class="col-md-12">
          <div class="row">
              @foreach($jobs as $job)
                <div class="col-md-4">
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
                              <strong><i class="fa fa-building"></i> {{$job->company_name}}</strong>
                          </small>
                      </h4>
                      <p>
                        <button data-toggle="modal" data-target="#applyModal" class="filled-button btn-apply" data-job="{{ $job->id }}">
                            Apply
                        </button>
                    </p>
                      <small>
                           <strong title="Posted on"><i class="fa fa-calendar"></i> {{$job->post_date}}</strong> &nbsp;&nbsp;&nbsp;&nbsp;
                           <strong title="Type"><i class="fa fa-file"></i> {{$job->type->name}}</strong> &nbsp;&nbsp;&nbsp;&nbsp;
                           <strong title="Location"><i class="fa fa-map-marker"></i> {{$job->city->name}}</strong>
                      </small>
                    </div>
                  </div>
                </div>
              @endforeach

            <div class="col-md-12 main-pagination">
                {!! $jobs->links() !!}
            </div>
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
