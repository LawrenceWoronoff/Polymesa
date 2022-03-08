@extends('layouts.master-layouts')
@section('title')
    @lang('translation.UserAdd')
@endsection

@section('content')
    @component('common-components.breadcrumb')
        @slot('pagetitle') Users @endslot
        @slot('title') Add User @endslot
        @slot('sub_title')  @endslot
    @endcomponent

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body p-4">
                    <div class="row">
                        <div class="col-lg-4 px-4">  <!-- Personal Data -->
                            <h4 class="font-size-18 pb-2 mb-4 border-bottom border-2">Personal Data</h4>
                            <div class="mb-4 row">
                                <label for="example-text-input" class="col-md-3 col-form-label">Username</label>
                                <div class="col-md-9">
                                    <input class="form-control" type="text" value="" id="example-text-input">
                                </div>
                            </div>
                            <!-- Image Part -->
                            <div class="mb-3 row">
                                <label for="example-text-input" class="col-md-3 col-form-label">Profile Image</label>
                                <div class="col-md-9">
                                    <div class="profile-pic-wrapper">
                                        <div class="pic-holder">
                                            <!-- uploaded pic shown here -->
                                            <img id="profilePic" class="pic" src="https://source.unsplash.com/random/150x150">

                                            <label for="newProfilePhoto" class="upload-file-block">
                                            <div class="text-center">
                                                <div class="mb-2">
                                                <i class="fa fa-camera fa-2x"></i>
                                                </div>
                                                <div class="text-uppercase">
                                                Update <br /> Profile Photo
                                                </div>
                                            </div>
                                            </label>
                                            <Input class="uploadProfileInput" type="file" name="profile_pic" id="newProfilePhoto" accept="image/*" style="display: none;" />
                                        </div>

                                        </hr>
                                        <p class="text-info text-center small">Note: Selected image will not be uploaded </br>until you click save.</p>
                                    </div>
                                </div>
                            </div>

                            <!-- --------- -->
                            <div class="mb-3 row">
                                <label for="example-text-input" class="col-md-3 col-form-label">Please select</label>
                                <div class="col-md-9">
                                    <select class="form-select" style="max-width: 100px;">
                                        <option selected>Male</option>
                                        <option>Female</option>
                                    </select>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="example-text-input" class="col-md-3 col-form-label">First name</label>
                                <div class="col-md-9">
                                    <input class="form-control" type="text" value="" id="example-text-input">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="example-text-input" class="col-md-3 col-form-label">Last name</label>
                                <div class="col-md-9">
                                    <input class="form-control" type="text" value="" id="example-text-input">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="example-text-input" class="col-md-3 col-form-label">City</label>
                                <div class="col-md-9">
                                    <input class="form-control" type="text" value="" id="example-text-input">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="example-text-input" class="col-md-3 col-form-label">Country</label>
                                <div class="col-md-9">
                                    <input class="form-control" type="text" value="" id="example-text-input">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="example-text-input" class="col-md-3 col-form-label">Date of birth</label>
                                <div class="col-md-9">
                                    <input class="form-control" type="date" value="" id="example-date-input" style="max-width:170px;">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="example-text-input" class="col-md-3 col-form-label">About me</label>
                                <div class="col-md-9">
                                    <textarea class="form-control" placeholder="In a few words, tell us about yourself" rows="3"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 px-4">  <!-- Online Profile & Options -->
                            <h4 class="font-size-18 pb-2 mb-4 border-bottom border-2">Online Profiles</h4>
                            <div class="mb-3 row">
                                <label for="example-text-input" class="col-md-4 col-form-label">Facebook</label>
                                <div class="col-md-8">
                                    <input class="form-control" type="text" value="" id="example-text-input" placeholder="https://www.facebook.com/...">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="example-text-input" class="col-md-4 col-form-label">Twitter</label>
                                <div class="col-md-8">
                                    <input class="form-control" type="text" value="" id="example-text-input" placeholder="https://www.twitter.com/...">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="example-text-input" class="col-md-4 col-form-label">Instagram</label>
                                <div class="col-md-8">
                                    <input class="form-control" type="text" value="" id="example-text-input" placeholder="https://www.instagram.com/...">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="example-text-input" class="col-md-4 col-form-label">SoundCloud</label>
                                <div class="col-md-8">
                                    <input class="form-control" type="text" value="" id="example-text-input" placeholder="https://www.soundcloud.com/...">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="example-text-input" class="col-md-4 col-form-label">YouTube</label>
                                <div class="col-md-8">
                                    <input class="form-control" type="text" value="" id="example-text-input" placeholder="https://www.youtube.com/...">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="example-text-input" class="col-md-4 col-form-label">Website</label>
                                <div class="col-md-8">
                                    <input class="form-control" type="text" value="" id="example-text-input" placeholder="Your website url">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="example-text-input" class="col-md-4 col-form-label">Patreon</label>
                                <div class="col-md-8">
                                    <input class="form-control" type="text" value="" id="example-text-input" placeholder="Patreon">
                                </div>
                            </div>

                            <h4 class="font-size-18 pb-2 mt-4 mb-4 border-bottom border-2">Options</h4>
                            <div class="mb-3 row">
                                <label for="example-text-input" class="col-md-4 col-form-label">Email address</label>
                                <div class="col-md-8">
                                    <input class="form-control" type="text" value="" id="example-text-input" placeholder="Email Address">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="example-text-input" class="col-md-4 col-form-label">Email address</label>
                                <div class="col-md-8">
                                    <button type="button" class="btn btn-light btn-rounded mx-2" style="width: 100px;">Facebook</button>
                                    <button type="button" class="btn btn-light btn-rounded mx-2" style="width: 100px;">Google</button>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="example-text-input" class="col-md-4 col-form-label pt-0">Communication</label>
                                <div class="col-md-8">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="communiation_private_messages">
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
                            <div class="mb-3 row">
                                <label for="example-text-input" class="col-md-4 col-form-label pt-0">Email notifications</label>
                                <div class="col-md-8">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="email_private_messages" >
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
                                        <input class="form-check-input" type="checkbox" id="email_important" >
                                        <label class="form-check-label" for="email_important">
                                            Send me latest important notifications
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="email_comments" >
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
                        <div class="col-lg-4 px-4">  <!-- Crypto Wallets & To receive donations -->
                            <h4 class="font-size-18 pb-2 mb-4 border-bottom border-2">Crypto Wallets</h4>
                            <div class="mb-3 row">
                                <label for="example-text-input" class="col-md-3 col-form-label">Bitcoin</label>
                                <div class="col-md-9">
                                    <input class="form-control" type="text" value="" id="example-text-input">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="example-text-input" class="col-md-3 col-form-label">XRP</label>
                                <div class="col-md-9">
                                    <input class="form-control" type="text" value="" id="example-text-input">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="example-text-input" class="col-md-3 col-form-label">Ether</label>
                                <div class="col-md-9">
                                    <input class="form-control" type="text" value="" id="example-text-input">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="example-text-input" class="col-md-3 col-form-label">Degecoin</label>
                                <div class="col-md-9">
                                    <input class="form-control" type="text" value="" id="example-text-input">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="example-text-input" class="col-md-3 col-form-label">Litecoin</label>
                                <div class="col-md-9">
                                    <input class="form-control" type="text" value="" id="example-text-input">
                                </div>
                            </div>

                            <h4 class="font-size-18 pb-2 mt-4 mb-4 border-bottom border-2">To receive donations</h4>
                            <div class="mb-3 row">
                                <label for="example-text-input" class="col-md-3 col-form-label">Paypal</label>
                                <div class="col-md-9">
                                    <input class="form-control" type="text" value="" id="example-text-input">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="example-text-input" class="col-md-3 col-form-label">Stripe</label>
                                <div class="col-md-9">
                                    <input class="form-control" type="text" value="" id="example-text-input">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="example-text-input" class="col-md-3 col-form-label">Zelle</label>
                                <div class="col-md-9">
                                    <input class="form-control" type="text" value="" id="example-text-input">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="example-text-input" class="col-md-3 col-form-label">Venmo</label>
                                <div class="col-md-9">
                                    <input class="form-control" type="text" value="" id="example-text-input">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="example-text-input" class="col-md-3 col-form-label">CashApp</label>
                                <div class="col-md-9">
                                    <input class="form-control" type="text" value="" id="example-text-input">
                                </div>
                            </div>

                            <h3 class="font-size-24 pb-2 mb-2 text-danger" style="margin-top:80px; cursor:pointer;">Deactive account</h3>
                            <button type="button" class="px-4 w-100 font-size-18 btn btn-success btn-rounded waves-effect waves-light">Save</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end row -->

