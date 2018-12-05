<?php
/**
 * Created by PhpStorm.
 * User: skillup_student
 * Date: 05.12.18
 * Time: 20:40
 */
$salary = [
    'Ivan'=>2000,
    'Victor'=>3000,
    'Ekaterina'=>2500,
];
$dir='asc';
if(isset($_GET['dir'])&&$_GET['dir']=='desc'){
    $dir='disc';}
if(isset($_GET['sort'])){
    switch ($_GET['sort']){
        case 'name';
        ksort($salary);
        break;
        case 'salary';
        asort($salary);
        break;
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Таблица зарплат</title>
</head>
<body>
<table>
    <tr>
        <th><a href="Question_Lesson6.php?sort=name">Иммя</th>
        <th><a href="Question_Lesson6.php?sort=salary">Зарплата</th>
    </tr>
    <?php foreach ($salary as $name=>$value){?>
    <tr>
    <td><?php echo $name?></td>
    <td> <?php echo $value?></td>
    </tr>
    <?php } ?>
</table>
</body>
</html>
