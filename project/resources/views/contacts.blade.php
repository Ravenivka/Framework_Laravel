@extends('layouts.default')
    @php
        $title = $info['title'];
        $email = trim($info['email']);
    @endphp
@section('content')
    <div style="100%;">
        <table style="margin: 0 auto; width: 60%; border-collapse: collapse;">
            @foreach ($info as $key => $i)
                @if ($i != $info['title'])
                    <tr>
                        @if ($key = 'email')
                            <td style="border: 1px solid blueviolet; width: 40%;">e-mail</td>
                            @if ($email != '')
                                <td style="border: 1px solid blueviolet; ">{{ $email }}</td>
                            @else
                                <td style="border: 1px solid blueviolet; ">Адрес электронной почты не указан</td>
                            @endif
                        @else
                            <td style="border: 1px solid blueviolet; width: 40%;">{{ $key }}</td>
                            <td style="border: 1px solid blueviolet; ">{{ $i }}</td>
                        @endif
                    </tr>
                @endif
            @endforeach

        </table>
    </div>
@endsection


