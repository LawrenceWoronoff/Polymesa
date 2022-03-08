@extends('layouts.master-layouts')
@section('title')
    @lang('translation.Settings')
@endsection

@section('content')
    @component('common-components.breadcrumb')
        @slot('pagetitle') Home @endslot
        @slot('title') @lang('translation.Settings') @endslot
        @slot('sub_title')  @endslot
    @endcomponent

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-end align-items-center mb-3">
                        <button type="button" class="btn btn-success waves-effect waves-light me-3" id="add_subcategory">
                            <i class="mdi mdi-check me-1"></i> Save
                        </button>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-sm-12">
                            <div class="d-flex justify-content-start align-items-center mb-3">
                                <h4 class="card-title font-size-16">User Type (By Order) <i class="fas fa-long-arrow-alt-down me-1"></i></h4>
                            </div>
                            <div class="mb-3 row">
                                <label for="example-text-input" class="col-md-3 col-form-label">Freshman</label>
                                <div class="col-md-9">
                                    <input class="form-control" type="number" value="David" id="example-text-input">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="example-text-input" class="col-md-3 col-form-label">Junior</label>
                                <div class="col-md-9">
                                    <input class="form-control" type="number" value="David" id="example-text-input">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="example-text-input" class="col-md-3 col-form-label">Senior</label>
                                <div class="col-md-9">
                                    <input class="form-control" type="number" value="David" id="example-text-input">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="example-text-input" class="col-md-3 col-form-label">Unlimited</label>
                                <div class="col-md-9">
                                    <!-- <input class="form-control" type="number" value="David" id="example-text-input"> -->
                                </div>
                            </div>
                            <p class="text-info text-start small">Note: The app will restrict the quantity of picture, videos, etc every period of time. To avoid over saturation and quality control.</p>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <div class="d-flex justify-content-start align-items-center mb-3">
                                <h4 class="card-title font-size-16">Minimum Likes by Registered Users Community Voting</h4>
                            </div>
                            <div class="mb-3 row">
                                <label for="example-text-input" class="col-md-3 col-form-label">Minimum likes</label>
                                <div class="col-md-9">
                                    <input class="form-control" type="number" value="David" id="example-text-input">
                                </div>
                            </div>
                            <p class="text-info text-start small">Note: The app will show the pictures with more than "x" likes from other users. Users are the one who curate the pictures/media".</p>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
    <!-- end row -->

@endsection
