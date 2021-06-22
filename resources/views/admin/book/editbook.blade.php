@extends('admin.adminlayout')

@section('content')
<!-- Table lists -->
<main id="main">
    <section id="about" class="about">
        <form action="{{route('book.update', $book->id)}}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="exampleInputEmail1">Title </label>
                <input type="text" name="title" class="form-control" value="{{ $book->title }}" placeholder="Title">

            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Type</label>
                <input type="text" name="type" class="form-control" value="{{ $book->type }}" placeholder="Type">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Date </label>
                <input type="date" name="date" class="form-control" value="{{ $book->date }}" placeholder="Date">

            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">genre </label>
                <input type="text" name="genre" class="form-control" value="{{ $book->genre }}" placeholder="Genre">

            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Scores </label>
                <input type="number" name="scores" class="form-control" value="{{ $book->scores }}" placeholder="Scores">

            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </section>
</main>
@endsection
