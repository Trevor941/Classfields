@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            @foreach($areas as $country)
            <h3 class="top-header"><a href="{{route('user.area.store', $country)}}">{{$country->name}}</a></h3>
            <div class="row">
                @foreach($country->children as $state)
                <div class="col-md-4">
                   <div class="wrapper">
                    <h4><a href="{{route('user.area.store', $state)}}">{{$state->name}}</a></h4>
                    <hr>
                    @foreach($state->children as $city)
                        <h5><a href="{{route('user.area.store', $city)}}">{{$city->name}}</a></h5>
                    @endforeach
                   </div>
                </div>
                @endforeach
            </div>
            @endforeach
        </div>
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
