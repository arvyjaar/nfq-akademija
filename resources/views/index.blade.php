@extends('layouts.app')

@section('title')
    - Home
@endsection

@section('content')
    <div class="container">
        <div class="panel panel-default">
            <div class="panel-body">
                <table class="{{ count($books) > 0 ? 'datatable' : 'table table-responsive' }}">
                    <thead>
                    <tr>
                        <th>Title</th>
                        <th>Year</th>
                        <th>Author</th>
                        <th>Category</th>
                    </tr>
                    </thead>

                    <tbody>
                    @if (count($books) > 0)
                        @foreach ($books as $book)
                            <tr>
                                <td><a href="{{ route('book', ['id' => $book->id]) }}">{{ $book->title or ''}}</a></td>
                                <td>{{ $book->year or ''}}</td>
                                <td>
                                    @foreach($book->author as $author)
                                        {{ $author->name or '' }}
                                        <br>
                                    @endforeach
                                </td>
                                <td>{{ $book->category->title or '' }}</td>
                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td colspan="4">No entries</td>
                        </tr>
                    @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
