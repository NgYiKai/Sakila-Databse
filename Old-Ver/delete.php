<?php

$conn=new mysqli('localhost','root','','sakila');

if(isset($_GET['actor_id'])){
    $first = $_GET['actor_id'];
     $sql = "DELETE FROM actor WHERE actor_id = $first";
     mysqli_query($conn, $sql); 
}

if(isset($_GET['address_id'])){
    $first = $_GET['address_id'];
     $sql = "DELETE FROM address WHERE address_id = $first";
     mysqli_query($conn, $sql); 
}

if(isset($_GET['category_id'])){
    $first = $_GET['category_id'];
     $sql = "DELETE FROM category WHERE category_id = $first";
     mysqli_query($conn, $sql); 
}

if(isset($_GET['city_id'])){
    $first = $_GET['city_id'];
     $sql = "DELETE FROM country WHERE country_id = $first";
     mysqli_query($conn, $sql); 
}

if(isset($_GET['country_id'])){
    $first = $_GET['country_id'];
     $sql = "DELETE FROM country WHERE country_id = $first";
     mysqli_query($conn, $sql); 
}

if(isset($_GET['customer_id'])){
    $first = $_GET['customer_id'];
     $sql = "DELETE FROM customer WHERE customer_id = $first";
     mysqli_query($conn, $sql); 
}

if(isset($_GET['film_id'])){
    $first = $_GET['film_id'];
     $sql = "DELETE FROM film WHERE country_id = $first";
     mysqli_query($conn, $sql); 
}

if(isset($_GET['film_ac_id'])){
    $first = $_GET['film_ac_id'];
     $sql = "DELETE FROM film_actor WHERE actor_id = $first";
     mysqli_query($conn, $sql); 
}

if(isset($_GET['film_cat_id'])){
    $first = $_GET['film_cat_id'];
     $sql = "DELETE FROM film_category WHERE film_id = $first";
     mysqli_query($conn, $sql); 
}

if(isset($_GET['film_text_id'])){
    $first = $_GET['film_text_id'];
     $sql = "DELETE FROM film_text WHERE film_text_id = $first";
     mysqli_query($conn, $sql); 
}

if(isset($_GET['inventory_id'])){
    $first = $_GET['inventory_id'];
     $sql = "DELETE FROM inventory WHERE inventory_id = $first";
     mysqli_query($conn, $sql); 
}

if(isset($_GET['language_id'])){
    $first = $_GET['language_id'];
     $sql = "DELETE FROM language WHERE language_id = $first";
     mysqli_query($conn, $sql); 
}

if(isset($_GET['payment_id'])){
    $first = $_GET['payment_id'];
     $sql = "DELETE FROM payment WHERE payment_id = $first";
     mysqli_query($conn, $sql); 
}

if(isset($_GET['rental_id'])){
    $first = $_GET['rental_id'];
     $sql = "DELETE FROM rental WHERE rental_id = $first";
     mysqli_query($conn, $sql); 
}

if(isset($_GET['staff_id'])){
    $first = $_GET['staff_id'];
     $sql = "DELETE FROM staff WHERE staff_id = $first";
     mysqli_query($conn, $sql); 
}

if(isset($_GET['store_id'])){
    $first = $_GET['store_id'];
     $sql = "DELETE FROM store WHERE store_id = $first";
     mysqli_query($conn, $sql); 
}

?>
<!DOCTYPE html>
<html>
<head>  
    <title>DELETE</title>
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
            background-color: #e1e5eb;
            margin: 300px 0px 0px 0px;
            padding: 25px;
            text-align: center;
            font-size: 15px;
            color: black;
        }
        
        hr.solid {
        border-top: 1px solid #ffffff;
        margin: 50px 400px 20px 400px ;
        }

        #ru{
            text-decoration: none;
        }

        input[type=text] {
        width: 75%;
        padding: 12px 20px;
        margin-top: 8px;
        margin-left: 8px ;
        box-sizing: border-box;
        background-color: #6495F1;
        border: none;
        }

        select {
        width: 1200px;
        height: 60px;
        background-color: #e1e5eb;
        margin-left: 8px;
        font-size: 20px;
        }

        label {
            margin: 0px 0px 0px 8px;
            font-size: 28px;
            color: white;
        }

        input[type=submit]
        {
            margin-top: 8px;
            margin-left: 8px;
            background-color: #6495F1;
            border: none;
            font-size: 20px;
        }
    </style>
