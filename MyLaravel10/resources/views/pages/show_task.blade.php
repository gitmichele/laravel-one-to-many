@extends('layouts.main-layout')

@section('content')
<main>
    <div class="container">
        {{ $task -> description }}
    </div>
</main>
@endsection