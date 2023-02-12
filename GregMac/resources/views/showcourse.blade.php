@extends('base.base')
@section('title','{{ $course->name }}')
@section('activate_courses','activate-btn-header')
@section('content')

<div class="big-card-show">
    <p class="text-center"><img src="{{ $course->cover }}" class="image-cover-show" alt="..."></p>
    <div class="card-body card-show">
    <h3 class="card-title text-light text-center mb-3">{{ $course->name }}</h3>
    <p class="card-text">{{ $course->description }}</p>
    <a href='{{ $course->link }}' class="btn btn-secondary w-100" style="background-color: #006dff; border-radius: 30px; border: 1px solid #00000000">Aprenda agora! <i class="fa-solid fa-arrow-right"></i></a>
    </div>
</div>

@endsection