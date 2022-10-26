<?php
$con = new mysqli("localhost", "root", "", "ubuntoomdatabase");
$sql = "SELECT * FROM `users`";
$query = $con->query($sql);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    <style>
        h1 {
            color: rgb(94, 148, 235);
        }

        #detail {
            font-size: 150%;
            color: rgb(40, 36, 36);
        }

        #detail1 {
            font-size: 80%;
            color: rgb(40, 36, 36);
            -webkit-margin-start: 1rem;
        }

        #box {
            -webkit-margin-start: 1rem;

        }
    </style>
</head>

<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <img src="logo.png" width="20%"><br><br><br>
    <center>
        <h1> Hello, welcome to web server! </h1><br>
        <div class="col-md-7 col-lg-8">
            <h4 class="mb-3"> Important command for system administrator </h4>
            <form class="needs-validation" novalidate>
                <table class="table">
                    <thead class="table-dark">
                        <tr>
                            <th scope="col" width="20%">COMMAMD ID </th>
                            <th scope="col" width="20%">COMMAMD NAME </th>
                            <th scope="col" width="60%">DESCRIPTION </th>
                        </tr>
                    </thead>
                    <?php
                    $i = 0;
                    $j = 0;
                    while ($row = $query->fetch_object()) { 
                    ?>

                        <tr <?php if($i++ % 2 == 0) { if($j++ % 2 == 0) echo 'class="table-primary"'; else echo 'class="table-info"'; } ?>>
                            <td><?= $row->id ?></td>
                            <td><?= $row->name ?></td>
                            <td><?= $row->des ?></td>
                        </tr>
                    <?php }
                    ?>
                    <table style="width:100%">
                        <br><br><br>
                        <h3 style="background-color:rgb(247, 229, 250);font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif ;margin:0px">Editor</h3>
                        <tr style="text-align:center;font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif">
                            <th style="background-color:rgb(234, 228, 255)">
                                Anawin thamjaroentip<br>
                                ID Number : 64010965<br>
                                IG :
                                <a href="https://www.instagram.com/__.ppxdpuxdd/" style="color:rgba(114, 74, 28, 0.432)">*＊✿❀ Click Here ❀✿＊* </a><br><br>

                            </th>
                            <th style="background-color:rgb(231, 217, 246)">
                                Artitaya Pimsupaporn<br>
                                ID Number : 64011018<br>
                                IG :
                                <a href="https://www.instagram.com/pimmsupa_/" style="color:rgba(114, 74, 28, 0.432)">*＊✿❀ Click Here ❀✿＊* </a><br><br>

                            </th>
                            <th style="background-color:rgb(234, 228, 255) ">
                                Kittaporn Buriyameathkul<br>
                                ID Number : 64011041<br>
                                IG :
                                <a href="https://www.instagram.com/bbbaipooo/" style="color:rgba(114, 74, 28, 0.432)">*＊✿❀ Click Here ❀✿＊* </a><br><br>

                            </th>
                        </tr>
                    </table>
    </center>
    </table>
    </div>

</body>

</html>