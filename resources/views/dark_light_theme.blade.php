<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="color-scheme" content="light">
    <title>Dark Theme</title>
</head>

<body>
    <p>Set dark and light theme using color-scheme</p>
    <p>
        <button>Btn example</button>
    </p>
    <div>
        <select id="theme" onchange="switchTheme()">
            <option value="light">Light</option>
            <option value="dark">Dark</option>
        </select>
    </div>
    <script type="text/javascript">
        function switchTheme() {
            var theme = document.getElementById('theme').value;
            document.querySelector('meta[name="color-scheme"]').setAttribute('content', theme);
        }
    </script>
</body>

</html>
