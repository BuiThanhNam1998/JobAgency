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
                <div class="col-md-12">
                    <div class="contact-form">
                        <form id="contact" action="{{ route('user.profile.insert') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-lg-8 col-md-8 col-sm-8">
                                    <div class="">
                                        <label class="label-profile-form" for="name">Profile Name</label>
                                        <fieldset>
                                            <input name="name" type="text" value="" class="form-control" id="name" placeholder="Profile Name" required="">
                                        </fieldset>
                                    </div>
                                    <div class="">
                                        <label class="label-profile-form" for="name">Full Name</label>
                                        <fieldset>
                                            <input name="user_name" type="text" value="" class="form-control" id="userName" placeholder="Full Name" required="">
                                        </fieldset>
                                    </div>
                                    <div class="">
                                        <label class="label-profile-form" for="dob">Date of Birth</label>
                                        <fieldset>
                                            <input name="date_of_birth" type="date" value="" class="form-control" id="dob" required="">
                                        </fieldset>
                                    </div>
                                    <div class="">
                                        <label class="label-profile-form">Sex</label>
                                        <select class="" id="sex" name="sex">
                                            <option value="1">Male</option>
                                            <option value="2">Female</option>
                                            <option value="3">Others</option>
                                        </select>
                                    </div>
                                    <div class="">
                                        <label class="label-profile-form" for="phone">Phone Contact</label>
                                        <fieldset>
                                            <input name="phone_number" value="" type="text" class="form-control" id="phone" placeholder="Phone Contact" required="">
                                        </fieldset>
                                    </div>
                                    <div class="">
                                        <label class="label-profile-form" for="email">Email</label>
                                        <fieldset>
                                            <input name="email" value="" type="text" class="form-control" id="email" placeholder="E-Mail Address" required="">
                                        </fieldset>
                                    </div>
                                    <div class="">
                                        <label class="label-profile-form">City</label>
                                        <select class="" id="city" name="city_id">
                                            @foreach($cities as $city)
                                                <option value="{{$city->id}}">{{$city->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="">
                                        <label  class="label-profile-form" for="address">Address</label>
                                        <fieldset>
                                            <input name="address" value="" type="text" class="form-control" id="adr" placeholder="Address" required="">
                                        </fieldset>
                                    </div>
                                    <div class="">
                                        <label  class="label-profile-form" for="education">Education</label>
                                        <fieldset>
                                            <input name="education" value="" type="text" class="form-control" id="education" placeholder="Education" required="">
                                        </fieldset>
                                    </div>
                                    <div class="">
                                        <label class="label-profile-form" for="exp">Experiences</label>
                                        <fieldset>
                                            <textarea name="experience"  rows="5" class="form-control" id="exp" placeholder="Experiences" required=""></textarea>
                                        </fieldset>
                                    </div>
                                    <div class="">
                                        <fieldset>
                                            <button type="submit" id="form-submit" class="filled-button">Submit</button>
                                        </fieldset>
                                    </div>
                                </div>

                                <div class="col-lg-4 col-md-4 col-sm-4">
                                    <div class="avatar-and-title">
                                        <img src="{{ asset('images/avatar.png') }}"
                                             class="img-profile"
                                             alt="Avatar"
                                             id="preview"
                                        >
                                        <h6 class="" style="margin-top: 15px;">Avatar</h6>
                                        <input type="file" name="image" id="image" />
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('script')
    <script>
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function(e) {
                    $('#preview').attr('src', e.target.result);
                }

                reader.readAsDataURL(input.files[0]);
            }
        }
        $("#image").change(function() {
            readURL(this);
        });
    </script>
@endsection
