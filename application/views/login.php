<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>c.m.o | Login</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/milligram/1.4.1/milligram.min.css" integrity="sha512-xiunq9hpKsIcz42zt0o2vCo34xV0j6Ny8hgEylN3XBglZDtTZ2nwnqF/Z/TTCc18sGdvCjbFInNd++6q3J0N6g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        .log-center {
            width: 500px;
            height: 500px;

            position: absolute;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;

            margin: auto;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="column column-20"></div>
            <div class="column column-60">
                <form action="<?= base_url('login/auth') ?>" method="post">
                    <input type="text" name="user" id="user" placeholder="User Name" autocomplete="off" required>
                    <button type="submit" class="float-right">Login</button>
                </form>
            </div>
            <div class="column column-20"></div>
        </div>
    </div>

</body>

</html>