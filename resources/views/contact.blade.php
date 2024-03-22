<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact</title>
</head>
<body>

<form action="" method="post">
    @csrf
    <input type="text" name="name" placeholder="Name.."> <br> <br>
    <input type="email" name="email" placeholder="Email.."> <br> <br>
    <textarea name="message" id="" cols="30" rows="10" placeholder="message"></textarea>
    <br> <br>
    <button type="submit">Send</button>
</form>

</body>
</html>
