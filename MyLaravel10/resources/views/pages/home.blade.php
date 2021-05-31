@extends('layouts.main-layout')

@section('content')
    <main>
        <div class="container">
            <h3>Employees name -> tasks</h3>
            <ul>
                @foreach ($employees as $employee)
                    <li>
                        <span>
                            {{ $employee -> firstname }}
                            {{ $employee -> lastname }}
                        </span>
                        <span>
                            ->
                        </span>
                        @foreach ($employee -> tasks as $task)
                            <span>
                                {{ $task -> title }}
                                @if ($loop -> index < ($loop -> count - 1))
                                    -
                                @endif
                            </span>
                        @endforeach
                    </li>
                @endforeach
            </ul>
        </div>
    </main>

@endsection