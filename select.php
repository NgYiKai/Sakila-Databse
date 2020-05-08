<div class="table">
    <?php 
        if (!empty($_GET)){
            $conn=new mysqli('localhost','root','','sakila');

            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }
        

            $query=$_GET["table"];
            $sql="SELECT * FROM $query";
            $sql2="SHOW columns FROM $query";

            $data_queryresult = $conn->query($sql);
            $column_name_queryresult = $conn->query($sql2);

            $column_name=array();
            while($row = mysqli_fetch_array($column_name_queryresult)){
                $column_name[]=$row['Field'];
                
            }

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
    </div>
    
    <div class="footer">
		<hr class="solid">
		<p>Eng-US</p>
    </div>