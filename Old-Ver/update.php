<?php

    $conn=new mysqli('localhost','Kai','abc123','sakila');

    if ($conn->connect_error) {
       die("Connection failed: " . $conn->connect_error);
    }

    if(isset($_GET['actor_first'])){
        $actorid = $_GET['actor_id'];    
        $first = $_GET['actor_first'];
        $last = $_GET['actor_last'];
        $query = mysqli_query($conn,"UPDATE actor set first_name='$first', 
                                                      last_name='$last' 
                                                  where actor_id='$actorid'");
    }

    if(isset($_GET['address_add'])){
        $addressid = $_GET['address_id'];
        $address1 = $_GET['address_add'];
        $address2 = $_GET['address2'];
        $district = $_GET['district'];
        $cityid = $_GET['cityid'];
        $postalcode = $_GET['postalcode'];
        $phone = $_GET['phone'];
        $query = mysqli_query($conn,"UPDATE address set address1='$address1', 
                                                        address2='$address2', 
                                                        district='$district', 
                                                        city_id='$cityid', 
                                                        postal_code='$postalcode', 
                                                        phone='$phone' 
                                                    where address_id='$addressid'");
    }
    
    if(isset($_GET['category_name'] )){
        $categoryid = $_GET['category_id'];
        $category_name = $_GET['category_name'];
        $query = mysqli_query($conn,"UPDATE category set name='$category_name' 
                                                     where category_id='$categoryid'"); 
    }

    if(isset($_GET['city'])){
        $cityid = $_GET['city_id'];
        $city = $_GET['city'];
        $countryid = $_GET['country_id'];
        $query = mysqli_query($conn,"UPDATE city set city='$city', 
                                                     countr_id='$countryid' 
                                                 where city_id='$cityid'");
    }


    if(isset($_GET['country'])){
        $countryid = $_GET['country_id'];
        $country = $_GET['country'];
        $query = mysqli_query($conn,"UPDATE country set country='$country'
                                                    where country_id='$countryid'");
    }

    if(isset($_GET['customer_store_id'])){
        $cusid = $_GET['customer_id'];
        $storeid = $_GET['customer_store_id'];
        $cusfirst = $_GET['cus_first'];
        $cuslast = $_GET['cus_last'];
        $cusemail = $_GET['cus_email'];
        $cusadd = $_GET['cus_add'];
        $cusactivedate = $_GET['cus_active_date'];
        $createdate = $_GET['create_date'];
        $query = mysqli_query($conn,"UPDATE customer set store_id='$storeid', 
                                                         first_name='$cusfirst', 
                                                         last_name='$cuslast', 
                                                         email='$cusemail', 
                                                         address_id='$cusadd', 
                                                         active='$cusactivedate', 
                                                         create_date='$createdate' 
                                                     where customer_id='$cusid'");
    }

    if(isset($_GET['film_title'])){
        $filmid = $_GET['film_id'];
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
        $query = mysqli_query($conn,"UPDATE film set title='$filmtitle', 
                                                     description='$filmdes', 
                                                     release_year='$filmyear', 
                                                     language_id='$filmlang', 
                                                     original_language_id='$ori',
                                                     rental_duration='$filmduration', 
                                                     rental_date='$filmren', 
                                                     length='$filmlength', 
                                                     replacement_cost='$filmcost', 
                                                     rating='$filmrating', 
                                                     special_features='$filmspe' 
                                                 where film_id='$filmid'");
    }

    if(isset($_GET['actor_id'])){
        $originalactorid= $_GET['original_actor_id'];
        $originalfilmid= $_GET['original_film_id'];
        $actorid = $_GET['actor_id'];
        $filmid = $_GET['film_id'];
        $query = mysqli_query($conn,"UPDATE film_actor set film_id='$filmid' ,
                                                        actor_id='$actorid'
                                                       where actor_id='$originalactorid' AND
                                                       film_id='$originalfilmid'  "); 
    }

    if(isset($_GET['category_id'])){
        $filmid = $_GET['film_id'];
        $categoryid = $_GET['category_id'];
        $query = mysqli_query($conn,"UPDATE film_category set category_id='$categoryid' 
                                                          where film_id='$filmid'");
    }

    if(isset($_GET['film_text_title'])){
        $filmid = $_GET['film_id'];
        $filmtt = $_GET['film_text_title'];
        $filmtd = $_GET['film_text_description'];
        $query = mysqli_query($conn,"UPDATE film_text set title='$filmtitle', 
                                                          description='$filmd'
                                                      where film_id='$filmid'"); 
    }

    if(isset($_GET['inv_film_id'])){
        $invid = $_GET['inv_id'];
        $invfilm = $_GET['inv_film_id'];
        $invstore = $_GET['inv_store_id'];
        $query = mysqli_query($conn,"UPDATE inventory set film_id='$invfilmid', 
                                                          store_id='$invstoreid' 
                                                      where inventory_id='$invid'");
    }

    if(isset($_GET['language_name'])){
        $langid = $_GET['lang_id'];
        $langname = $_GET['language_name'];
        $query = mysqli_query($conn,"UPDATE language set name='$langname'
                                                     where language_id='$langid'"); 
    }

    if(isset($_GET['payment_customer_id'])){
        $payid = $_GET['payment_id'];
        $paycus = $_GET['payment_customer_id'];
        $paystaff = $_GET['payment_staff_id'];
        $payrental = $_GET['payment_rental_id'];
        $payamount = $_GET['payment_amount'];
        $paydate = $_GET['payment_date'];
        $query = mysqli_query($conn,"UPDATE payment set customer_id='$paycusid', 
                                                        staff_id='$paystaffid', 
                                                        rental_id='$payrentalid', 
                                                        amount='$payamount', 
                                                        payment_date='$paydate' 
                                                    where payment_id='$payid'");
    }

    if(isset( $_GET['rental_date'])){
        $rentid = $_GET['rent_id'];
        $rentaldate = $_GET['rental_date'];
        $rentalinv = $_GET['rental_inventory_id'];
        $rentalcustomer = $_GET['rental_customer_id'];
        $rentalreturndate = $_GET['rental_return_date'];
        $rentalstaff = $_GET['rental_staff_id'];
        $query = mysqli_query($conn,"UPDATE rental set rental_date='$rentaldate',
                                                       inventory_id='$rentalinvid',
                                                       customer_id='$rentalcustomerid',
                                                       return_date='$rentalreturndate',
                                                       staff_id='$rentalstaffid'
                                                    where rental_id='$rentid'");
    }

    if(isset($_GET['staff_first'])){
        $staffid = $_GET['staff_id'];
        $stafffirst = $_GET['staff_first'];
        $stafflast = $_GET['staff_last'];
        $staffadd = $_GET['staff_address_id'];
        $staffemail = $_GET['staff_email'];
        $staffstore = $_GET['staff_store_id'];
        $staffactive = $_GET['staff_active'];
        $staffuser = $_GET['staff_username'];
        $staffpass = $_GET['staff_password'];
        $query = mysqli_query($conn,"UPDATE staff set first_name='$stafffirst',
                                                      last_name='$stafflast',
                                                      address_id='$staffadd',
                                                      email='$staffemail',
                                                      store_id='$staffstore',
                                                      active='$staffactive',
                                                      username='$staffuser',
                                                      password='$staffpass'
                                                    where staff_id='$staffid'");
    }

    if(isset($_GET['store_manager'])){
        $storeid = $_GET['store_id'];
        $storeman = $_GET['store_manager'];
        $storeadd = $_GET['store_address'];
        $sql = "UPDATE store SET manager_staff_id='$storeman',
                                address_id='$storeadd'
                             WHERE store_id='$storeid'";
        echo "$sql";
        if(mysqli_query($conn, $sql)){
            header('Location:index.php');
        } else {
            echo 'query error: '. mysqli_error($conn);
        }
    }

?>

<!DOCTYPE html>
<html>
<head>  
    <title>Sakila</title>
    <style type="text/css">
        .brand{
            background:#000000 !important;
        }

        .brand-text{
            color:#000000 !important
        }    
    </style>
</head>

<body>
    <nav class="white z-depth-0">
        <div class="container">
            <a href="http://localhost/sakila/" class="brand-logo brand-text">Sakila</a>
        </div>
    </nav> 
    
    <div class="buttons">
       <a href= "insert.php">Insert</a>
        <a href= "update.php">Update</a>
        <a href= "delete.php">Delete</a>
        <a href= "select.php">Select</a>
    </div>

<form method = "get">
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
    <input type="submit" name="button" value="submit">	
</form>


<?php

if (!empty($_GET['table'])) {
    $insert=$_GET['table'];
}

if (!empty($_GET['table'])||isset($insert)) {
    switch($insert){
        case 'actor':
            echo '<form method="get">
            <input type="text" name="actor_id" placeholder="Actor Id">
            </br>
            <input type="text" name="actor_first" placeholder="First Name">
            </br>
            <input type="text" name="actor_last" placeholder="Last Name">
            </br>
            <input type="submit" name="button" value="Submit">
             </form>';
             break;
     
         case 'address':
             echo '<form method="get">
             <input type="text" name="actor_id" placeholder="Actor Id">
             </br>
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
             <input type="submit" name="button" value="Submit">
             </form>';
         break;


         case 'category':
             echo '<form method="get">
             <input type="text" name="category_id" placeholder="Category ID">
             </br>
             <input type="text" name="category_name" placeholder="Name">
             </br>
             <input type="submit" name="button" value="Submit">
             </form>';
     

        break;
     
         case 'city':
             echo '<form method="get">
             <input type="text" name="city_id" placeholder="City Id">
             </br>
             <input type="text" name="city" placeholder="City">
             </br>
             <input type="text" name="country_id" placeholder="Country Id">
             </br>
             <input type="submit" name="button" value="Submit">
             </form>';
             
         break;

         case 'country':
             echo '<form method="get">
             <input type="text" name="country_id" placeholder="Country Id">
             </br>
             <input type="text" name="country" placeholder="Country">
             </br>
             <input type="submit" name="button" value="Submit">
             </form>';
             
         break;

         case 'customer':
             echo '<form method="get">
             <input type="text" name="customer_id" placeholder="Customer Id">
             </br>
             <input type="text" name="customer_store_id" placeholder="Store Id">
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
             <input type="submit" name="button" value="Submit">
             </form>';

         break;
     
     
         case 'film':
             echo '<form method="get">
             <input type="text" name="film_id" placeholder="Film Id">
             </br>
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
             <input type="submit" name="button" value="Submit">
             </form>';

         break;

         case 'film_actor':
             echo'
             <form method="get">
             <input type="text" name="original_actor_id" placeholder="Actor Id">
             </br>
             <input type="text" name="original_film_id" placeholder="Category ID">
             </br>
             <input type="text" name="actor_id" placeholder="Actor ID">
             </br>
             <input type="text" name="film_id" placeholder="Film ID">
             </br>
             <input type="submit" name="button" value="Submit">
             </form>';

         break;
     
         case 'film_category':
             echo'<form method="get">
             <input type="text" name="film_id" placeholder="Film Id">
             </br>
             <input type="text" name="category_id" placeholder="Category ID">
             </br>
             <input type="submit" name="button" value="Submit">
             </form>';

         break;
     
         case 'film_text':
             echo'<form method="get">
             <input type="text" name="film_id" placeholder="Film Id">
             </br>
             <input type="text" name="film_text_title" placeholder="Title">
             </br>
             <input type="text" name="film_text_description" placeholder="Description">
             </br>
             <input type="submit" name="button" value="Submit">
             </form>';
     

         break;
     
         case 'inventory':
             echo'<form method="get">
             <input type="text" name="inv_id" placeholder="Inventory Id">
             </br>
             <input type="text" name="inv_film_id" placeholder="Film ID">
             </br>
             <input type="text" name="inv_store_id" placeholder="Store ID">
             </br>
             <input type="submit" name="button" value="Submit">
             </form>';

         break;
     
         case 'language':
             echo'<form method="get">
             <input type="text" name="lang_id" placeholder="Language Id">
             </br>
             <input type="text" name="language_name" placeholder="Language">
             </br>
             <input type="submit" name="button" value="Submit">
             </form>';

         break;
     
         case 'payment':
             echo'<form method="get">
             <input type="text" name="payment_id" placeholder=Payment Id">
             </br>
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
             <input type="submit" name="button" value="Submit">
             </form>';

         break;
     
         case 'rental':
             echo'<form method="get">
             <input type="text" name="rent_id" placeholder="Rental Id">
             </br>
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
             <input type="submit" name="button" value="Submit">
             </form>';


         break;

         case 'staff':
             echo'<form method="get">
             <input type="text" name="staff_id" placeholder="Staff Id">
             </br>
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
             <input type="submit" name="button" value="Submit">
             </form>';

            break;

        case 'store':
            echo'<form method="get">
            <input type="text" name="store_id" placeholder="Store Id">
            </br>
            <input type="text" name="store_manager" placeholder="Manager ID">
            </br>
            <input type="text" name="store_address" placeholder="Address ID">
            </br>
            <input type="submit" name="button" value="submit">
            </form>';
           
        break;          
    }
    
}
?>

</body>
</html>