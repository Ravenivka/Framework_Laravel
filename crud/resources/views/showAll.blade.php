@extends('shared.default')
    @php
        $title = 'Users';
    @endphp

@section('content')
        @if (count($users)==0)
            <p style="text-align: center; color: red; font-size: 36px;">No data</p>
        @else
            <table class="table1">
                <tr>
                    <td>Name</td>
                    <td>Surname</td>
                    <td>e-mail</td>
                    <td></td>
                </tr>
                @foreach ($users as $user )
                    <tr>
                        @php
                        $link = '/user/'.$user["id"];
                        @endphp
                        <td>{{ $user['name'] }}</td>
                        <td>{{ $user['surname'] }}</td>
                        <td>{{ $user['email'] }}</td>
                        <td><a href="{{ url($link) }}" class="link">LINK</a></td>
                    </tr>
                @endforeach
            </table>
        @endif
@endsection


