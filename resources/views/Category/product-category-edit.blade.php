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
                    <h2>Product Category Edite</h2>
                    <p>Welcome to Product Edite Category<span class="bread-ntd">Admin</span></p>
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
  
        <div class="review-tab-pro-inner">
          <ul id="myTab3" class="tab-review-design">
            <li class="active"><a href="#description"><i class="icon nalika-edit" aria-hidden="true"></i> Product Category Edite</a></li>
          </ul>
        <div id="myTabContent" class="tab-content custom-product-edit">

          <form class="" action="{{ route('productcategory.update', [$category_info->id]) }}" method="post">
            @csrf


              <div class="product-tab-list tab-pane fade active in" id="description">
                <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                  <div class="review-content-section">

                    <div class="input-group mg-b-pro-edt">
                      <span class="input-group-addon"><i class="icon nalika-favorites" aria-hidden="true"></i></span>
                      <input type="hidden" class="form-control" name="id" value="{{ $category_info->id }}">
                      <input type="hidden" name="_method" value="PUT">
                      <input type="text" class="form-control" placeholder=" Category Name Edite" value="{{ $category_info->category_name }}" name="category_name">
                    </div>
                  </div>
                </div>
              </div>
                <div class="row">
                  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="text-center custom-pro-edt-ds">
                      <button type="submit" class="btn btn-ctl-bt waves-effect waves-light m-r-10">Edite</button>
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
