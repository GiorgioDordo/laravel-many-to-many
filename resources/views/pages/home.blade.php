@extends("layouts.app")

@section("page-title", "Homepage")

@section("content")
<main class="container">
    <h1><a href="{{Route('admin.projects.index')}}">Projects</a></h1>
</main>
@endsection
