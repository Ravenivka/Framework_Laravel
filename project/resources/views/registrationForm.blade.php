<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <style>
        *{
            margin: 0;
            padding: 0;
        }
        .div1{
            position: relative;
            display: flex;
            align-items: center;
            justify-content: center;
            width: 100vw;
            height: 100vh;
        }
        .input{
            width: 95%;
        }
        .td1{
            width: 25%; 
            padding-left:5px;
        }
    </style>
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body>
    <div class="div1">
        <form method="post" action="{{ url('store_form') }}" style="width: 40%; border: 2px solid navy;">
            @csrf
            <h3 align="center">Укажите данные</h3>
            <table style="width: 100%;">
                <tr>
                    <td class="td1">Имя</td><td><input class="input" name="name" type="text" /></td>
                </tr>
                <tr>
                    <td class="td1">Фамилия</td><td><input class="input" name="family" type="text" /></td>
                </tr>
                <tr>
                    <td class="td1">e-mail</td><td><input class="input" name="email" type="text" /></td>
                </tr>                
            </table>
            <p align="center"><input type="submit" value="OK" /></p>
        </form>
    </div>
</body>
</html>