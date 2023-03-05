<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
    table,
    td,
    th {
        border: 1px solid black;
        padding: 5px;
        text-align: center;
        border-collapse: collapse;
    }

    a {
        line-height: 1.5em;
    }
    </style>
    <title>Document</title>
</head>

<body>
    <?php
$products = [
    ["product number 1",300,50],
    ["product number 2",250,1000],
    ["product number 3",30,1200],
    ["product number 4",1500,10],
    ["product number 5",450,300],
];
        $link="<a href='http://localhost/assignments/formassignment/assignment3/show_product.php/?id={id}'> Link to Row ID {id}</a><br>";
        echo "<table>
                <thead>
                    <th>Name</th>
                    <th>Price</th>
                    <th>quantity</th>                
                </thead>";
            $links="";
            foreach ($products as $index=>$row){                
                $links .= str_replace('{id}',$index+1 , $link);
                echo "<tr>"; 
                foreach ($row as $cell){
                    echo "<td>$cell</td>";
                }
                echo "</tr>"; 
            }
        echo "</table><br>";                
        echo $links;
?>
</body>