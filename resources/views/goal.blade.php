{{-- Includes files in views/goal --}}

@extends('layouts.app')

@section('title', 'Goal')

@section('content')
<main id="main" class="main">
    @if(session()->has('successmessage'))
        <div class="alert alert-success">
            {{ session()->get('successmessage') }}
        </div>
    @elseif(session()->has('errormessage'))
        <div class="alert alert-danger">
            {{ session()->get('errormessage') }}
        </div>
    @endif
    @include('goal._page-title')
    @include('goal._progress-bar')
    @include('goal._load-progress-bar')
    @include('goal._goal-description')
    @include('goal._action-plan-list')
    @include('goal._comment-section')
    @include('goal._mentor-modal')
    @include('goal._action-plan-modal')
    
</main>

<!-- Template Main JS File -->
<script src="{{ asset('/js/add_task1.js') }}"></script>
<script src="{{ asset('/js/add_activity.js') }}"></script>
@endsection
