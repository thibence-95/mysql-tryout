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
	        <a href="?user=<?php echo $user['id'];?>"><?php echo $user['firstName'];?></a>
        </td>
        <td>
            <?php echo $user['username'];?>
        </td>
        <td>
            <img src="<?php echo 'Images/'. $user['preferred_language']. '.png' ?>" alt="flag" style="width: 50px">
        </td>

    </tr>
</table>
<?php endforeach; ?>