<body class="grey lighten-4">
    <div class="header">
    <a id ="ru" href="index.php" style="color:#FFFFFF"><h1>S  A  K  I  L  A</h1></a>
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
                <input type="submit" name="button" value="Submit" style>
            </form>
        </nav> 
    </div>
	

<?php
if (!empty($_GET['table'])) {
    $insert=$_GET['table'];
}

if (!empty($_GET['table'])||isset($insert)) {
    switch($insert){
        case 'actor':
        echo '<form method="get">
        <label>Enter the ID here</label>
        </br>
        <input type="text" name="actor_id" placeholder="ID">
        </br>
        <input type="submit" name="button" value="Delete">
         </form>';
         break;

        case 'address':
            echo '<form method="get">
            <input type="text" name="address_id" placeholder="ID">
            </br>
            <input type="submit" name="button" value="Delete">
             </form>';
             break;

             
        case 'category':
        echo '<form method="get">
        <label>Enter the ID here</label>
        </br>
        <input type="text" name="category_id" placeholder="ID">
        </br>
        <input type="submit" name="button" value="Delete">
        </form>';
        break;

                 
        case 'city':
            echo '<form method="get">
            <label>Enter the ID here</label>
          </br>
            <input type="text" name="city_id" placeholder="ID">
            </br>
            <input type="submit" name="button" value="Delete">
            </form>';
        break;

        case 'country':
            echo '<form method="get">
            <label>Enter the ID here</label>
         </br>
            <input type="text" name="country_id" placeholder="ID">
            </br>
            <input type="submit" name="button" value="Delete">
            </form>';
        break;

        case 'customer':
            echo '<form method="get">
            <label>Enter the ID here</label>
            </br>
            <input type="text" name="customer_id" placeholder="ID">
            </br>
            <input type="submit" name="button" value="Delete">
            </form>';
        break;

        case 'film':
            echo '<form method="get">
            <label>Enter the ID here</label>
            </br>
            <input type="text" name="film_id" placeholder="ID">
            </br>
            <input type="submit" name="button" value="Delete">
            </form>';
        break;

        case 'film_actor':
            echo '<form method="get">
            <label>Enter the ID here</label>
            </br>
            <input type="text" name="film_ac_id" placeholder="ID">
            </br>
            <input type="submit" name="button" value="Delete">
            </form>';
        break;

        case 'film_category':
            echo '<form method="get">
            <label>Enter the ID here</label>
            </br>
            <input type="text" name="film_cat_id" placeholder="ID">
            </br>
            <input type="submit" name="button" value="Delete">
            </form>';
        break;

        case 'film_text':
            echo '<form method="get">
            <label>Enter the ID here</label>
            </br>
            <input type="text" name="film_text_id" placeholder="ID">
            </br>
            <input type="submit" name="button" value="Delete">
            </form>';
        break;

        case 'inventory':
            echo '<form method="get">
            <label>Enter the ID here</label>
            </br>
            <input type="text" name="inventory_id" placeholder="ID">
            </br>
            <input type="submit" name="button" value="Delete">
            </form>';
        break;

        case 'language':
            echo '<form method="get">
            <label>Enter the ID here</label>
            </br>
            <input type="text" name="language_id" placeholder="ID">
            </br>
            <input type="submit" name="button" value="Delete">
            </form>';
        break;

        case 'payment':
            echo '<form method="get">
            <label>Enter the ID here</label>
            </br>
            <input type="text" name="payment_id" placeholder="ID">
            </br>
            <input type="submit" name="button" value="Delete">
            </form>';
        break;

        case 'rental':
            echo '<form method="get">
            <label>Enter the ID here</label>
            </br>
            <input type="text" name="rental_id" placeholder="ID">
            </br>
            <input type="submit" name="button" value="Delete">
            </form>';
        break;

        case 'staff':
            echo '<form method="get">
            <label>Enter the ID here</label>
            </br>
            <input type="text" name="staff_id" placeholder="ID">
            </br>
            <input type="submit" name="button" value="Delete">
            </form>';
        break;
            
        case 'store':
            echo '<form method="get">
            <label>Enter the ID here</label>
            </br>
            <input type="text" name="store_id" placeholder="ID">
            </br>
            <input type="submit" name="button" value="Delete">
            </form>';
        break;

         
        }
    }
?>





</body>
</html>