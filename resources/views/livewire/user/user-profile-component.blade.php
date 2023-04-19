<div style="margin-top: -20px">
    <div class="breadcrumb-area" style="margin-top: -20px">
        <div class="container">
            <div class="breadcrumb-content">
                <ul>
                    <li><a href="/">Home</a></li>
                    <li class="active">User Profile</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="page-section mb-60">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-sm-12 col-md-12 col-xs-12 col-lg-6 mb-30">
                    <!-- My Account Page Start -->
                    <div class="myaccount-page-wrapper">
                        <!-- My Account Tab Menu Start -->
                        <div class="row justify-content-center">
                            <!-- My Account Tab Content Start -->
                            <div class="col-lg-12 col-md-8">
                                <div class="tab-content" id="myaccountContent">
                                    <!-- Single Tab Content Start -->
                                    <div class="tab-pane fade show active" id="orders" role="tabpanel">
                                        @if (Session::has('message'))
                                            <div class="alert alert-success" role="alert">
                                                {{ Session::get('message') }}</div>
                                        @endif
                                        <div class="myaccount-content">
                                            <h3>
                                                <div class="row">
                                                    <div class="col">My Profile</div>
                                                    <div class="col">
                                                        {{-- <a href="{{ route('user.editprofile') }}"
                                                            class="btn btn-danger pull-right" role="button">Update
                                                            Profile</a> --}}
                                                    </div>
                                                </div>
                                            </h3>
                                            <div class="row">
                                                <div class="col-md-4">
                                                    @if ($user->profile->image)
                                                        <img src="{{ asset('assets/images/profile') }}/{{ $user->profile->image }}"
                                                            alt="Profile Image" width="100%">
                                                    @else
                                                        <img src="{{ asset('assets/images/profile/default.jpg') }}"
                                                            alt="Default Profile Image" width="100%">
                                                    @endif
                                                </div>
                                                <div class="col-md-8">
                                                    <p><b>Name: </b>{{ $user->name }}</p>
                                                    <br>
                                                    <p><b>Email: </b>{{ $user->email }}</p>
                                                    <br>
                                                    <p><b>Phone: </b>{{ $user->profile->mobile }}</p>
                                                    <hr>
                                                    <p><b>Line1: </b>{{ $user->profile->line1 }}</p>
                                                    <p><b>Line2: </b>{{ $user->profile->line2 }}</p>
                                                    <br>
                                                    <p><b>City: </b>{{ $user->profile->city }}</p>
                                                    <p><b>Province: </b>{{ $user->profile->province }}</p>
                                                    <p><b>Zip Code: </b>{{ $user->profile->zipcode }}</p>
                                                    <br>
                                                    <p><b>Country: </b>{{ $user->profile->country }}</p>
                                                    <br>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Single Tab Content End -->
                                </div>
                            </div> <!-- My Account Tab Content End -->
                        </div>
                    </div> <!-- My Account Page End -->
                </div>
            </div>
        </div>
    </div>
</div>
