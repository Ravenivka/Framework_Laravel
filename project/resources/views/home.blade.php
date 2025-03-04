
@extends('layouts.default')
    @php
        $title = $info['title']
    @endphp
@section('content')
        @if ($info['age'] < 18)
            <p style="text-align: center; color: red; font-size: 16px;">Товары только для лиц старше 18!</p>
        @else
            <p style="text-align: center; font-size: 16px;">Добро пожаловать!</p>
        @endif
@endsection