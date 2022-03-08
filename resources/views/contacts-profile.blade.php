@extends('layouts.master-layouts')
@section('title')
    @lang('translation.Profile')
@endsection

@section('content')
    @component('common-components.breadcrumb')
        @slot('pagetitle') Home @endslot
        @slot('title') Profile @endslot
        @slot('sub_title') View @endslot
    @endcomponent

    <div class="row mb-4">
        <div class="col-xl-4">
            <div class="card h-100">
                <div class="card-body">
                    <a href="{{url('contacts-profile-edit')}}">
                        <button type="button" class="btn btn-success waves-effect waves-light float-end">
                            <i class="fas fa-pencil-alt me-2"></i> Edit Profile
                        </button>
                    </a>
                    <div class="text-center">
                        
                        <div class="clearfix"></div>
                        <div>
                            <img src="{{ URL::asset('/assets/images/users/avatar-4.jpg') }}" alt=""
                                class="avatar-lg rounded-circle img-thumbnail">
                        </div>
                        <h5 class="mt-3 mb-1">Hernandez David</h5>
                        <p class="text-muted">Admin</p>
                        
                    </div>

                    <hr class="my-4">

                    <div class="text-muted">
                        <h5 class="font-size-16">About me</h5>
                        <p>Hi I'm Marcus,has been the industry's standard dummy text To an English person, it will seem like
                            simplified English, as a skeptical Cambridge.</p>
                        <div class="table-responsive mt-4 row">
                            <div class="mt-4 col-lg-6">
                                <p class="mb-1">First Name :</p>
                                <h5 class="font-size-16">David</h5>
                            </div>
                            <div class="mt-4 col-lg-6">
                                <p class="mb-1">Last Name :</p>
                                <h5 class="font-size-16">Hernandez</h5>
                            </div>
                            <div class="mt-4 col-lg-6">
                                <p class="mb-1">Gender :</p>
                                <h5 class="font-size-16">Male</h5>
                            </div>
                            <div class="mt-4 col-lg-6">
                                <p class="mb-1">City :</p>
                                <h5 class="font-size-16">Miami</h5>
                            </div>
                            <div class="mt-4 col-lg-6">
                                <p class="mb-1">Country :</p>
                                <h5 class="font-size-16">United States</h5>
                            </div>
                            <div class="mt-4 col-lg-6">
                                <p class="mb-1">E-mail :</p>
                                <h5 class="font-size-16">david18@gmail.com</h5>
                            </div>
                            <div class="mt-4 col-lg-6">
                                <p class="mb-1">Date of birth :</p>
                                <h5 class="font-size-16">20/Jun/1969</h5>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-8">
            <div class="card mb-0">
                <!-- Nav tabs -->
                <ul class="nav nav-tabs nav-tabs-custom nav-justified" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" data-bs-toggle="tab" href="#social" role="tab">
                            <i class="fab fa-audible font-size-20"></i>
                            <span class="d-none d-sm-block">Social</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" href="#payment" role="tab">
                            <i class="fas fa-money-bill-alt font-size-20"></i>
                            <span class="d-none d-sm-block">Payment & wallet</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" href="#options" role="tab">
                            <i class="fab fa-whmcs font-size-20"></i>
                            <span class="d-none d-sm-block">Option</span>
                        </a>
                    </li>
                </ul>
                <!-- Tab content -->
                <div class="tab-content p-4">
                    <div class="tab-pane active" id="social" role="tabpanel">
                        <div>
                            <div>
                                <h4 class="font-size-18 pb-2 mb-4 border-bottom border-2">Online Profile</h4>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <ul class="activity-feed mb-0 ps-2">
                                            <li class="feed-item">
                                                <div class="feed-item-list">
                                                    <h5 class="font-size-16"><i class="fab fa-facebook me-2"></i>Facebook</h5>
                                                    <p>https://facebook.com/DavidHernandez</p>
                                                </div>
                                            </li>
                                            <li class="feed-item">
                                                <div class="feed-item-list">
                                                    <h5 class="font-size-16"><i class="fab fa-twitter me-2"></i>Twitter</h5>
                                                    <p>No link matched</p>
                                                </div>
                                            </li>
                                            <li class="feed-item">
                                                <div class="feed-item-list">
                                                    <h5 class="font-size-16"><i class="fab fa-instagram-square me-2"></i>Instagram</h5>
                                                    <p>https://instagram.com/DavidHernandez</p>
                                                </div>
                                            </li>
                                            <li class="feed-item">
                                                <div class="feed-item-list">
                                                    <h5 class="font-size-16"><i class="fab fa-soundcloud me-2"></i>SoundCloud</h5>
                                                    <p>https://soudcloud.com/DavidHernandez</p>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-6">
                                        <ul class="activity-feed mb-0 ps-2">
                                            <li class="feed-item">
                                                <div class="feed-item-list">
                                                    <h5 class="font-size-16"><i class="fab fa-youtube me-2"></i>YouTube</h5>
                                                    <p>No link matched</p>
                                                </div>
                                            </li>
                                            <li class="feed-item">
                                                <div class="feed-item-list">
                                                    <h5 class="font-size-16"><i class="fas fa-network-wired me-2"></i>Website</h5>
                                                    <p>https://portofolio.com/DavidHernandez</p>
                                                </div>
                                            </li>
                                            <li class="feed-item">
                                                <div class="feed-item-list">
                                                    <h5 class="font-size-16"><i class="fab fa-patreon me-2"></i>Patreon</h5>
                                                    <p>https://patreon.com/DavidHernandez</p>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="payment" role="tabpanel">
                        <h4 class="font-size-18 pb-2 mb-4 border-bottom border-2">Payment Address and Crypto Wallet</h4>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="mb-4">
                                    <p class="mb-1">Paypal :</p>
                                    <h5 class="font-size-16">jdavid18@gmail.com</h5>
                                </div>
                                <div class="mb-4">
                                    <p class="mb-1">Stripe :</p>
                                    <h5 class="font-size-16">jdavidstripe18@outlook.com</h5>
                                </div>
                                <div class="mb-4">
                                    <p class="mb-1">Zelle :</p>
                                    <h5 class="font-size-16">No address matched</h5>
                                </div>
                                <div class="mb-4">
                                    <p class="mb-1">Venmo :</p>
                                    <h5 class="font-size-16">No address matched</h5>
                                </div>
                                <div class="mb-4">
                                    <p class="mb-1">CashApp :</p>
                                    <h5 class="font-size-16">No address matched</h5>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-4">
                                <p class="mb-1">BitCoin :</p>
                                    <h5 class="font-size-16">1BvBMSEYstWetqTFn5Au4m4GFg7xJaNVN2 </h5>
                                </div>
                                <div class="mb-4">
                                    <p class="mb-1">XRP :</p>
                                    <h5 class="font-size-16">No address matched</h5>
                                </div>
                                <div class="mb-4">
                                    <p class="mb-1">Ether :</p>
                                    <h5 class="font-size-16">0x0AD5970F352f1E1Ef364928D8D1C2e66854e4b51</h5>
                                </div>
                                <div class="mb-4">
                                    <p class="mb-1">Degecoin :</p>
                                    <h5 class="font-size-16">No address matched</h5>
                                </div>
                                <div class="mb-4">
                                    <p class="mb-1">Litecoin :</p>
                                    <h5 class="font-size-16">jdavid18@gmail.com</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="options" role="tabpanel">
                        <h4 class="font-size-18 pb-2 mb-4 border-bottom border-2">Options</h4>
                        <div class="row my-4">
                            <div class="col-lg-2 d-flex align-items-center justify-content-start">
                                Email Address
                            </div>
                            <div class="col-lg-10">
                                jdavid18@gmail.com
                            </div>
                        </div>
                        <div class="row my-4">
                            <div class="col-lg-2 d-flex align-items-center justify-content-start">
                                Sign in with
                            </div>
                            <div class="col-lg-10 row">
                                <button type="button" class="btn btn-light btn-rounded mx-2" style="width: 100px;">Facebook</button>
                                <button type="button" class="btn btn-secondary btn-rounded mx-2" style="width: 100px;">Google</button>
                            </div>
                        </div>
                        <div class="row my-4">
                            <div class="col-lg-2 d-flex align-items-start justify-content-start">
                                Communication
                            </div>
                            <div class="col-lg-10 row">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="communiation_private_messages" checked="">
                                    <label class="form-check-label" for="communiation_private_messages">
                                        Disable private messages
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="communiation_comments">
                                    <label class="form-check-label" for="communiation_comments">
                                        Disable comments
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="row my-4">
                            <div class="col-lg-2 d-flex align-items-start justify-content-start">
                                Email notifications
                            </div>
                            <div class="col-lg-10 row">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="email_private_messages" checked="">
                                    <label class="form-check-label" for="email_private_messages">
                                        private messages
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="email_news">
                                    <label class="form-check-label" for="email_news">
                                        Send me latest news and tips
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="email_important" checked="">
                                    <label class="form-check-label" for="email_important">
                                        Send me latest important notifications
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="email_comments" checked="">
                                    <label class="form-check-label" for="email_comments">
                                        Notify me of new comments
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="email_new_images">
                                    <label class="form-check-label" for="email_new_images">
                                        Notify me of new images uploaded by friends
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end row -->
@endsection
