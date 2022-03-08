@extends('layouts.master-layouts')
@section('title')
    @lang('translation.Community_Voting')
@endsection

@section('content')
    @component('common-components.breadcrumb')
        @slot('pagetitle') Home @endslot
        @slot('title') @lang('translation.Community_Voting') @endslot
        @slot('sub_title')  @endslot
    @endcomponent

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body p-4">
                    <div class="pb-2 mb-4 border-bottom border-2 row d-flex align-items-center">
                        <div class="col-md-1 col-sm-12">
                            <h4 class="font-size-18 fw-normal">831 Images</h4>
                        </div>
                        <div class="col-md-1 col-sm-12 mb-1">
                            <div class="btn-group">
                                <button type="button" class="btn btn-light dropdown-toggle font-size-18 fw-normal" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="background: transparent; border: transparent; padding: 0; color: #495057">Statistics <i class="mdi mdi-chevron-down"></i></button>
                                <div class="dropdown-menu mt-2 dropdown-responsive" style="margin: 0px; background:#1e1e1e;">
                                    <a class="dropdown-item hover-none" style="color: #bdbaba;">You've voted on 472 images. Thanks!</a>
                                    <a class="dropdown-item hover-none" style="color: #bdbaba;">You accepted 66 out of 175 approved images.</a>
                                    <a class="dropdown-item hover-none" style="color: #bdbaba;">You rejected 198 out of 237 declined images</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item hover-none" style="color: green;">Well done!</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2 col-sm-12">
                            <h4 class="font-size-18 fw-normal" style="cursor: pointer;">Recently declined</h4>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-2">
                            <div class="d-flex justify-content-end mb-4">
                                <button type="button" class="btn btn-danger btn-rounded waves-effect font-size-20 mx-2"><i class="dripicons-cross"></i></button>
                                <button type="button" class="btn btn-success btn-rounded waves-effect font-size-20 mx-2"><i class="fas fa-check"></i></button>
                            </div>
                            <div class="d-flex justify-content-end">
                                <p class="font-size-16 hover-danger" style="cursor:pointer;"><i class="fas fa-flag me-2"></i>Report</p>
                            </div>
                            <div class="d-flex justify-content-end">
                                <p class="font-size-16 hover-success" style="cursor:pointer;"><i class="fas fa-bookmark me-2"></i>Add to collection</p>
                            </div>
                        </div>
                        <div class="col-lg-10">
                            <figure class="zoom img-fluid" onmousemove="zoom(event)" style="background-image: url('/assets/images/small/background1.jpg')">
                                <img src="{{ URL::asset('/assets/images/small/background1.jpg') }}" />
                                
                            </figure>
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
    function zoom(e){
    var zoomer = e.currentTarget;
    e.offsetX ? offsetX = e.offsetX : offsetX = e.touches[0].pageX
    e.offsetY ? offsetY = e.offsetY : offsetX = e.touches[0].pageX
    x = offsetX/zoomer.offsetWidth*100
    y = offsetY/zoomer.offsetHeight*100
    zoomer.style.backgroundPosition = x + '% ' + y + '%';
    }
</script>
@endsection