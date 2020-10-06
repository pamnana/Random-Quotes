<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <!-- JS, Popper.js, and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <title>Random Quotes</title>
    <link href="https://fonts.googleapis.com/css2?family=Sansita+Swashed:wght@700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@300&display=swap" rel="stylesheet">
    <style>
        .htopic {
            font-size: 2em;
            font-family: 'Sansita Swashed', cursive;
        }

        .text-content {
            font-family: 'Kanit', sans-serif;
        }
    </style>
</head>

<body>
    <div class="container m-auto p-5" style="margin-top: 20vh !important;">
        <div class="">
            <div class="text-center">
                <img src="dices.png" alt="" style="width:4em;">
                <label class="htopic">Random Quotes</label><br>
                <p style="color:dimgrey">สุ่มคำคมภาษาอังกฤษ</p>
                <hr style="width: 70%;"><br>
                <?php
                $json_data = file_get_contents('quotes.json');
                $text = json_decode($json_data, true);
                $index = rand(0,17);
                echo "<div class='shadow-none p-3 mb-5 bg-light rounded m-auto text-content' style='width: 70%;' id='settext'>".$text["quotes"][$index]."</div>"
                ?>
                <br>
                <button class="btn btn-danger" style="width: 8em;" onclick='window.location.reload();'>Refresh</button>
            </div>
        </div>
    </div>

</body>

</html>