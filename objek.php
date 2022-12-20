<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tipe Data Objek</title>
</head>

<body>
    <h2>Tipe Data Objek</h2>
    <?php
    class Desc
    {
        var $str = "Variabel Class";
        function set_vars($str)
        {
            $this->str = $str;
        }
    }
    $class = new Desc;
    echo $class->str;
    $class->set_vars("Variabel Objek");
    echo ("<br>");
    echo $class->str;
    ?>
</body>

</html>