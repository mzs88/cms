<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>c.m.o</title>
</head>

<body>
    <div>
        <form action="<?= base_url('login/auth') ?>" method="post">
            <input type="text" name="user" id="user" autocomplete="off" require>
            <button type="submit">Login</button>
        </form>
    </div>
</body>

</html>