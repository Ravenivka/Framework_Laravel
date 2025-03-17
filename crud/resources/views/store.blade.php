@extends('shared.default')
    @php
        $title = 'Addition';
    @endphp

@section('content')
       <form action="{{ url('/store') }}" method="post">
        @csrf
            <div class="basic">
                <p class="forForm">Name  <input type="text" required name="name" class="inputForm"></p>    
                <p class="forForm">Surname  <input type="text" required name="surname" class="inputForm"></p>
                <p class="forForm">e-mail  <input type="text" required name="email" class="inputForm"></p>
                <p class="forForm"><button type="submit">SEND</button></p>
            </div>
       </form>
    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
@endsection
