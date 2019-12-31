<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Hello, world!</title>

    <style>
    #data_container {
        max-height: 300px;
        overflow-y: auto;

    }

    #the_data {}
    </style>
</head>

<body>
    <div class="container">
        <div class="py-5">
        </div>
        <div id="data_container">
            <table class="bg-light w-100" cellpadding="10" cellspacing="20" id="the_data">
                <!-- 
                <tr>

                    <td>Jacob</td>
                    <td>Thornton</td>
                </tr> -->

            </table>
        </div>

    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>

    <script>
    var offset = 0;
    var limit = 10;

    window.addEventListener('load', function() {
        getData()
    })




    document.getElementById("data_container").onscroll = function() {

        var top = document.getElementById("data_container").scrollTop;

        if (top == 0) {

            var elem = document.getElementById('data_container');
            // elem.scrollTop = 25;
            console.log(elem.scrollHeight);

            getData();




        }

    };

    function getData() {
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {

                // console.log(this.responseText);

                $("#the_data").prepend(this.responseText);

                var elem = document.getElementById('data_container');

                if (offset == 0) {

                    elem.scrollTop = elem.scrollHeight;

                } else {

                    var jump = elem.scrollHeight - (elem.scrollHeight - 440)
                    elem.scrollTop = jump
                }

                offset += limit;
            }
        };
        xhttp.open("GET", "/get_data/" + offset + "/" + limit, true);
        xhttp.send();
    }
    </script>









</body>

</html>