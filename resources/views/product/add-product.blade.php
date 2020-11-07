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
                    <h2>Product Add</h2>
                    <p>Welcome to Product Add <span class="bread-ntd">Admin</span></p>
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
    <li class="active"><a href="#description"><i class="icon nalika-edit" aria-hidden="true"></i> Product</a></li>
  </ul>
  <form class="" action="{{ route('product.store') }}" method="post" enctype="multipart/form-data">
  @csrf

<div id="myTabContent" class="tab-content custom-product-edit">
<div class="product-tab-list tab-pane fade active in" id="description">
  <div class="row">
  <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
    <div class="review-content-section">
      <div class="input-group mg-b-pro-edt">
        <span class="input-group-addon"><i class="icon nalika-user" aria-hidden="true"></i></span>
        <input type="text" class="form-control" placeholder="Product Name" name="product_name">
      </div>
      <div class="input-group mg-b-pro-edt">
        <span class="input-group-addon"><i class="icon nalika-edit" aria-hidden="true"></i></span>
        <input type="text" class="form-control" placeholder="Product Title" name="product_title">
      </div>
      <div class="input-group mg-b-pro-edt">
        <span class="input-group-addon"><i class="fa fa-usd" aria-hidden="true"></i></span>
        <input type="text" class="form-control" placeholder="Regular Price" name="product_price">
      </div>
      <div class="input-group mg-b-pro-edt">
        <span class="input-group-addon"><i class="fal fa-sort-size-down" aria-hidden="true"></i></span>
        <input type="text" class="form-control" placeholder="Size" name="product_size">
      </div>
      <div class="input-group mg-b-pro-edt">
        <span class="input-group-addon"><i class="icon nalika-favorites" aria-hidden="true"></i></span>
        <input type="text" class="form-control" placeholder="Quantity" name="product_quantity">
      </div>
      <div class="input-group mg-b-pro-edt">
        <span class="input-group-addon"><i class="fa fa-image" aria-hidden="true"></i></span>
        <input required type="file" class="form-control" name="product_multi_images[]" multiple>
      </div>
    </div>
  </div>
  <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
    <div class="review-content-section">
      <div class="input-group mg-b-pro-edt">
        <span class="input-group-addon"><i class="icon nalika-palette" aria-hidden="true"></i></span>
        <input type="text" class="form-control" placeholder="COLOR" name="product_color">
      </div>
      <div class="input-group mg-b-pro-edt">
        <span class="input-group-addon"><i class="icon nalika-favorites-button" aria-hidden="true"></i></span>
        <input type="text" class="form-control" placeholder="Product Description" name="product_description">
      </div>
      <div class="input-group mg-b-pro-edt">
        <span class="input-group-addon"><i class="fa fa-usd" aria-hidden="true"></i></span>
        <input type="text" class="form-control" placeholder="Sale Price" name="product_sale_price">
      </div>
      <div class="input-group mg-b-pro-edt">
        <span class="input-group-addon"><i class="icon nalika-like" aria-hidden="true"></i></span>
        <input type="text" class="form-control" placeholder="Category" name="product_category">
      </div>
      <div class="input-group mg-b-pro-edt">
        <span class="input-group-addon"><i class="fa fa-image" aria-hidden="true"></i></span>
        <input type="file" class="form-control" placeholder="product_images" name="product_images">
      </div>
      <div class="input-group mg-b-pro-edt">
        <span class="input-group-addon"><i class="icon nalika-favorites" aria-hidden="true"></i></span>
        <input type="text" class="form-control" placeholder="Alert Quantity" name="product_alert_qty">
      </div>
      <div class="input-group mg-b-pro-edt">
        <span class="input-group-addon"><i class="fas fa-band-aid" aria-hidden="true"></i></span>
        <input type="text" class="form-control" placeholder="Brand" name="product_brand">
      </div>
    </div>
  </div>
</div>
  <div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
      <div class="text-center custom-pro-edt-ds">
        <button type="submit" class="btn btn-ctl-bt waves-effect waves-light m-r-10">Submit
        </button>
        <button type="button" class="btn btn-ctl-bt waves-effect waves-light">Discard
        </button>
        <!-- <button type="submit" class="btn btn-ctl-bt waves-effect waves-light">Submit -->
      </div>
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
@endsection
