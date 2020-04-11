<html>

<head>
    <title>Nahi Dikhne Vaala Vesse Bhi</title>
    <script src="jquery-1.10.2.min.js"></script>
    <style>

		body {background-color: #303641;}
    </style>
    <link rel="stylesheet" type="text/css" href="Attendance.css">
</head>

<body>
    <?php
        session_start();
        error_reporting(E_ERROR | E_WARNING | E_PARSE);
    ?>
    <div id="wrapper_outer">
        
        <div id="subj1">
            <div class="wrapper">
               
                <div class="circle1"></div>
                <div class="shadowring"></div>
                <div class="circle2"></div>
                <div class="shadowring2"></div>
               <canvas height="200" width="200" id="counter1"/>    

           </div>
            <p class="subject_name">WT</p>
        </div>



        <div id="subj2">
            <div class="wrapper">
               
                <div class="circle1"></div>
                <div class="shadowring"></div>
                <div class="circle2"></div>
                <div class="shadowring2"></div>
               <canvas height="200" width="200" id="counter2"/>    

           </div>
            <p class="subject_name">DBMS</p>
        </div>


    </div>



   <script type="application/javascript">
            var counter1 = document.getElementById('counter1').getContext('2d');
            var no1 = 0; 
            var pointToFill = 4.72;  
            var cw1 = counter1.canvas.width;  
            var ch1 = counter1.canvas.height;            
        
        function fillCounter1(){

            var diff = ((no1/100) * Math.PI*2);   

            counter1.clearRect(0,0,cw1,ch1);   
            
            counter1.lineWidth = 15;     
            
            if(no1<10)
            {
                counter1.fillStyle = '#a81212';    
            
                counter1.strokeStyle = '#a81212';  
            }
            if(no1>=10 && no1<=20)
            {
                counter1.fillStyle = '#d11805';    
            
                counter1.strokeStyle = '#d11805';  
            }
            if(no1>=21 && no1<=30)
            {
                counter1.fillStyle = '#df7416';    
            
                counter1.strokeStyle = '#df7416';  
            }
            if(no1>=31 && no1<=40)
            {
                counter1.fillStyle = '#e35d10';     
                counter1.strokeStyle = '#e35d10';   
            }
            if(no1>=41 && no1<=50)
            {
                counter1.fillStyle = '#b09518';    
            
                counter1.strokeStyle = '#b09518';   
            }  
            if(no1>=51 && no1<=60)
            {
                counter1.fillStyle = '#aa950b';    
            
                counter1.strokeStyle = '#aa950b';  
            } 
            if(no1>=61 && no1<=70)
            {
                counter1.fillStyle = '#acaf12';    
            
                counter1.strokeStyle = '#acaf12';    
            } 
            if(no1>=71 && no1<=80)
            {
                counter1.fillStyle = '#6bab08';     
            
                counter1.strokeStyle = '#6bab08';   
            }                                                           
            if(no1>=81 && no1<=90)
            {
                counter1.fillStyle = '#2a840a';    
            
                counter1.strokeStyle = '#2a840a';    
            }                                                           
            if(no1>=91 && no1<=100)
            {
                counter1.fillStyle = '#166611';   
                counter1.strokeStyle = '#166611';  
            }                


            counter1.shadowOffsetX = 3;                                              
            counter1.shadowOffsetY = 3;
            counter1.shadowColor="rgba(0,0,0,0.5)";
            counter1.shadowBlur=4;
            counter1.font = "25px Arial";   
            if(no1<10)
            {
            counter1.fillText(no1+'%',90,110);     
            }
            if(no1>=10 && no1<100)
            {
            counter1.fillText(no1+'%',82,110);      
            }
            if(no1==100)
            {
            counter1.fillText(no1+'%',75,110);     
            }   

            counter1.shadowOffsetX = 0;                                              
            counter1.shadowOffsetY = 0;
            counter1.beginPath();
            counter1.arc(100,100,92.5,pointToFill,diff+pointToFill);   
            
            counter1.stroke();  

            if(no1 >=  x)
            {
                clearTimeout(fill1);  
            }
            no1++;
        }
        
        
        var fill1 = setInterval(fillCounter1,30);    

        var fill2 = setInterval(fillCounter2,30);   


             var counter = document.getElementById('counter2').getContext('2d');
             var no = 0; 
           //  var pointToFill = 4.72;  
             var cw = counter.canvas.width; 
             var ch = counter.canvas.height;

        
        function fillCounter2(){

            var   diff = ((no/100) * Math.PI*2);

            counter.clearRect(0,0,cw,ch);  
            
            counter.lineWidth = 15;   
            
            if(no<10)
            {
                counter.fillStyle = '#a81212';    
            
                counter.strokeStyle = '#a81212';  
            }
            if(no>=10 && no<=20)
            {
                counter.fillStyle = '#d11805';    
            
                counter.strokeStyle = '#d11805';  
            }
            if(no>=21 && no<=30)
            {
                counter.fillStyle = '#df7416';    
            
                counter.strokeStyle = '#df7416';  
            }
            if(no>=31 && no<=40)
            {
                counter.fillStyle = '#e35d10';    
            
                counter.strokeStyle = '#e35d10';  
            }
            if(no>=41 && no<=50)
            {
                counter.fillStyle = '#b09518';    
            
                counter.strokeStyle = '#b09518';  
            }  
            if(no>=51 && no<=60)
            {
                counter.fillStyle = '#aa950b';    
            
                counter.strokeStyle = '#aa950b';  
            } 
            if(no>=61 && no<=70)
            {
                counter.fillStyle = '#acaf12';    
            
                counter.strokeStyle = '#acaf12';  
            } 
            if(no>=71 && no<=80)
            {
                counter.fillStyle = '#6bab08';    
            
                counter.strokeStyle = '#6bab08';  
            }                                                           
            if(no>=81 && no<=90)
            {
                counter.fillStyle = '#2a840a';    
            
                counter.strokeStyle = '#2a840a';  
            }                                                           
            if(no>=91 && no<=100)
            {
                counter.fillStyle = '#166611';    
            
                counter.strokeStyle = '#166611';  
            }                


            counter.shadowOffsetX = 3;                                              
            counter.shadowOffsetY = 3;
            counter.shadowColor="rgba(0,0,0,0.5)";
            counter.shadowBlur=4;
            counter.font = "25px Arial";    
            if(no<10)
            {
            counter.fillText(no+'%',90,110);
            }
            if(no>=10 && no<100)
            {
            counter.fillText(no+'%',82,110);
            }
            if(no==100)
            {
            counter.fillText(no+'%',75,110);
            }   

            counter.shadowOffsetX = 0;                                              
            counter.shadowOffsetY = 0;
            counter.beginPath();
            counter.arc(100,100,92.5,pointToFill,diff+pointToFill); 
            counter.stroke();   
                                             
            if(no >=  y)
            {
                clearTimeout(fill2);    
            }
            no++;
        }
                
    </script>



    <?php

        echo "  <script>
                var x=".$_SESSION['atd_wt'].";
                var y=".$_SESSION['atd_dbms'].";
            </script>";

    ?>

 
</body>
</html>
