<html>
    <head>
        <meta charset="UTF-8">
    </head>
    <table>
        <tbody>
            <body>
                <center>
                    <h1>ตารางสูตรคูณ {{ $myinput }}</h1>
                    <div>
                        <?php
                        for($i=1;$i<=24;$i++){
                            echo "{$myinput} x {$i} = ",($myinput * $i). "<br/>";
                        }
                        ?>
                    </div>
                </center>
            </body>
        </tbody>
    </table>
        <style>
            h1{
                color : red;
                font-size : 50px;
            }
            div{
                font-size: 30px;
                background-color: pink;
                width: 300px;
                height: 400px;
                overflow-y: scroll;
                border:dotted red;
            }
            body{
                background-color:skyblue;
                color:purple;
            }
            
        </style>
</html>