@endsection

@section('script-bottom')
    <script>
        $(document).on("change", ".uploadProfileInput", function () {
        var triggerInput = this;
        var currentImg = $(this).closest(".pic-holder").find(".pic").attr("src");
        var holder = $(this).closest(".pic-holder");
        var wrapper = $(this).closest(".profile-pic-wrapper");
        $(wrapper).find('[role="alert"]').remove();
        var files = !!this.files ? this.files : [];
        if (!files.length || !window.FileReader) {
            return;
        }
        if (/^image/.test(files[0].type)) {
            // only image file
            var reader = new FileReader(); // instance of the FileReader
            reader.readAsDataURL(files[0]); // read the local file

            reader.onloadend = function () {
            $(holder).addClass("uploadInProgress");
            $(holder).find(".pic").attr("src", this.result);
            $(holder).append(
                '<div class="upload-loader"><div class="spinner-border text-primary" role="status"><span class="sr-only">Loading...</span></div></div>'
            );

            // Dummy timeout; call API or AJAX below
            setTimeout(() => {
                $(holder).removeClass("uploadInProgress");
                $(holder).find(".upload-loader").remove();
                // If upload successful
                if (Math.random() < 0.9) {
                $(wrapper).append(
                    '<div class="snackbar show" role="alert"><i class="fa fa-check-circle text-success"></i> Profile image updated successfully</div>'
                );

                // Clear input after upload
                $(triggerInput).val("");

                setTimeout(() => {
                    $(wrapper).find('[role="alert"]').remove();
                }, 3000);
                } else {
                $(holder).find(".pic").attr("src", currentImg);
                $(wrapper).append(
                    '<div class="snackbar show" role="alert"><i class="fa fa-times-circle text-danger"></i> There is an error while uploading! Please try again later.</div>'
                );

                // Clear input after upload
                $(triggerInput).val("");
                setTimeout(() => {
                    $(wrapper).find('[role="alert"]').remove();
                }, 3000);
                }
            }, 1500);
            };
        } else {
            $(wrapper).append(
            '<div class="alert alert-danger d-inline-block p-2 small" role="alert">Please choose the valid image.</div>'
            );
            setTimeout(() => {
            $(wrapper).find('role="alert"').remove();
            }, 3000);
        }
        });
    </script>
@endsection