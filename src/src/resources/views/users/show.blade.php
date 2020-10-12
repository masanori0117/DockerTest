@extends('layouts.app')

@section('content')
  @include('layouts.nav')
  <div class="container">
    <div class="card mt-5">
      <div class="card-body">
        <div class="d-flex align-items-start flex-column">
          <div>
            <i class="fas fa-user-circle fa-3x mr-1"></i>
          </div>
          <div>
            <strong><span>{{ $user->name }}</span></strong>
          </div>
          @if (Auth::id() !== $user->id)
            <follow-button
              class="ml-auto"
            >
            </follow-button>
          @endif
        </div>
      </div>

      <div class="card-body">
        <div class="d-flex flex-row">
          <div>
            10 フォロー
          </div>
          <div>
            10 フォロワー
          </div>
        </div>
      </div>
    </div>
  </div>
  
@endsection