<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <style>
        .child {
            height: 6rem;
            width: 6rem;
            border-radius: 0.5rem;
            background: #B4C7E7;
            margin: 0.5rem auto;
        }

        .container {
            background: #DAE3F3;
            padding: 1rem;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(10rem, 1fr));
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="child"></div>
        <div class="child"></div>
        <div class="child"></div>
        <div class="child"></div>
        <div class="child"></div>
        <div class="child"></div>

    </div>
</body>

</html>
