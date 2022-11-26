<?php 
    include "../php/classes/prekes.php";
    // include "../utilities/DatabaseManager.php";
    $produktai = $data->index();
    $cols = $data -> cols();
    $databaseManager = new DatabaseManager();
    $tipai = $databaseManager->rawQuery("SELECT DISTINCT Tipas FROM LM_likuciai WHERE 1"); 
    $col_tipai= array(
        "Tipai" => "Tipas"
    )
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Prekiu filtravimas</h1>
<form action="index.php" method="GET">
    <select name="Tipas" id="">
        <option value="visi">Visi</option>
        <?php foreach($tipai as $tipas){ ?>
            <option value="<?php echo $tipas["Tipas"]?>"><?php echo $tipas["Tipas"]?></option>
       <?php } ?>
        ?>
    </select>
    <button type="submit" name="filtruoti">Filtruoti</button>
</form>

<h1>Atvaizduoti prekes</h1>

<table>
    <tr>
        <?php foreach($cols as $col) { ?>
    <th><?php echo $col; ?></th>
        <?php } ?>
    <th>Action</th>
    </tr>
        <?php foreach($produktai as $produktas){ ?>
    <tr>
        <?php foreach($cols as $key=>$col){ ?>
    <td> <?php echo $produktas[$key] ?></td>

        <?php } ?>
        <td>
            <form action="index.php">
                <button type="submit" name="produkto_kodas" value='<?php echo $produktas["Kodas"] ?>' >DARYTI</button>
            </form>
        </td>
    </tr>
        <?php } ?>       
</table>
 
</body>
</html>