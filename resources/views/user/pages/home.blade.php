@extends('user.layouts.master')

@section('content')
    <!-- Page Content -->
    <!-- Banner Starts Here -->
    <div class="banner header-text">
      <div class="owl-banner owl-carousel">
        <div class="banner-item-01">
          <div class="text-content">
            <h4>Tìm kiếm công việc ngay</h4>
            <h2>Hàng ngàn công việc hấp dẫn</h2>
          </div>
        </div>
        <div class="banner-item-02">
          <div class="text-content">
            <h4>Bạn đang tìm kiếm trang web tuyển dụng</h4>
            <h2>Website tuyển dụng hàng đầu</h2>
          </div>
        </div>
        <div class="banner-item-03">
          <div class="text-content">
            <h4>Cùng nhau phát triển</h4>
            <h2>Cùng chúng tôi phát triển website</h2>
          </div>
        </div>
      </div>
    </div>
    <!-- Banner Ends Here -->

    <div class="latest-products">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>Mới đăng tuyển</h2>
              <a href="{{route('job.list', ['sort' => 'created_at', 'order' => 'desc'])}}">
                  xem thêm <i class="fa fa-angle-right"></i>
              </a>
            </div>
          </div>
        </div>
        @foreach($newJobs->chunk(3) as $jobs)
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
                        <small><i class="fa fa-briefcase"></i> {{$job->career->name}} <br>
                        <strong><i class="fa fa-building"></i> {{$job->company_name}}</strong></small>
                    </h4>
                    <p>
                        <button data-toggle="modal" data-target="#applyModal" class="filled-button btn-apply" data-job="{{ $job->id }}">
                            Apply
                        </button>
                    </p>
                    <small>
                        <strong title="Posted on">
                            <i class="fa fa-calendar"></i>
                            {{date_format(date_create($job->created_at), 'd-m-Y')}}
                        </strong> &nbsp;&nbsp;&nbsp;&nbsp;
                        <strong title="Type">
                            <i class="fa fa-file"></i> {{$job->type->name}}
                        </strong> &nbsp;&nbsp;&nbsp;&nbsp;
                        <strong title="Location"><i class="fa fa-map-marker"></i> {{$job->city->name}}</strong>
                    </small>
                  </div>
                </div>
              </div>
            @endforeach
          </div>
        @endforeach

      </div>
    </div>

    <div class="latest-products">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>Việc làm hấp dẫn</h2>
              <a href="{{route('job.list', ['sort' => 'salary', 'order' => 'desc'])}}">
                  xem thêm <i class="fa fa-angle-right"></i>
              </a>
            </div>
          </div>
        </div>
        @foreach($hotJobs->chunk(3) as $jobs)
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
                                  <small><i class="fa fa-briefcase"></i> {{$job->career->name}} <br>
                                      <strong><i class="fa fa-building"></i> {{$job->company_name}}</strong></small>
                              </h4>
                              <p>
                                  <button data-toggle="modal" data-target="#applyModal" class="filled-button btn-apply" data-job="{{ $job->id }}">
                                      Apply
                                  </button>
                              </p>
                              <small>
                                  <strong title="Posted on">
                                      <i class="fa fa-calendar"></i>
                                      {{date_format(date_create($job->created_at), 'd-m-Y')}}
                                  </strong> &nbsp;&nbsp;&nbsp;&nbsp;
                                  <strong title="Type">
                                      <i class="fa fa-file"></i> {{$job->type->name}}
                                  </strong> &nbsp;&nbsp;&nbsp;&nbsp;
                                  <strong title="Location"><i class="fa fa-map-marker"></i> {{$job->city->name}}</strong>
                              </small>
                          </div>
                      </div>
                  </div>
            @endforeach
          </div>
        @endforeach
      </div>
    </div>

    <div class="best-features">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>Về chúng tôi</h2>
            </div>
          </div>
          <div class="col-md-6">
            <div class="left-content">
              <p>Job Agency Company  provides a range of Information Technology services designed for business productivity. From expert installation, outsourcing and implementation to Hosted Solutions.
              </p>
              <p>Founded in June 2001 and headquartered in Budapest Hungary, in order to help companies with their IT solutions. Our initial focus was providing complete information technology solutions for companies.
              </p>
              <ul class="featured-list">
                <li><a href="#">Lower their IT service costs</a></li>
                <li><a href="#">Increase productivity and efficiency</a></li>
                <li><a href="#">Secure their business platform for today and the future</a></li>
                <li><a href="#">Gain peace of mind knowing their IT services are in trusted hands.</a></li>
              </ul>
              <a href="{{route('about-us')}}" class="filled-button">Read More</a>
            </div>
          </div>
          <div class="col-md-6">
            <div class="right-image">
              <img src="{{asset('assets/images/about-1-570x350.jpg')}}" alt="">
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="happy-clients">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>Phản hồi người dùng</h2>

              <a href="testimonials.html">đọc thêm<i class="fa fa-angle-right"></i></a>
            </div>
          </div>
          <div class="col-md-12">
            <div class="owl-clients owl-carousel text-center">
              <div class="service-item">
                <div class="icon">
                  <i class="fa fa-user"></i>
                </div>
                <div class="down-content">
                  <h4>John Doe</h4>
                  <p class="n-m"><em>"Lorem ipsum dolor sit amet, consectetur an adipisicing elit. Itaque, corporis nulla at quia quaerat."</em></p>
                </div>
              </div>

              <div class="service-item">
                <div class="icon">
                  <i class="fa fa-user"></i>
                </div>
                <div class="down-content">
                  <h4>Jane Smith</h4>
                  <p class="n-m"><em>"Lorem ipsum dolor sit amet, consectetur an adipisicing elit. Itaque, corporis nulla at quia quaerat."</em></p>
                </div>
              </div>

              <div class="service-item">
                <div class="icon">
                  <i class="fa fa-user"></i>
                </div>
                <div class="down-content">
                  <h4>Antony Davis</h4>
                  <p class="n-m"><em>"Lorem ipsum dolor sit amet, consectetur an adipisicing elit. Itaque, corporis nulla at quia quaerat."</em></p>
                </div>
              </div>

              <div class="service-item">
                <div class="icon">
                  <i class="fa fa-user"></i>
                </div>
                <div class="down-content">
                  <h4>John Doe</h4>
                  <p class="n-m"><em>"Lorem ipsum dolor sit amet, consectetur an adipisicing elit. Itaque, corporis nulla at quia quaerat."</em></p>
                </div>
              </div>

              <div class="service-item">
                <div class="icon">
                  <i class="fa fa-user"></i>
                </div>
                <div class="down-content">
                  <h4>Jane Smith</h4>
                  <p class="n-m"><em>"Lorem ipsum dolor sit amet, consectetur an adipisicing elit. Itaque, corporis nulla at quia quaerat."</em></p>
                </div>
              </div>

              <div class="service-item">
                <div class="icon">
                  <i class="fa fa-user"></i>
                </div>
                <div class="down-content">
                  <h4>Antony Davis</h4>
                  <p class="n-m"><em>"Lorem ipsum dolor sit amet, consectetur an adipisicing elit. Itaque, corporis nulla at quia quaerat."</em></p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>


    <div class="call-to-action">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="inner-content">
              <div class="row">
                <div class="col-md-8">
                  <h4>Liên hệ với chúng tôi để cùng nhau xây dựng và phát triển</h4>
                  <p>Chúng tôi luôn sẵn sàng có mặt bất cứ khi nào bạn cần</p>
                </div>
                <div class="col-lg-4 col-md-6 text-right">
                  <a href="{{route('contact-us')}}" class="filled-button">Liên hệ ngay</a>
                </div>
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
