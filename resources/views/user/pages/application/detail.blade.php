@extends('user.layouts.master')

@section('content')


    <!-- Page Content -->
    <div class="page-heading contact-heading header-text" style="background-image: url(assets/images/heading-4-1920x500.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="text-content">
                        <h4>Lorem ipsum dolor</h4>
                        <h2>Job Profile</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="send-message">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-heading">
                        <h2>Profile</h2>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="contact-form">
                        <form id="contact" action="" method="post">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <label class="label-profile-form" for="name">Full Name</label>
                                    <fieldset>
                                    <input name="name" type="text" value="{{$profile ->user_name}}" class="form-control" id="name" placeholder="Full Name" required="">
                                    </fieldset>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <label class="label-profile-form" for="dob">Date of Birth</label>
                                    <fieldset>
                                        <input name="dob" type="text" value="{{$profile ->date_of_birth}}" class="form-control" id="dob" placeholder="DD/MM/YYYY" required="">
                                    </fieldset>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <label class="label-profile-form" for="dob">Sex</label>
                                    <select class="" id="sex">
                                        <option value="1" @if($profile->sex == 1) {{ 'selected' }} @endif>Male</option>
                                        <option value="2" @if($profile->sex == 2) {{ 'selected' }} @endif>Female</option>
                                        <option value="3" @if($profile->sex == 3) {{ 'selected' }} @endif>Others</option>
                                    </select>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <label class="label-profile-form" for="phone">Phone Contact</label>
                                    <fieldset>
                                        <input name="phone" value="{{$profile ->phone_number}}" type="text" class="form-control" id="phone" placeholder="Phone Contact" required="">
                                    </fieldset>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <label class="label-profile-form" for="email">Email</label>
                                    <fieldset>
                                        <input name="email" value="{{$profile ->email}}" type="text" class="form-control" id="email" placeholder="E-Mail Address" required="">
                                    </fieldset>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <label  class="label-profile-form" for="adr">Address</label>
                                    <fieldset>
                                        <input name="subject" value="{{$profile ->address}}" type="text" class="form-control" id="adr" placeholder="Address" required="">
                                    </fieldset>
                                </div>
                                <div class="col-lg-12">
                                    <label class="label-profile-form" for="exp">Experiences</label>
                                    <fieldset>
                                        <textarea name="message"  rows="5" class="form-control" id="exp" placeholder="Experiences" required="">{{$profile ->experience}}</textarea>
                                    </fieldset>
                                </div>
                                <div class="col-lg-12">
                                    <fieldset>
                                        <button type="submit" id="form-submit" class="filled-button">Submit</button>
                                    </fieldset>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-md-4">
                <div class="avatar-and-title">
                    <img src="{{ asset('assets/images/Avatar.jpg') }}" class="img-profile" alt="">

                    <h6 class="" style="margin-top: 15px;">Avatar</h6>
                </div>   
                </div>
            </div>
        </div>
    </div>

@endsection
