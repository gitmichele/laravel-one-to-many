@extends('layouts.main-layout')

@section('content')
    <main>
        <div class="container">
            <h3>Employees name -> tasks</h3>
            <ul>
                @foreach ($employees as $employee)
                    <li>
                        <span>
                            <a href="{{ route('show_employee', $employee -> id) }}">
                                {{ $employee -> firstname }}
                                {{ $employee -> lastname }}
                            </a>
                        </span>
                        <span>
                            ->
                        </span>
                        @foreach ($employee -> tasks as $task)
                            <span>
                                <a href="{{ route('show_task', $task -> id) }}">
                                    {{ $task -> title }}
                                </a>
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