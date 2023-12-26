<html>

<head>
    <meta charset="utf-8">
</head>

<body>
    <body style="background-color: rgb(186, 254, 255);"></body>
    <?php $multi_x = 2; ?>
    <h1>ตารางสูตรคูณแม่ <?php echo $multi_x ?></h1>
    <form>
    <table>
        <tbody>
            <tr>
                <div>
               <?php
               for ($i = 1; $i <= 24; $i++) {
                echo "{$multi_x} x {$i} = ".($multi_x * $i)."<br/>";
            
              }
              ?>
              </div>
            </tr>
        </tbody>
    </table>
    <style>
        div {
            width: 300px;
            height: 350px;
            overflow: scroll;
            background-color: skyblue;
            font-family: 'TH SarabunPSK';
        }

        table {
            width: 150px;
            height: 265px;
        }
    </style>
    </form>
</body>

</html>