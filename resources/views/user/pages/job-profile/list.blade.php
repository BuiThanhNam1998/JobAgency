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
                    <div class="row">
                        @foreach($profiles as $profile)
                            <div class="col-md-6">
                                <div class="service-item">
                                    <a href="blog-details.html" class="services-item-image">
                                        <img src="{{asset('assets/images/blog-1-370x270.jpg')}}" class="img-fluid" alt="">
                                    </a>

                                    <div class="down-content">
                                        <h4><a href="blog-details.html">{{$profile->name}}</a></h4>

                                        <p style="margin: 0;">
                                            John Doe &nbsp;&nbsp;|&nbsp;&nbsp; 12/06/2020 10:30 &nbsp;&nbsp;|&nbsp;&nbsp; 114
                                        </p>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                    </div>
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
