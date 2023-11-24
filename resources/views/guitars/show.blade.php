@extends('layout')
@section('content')
    <div class="p-4">
        <div>
            <h3>
                {{ $guitar['name'] }}
            </h3>
            <ul>
                <li>
                    Made By: {{ $guitar['brand'] }}
                </li>
                <li>
                    Year Made: {{ $guitar['year_made'] }}
                </li>
            </ul>
        </div>
    </div>
@endsection
