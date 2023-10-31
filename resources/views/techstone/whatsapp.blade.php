<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="assets/css/floating-wpp.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="assets/js/floating-wpp.min.js" type="text/javascript"></script>
</head>
<body>

        <div id="whatsapp"></div>
</body>
<script type="text/javascript">
    $(function () {
        $('#whatsapp').floatingWhatsApp({
            phone: '+254721773805',
            showPopup: 'True',
            popupMessage: "Chat TechStone company Here",
            headerTitle: "whatsapp Chat",
            message: "",
            position: "left",
        });
    });
</script>
</html>
