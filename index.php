<?php
    $data = date('y/m/d');
    $vencimento = '2025-07-01';
    $restante = strtotime($vencimento) - strtotime($data);

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LearningPHP</title>
</head>
<body>
    <h1><?php echo floor($restante / (60*60*24)) . " Days"  ?></h1>
</body>
</html>