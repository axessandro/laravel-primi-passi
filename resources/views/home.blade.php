<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>FullStack</title>
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Styles -->
    <style>

    </style>
</head>

<body>
    <header>
        <h1><a href="/">home</a></h1>
        <a href="/shop">Shop</a>
        <a href="/about">about</a>
        <a href="/contacts">contacts</a>
        <a href="/history">history</a>
    </header>

    <main>
        <h1>{{ $title }}</h1>
        <p>{{ $pharagraph }}</p>
    </main>
</body>

</html>
