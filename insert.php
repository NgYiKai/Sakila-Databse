<?php

    $conn=new mysqli('localhost','root','','sakila');

    if ($conn->connect_error) {
       die("Connection failed: " . $conn->connect_error);
    }

    if(isset($_GET['actor_first'])){
            $first = $_GET['actor_first'];
             $last = $_GET['actor_last'];
             $sql = "INSERT INTO actor (first_name, last_name) VALUES ('$first', '$last')";
             mysqli_query($conn, $sql); 
    }

    if(isset($_GET['address_add'])){
    $address1 = $_GET['address_add'];
    $address2 = $_GET['address2'];
    $district = $_GET['district'];
    $cityid = $_GET['cityid'];
    $postalcode = $_GET['postalcode'];
    $phone = $_GET['phone'];
    $sql = "INSERT INTO address (address, address2, district, city_id, postal_code, phone) VALUES ('$address1', '$address2', '$district', '$cityid', '$postalcode', '$phone')";
    mysqli_query($conn, $sql); 
    }
    
    if(isset($_GET['category_name'] )){
    $category_name = $_GET['category_name'];
    $sql = "INSERT INTO category (name) VALUES ('$category_name')";
    mysqli_query($conn, $sql); 
    }

    if(isset($_GET['city'])){
    $city = $_GET['city'];
    $countryid = $_GET['country_id'];
    $sql = "INSERT INTO city (city, country_id) VALUES ('$city', '$countryid')";
    mysqli_query($conn, $sql);
    }


    if(isset($_GET['country'])){
    $country = $_GET['country'];
    $sql = "INSERT INTO country (country) VALUES ('$country')";
    mysqli_query($conn, $sql);
    }

    if(isset($_GET['store_id'])){
    $storeid = $_GET['store_id'];
    $cusfirst = $_GET['cus_first'];
    $cuslast = $_GET['cus_last'];
    $cusemail = $_GET['cus_email'];
    $cusadd = $_GET['cus_add'];
    $cusactivedate = $_GET['cus_active_date'];
    $createdate = $_GET['create_date'];
    $sql = "INSERT INTO customer (store_id, first_name, last_name, email, address_id, active, create_date) 
    VALUES ('$storeid', '$cusfirst', '$cuslast', '$cusemail', '$cusadd', '$cusactivedate', '$createdate')";
    mysqli_query($conn, $sql);
    }

    if(isset($_GET['film_title'])){
    $filmtitle = $_GET['film_title'];
    $filmdes = $_GET['film_description'];
    $filmyear = $_GET['film_year'];
    $filmlang = $_GET['film_language_id'];
    $filmori = $_GET['film_ori'];
    $filmduration = $_GET['film_rental_duration'];
    $filmren = $_GET['film_rental_rate'];
    $filmlength = $_GET['film_length'];
    $filmcost = $_GET['film_replacement_cost'];
    $filmrating = $_GET['film_rating'];
    $filmspe = $_GET['film_special_features'];
    $sql = "INSERT INTO film (title, description, release_year, language_id, original_language_id, rental_duration, rental_rate, length, replacement_cost, rating, special_features) 
    VALUES ('$filmtitle', '$filmdes', '$filmyear', '$filmlang', '$filmori', '$filmduration', '$filmren', '$filmlength', '$filmcost', '$filmrating', '$filmspe')";
    mysqli_query($conn, $sql);
    }

    if(isset($_GET['actor_id'])){
    $actorid = $_GET['actor_id'];
    $filmid = $_GET['film_id'];
    $sql = "INSERT INTO film_actor (actor_id, film_id) VALUES ('$actorid', '$filmid')";
    mysqli_query($conn, $sql);
    }

    if(isset($_GET['category_id'])){
    $categoryid = $_GET['category_id'];
    $sql = "INSERT INTO film_category (category_id) VALUES ('$categoryid')";
    mysqli_query($conn, $sql);
    }

    if(isset($_GET['film_text_title'])){
    $filmtt = $_GET['film_text_title'];
    $filmtd = $_GET['film_text_description'];
    $sql = "INSERT INTO film_text (title, description) VALUES ('$filmtt', '$filmtd')";
    mysqli_query($conn, $sql);
    }

    if(isset($_GET['inv_film_id'])){
    $invfilm = $_GET['inv_film_id'];
    $invstore = $_GET['inv_store_id'];
    $sql = "INSERT INTO inventory (film_id, store_id) VALUES ('$invfilm', '$invstore')";
    mysqli_query($conn, $sql);
    }

    if(isset($_GET['language_name'])){
    $langname = $_GET['language_name'];
    $sql = "INSERT INTO language (name) VALUES ('$language_name')";
    mysqli_query($conn, $sql);
    }

    if(isset($_GET['payment_customer_id'])){
    $paycus = $_GET['payment_customer_id'];
    $paystaff = $_GET['payment_staff_id'];
    $payrental = $_GET['payment_rental_id'];
    $payamount = $_GET['payment_amount'];
    $paydate = $_GET['payment_date'];
    $sql = "INSERT INTO payment (customer_id, staff_id, rental_id, amount, payment_date)
    VALUES ('$paycus', '$paystaff', '$payrental', '$payamount', '$paydate')";
    mysqli_query($conn, $sql);
    }

    if(isset( $_GET['rental_date'])){
    $rentaldate = $_GET['rental_date'];
    $rentalinv = $_GET['rental_inventory_id'];
    $rentalcustomer = $_GET['rental_customer_id'];
    $rentalreturndate = $_GET['rental_return_date'];
    $rentalstaff = $_GET['rental_staff_id'];
    $sql = "INSERT INTO rental (rental_date, inventory_id, customer_id, return_date, staff_id)
    VALUES ('$rentaldate', '$rentalinv', '$rentalcustomer', '$rentalreturndate', '$rentalstaff')";
    mysqli_query($conn, $sql);
    }

    if(isset($_GET['staff_first'])){
    $stafffirst = $_GET['staff_first'];
    $stafflast = $_GET['staff_last'];
    $staffadd = $_GET['staff_address_id'];
    $staffemail = $_GET['staff_email'];
    $staffstore = $_GET['staff_store_id'];
    $staffactive = $_GET['staff_active'];
    $staffuser = $_GET['staff_username'];
    $staffpass = $_GET['staff_password'];
    $sql = "INSERT INTO staff (first_name, last_name, address_id, email, store_id,active, username, password)
    VALUES ('$stafffirst', '$stafflast', '$staffadd', '$staffemail', '$staffstore',  '$staffactive', '$staffuser', '$staffpass')";
    mysqli_query($conn, $sql);
    }

    if(isset($_GET['store_manager'])){
        $storeman = mysqli_real_escape_string($conn, $_GET['store_manager']);
		$storeadd = mysqli_real_escape_string($conn, $_GET['store_address']);
        $sql = "INSERT INTO store (manager_staff_id, address_id)
                VALUES ('$storeman', '$storeadd')";

        if(mysqli_query($conn, $sql)){
            // header('Location:index.php');
        } else {
            echo 'query error: '. mysqli_error($conn);
        }
    }

