<html>

<head>
    <title>Nahi Dikhne Vaala Vesse Bhi</title>
    <style>

		body {background-color: #303641;}
        #wrapper{border: 2px solid black;margin-left: auto;margin-right: auto;border-radius: 10px;width: 90%;padding-left: 50px;padding-right: 50px;padding-bottom: 50px;padding-top: 50px;}


       #bar{  border-radius: 6px; background-color: #373b3d;padding: 10px 20px;margin-right: 30px;font-family: Arial;
                font-size: 20px;color: grey;border: 2px solid #373b3d; box-shadow: 0 0 6px rgba(0,0,0,90);}
       #bar:hover{box-shadow: 0 0 9px rgba(0,0,0,100);}
       #sub{ border-radius: 6px; background-color: #373b3d;font-family: Arial;font-size: 20px;color: grey;border: 2px solid #373b3d;box-shadow: 0 0 6px rgba(0,0,0,90);padding: 10px 15px; }
       #sub:hover{cursor: pointer;box-shadow: 0 0 9px rgba(0,0,0,100);}
       #result{padding: 20px;font-family: Arial;font-size: 20px;color: white;border: 2px solid black;padding-left: 80px;}
    </style>
</head>

<body>
	
    <div id="wrapper">
     <center>   <form action="Search.php" method="get"> 
        
        <input id="bar" type="text" name="search" size="80" placeholder="Enter Srarch Query"/> 
        <input id="sub" type="submit" name="submit" value="Search">
        </form></center>   
        <br><br>
        <div id="result">asd</div>
    </div>


  <?php  

        session_start();
        /*error_reporting(E_ERROR | E_WARNING | E_PARSE);*/
        $qur = $_GET['search'];
        $sub = $_GET['submit'];
        $con=mysqli_connect("localhost","root","","login_db");

        if($qur==''){
            exit();
        }



        $srch_exploded = explode (" ", $qur);
        $x=0;
        $construct="";
        foreach($srch_exploded as $srch_each)
        { 
             
            $x++;

            if($x==1)
            {
               $construct .="title LIKE '%$srch_each%'";
            }
            else
            {
               $construct .="OR title LIKE '%$srch_each%'";
            }

        }

        $construct ="SELECT * FROM sites WHERE $construct";
        $run = mysqli_query($con,$construct);
        $foundnum = mysqli_num_rows($run);

        if ($foundnum==0)
        {
         
         echo "Sorry, there are no matching result for \"$qur\"";
         
        }

         else
         { 
             while($runrows = mysqli_fetch_assoc($run))
             {
                
                $title = $runrows ['title'];
                $desc = $runrows ['description'];
                $url = $runrows ['url'];

                echo "<script>
                    var di=document.createElement('div');
                    var h2i=document.createElement('h2');
                    var ai=document.createElement('a');
                    var pi=document.createElement('p');
                    var hr=document.createElement('hr');
                    var re=document.getElementById('result');

                    h2i.innerHTML='$title';
                    ai.innerHTML='$url';
                    pi.innerHTML='$desc';

                    di.append(h2i,ai,pi,hr);
                    re.append(di);

                    </script>        
                ";                
 
              }


                    /*      
                  var x=document.getElementById('result');
                  var y=document.createElement('h2');
                  y.innerHTML='$title';
                  x.append(y);


*/
           
          }

    ?>
</body>

</html>


