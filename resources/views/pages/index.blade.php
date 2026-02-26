@extends('layout.app')

@section('content')
    <section id="about" class="min-h-screen flex flex-col justify-center pt-24 pb-12">
        @include('pages.about')
    </section>

    <section id="experience" class="min-h-screen pt-24 pb-12 border-t border-white/5">
        @include('pages.experience')
    </section>

    <section id="skill" class="min-h-screen pt-24 pb-12 border-t border-white/5">
        @include('pages.skill')
    </section>

    <section id="work" class="min-h-screen pt-24 pb-12 border-t border-white/5">
        @include('pages.work')
    </section>

    <section id="contact" class="min-h-screen pt-24 pb-12 border-t border-white/5">
        @include('pages.contract')
    </section>
@endsection
