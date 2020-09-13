<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Form</title>
</head>
<style>
</style>
<body>
    <div class="form">
        <form action="/amo/call.php" method="post">
            <input type="text" name="name"  placeholder="Ваше имя">
            <input type="tel" name="phone" required="required"  placeholder="Ваш телефон">
            <input type="text" name="note" placeholder="Заметка">
            <input type="text" name="custom_1" placeholder="Заметка" value="Значение скрытого поля" hidden>
            
            <input type="submit" class="btn" value="Отправить заявку">
        </form>
    </div>
</body>
</html>
