@extends('layouts.default')
    @php
        $title = $info['title'];
        $email = trim($info['email']);
        function getMail($str){
            if ($str == ''){
                return 'Адрес электронной почты не указан';
            } else {
                return $str;
            }
        }
        $email = getMail($email);
    @endphp
@section('content')
    <div style="100%;">
        <table style="margin: 0 auto; width: 60%; border-collapse: collapse;">
            @foreach ($info as $key => $i)
                @if ($key != 'title') 
                    <tr>                        
                        <td style="border: 1px solid blueviolet; width: 40%;">{{ $key }}</td>
                        @if ($key == 'email')
                            <td style="border: 1px solid blueviolet; ">{{ $email }}</td>
                        @else
                            <td style="border: 1px solid blueviolet; ">{{ $i }}</td>
                        @endif                        
                    </tr>
                
                @endif 
            @endforeach

        </table>
    </div>
@endsection


