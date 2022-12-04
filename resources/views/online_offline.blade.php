<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        html,
        body {
            padding: 0;
            margin: 0;
        }

        .status {
            background: #efefef;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        .status.offline .online-msg {
            display: none;
        }

        .status.offline .offline-msg {
            display: block;
        }

        .status div {
            padding: 1rem 2rem;
            font-size: 3rem;
            border-radius: 1rem;
            color: white;
            font-family: Roboto, "Helvetica Neue", Arial, sans-serif;
        }

        .status .online-msg {
            background: green;
            display: block;
        }

        .status .offline-msg {
            background: red;
            display: none;
        }
    </style>
</head>

<body>
    <div class='status'>
        <div class='offline-msg'>
            You're offline 😢
        </div>
        <div class='online-msg'>
            You're connected 🔗
        </div>
    </div>
    <script type="text/javascript">
        const status = document.querySelector(".status");
        window.addEventListener("load", () => {
            const handleNetworkChange = () => {
                if (navigator.onLine) {
                    status.classList.remove("offline");
                } else {
                    status.classList.add("offline");
                }
            };

            window.addEventListener("online", handleNetworkChange);
            window.addEventListener("offline", handleNetworkChange);
        });
    </script>
</body>

</html>
