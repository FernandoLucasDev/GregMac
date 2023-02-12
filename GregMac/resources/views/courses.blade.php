@extends('base.base')
@section('title', 'CURSOS | GregMac')
@section('activate_courses','activate-btn-header')
@section('content')

<section>
    <div>
        <p class="text-center fs-4 mb-4"><strong>Inicie já um de nossos cursos!</strong></p>
        <div class="search-for-course">
            <form action="/cursos" method="GET">
                <input class="input-search-course" type="text" id="search" name="search" placeholder="Busque por um curso...">
            </form>
        </div>
    </div>
</section>

<section>
    <div class="row">
        @foreach($courses as $course)
            <div class="m-5 card-course p-2">
                <img src="{{ $course->cover }}" class="card-img-top img-card mb-2" alt="...">
                <div class="card-body card-gm">
                <p class="card-title text-light fs-4"><strong>{{ $course->name }}</strong></p>
                <p class="text-secondary"><strong>About {{ $course->name }}:</strong></p>
                <p class="card-text">{{ substr($course->description, 0, 199) }} <a href='/curso/{{ $course->id }}' class="text-secondary"><strong>Ver mais...</strong></a></p>
                <a href="{{ $course->link }}" class="btn btn-secondary w-100 mb-3" style="background-color: #006dff; border-radius: 30px; border: 1px solid #00000000">Aprenda agora! <i class="fa-solid fa-arrow-right"></i></a>
                </div>
            </div>
        @endforeach 
    </div>
</section>



@endsection