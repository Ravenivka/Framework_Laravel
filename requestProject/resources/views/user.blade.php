<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Card</title>
    <style>
        .form_input{
            width: 150px;
        }
        .forbutton{
            text-align: center;
            width: 150px;
        }
        #adress{
            width: 150px;
            height: 150px;
        }
    </style>
</head>
<body>
    <form class="employee-form" name="employee-form" method="post" id="employee-form">
        @csrf
       
        <input type="text" class="form__input" required="true" value="Ivan" name="username"><br>
        <input type="text" class="form__input" required="true" value="Ivanov" name="family"><br>
        <input type="text" class="form__input" required="true" value="Man Fashion" name="department"><br>
        <input type="text" class="form__input" required="true" value="Manager" name="role"><br>
        <input type="text" class="form__input" required="true" value="qq@qq.ru" name="email"><br>
        
    </form>
        <textarea name="adress" id="adress" form="employee-form"></textarea>

    <p class="forbutton"><button type="submit" form="employee-form" formaction="user/5">OK</button></p>
</body>
</html>