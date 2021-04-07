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
                                <h3>Widgets</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</div><!-- page-sub-Header end-->
<div class="page-content">
    <div class="row">
        <div class = "col-lg-6 mb-30">
            <form action="{{route('category.update', $Category->id)}}" method="POST">
                @csrf
                @method('PUT')
                <label><h5>Enter new category</h5></label>
                <div class="form-group bg-white">
                    <input id="name" name="name" type="text" class="form-control" value="{{  isset($Category) ? $Category->name : '' }}">
                </div>
                <button class="btn btn-rounded btn-primary mr-1 mb-2" type="submit">Update category</button>
            </form>
        </div>
    </div>
@endsection