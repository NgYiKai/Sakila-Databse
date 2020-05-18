<!DOCTYPE html>
<html >
<head> 
    <title>Select</title>
    <style type="text/css">
    .header{
            background-color: #F64C72;
            color: white;
            padding: 30px;
            text-align: center;
            font-size: 32px;
        }
		
		.topnav{
		    overflow: hidden;
            background-color: #242582;
            font-size: 25px;
		}
		
		.topnav a{
            float: left;
            display: block;
            color: #ffffff;
            text-align: center;
            padding: 20px 380px 20px 300px;
            text-decoration: none;
        }

        .topnav a:hover{
            text-decoration: underline;
        }
        
        .topnav a:visited{
            color: #4f3943;
        }
        
        .vert{
            width: 1.5px;
            height: 30px;
            background-color: #ffffff;
            position: absolute;
            top: 235px;
            bottom: 0;
            left: 750px;
        }
        
		.form{
		    float:right;
		    padding: 20px 280px 20px 0px;
		}
		
		.buttons a{
		    color: #ffffff;
		    text-decoration: none;
		}
		

		body{
		    margin: 0;
		    padding: 0;
			background-color:#2f2fa2;
		}

		.footer {
            background-color: #464646;
            margin: 300px 0px 0px 0px;
            padding: 25px;
            text-align: center;
            font-size: 15px;
            color: #ffffff;
        }
        
        #ru{
            text-decoration: none;
        }

        hr.solid {
        border-top: 1px solid #ffffff;
        margin: 50px 400px 20px 400px ;
        }

        input[type=text] {
        width: 50%;
        padding: 12px 20px;
        margin: 10px 0px 20px 500px;
        box-sizing: border-box;
        background-color: #91B3F4;
        border: none;
        }

        select {
        width: 1200px;
        height: 60px;
        background-color: #e1e5eb;
        margin-left: 8px;
        font-size: 20px;
        border: none;
        }

        label {
            margin: 0px 0px 0px 8px;
            font-size: 28px;
            color: white;
        }

        input[type=submit]
        {
            margin-top: 8px;
            margin-left: 3px;
            background-color: #6495F1;
            border: none;
            font-size: 20px;
        }

        table{
            color:white;
            font-size: 20px;
            border: 3px solid black;
            margin-left: 280px;
            width: 70%;
            text-align: center;
            border-collapse: collapse;
            margin-top: 12px;
        }
        th, td{
            border: 3px solid black;
            border-collapse: collapse;
            margin-bottom: 5px;
        }

        th{
            background-color: pink;
            color: black;
        }


    </style>
    </head>
