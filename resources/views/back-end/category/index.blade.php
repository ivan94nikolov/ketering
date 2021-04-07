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
<div class="row">
  <div class="col-lg-6 mb-30">
  @if(session()->has('success_message'))
    <div class="aler alert-success">
      {{session()->get('success_message')}}
    </div>
  @endif
  @if($errors->any())
    <div class="alert alert-danger">
      <ul class="list-group">
        @foreach($errors->all() as $error)
          <li class="list-group-item text-danger">
            {{$error}}
          </li>
        @endforeach
      </ul>
    </div>
  @endif


    <form action="{{route('category.store')}}" method="POST">
      @csrf
      <label><h5>Enter new category</h5></label>
        <div class="form-group bg-white">
          <input id="name" name="name" type="text" class="form-control" placeholder="Enter new category">
        </div>
        <button class="btn btn-rounded btn-success mr-1 mb-2" type="submit">Add new category</button>
      </form>

    <div class="portlet-box">
      <div class="portlet-header flex-row flex d-flex align-items-center">
        <div class="flex d-flex flex-column">
          <h3>Categories</h3>
        </div>                                          
      </div>
      <div class="portlet-body no-padding">
        <table class="table mb-0">
        <thead>
          <tr>
            <th></th>
            <th>Category</th>
            <th></th>
            <th></th>
          </tr>
        </thead>
        <tbody>
        @foreach($categories as $category)
          <tr>
            <th scope="row">{{$category->id}}</th>
              <td>{{$category->name}}</td>
              <td class="float-right">
                <a href="{{ route('category.edit', $category->id) }}" class="btn btn-teal mr-1 mb-2">Edit</a>
              </td>
              <td>
                <form action="{{ route('category.destroy', $category->id) }}" method="POST">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-primary mr-1 mb-2" type="submit">Delete</button>
                </form>
              </td>
            </tr>
          @endforeach
          </tbody>
        </table>
      </div>
    </div>
                              

      
    </div>
  </div>
@endsection