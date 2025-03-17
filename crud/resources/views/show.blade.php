@extends('shared.default')
    @php
        $title = 'user';
    @endphp

@section('content')
@php
    $link = '/save/'.$user["id"];
    $link2 = '/view/'.$user["id"];
@endphp
            <div class="basic flexing">
                <table>
                    <tr><td>Name:</td><td>{{ $user['name'] }}</td></tr>
                    <tr><td>Surname:</td><td>{{ $user['surname'] }}</td></tr>
                    <tr><td>e-mail:</td><td>{{ $user['email'] }}</td></tr>
                    <tr>
                        <td><a href="{{ $link }}" class="link" target="_blank">Save</a></td>
                        <td><a href="{{ $link2 }}" class="link" target="_blank">Show PDF</a></td>
                    </tr>
                </table>

               
            </div>
    

@endsection