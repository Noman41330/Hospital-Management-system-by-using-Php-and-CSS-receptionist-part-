<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Need Help</title>
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <style type="text/css">
        h2{
            background-color: lightblue;

        }
        body{
            background-color: black;
        }
        
        textarea{
            width: 50%;
            background-color: white;
           
        }
        button{
            color: gray;
        }
        input{
            width: 50%;
        }
    </style>
  

</head>

<body>
            <center>
                <h2>CONTACT US</h2>
                <form action="mailto:alnoman41330@gmail.com" method="post" enctype="text/plain">
                    <p><input type="text" placeholder="Your Name" name="Name:"></p>
                    <p><input type="email" placeholder="Your Email" name="Email:"></p>
                    <textarea name="message" id="" cols="30" rows="10" placeholder="write Your Message Here" ></textarea><br>
                    <button type="submit"> SEND </button>
                    <button type="reset"> RESET </button>
                </form>

            

       

            <h2 >More Ways to Contact</h2>
            <div class="media-buttons">
                <button class="btn" onclick="window.open('https://www.facebook.com/alnoman41330')" class="request-callback"><i class="fa fa-facebook-official"style="color:darkblue;" aria-hidden="true"></i></button>
               
                <button class="btn" onclick="window.open('tel:+8801703778412')" class="request-callback"><i class="fa fa-phone" aria-hidden="true" style="color:green;"></i></button>
               
             </div>
         </center>

        
</body>
</html>