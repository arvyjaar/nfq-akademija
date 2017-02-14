@extends('layouts.app')

@section('title')
    - {{ $book->title }}
@endsection

@section('content')
    <div class="container">
        <table class="table text-center">
            <tbody>
            <tr>
                <td><h3>{{ $book->title }}</h3></td>
            </tr>
            <tr>
                <td>{{ $book->year }}</td>
            </tr>
            <tr>
                <td>
                    @foreach($book->author as $author)
                        {{ $author->name }}<br>
                    @endforeach
                </td>
            </tr>
            <tr>
                <td>
                    {{ $book->category->title }}
                </td>
            </tr>
            </tbody>
        </table>
    </div>
@endsection