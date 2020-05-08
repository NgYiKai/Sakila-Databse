<div class="container">
    <div class="row">
        <?php foreach($actors as $actor){  ?>
            <div class="col s6 md3">
                <div class="card z-depth-0">
                <div class="card-content center">
                    <h6><?php echo htmlspecialchars($actor['actor_id']);?></h6>
                    <div><?php echo htmlspecialchars($actor['first_name']);?></div>
                </div>
                </div>
            </div>
        <?php }  ?>
    </div>
</div>

<form action="" method="get">	
    <select name="tables" "="">
		<option value="0">Select a table</option>
		<option value="actor" selected="">actor</option>
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
    <input type="submit" name="button" value="Submit">
</form>

<?php   
    $conn=new mysqli('localhost','Kai','abc123','sakila');

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    
    $sql='SELECT * FROM actor';

    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "<table><tr>
        <th>actor_id</th>
        <th>first_name</th>
        <th>last_name</th>
        <th>last_update</th>
        </tr>";
        
        while($row = $result->fetch_assoc()) {
            echo "<tr><td>" . $row["actor_id"]. 
            "</td><td>" . $row["first_name"]. 
            "</td><td>" . $row["last_name"]. 
            "</td><td>" . $row["last_update"]. 
            "</td></tr>";
        }
        echo "</table>";
    } else {
        echo "0 results";
    }
    
    $conn->close();
    ?>

<form method="get">	
        <select id="table" name="tables" >
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
        <input type="submit" name="button" value="Submit">
    </form>