@extends('user.layouts.master')

@section('content')


    <!-- Page Content -->
    <div class="page-heading about-heading header-text" style="background-image: url({{asset('assets/images/heading-6-1920x500.jpg')}});">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="text-content">
                        <h4>Lorem ipsum dolor sit amet</h4>
                        <h2>Blog</h2>
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
                                        <a href="{{ route('user.application.detail', ['id' => $application->id]) }}">
                                            {{ $application->job->title }}
                                        </a>
                                    </h5>
                                    <h5>
                                        Profile:
                                        <a href="{{ route('user.application.detail', ['id' => $application->id]) }}">
                                            {{ $application->profile->name }}
                                        </a>
                                    </h5>
                                    <h6>Status: {{ $application->status->name }}</h6>
                                    <form action="" action="POST">
                                        <button type="submit" style="cursor: pointer">Cancel</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

                <div class="col-md-4">
                    <div class="contact-form">
                        <div class="form-group">
                            <h5>Blog Search</h5>
                        </div>

                        <div class="row">
                            <div class="col-8">
                                <input type="text" class="form-control" placeholder="Search" aria-label="Search" aria-describedby="basic-addon2">
                            </div>

                            <div class="col-4">
                                <button class="filled-button" type="button">Go</button>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <h5>Lorem ipsum dolor sit amet</h5>
                    </div>

                    <p><a href="blog-details.html">Lorem ipsum dolor sit amet, consectetur adipisicing.</a></p>
                    <p><a href="blog-details.html">Et animi voluptatem, assumenda enim, consectetur quaerat!</a></p>
                    <p><a href="blog-details.html">Ducimus magni eveniet sit doloremque molestiae alias mollitia vitae.</a></p>
                </div>
            </div>
        </div>
    </div>

@endsection