?>

<!DOCTYPE html>
<html>
<head>  
    <title>INSERT</title>
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
        }

        input[type=submit]
        {
            margin-top: 8px;
            margin-left: 940px;
            background-color: #6495F1;
            border: none;
            font-size: 20px;
        }
    </style>
<body class="grey lighten-4">
    <div class="header">
    <a id="ru" href="index.php" style="color:#FFFFFF"><h1>S  A  K  I  L  A</h1></a>
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

if (!empty($_GET['table'])) {
    $insert=$_GET['table'];
}

if (!empty($_GET['table'])||isset($insert)) {
    switch($insert){
        case 'actor':
            echo '<form method="get">
            <input type="text" name="actor_first" placeholder="First Name">
            </br>
            <input type="text" name="actor_last" placeholder="Last Name">
            </br>
            <input type="submit" name="button" value="Insert">
             </form>';
             break;
     
         case 'address':
             echo '<form method="get">
             <input type="text" name="address_add" placeholder="Address">
             </br>
             <input type="text" name="address2" placeholder="Address2">
             </br>
             <input type="text" name="district" placeholder="District">
             </br>
             <input type="text" name="cityid" placeholder="City Id">
             </br>
             <input type="text" name="postalcode" placeholder="Postal code">
             </br>
             <input type="text" name="phone" placeholder="Phone">
             </br>
             <input type="submit" name="button" value="Insert">
             </form>';
         break;


         case 'category':
             echo '<form method="get">
             <input type="text" name="category_name" placeholder="Name">
             </br>
             <input type="submit" name="button" value="Insert">
             </form>';
     

        break;
     
         case 'city':
             echo '<form method="get">
             <input type="text" name="city" placeholder="City">
             </br>
             <input type="text" name="country_id" placeholder="Country Id">
             </br>
             <input type="submit" name="button" value="Insert">
             </form>';
             
         break;

         case 'country':
             echo '<form method="get">
             <input type="text" name="country" placeholder="Country">
             </br>
             <input type="submit" name="button" value="Insert">
             </form>';
             
         break;

         case 'customer':
             echo '<form method="get">
             <input type="text" name="store_id" placeholder="Store Id">
             </br>
             <input type="text" name="cus_first" placeholder="First Name">
             </br>
             <input type="text" name="cus_last" placeholder="Last Name">
             </br>
             <input type="text" name="cus_email" placeholder="Email">
             </br>
             <input type="text" name="cus_add" placeholder="Address Id">
             </br>
             <input type="text" name="cus_active_date" placeholder="Active date">
             </br>
             <input type="text" name="create_date" placeholder="Create date">
             </br>
             <input type="submit" name="button" value="Insert">
             </form>';

         break;
     
     
         case 'film':
             echo '<form method="get">
             <input type="text" name="film_title" placeholder="Title">
             </br>
             <input type="text" name="film_description" placeholder="Description">
             </br>
             <input type="text" name="film_year" placeholder="Release year">
             </br>
             <input type="text" name="film_language_id" placeholder="Language ID">
             </br>
             <input type="text" name="film_ori" placeholder="Original Language ID">
             </br>
             <input type="text" name="film_rental_duration" placeholder="Rental duration">
             </br>
             <input type="text" name="film_rental_rate" placeholder="Rental rate">
             </br>
             <input type="text" name="film_length" placeholder="Length">
             </br>
             <input type="text" name="film_replacement_cost" placeholder="Replacement cost">
             </br>
             <input type="text" name="film_rating" placeholder="Rating">
             </br>
             <input type="text" name="film_special_features" placeholder="Special Features">
             </br>
             <input type="submit" name="button" value="Insert">
             </form>';

         break;

         case 'film_actor':
             echo'
             <form method="get">
             <input type="text" name="actor_id" placeholder="Actor ID">
             </br>
             <input type="text" name="film_id" placeholder="Film ID">
             </br>
             <input type="submit" name="button" value="Insert">
             </form>';

         break;
     
         case 'film_category':
             echo'<form method="get">
             <input type="text" name="category_id" placeholder="Category ID">
             </br>
             <input type="submit" name="button" value="Insert">
             </form>';

         break;
     
         case 'film_text':
             echo'<form method="get">
             <input type="text" name="film_text_title" placeholder="Title">
             </br>
             <input type="text" name="film_text_description" placeholder="Description">
             </br>
             <input type="submit" name="button" value="Insert">
             </form>';
     

         break;
     
         case 'inventory':
             echo'<form method="get">
             <input type="text" name="inv_film_id" placeholder="Film ID">
             </br>
             <input type="text" name="inv_store_id" placeholder="Store ID">
             </br>
             <input type="submit" name="button" value="Insert">
             </form>';

         break;
     
         case 'language':
             echo'<form method="get">
             <input type="text" name="language_name" placeholder="Language">
             </br>
             <input type="submit" name="button" value="Insert">
             </form>';

         break;
     
         case 'payment':
             echo'<form method="get">
             <input type="text" name="payment_customer_id" placeholder="Customer ID">
             </br>
             <input type="text" name="payment_staff_id" placeholder="Staff ID">
             </br>
             <input type="text" name="payment_rental_id" placeholder="Rental ID">
             </br>
             <input type="text" name="payment_amount" placeholder="Amount">
             </br>
             <input type="text" name="payment_date" placeholder="Payment date">
             </br>
             <input type="submit" name="button" value="Insert">
             </form>';

         break;
     
         case 'rental':
             echo'<form method="get">
             <input type="text" name="rental_date" placeholder="Rental date">
             </br>
             <input type="text" name="rental_inventory_id" placeholder="Inventory ID">
             </br>
             <input type="text" name="rental_customer_id" placeholder="Customer ID">
             </br>
             <input type="text" name="rental_return_date" placeholder="Return date">
             </br>
             <input type="text" name="rental_staff_id" placeholder="Staff ID">
             </br>
             <input type="submit" name="button" value="Insert">
             </form>';


         break;

         case 'staff':
             echo'<form method="get">
             <input type="text" name="staff_first" placeholder="First Name">
             </br>
             <input type="text" name="staff_last" placeholder="Last Name">
             </br>
             <input type="text" name="staff_address_id" placeholder="Address ID">
             </br>
             <input type="text" name="staff_email" placeholder="Email">
             </br>
             <input type="text" name="staff_store_id" placeholder="Store ID">
             </br>
             <input type="text" name="staff_active" placeholder="Active">
             </br>
             <input type="text" name="staff_username" placeholder="Username">
             </br>
             <input type="text" name="staff_password" placeholder="Password">
             </br>
             <input type="submit" name="button" value="Insert">
             </form>';

            break;

        case 'store':
            echo'<form method="get">
            <input type="text" name="store_manager" placeholder="Manager ID">
            </br>
            <input type="text" name="store_address" placeholder="Address ID">
            </br>
            <input type="submit" name="button" value="Insert">
            </form>';
            $insert='store';
        break;          
    }
    
}
?>

</body>
</html> 