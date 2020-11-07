@extends('layouts.backend')

@section('content')
  <div class="breadcome-area">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
          <div class="breadcome-list">
            <div class="row">
              <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                <div class="breadcomb-wp">
                  <div class="breadcomb-icon">
                    <i class="icon nalika-home"></i>
                  </div>
                  <div class="breadcomb-ctn">
                    <h2>Product Category Add</h2>
                    <p>Welcome to Product Add Category<span class="bread-ntd">Admin</span></p>
                  </div>
                </div>
              </div>
              <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                <div class="breadcomb-report">
                  <button data-toggle="tooltip" data-placement="left" title="Download Report" class="btn"><i class="icon nalika-download"></i></button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>

<div class="single-product-tab-area mg-b-30">

  <div class="single-pro-review-area">
    <div class="container-fluid">
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                @if (session('status'))
                  <div class="alert alert-success" role="alert">
                      {{ session('status') }}
                  </div>
                @endif
        <div class="review-tab-pro-inner">
          <ul id="myTab3" class="tab-review-design">
            <li class="active"><a href="#description"><i class="icon nalika-edit" aria-hidden="true"></i> Product Category</a></li>
          </ul>
        <div id="myTabContent" class="tab-content custom-product-edit">

          <form class="" action="{{ route('productcategory.store') }}" method="post">
            @csrf

              <div class="product-tab-list tab-pane fade active in" id="description">
                <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                  <div class="review-content-section">

                    <div class="input-group mg-b-pro-edt">
                      <span class="input-group-addon"><i class="icon nalika-favorites" aria-hidden="true"></i></span>
                      <input type="text" class="form-control" placeholder=" Category Name" name="category_name">
                       <input type="hidden" class="form-control" name="added_by" value="{{ Auth::user()->id ?? ""}}">
                      @error ('category_name')
                        <span class="text-danger">{{ $message }}</span>
                      @enderror
                    </div>
                  </div>
                </div>
              </div>
                <div class="row">
                  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="text-center custom-pro-edt-ds">
                      <button type="submit" class="btn btn-ctl-bt waves-effect waves-light m-r-10">Submit
                      </button>
                    </div>
                  </div>
                </div>
              </div>

              </form>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
</div>
</div>
@endsection
