<table border="1">
    <?php
    $doIt = new Selector();
    $doIt->openConnection();
    $select = $doIt->select();
    //var_dump($select);
    foreach ($select as $user):
    ?>
    <tr>
        <td>
            <?php echo $user['firstName'];?>
        </td>
        <td>
            <?php echo $user['username'];?>
        </td>
        <td>
            <?php echo $user['preferred_language'];?>
        </td>

    </tr>
</table>
<?php endforeach; ?>