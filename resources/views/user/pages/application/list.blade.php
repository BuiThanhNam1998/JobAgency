@extends('user.layouts.master')

@section('content')


    <!-- Page Content -->
    <div class="page-heading about-heading header-text" style="background-image: url({{asset('assets/images/heading-6-1920x500.jpg')}});">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="text-content">
                        <h4>Customize your profile</h4>
                        <h2>Your Profile</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="products">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    @foreach($applications as $application)
                        <div class="row">
                            <div class="col-md-3">
                                <div class="service-item">
                                    <a href="blog-details.html" class="services-item-image">
                                        <img src="{{asset($application->job->image)}}" class="img-fluid" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-9">
                                <div class="down-content">
                                    <h5>
                                        Job:
                                        <a href="{{ route('job.detail', ['id' => $application->job->id]) }}">
                                            {{ $application->job->title }}
                                        </a>
                                    </h5>
                                    <h5>
                                        Profile:
                                        <a href="{{ route('user.profile.detail', ['id' => $application->profile->id]) }}">
                                            {{ $application->profile->name }}
                                        </a>
                                    </h5>
                                    <h6>Status: {{ $application->status->name }}</h6>
                                    @if($application->status->can_cancel == 1)
                                        <button type="button"
                                                class="cancel-application-user"
                                                style="cursor: pointer"
                                                data-id="{{$application->id}}"
                                        >Cancel</button>
                                    @endif
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

            </div>
        </div>
    </div>

@endsection

@section('script')
    <script>
        $(document).ready(function () {
            $('.cancel-application-user').click(function () {
                let context = $(this).closest('.row');
                let applicationId = $(this).data("id")
                $.ajax({
                    method: "POST",
                    url: "{{route('user.application.cancel')}}",
                    context : context,
                    data: {
                        _token: "{{ csrf_token() }}",
                        application_id: applicationId
                    }
                }).done(function(data) {
                    let icon = data.code == '200' ? 'success' : 'warning';
                    $.toast({
                        text: data.message,
                        icon: icon,
                        showHideTransition: 'fade',
                        allowToastClose: true,
                        hideAfter: 3000,
                        stack: 5,
                        position: 'bottom-right',
                        textAlign: 'left',
                        loader: false,
                    });
                    $(this).remove();
                });
            })
        })
    </script>
@endsection
