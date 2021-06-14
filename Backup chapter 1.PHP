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


/**
    Comment-> ---------------------------------------------------------------------
*/
<script>
        
        alert('Hello');

        /* An example with two messages.
            This is a multiline comment.
        */
        
        alert('World');

    </script>


<script>

        alert('Hello');
        /*
        /* nested comment ? gives an error !?  Uncaught SyntaxError: Unexpected token '*' */
        */ 
        
        alert('World');

    </script>


/**
    use strict-> ---------------------------------------------------------------------so work as modern js
*


<script>
        "use strict";  //"use strict" or 'use strict'. When it is located at the top of a script, the whole script works the “modern” way.
        'use strict'; // must be in top
        alert('Hello');
    </script>


/**
    Variable-> ---------------------------------------------------------------------so work as modern js
*
<script>
        "use strict";  
        //variable 
        let message; // here let used for declare variable

        message = "Hello WPPOOLO";

        alert(message);

    </script>


<script>
        "use strict";  
        //variable 
        let message ="BD"; // here let used for declare variable

        // message = "Hello WPPOOLO";

        alert(message);

    </script>

<script>
        "use strict";  
        //variable 
        let user= "Md Sabbir" , age=24, message= "use single let to declare multiple variable";

        alert(user);
        alert(age);
        alert(message);

        console.log(user +" "+ age +" "+ message);//Md Sabbir 24 use single let to declare multiple variable
    </script>

<script>
        "use strict";  
        //best way to declare variable 
        let user= "Md Sabbir";
        let age=24; 
        let message= "use single let to declare multiple variable";

        alert(user);
        alert(age);
        alert(message);

        console.log(user +" "+ age +" "+ message);//Md Sabbir 24 use single let to declare multiple variable
    </script>

/*
The var keyword is almost the same as let. It also declares a variable, but in a slightly different, “old-school” way.
*/
    <script>
        "use strict";  
        //variable 
        var user= "Md Sabbir";
        var age=24; 
        var message= "use single let to declare multiple variable";

        alert(user);
        alert(age);
        alert(message);

        console.log(user +" "+ age +" "+ message);//Md Sabbir 24 use single let to declare multiple variable
    </script>

<script>
        "use strict";  
        //variable 
        let message;

        message = 'Hello!';

        message = 'World!'; // value changed

        alert(message); // it will print  the World. as it update
    </script>


<script>
        "use strict";  
        //variable 
        let message = "Copy data from one variable to another";

        let new_message ;

        new_message = message; // value changed

        alert(new_message); // it will print  Copy data from one variable to another. as it update
    </script>


<script>
        "use strict";  
        //variable 
        let message = "Copy data from one variable to another";

        let message = "Upate" ; // give an uncaught error as 2 times same name variable is declare

       

        alert(new_message); // it will print  Copy data from one variable to another. as it update
    </script>

 <script>
        "use strict";  
        //variable 
         const message = "3.0416";
        alert(message); // it will print  Copy data from one variable to another. as it update

        /*
        Constant can not redeclare
        */

        const message_two = "3.0416"; // Uncaught TypeError: Assignment to constant variable.
        message_two = "1201"
        alert(message); // it will print  Copy data from one variable to another. as it update
    </script>


<script>
        "use strict";  
        //variable 
        const RED_COLOR= '#F00';
        const GREEN_COLOR=  '#F00';

        let color1 = RED_COLOR;
        let color2 = GREEN_COLOR;

        
        alert(color1); // it will print  Copy data from one variable to another. as it update
        alert(color2);
    </script>

    <!-- ------------------------Data Type  ------->

    <script>
        "use strict";  
        let word = "Hello";
        let n = 12.00;
        let o = 1200;

        n=13.00; // this will work and print
        o = 11.00;
        
        alert(n); // it will print  Copy data from one variable to another. as it update
        alert(o);


        // Infinity, -Infinity and NaN 
        alert(Infinity); // it will print  Copy data from one variable to another. as it update
        alert(-Infinity);
        alert(NaN);
    </script>

<script>
        "use strict";  
       // Infinity, -Infinity and NaN 
       console.log(typeof Infinity); // number
       console.log(typeof -Infinity); //number
       console.log(typeof NaN); // number 
    </script>

<!-- Big integer  -->
<script>
        "use strict";  
       // BigInt type was recently added to the language to represent integers of arbitrary length.

       // A BigInt value is created by appending n to the end of an integer:


       const BigInt = 12545221n; //end is n so its a big int.
        // the "n" at the end means it's a BigInt
        const bigInt = 1234567890123456789012345678901234567890n;


       alert(BigInt);
       alert(bigInt);

       console.log(BigInt);
       console.log(bigInt);
    </script>

    <!-- String  -->

<script>
        "use strict";  

        // Double quotes: "Hello".
        // Single quotes: 'Hello'.
        // Backticks: `Hello`.    
        
        let fname = "Sabbir";
        let lname = "Ahmed"

        let res = `My name is ${fname}    ${lname}`; //My name is Sabbir    Ahmed // it also count the space, joss
        console.log(res);
      
    </script>


<script>
        "use strict";  

        // Double quotes: "Hello".
        // Single quotes: 'Hello'.
        // Backticks: `Hello`.    
        
        let fname = "Sabbir";
        let lname = "Ahmed"

        let res = `My name is ${fname}    ${lname}`; //My name is Sabbir    Ahmed // it also count the space, joss

        let ares = "My Name is ${fname} ";  // My Name is ${fname} 
        let ares2= "My name is ".$fname; // undefined not work

        console.log(res);
        
        console.log(ares);
        console.log(ares2);



        
        let name = "John";

        // embed a variable
        alert( `Hello, ${name}!` ); // Hello, John!

        // embed an expression
        alert( `the result is ${1 + 2}` ); // the result is 3

    
    </script>

    





/**
    Variable-> ---------------------------------------------------------------------so work as modern js
*