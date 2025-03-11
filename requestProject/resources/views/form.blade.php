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
            width: 200px;
            height: 200px;
        }
    </style>
</head>
<body>
    <form action="{{ url('store-form') }}" class="employee-form" name="employee-form" method="post">
        @csrf
        <input type="text" class="form__input" required="true" placeholder="Name" name="username"><br>
        <input type="text" class="form__input" required="true" placeholder="family" name="family"><br>
        <input type="text" class="form__input" required="true" placeholder="department" name="department"><br>
        <input type="text" class="form__input" required="true" placeholder="role" name="role"><br>
        <input type="text" class="form__input" required="true" placeholder="e-mail" name="email"><br>
        <textarea name="adress" id="adress"></textarea>
        <p class="forbutton"><button type="submit">OK</button></p>
    </form>
</body>
</html>