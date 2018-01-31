@extends('layouts.layout')

@section('title')
    Puzzle Game
@endsection

@section('head')
    <link rel="stylesheet" href="{{ asset('/css/PuzzleGame/puzzle.css') }}">
@endsection

@section('body')

    <!-- type your code here -->
    <div class="container">
        <h2 class="text-center text-danger pt-3">Solve it if you can!</h2>
        <div id="puzzle"></div>
    </div>

    <div class="container">
        <div id="clicks">0</div> 
        <div class="text-center text-danger">Moves</div>
        <button id="randomize" class="btn btn-info btn-block" style="margin-bottom: 20px;">randomize</button>
    </div>

@endsection

@section('footer')
    <script src="{{ asset('/js/PuzzleGame/puzzle.js') }}"></script>
@endsection