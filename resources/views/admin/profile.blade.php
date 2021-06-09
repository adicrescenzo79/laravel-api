@extends('layouts.app');

@section('content')
  <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-4">
          <b>Name</b>
        </div>
          <div class="col-md-8">
            {{$user->name}}
          </div>
        <div class="col-md-4">
          <b>Mail</b>
        </div>
          <div class="col-md-8">
            {{$user->email}}
          </div>

          <div class="col-md-4">
            <b>Api Token</b>
          </div>
            <div class="col-md-8">
              @if ($user->api_token)
              {{$user->api_token}}
            @else
              <a class="btn btn-primary" href="{{route('admin.generate-token')}}">Genera Token</a>
            @endif
            </div>


      </div>
  </div>

@endsection