<body class="grey lighten-4">
    <div class="header">
    <a id="ru" href="taskc.php" style="color:#FFFFFF"><h1>S  A  K  I  L  A</h1></a>
    </div>
    
    <div>
    <nav class="topnav">
   <!-- <a href="taskc.php" style="color:#FFFFFF">HOME</a>-->
            
           <!-- <div class="vert"></div>-->
           
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
                <input type="submit" name="button" value="Select" style="margin-left:8px;">
            </form>
        </nav> 
    </div>

    <?php
        
        if (!empty($_GET['table'])||isset($query)) {
            switch($_GET['table']){
                case 'actor':
                echo '<form method="get" >
                        <input type="hidden" name="table2" value="actor">
                        <input type="checkbox" name="actor_id" value="actor_id">
                        <label > Actor ID</label><br>
                        <input type="checkbox"  name="first" value="first_name">
                        <label > First Name</label><br>
                        <input type="checkbox"  name="last" value="last_name">
                        <label > Last Name</label><br><br>
                        <input type="submit" name="button" value="submit">
                        </form>';
                break; 
                
                case 'address':
                echo '<form method="get">
                        <input type="hidden" name="table2" value="address">
                        <input type="checkbox" name="address_id" value="address_id">
                        <label > Address ID</label><br>
                        <input type="checkbox"  name="address" value="address">
                        <label > Address</label><br>
                        <input type="checkbox"  name="district" value="district">
                        <label > District</label><br>
                        <input type="checkbox" name="city_id" value="city_id">
                        <label > City ID</label><br>
                        <input type="checkbox" name="postal_code" value="postal_code">
                        <label > Postal code</label><br>
                        <input type="checkbox" name="phone" value="phone">
                        <label > Phone</label><br><br>
                        <input type="submit" name="button" value="submit">
                        </form>';
                break;

                case 'category':
                echo '<form method="get">
                        <input type="hidden" name="table2" value="category">
                        <input type="checkbox" name="category_id" value="category_id">
                        <label > Category ID</label><br>
                        <input type="checkbox"  name="name" value="name">
                        <label > Name</label><br><br>
                        <input type="submit" name="button" value="submit">
                        </form>';
                break;

                case 'city':
                echo '<form method="get">
                        <input type="hidden" name="table2" value="city">
                        <input type="checkbox" name="city_id" value="city_id">
                        <label > City ID</label><br>
                        <input type="checkbox"  name="city" value="city">
                        <label > City</label><br>
                        <input type="checkbox"  name="country_id" value="country_id">
                        <label > Country ID</label><br><br>
                        <input type="submit" name="button" value="submit">
                        </form>';
                break;

                case 'country':
                echo '<form method="get">
                        <input type="hidden" name="table2" value="country">
                        <input type="checkbox" name="country_id" value="country_id">
                        <label > Country ID</label><br>
                        <input type="checkbox"  name="country" value="country">
                        <label > Country</label><br><br>
                        <input type="submit" name="button" value="submit">
                        </form>';
                break;

                case 'customer':
                echo '<form method="get">
                        <input type="hidden" name="table2" value="customer">
                        <input type="checkbox" name="customer_id" value="customer_id">
                        <label > Customer ID</label><br>
                        <input type="checkbox"  name="store_id" value="store_id">
                        <label > Store ID</label><br>
                        <input type="checkbox"  name="first_name" value="first_name">
                        <label > First Name</label><br>
                        <input type="checkbox"  name="last_name" value="last_name">
                        <label > Last name</label><br>
                        <input type="checkbox"  name="email" value="email">
                        <label > Email</label><br>
                        <input type="checkbox"  name="address_id" value="address_id">
                        <label > Address ID</label><br>
                        <input type="checkbox"  name="active" value="active">
                        <label > Active</label><br>
                        <input type="checkbox"  name="create_date" value="create_date">
                        <label > Create date</label><br>
                        <input type="checkbox"  name="last_update" value="last_update">
                        <label > Last update</label><br><br>
                        <input type="submit" name="button" value="submit">
                        </form>';
                break;

                case 'film':
                echo '<form method="get">
                        <input type="hidden" name="table2" value="film">
                        <input type="checkbox" name="film_id" value="film_id">
                        <label > Film ID</label><br>
                        <input type="checkbox"  name="title" value="title">
                        <label > Title</label><br>
                        <input type="checkbox"  name="description" value="description">
                        <label > Description</label><br>
                        <input type="checkbox" name="release_year" value="release_year">
                        <label > Release year</label><br>
                        <input type="checkbox" name="language_id" value="language_id">
                        <label > Language ID</label><br>
                        <input type="checkbox" name="original_language_id" value="original_language_id">
                        <label > Original language ID</label><br>
                        <input type="checkbox" name="renatl_duration" value="rental_duration">
                        <label > Rental duration</label><br>
                        <input type="checkbox" name="rental_date" value="rental_date">
                        <label > Rental date</label><br>
                        <input type="checkbox" name="length" value="length">
                        <label > Length</label><br>
                        <input type="checkbox" name="replacement_cost" value="replacement_cost">
                        <label > Replacement cost</label><br>
                        <input type="checkbox" name="rating" value="rating">
                        <label > Rating</label><br>
                        <input type="checkbox" name="special_features" value="special_features">
                        <label > Special features</label><br>
                        <input type="checkbox" name="last_update" value="last_update">
                        <label > Last update</label><br><br>
                        <input type="submit" name="button" value="submit">
                        </form>';
                break;

                case 'film_actor':
                echo '<form method="get">
                        <input type="hidden" name="table2" value="film_actor">
                        <input type="checkbox" name="actor_id" value="actor_id">
                        <label > Actor ID</label><br>
                        <input type="checkbox"  name="film_id" value="film_id">
                        <label > Film ID</label><br>
                        <input type="checkbox"  name="last_update" value="last_update">
                        <label > Last update</label><br><br>
                        <input type="submit" name="button" value="submit">
                        </form>';
                break;

                case 'film_category':
                echo '<form method="get">
                        <input type="hidden" name="table2" value="film_category">
                        <input type="checkbox" name="film_id" value="film_id">
                        <label > Film ID</label><br>
                        <input type="checkbox"  name="category_id" value="category_id">
                        <label > Category ID</label><br>
                        <input type="checkbox"  name="last_update" value="last_update">
                        <label > Last update</label><br><br>
                        <input type="submit" name="button" value="submit">
                        </form>';
                break;

                case 'film_text':
                echo '<form method="get">
                        <input type="hidden" name="table2" value="film_text">
                        <input type="checkbox" name="film_id" value="film_id">
                        <label > Film ID</label><br>
                        <input type="checkbox"  name="title" value="title">
                        <label > Title</label><br>
                        <input type="checkbox"  name="description" value="description">
                        <label > Description</label><br><br>
                        <input type="submit" name="button" value="submit">
                        </form>';
                break;

                case 'inventory':
                echo '<form method="get">
                        <input type="hidden" name="table2" value="inventory">
                        <input type="checkbox" name="inventory_id" value="inventory_id">
                        <label > Inventory ID</label><br>
                        <input type="checkbox"  name="film_id" value="film_id">
                        <label > Film ID</label><br>
                        <input type="checkbox"  name="store_id" value="store_id">
                        <label > Store ID</label><br>
                        <input type="checkbox"  name="last_update" value="last_update">
                        <label > Last update</label><br><br>
                        <input type="submit" name="button" value="submit">
                        </form>';
                break;

                case 'language':
                echo '<form method="get">
                        <input type="hidden" name="table2" value="language">
                        <input type="checkbox" name="language_id" value="language_id">
                        <label > Language ID</label><br>
                        <input type="checkbox"  name="name" value="name">
                        <label > Name</label><br>
                        <input type="checkbox"  name="last_update" value="last_update">
                        <label > Last update</label><br><br>
                        <input type="submit" name="button" value="submit">
                        </form>';
                break;

                case 'payment':
                echo '<form method="get">
                        <input type="hidden" name="table2" value="payment">
                        <input type="checkbox" name="payment_id" value="payment_id">
                        <label > Payment ID</label><br>
                        <input type="checkbox"  name="customer_id" value="customer_id">
                        <label > Customer ID</label><br>
                        <input type="checkbox"  name="staff_id" value="staff_id">
                        <label > Staff ID</label><br>
                        <input type="checkbox"  name="rental_id" value="rental_id">
                        <label > Rental ID</label><br>
                        <input type="checkbox"  name="amount" value="amount">
                        <label > Amount</label><br>
                        <input type="checkbox"  name="payment_date" value="payment_date">
                        <label > Payment date</label><br>
                        <input type="checkbox"  name="last_update" value="last_update">
                        <label > Last update</label<br><br>
                        <input type="submit" name="button" value="submit">
                        </form>';
                break;

                case 'rental':
                echo '<form method="get">
                        <input type="hidden" name="table2" value="rental">
                        <input type="checkbox" name="rental_id" value="rental_id">
                        <label > Rental ID</label><br>
                        <input type="checkbox"  name="rental_date" value="rental_date">
                        <label > Rental_date</label><br>
                        <input type="checkbox"  name="inventory_id" value="inventory_id">
                        <label > Inventory ID</label><br>
                        <input type="checkbox" name="customer_id" value="customer_id">
                        <label > Customer ID</label><br>
                        <input type="checkbox" name="return_date" value="return_date">
                        <label > Return_date</label><br>
                        <input type="checkbox" name="staff_id" value="staff_id">
                        <label > Staff ID</label><br>
                        <input type="checkbox" name="last_update" value="last_update">
                        <label > Last update</label><br><br>
                        <input type="submit" name="button" value="submit">
                        </form>';
                break;

                case 'staff':
                echo '<form method="get">
                        <input type="hidden" name="table2" value="staff">
                        <input type="checkbox" name="staff_id" value="staff_id">
                        <label > Staff ID</label><br>
                        <input type="checkbox"  name="first_name" value="first_name">
                        <label > First Name</label><br>
                        <input type="checkbox"  name="last_name" value="last_name">
                        <label > Last Name</label><br>
                        <input type="checkbox" name="address_id" value="address_id">
                        <label > Address ID</label><br>
                        <input type="checkbox" name="email" value="email">
                        <label > Email</label><br>
                        <input type="checkbox" name="store_id" value="store_id">
                        <label > Store ID</label><br>
                        <input type="checkbox" name="active" value="active">
                        <label > Active</label><br>
                        <input type="checkbox" name="username" value="username">
                        <label > Username</label><br>
                        <input type="checkbox" name="password" value="password">
                        <label > Password</label><br>
                        <input type="checkbox" name="last_update" value="last_update">
                        <label > Last update</label><br><br>
                        <input type="submit" name="button" value="submit">
                        </form>';
                break;

                case 'store':
                echo '<form method="get">
                        <input type="hidden" name="table2" value="store">
                        <input type="checkbox" name="store_id" value="store_id">
                        <label > Store ID</label><br>
                        <input type="checkbox"  name="manager_staff_id" value="manager_staff_id">
                        <label > Manager staff ID</label><br>
                        <input type="checkbox"  name="address_id" value="address_id">
                        <label > Address ID</label><br>
                        <input type="checkbox"  name="last_update" value="last_update">
                        <label > Last update</label><br><br>
                        <input type="submit" name="button" value="submit">
                        </form>';
                break;


            }          
                  
        }

        if (!empty($_GET['table2'])){
            $conn=new mysqli('localhost','root','','sakila');

            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }     
            
            $query=$_GET['table2'];
            $columns='';
            $column_name=array();
            $i = 0;
            $len = count($_GET)-2;
            foreach ($_GET as $column){
                if ($column!=$_GET['button']&&$column!=$_GET['table2']){
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

            $sql= "SELECT $columns FROM $query";
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

