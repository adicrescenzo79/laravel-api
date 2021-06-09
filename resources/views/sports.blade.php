@extends('layouts.app')

@section('content')
  <main id="root">
    <div class="container">

      <ul>
        <li v-for="sport in sports" :key="sport.id">
          <h4>@{{sport.name}}</h4>
          <p>@{{sport.description}}</p>
        </li>
      </ul>
    </div>
  </main>
@endsection

@section('head')
  <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.21.1/axios.min.js" integrity="sha512-bZS47S7sPOxkjU/4Bt0zrhEtWx0y0CRkhEp8IckzK+ltifIIE9EMIMTuT/mEzoIMewUINruDBIR/jJnbguonqQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="https://cdn.jsdelivr.net/npm/vue@2.6.12"></script>
  <title>Sports</title>
@endsection

@section('foot-script')
  <script src="{{asset('js/sports.js')}}" charset="utf-8"></script>
@endsection
