@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        @foreach ($categories as $category)
        <div class="col-md-4">
            <h3>{{$category->name}}</h3>
            <hr>
            @foreach ($category->children as $sub)
                <h5><a href="">{{$sub->name}}</a> (x)</h5>
            @endforeach
        </div>
        @endforeach
    </div>
</div>
<style>
  .wrapper{
    background: #ededed;
    padding: 30px;
    margin: 20px 0px;
    border-radius: 5px;
  }
  a{
    text-decoration: none;
  }
  .top-header{
    background: #eee;
    padding: 15px;
}
  }
    </style>
@endsection
