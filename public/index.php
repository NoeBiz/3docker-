<!DOCTYPE html>
<html>
<head>
    <title>LAMP con Docker</title>
    <meta charset="utf-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container-fluid">
    <h1>Usuarios del sistema</h1>
    <?php
    $conn = mysqli_connect('db', 'root', 'root.pa55');
    mysqli_select_db($conn, 'universidad');
    $query = 'SELECT * FROM estudiantes';
    $result = mysqli_query($conn, $query);

    echo '<table class="table table-striped">';
    echo '<thead><tr><th>ID</th><th>Nombre del Estudiante</th></tr></thead>';
    while($value = $result->fetch_array(MYSQLI_ASSOC)){
        echo '<tr>';
        foreach($value as $element){
            echo '<td>'.$element.'</td>';
        }
        echo '</tr>';
    }
    echo '</table>';
    $result->close();
    mysqli_close($conn);
    ?>
</div>
</body>
</html>
