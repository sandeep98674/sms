<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="../css/style.css"> -->
    <link rel="stylesheet" href="./evo-calendar.min.css">
    <link rel="stylesheet" href="./evo-calendar.midnight-blue.min.css">

    <title>Document</title>
</head>

<body>

    <div id="calendar"></div>

    <!-- Add jQuery library (required) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.4.1/dist/jquery.min.js"></script>
    <script src="./evo-calendar.min.js"></script>


    <script>
        $(document).ready(function () {
            $('#calendar').evoCalendar({
                //settingName: settingValue
            })
        })
    </script>



</body>

</html>