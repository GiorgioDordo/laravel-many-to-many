
@extends("layouts.app")

@section("page-title", "Project")

@section("content")
<main class="container">
    <div class="row d-flex justify-content-center">
        <div><h1 class="text-center">PROJECT</h1></div>
        <div class="col-12 m-3 p-3 card">
            <div class="card-body">
                <p><strong>{{$project->name}}</strong></p>
                <p>{{$project->type->name}}</p>
                <p>{{$project->short_description}}</p>
                <p>{{$project->description}}</p>
            </div>
        </div>
    </div>
</main>
@endsection
