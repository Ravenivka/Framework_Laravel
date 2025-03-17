@extends('shared.default')
    @php
        $title = 'Resume';
    @endphp

@section('content')
@php
    $link = '/save/'.$user["id"];
@endphp
            <div class="basic flexing">
                <table>
                    <tr><td>Name:</td><td>{{ $user['name'] }}</td></tr>
                    <tr><td>Surname:</td><td>{{ $user['surname'] }}</td></tr>
                    <tr><td>e-mail:</td><td>{{ $user['email'] }}</td></tr>

                </table>

               
            </div>
    

@endsection