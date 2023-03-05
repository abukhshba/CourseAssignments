<?php
$employees = [
    ["mohamed ali","mohamad@eraasoft.com","01024256993",2500],
    ["reham mohamad","reham@eraasoft.com","01122255448",3000],
    ["maged hesham","maged@eraasoft.com","01024213361",4000],
    ["ali mahmoud","ali@eraasoft.com","01142547485",2000],
    ["nader elsayed","nader@eraasoft.com","01123659854",1000],
];
?>
<table border="1">
    <caption>
        <b>Employees Informations</b>
    </caption>
    <thead>
        <tr>
            <th>Name</th>
            <th>email</th>
            <th>phone</th>
            <th>salary</th>
        </tr>
    </thead>
    <tbody>
        <?php for($i = 0 ; $i < count($employees);$i++):?>
        <tr>
            <?php for($j=0 ; $j<count($employees[$i]);$j++):?>
            <td>
                <?php echo $employees[$i][$j]?>
            </td>
            <?php endfor;?>
        </tr>
        <?php endfor;?>
    </tbody>
</table>