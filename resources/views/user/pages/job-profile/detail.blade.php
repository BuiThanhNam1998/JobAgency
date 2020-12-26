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
                        <form id="contact" action="{{ route('user.profile.update', ['id' => $profile->id]) }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-lg-8 col-md-8 col-sm-8">
                                    <div class="">
                                        <label class="label-profile-form" for="name">Full Name</label>
                                        <fieldset>
                                            <input name="user_name" type="text" value="{{$profile->user_name}}" class="form-control" id="name" placeholder="Full Name" required="">
                                        </fieldset>
                                    </div>
                                    <div class="">
                                        <label class="label-profile-form" for="dob">Date of Birth</label>
                                        <fieldset>
                                            <input name="date_of_birth" type="date" value="{{$profile->date_of_birth}}" class="form-control" id="dob" required="">
                                        </fieldset>
                                    </div>
                                    <div class="">
                                        <label class="label-profile-form">Sex</label>
                                        <select class="" id="sex" name="sex">
                                            <option value="1" @if($profile->sex == 1) {{ 'selected' }} @endif>Male</option>
                                            <option value="2" @if($profile->sex == 2) {{ 'selected' }} @endif>Female</option>
                                            <option value="3" @if($profile->sex == 3) {{ 'selected' }} @endif>Others</option>
                                        </select>
                                    </div>
                                    <div class="">
                                        <label class="label-profile-form" for="phone">Phone Contact</label>
                                        <fieldset>
                                            <input name="phone_number" value="{{$profile ->phone_number}}" type="text" class="form-control" id="phone" placeholder="Phone Contact" required="">
                                        </fieldset>
                                    </div>
                                    <div class="">
                                        <label class="label-profile-form" for="email">Email</label>
                                        <fieldset>
                                            <input name="email" value="{{$profile ->email}}" type="text" class="form-control" id="email" placeholder="E-Mail Address" required="">
                                        </fieldset>
                                    </div>
                                    <div class="">
                                        <label  class="label-profile-form" for="address">Address</label>
                                        <fieldset>
                                            <input name="address" value="{{$profile ->address}}" type="text" class="form-control" id="adr" placeholder="Address" required="">
                                        </fieldset>
                                    </div>
                                    <div class="">
                                        <label class="label-profile-form" for="exp">Experiences</label>
                                        <fieldset>
                                            <textarea name="experience"  rows="5" class="form-control" id="exp" placeholder="Experiences" required="">{{$profile ->experience}}</textarea>
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
                                        <img src="{{ asset($profile->image) }}"
                                             class="img-profile"
                                             alt="{{$profile->user_name}}"
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
