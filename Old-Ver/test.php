<?php 
   
?>

<!DOCTYPE html>
<html >
<head>  
    <title>Sakila</title>
</head>

<body class="grey lighten-4">
    
        <div class="container">
            <a href="http://localhost/sakila/" class="brand-logo brand-text">Sakila</a>
        </div>
   
    
    <div class="buttons">
       <a href= "insert.php">Insert</a>
        <a href= "update.php">Update</a>
        <a href= "delete.php">Delete</a>
        <a href= "select.php">Select</a>
    </div>
    
    <form method="get" class="form">	
        <select id="table" name="table" >
            <option value="0">Select a table</option>
            <option value="actor" >actor</option>
            <option value="address">address</option>
            <option value="category">category</option>
            <option value="city">city</option>
            <option value="country">country</option>
            <option value="customer">customer</option>
            <option value="film">film</option>
            <option value="film_actor">film_actor</option>
            <option value="film_category">film_category</option>
            <option value="film_text">film_text</option>
            <option value="inventory">inventory</option>
            <option value="language">language</option>
            <option value="payment">payment</option>
            <option value="rental">rental</option>
            <option value="staff">staff</option>
            <option value="store">store</option>	
        </select>  
        <br>
        <input type="checkbox" name="actor_id" value="actor_id">
        <label > Actor ID</label><br>
        <input type="checkbox"  name="first" value="first_name">
        <label > First Name</label><br>
        <input type="checkbox"  name="last" value="last_name">
        <label > Last Name</label><br><br>
        <input type="submit" name="button" value="submit">
    </form>


    <?php 
        if (!empty($_GET)){
            $conn=new mysqli('localhost','Kai','abc123','sakila');

            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }
    
            $columns='';
            $column_name=array();
            $i = 0;
            $len = count($_GET)-2;
            foreach ($_GET as $column){
                if ($column!=$_GET["table"]&&$column!=$_GET["button"]){
                    if ($i != $len - 1){
                        $columns=$columns . $column.',';
                    }
                    else{
                        $columns=$columns . $column;
                    }
                    $column_name[]=$column;
                    $i++;
                }
                
            }

            $query=$_GET["table"];
            $sql= "SELECT $columns FROM $query";
            echo "$sql";
            $data_queryresult = $conn->query($sql);
            if ($data_queryresult->num_rows > 0) {

                echo "<table><tr>";
                for($counter=0,$i=0;$counter<count($column_name);$counter++){
                    echo "<th>".$column_name[$i]."</th>";
                    $i++;
                }   
                echo "</tr>";   
                
                while($row = $data_queryresult->fetch_assoc()) {
                    echo "<tr>";
                    for($counter=0,$i=0;$counter<count($column_name);$counter++){
                        echo "<td>".$row["$column_name[$i]"]."</td>";
                        $i++;
                    }   
                    echo "<tr>";
                }
                echo "</table>";
            } else {
                echo "0 results";
            }
            
            $conn->close();
        }
    ?>

</body>
</html>

