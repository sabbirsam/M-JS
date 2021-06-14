/**
 * To Print on console ========================================================================================================
 */

 console.log("anything"); 


<script src="my.js"></script>

/**
 * NEW LINE Work as a semicolon ; but not in every cases like addition it work as addition not a semicolon ====================================================
 */
<script type="text/javascript"> 
  
        alert("Hello sam") 
        alert("Hello sabbir")

        alert(3+1+2)
        alert(3
        +
        1
        +
        2)

 </script>



/**
 * add script on js bottom of body tag ========================================================================================================
 */
<body>

  <p>Before the script...</p>




  
  <script type="text/javascript"> 
  
        alert("Hello sam") 
        alert("Hello sabbir")

        alert(3+1+2)
        alert(3
        +
        1
        +
        2)

 </script>

  
  <p>...After the script.</p>

// cab not declare any explanation when we use script to link any js file 

  <script src="my.js"></script> // this is ok and work
  <script src="my.js">alert("Hello sam") </script>//not ok and insed console will not work but file was conntected

</body>



/**
 * Understant when generate error witout semicolon ========================================================================================================
 */

<body>

  <p>Before the script...</p>
    <script>

        alert("Hello"); //// have semicolon so it will work normally->

        [1, 2].forEach(alert);

    </script>

    
  
  <p>...After the script.</p>

    <script>

        alert("Hello")   // no semicolon so it will gives an error, nornally it need to work but not in eveycase,
        
        //error-> (index):12 Uncaught TypeError: Cannot read property '2' of undefined at (index):12

        //That’s because JavaScript does not assume a semicolon before square brackets [...]



        [1, 2].forEach(alert);

    </script>
  
  <p>...another the script.</p>

  <script>

    alert("Hello")[1, 2].forEach(alert); //give na error need an semicolon

</script>


  <script src="my.js"></script>
  

</body>
