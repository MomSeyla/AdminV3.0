@extends('admin.adminlayout')

@section('content')
<!-- Table lists -->

<main id="main">

  <section id="about" class="about" style="background-color:blanchedalmond">
    <div class="container">
      <table class="table">
        <thead class="thead-dark" style="background-color:darkgray">
          <tr>
            <th scope=" col">#</th>
            <th scope="col">Title</th>
            <th scope="col">Type</th>
            <th scope="col">Date</th>
            <th scope="col">Genre</th>
            <th scope="col">Scores</th>
            <th scope="col"> <a href="{{route('book.create')}}" class="btn btn-primary">Add Book</a></th>
          </tr>
        </thead>
        <tbody style="background-color:burlywood">
          @foreach($books as $book)
          <tr>
            <td>{{ $loop->index + 1 }}</td>
            <td>{{$book->title}}</td>
            <td>{{$book->type}}</td>
            <td>{{$book->date}}</td>
            <td>{{$book->genre}}</td>
            <td>{{$book->scores}}</td>
            <td>
              <a type="button" href="{{ route('book.edit', $book->id) }}" class="btn btn-dark ">Edit</a>
              <form action="{{ route('book.destroy', $book->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger ">Delete</button>
              </form>
            </td>

          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </section>

</main>
@endsection