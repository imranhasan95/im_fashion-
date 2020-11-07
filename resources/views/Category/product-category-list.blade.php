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
                <h2>Product Category List</h2>
                <p>Welcome to  All Product Category List <span class="bread-ntd">Admin</span></p>
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
<div class="product-status mg-b-30">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="product-status-wrap">
            <h4>Products Category List</h4>
          <div class="add-product">
            <a href="{{ route('productcategory.create') }}">Add Product Category </a>
          </div>
          @if (session('edit_status'))
               <div class="alert alert-success" role="alert">
                   {{ session('edit_status') }}
               </div>
           @endif
          <table>
            <tr>
              <th>Category Name</th>
              <th>Status</th>
              <th>Setting</th>
            </tr>

            @foreach ($pro_cetagores as $pro_cetagory)
            <tr>
              <td> {{ $pro_cetagory->category_name }}</td>
              <td>
                <button class="ps-setting">Paused</button>
              </td>
              <td class="text-center">
                <a href="{{ route('productcategory.edit', [$pro_cetagory->id]) }}"> <button type="submit" data-toggle="tooltip" title="Edit" class="pd-setting-ed" >
                  <i class="fa fa-pencil-square-o" aria-hidden="true"></i></button></a>

                  <button type="hidden" style="margin-left:-20px;color: #1b2a47;display: none;">
                     <form class="text-left" method="POST" action="{{ route('productcategory.destroy', $pro_cetagory->id) }}">
                       @csrf
                       @method('delete')
                       <button class="pd-setting-ed" data-toggle="tooltip" title="Trash" type="submit">
                      <i class="fa fa-trash-o" aria-hidden="true"></i>
                      </button>
                    </form>
                    </button>
              </td>
            </tr>
            @endforeach
          </table>
          <div class="custom-pagination text-center">
            <ul class="pagination">
              <li class="page-item"><a class="page-link" href="#">Previous</a></li>
              <li class="page-item"><a class="page-link" href="#">1</a></li>
              <li class="page-item"><a class="page-link" href="#">2</a></li>
              <li class="page-item"><a class="page-link" href="#">3</a></li>
              <li class="page-item"><a class="page-link" href="#">Next</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
