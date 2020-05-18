<!DOCTYPE html>
<html >
<head>  
    <title>Sakila</title>
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

		ul{
            margin-left: 200px;
            padding: 200px 500px 0px 500px;
            list-style-type: none;
            margin-top: -100px;
        }
        
        ul li{
            box-sizing: border-box;
            width: 15em;
            height: 3em;
            font-size: 30px;
            border-radius: 0.5em;
            margin: 2em;
            box-shadow: 0 0 1em rgba(0,0,0,0.2);
            line-height: 3em;
            transition: 0.3s;
            cursor: pointer;
        }

        ul li:nth-child(odd) {
            background: linear-gradient(to right, #EF6279, #f0704a);
            text-align: left;
            padding-left: 15%;
            transform: perspective(600px) rotateY(45deg);
        }

        ul li:nth-child(even) {
            background: linear-gradient(to left, #EF6279, #f0704a);
            text-align: right;
            padding-right: 15%;
            transform: perspective(600px) rotateY(-45deg);
        }

        ul li:nth-child(odd):hover {
            transform: perspective(200px) rotateY(10deg);
            padding-left: 5%;
        }

        ul li:nth-child(even):hover {
            transform: perspective(200px) rotateY(-10deg);
            padding-right: 5%;
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
        }

        select {
        width: 1200px;
        height: 60px;
        background-color: #e1e5eb;
        margin-left: 8px;
        font-size: 20px;
        }

        input[type=submit]
        {
            margin-top: 8px;
            margin-left: 8px;
            background-color: #e1e5eb;
            border: none;
            font-size: 20px;
        }

        table{
            color:white;
            font-size: 20px;
            border: 3px solid black;
            margin-left: 400px;
            width: 70%;
            text-align: center;
            border-collapse: collapse;
        }
        th, td{
            border: 3px solid black;
            border-collapse: collapse;
            margin-bottom: 5px;
        }

        .button{
            padding: 0;
            border: none;
            background: none;
            font-size: 32px;
        }
		
    </style>
</head>

<body class="grey lighten-4">
    <div class="header">
    <a id="ru" href="index.php" style="color:#FFFFFF"><h1>S  A  K  I  L  A</h1></a>
    </div>
    
    <div>
      <nav class="topnav">
      <!--  <a href="taskc.php" style="color:#FFFFFF">HOME</a>
            
            <div class="vert"></div>-->
           
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
                <input type="submit" name="button" value="Submit">
            </form>
        </nav> 
    </div>
	

    <!-- <form  method="get">
    <div>
        <ul>
            <li class="buttons"><b><button class="button" name="action" type="submit" value="insert">INSERT</button> </b></li>
            <li class="buttons"><b><button   class="button" name="action" type="submit" value="update">UPDATE</button><b></li>
            <li class="buttons"><b><button   class="button" name="action" type="submit" value="delete">DELETE</button></b></li>
            <li class="buttons"><b><button   class="button" name="action" type="submit" value="select">SELECT</button></b></li>
        </ul>
    </div>
    </form> -->
    
 

    <div>
        <ul>
            <li class="buttons"><b> <a href= "insert.php"> INSERT</a> </b></li>
            <li class="buttons"><b><a href= "update.php">UPDATE</a><b></li>
            <li class="buttons"><b><a href= "delete.php">DELETE</a></b></li>
            <li class="buttons"><b><a href= "select.php">SELECT</a></b></li>
        </ul>
    </div>

    <?php 
        if (!empty($_GET)){
        include("select.php");}
    ?>
	


</body>
</html> 