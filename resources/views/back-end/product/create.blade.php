@extends('layouts.app')

@section('content')
<div class="page-subheader mb-30">
  <div class="container-fluid">
    <div class="row align-items-center">
        <div class="col-md-7">
            <div class="list">
                <div class="list-item pl-0">
                    <div class="list-thumb ml-0 mr-3 pr-3  b-r text-muted">
                        <i class="icon-Magic-Wand"></i>
                    </div>
                    <div class="list-body">
                        <div class="list-title fs-2x">
                            <h3>Products</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
</div><!-- page-sub-Header end-->

<div class="row">
    <div class="col-lg-10 mb-30">
        <div class="portlet-box portlet-gutter ui-buttons-col mb-30">
            <div class="portlet-header flex-row flex d-flex align-items-center b-b">
                <div class="flex d-flex flex-column">
                    <h3>Input types</h3> 
                    <span class="portlet-subtitle">Bootstrap Default Form elements</span>
                </div>
            </div>
            <div class="portlet-body">
                <form action="{{route('product.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" class="form-control" name="name" id="name">
                    </div>
                    <div class="form-group">
                        <label>ingredients</label>
                        <textarea class="form-control" name="ingredients" id="ingredients" cols="10" rows="2"></textarea>
                    </div>
                    <div class="form-group">
                        <label>Description</label>
                        <textarea class="form-control" name="description" id="description" cols="10" rows="10"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlFile1">Add an image</label>
                        <input type="file" class="form-control-file" id="image" name="image">
                    </div>
                    <button class="btn btn-success" type="submit">
                        Create Product
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>    
@endsection