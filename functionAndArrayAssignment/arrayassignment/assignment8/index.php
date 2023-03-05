<?php 
 $users = [
    [" mohamed ali ",20],
    [" rana ahmad ",19],
    [" maged khaled ",25],
];
?>
<table border="2">
    <caption>
        <b>Users Informations</b>
    </caption>
    <thead>
        <tr>
            <th>Name</th>
            <th>age</th>
        </tr>
    </thead>
    <tbody>
        <?php for($i = 0 ; $i < count($users);$i++):?>
        <tr>
            <?php for($j=0 ; $j<count($users[$i]);$j++):?>
            <td>
                <?php echo $users[$i][$j]?>
            </td>
            <?php endfor;?>
        </tr>
        <?php endfor;?>
    </tbody>
</table>