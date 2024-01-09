<html>
    <table>
        <tbody>
            <body>
                <center>
                    <h1>ตัวเลขที่ต้องการหาแม่สูตรคูณ</h1>
                    <form method="post" action="/my-route">
                        @csrf
                        <input type="text" name="myinput">
                        <botton type="submit">Submit</button>
                    </form>
                </center>
            </body>
        </tbody>
    </table>
    <style>
        h1{
            color: black;
            font-size: 30px;
        }
        body{
            background-color:skyblue;
        }
    </style>
</html>