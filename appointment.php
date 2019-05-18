<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Appointment</title>
        <link rel="stylesheet" href="css/index.css">
        <link href="https://fonts.googleapis.com/css?family=Raleway|Abel" rel="stylesheet">

</head>
<body>
       <div class="top">
          <img class="float" src="imgs/logo-2.jpg" alt="" width="128" height="76">
           <ul>
            <li><a href="index.php">Home</a></li>
              <li><a href="team.php">Team</a></li>
           <li><a href="appointment.php">Appointments</a></li>
           <li><a href="contact.php">Contact</a></li>
           </ul>
    </div>
        <!-- the image is for the appoinment and the team page, the h1 is going on top of the image -->
        
     <div class="centertext text">
           <h1>MAKE AN APPOINTMENT</h1>
            </div>
            <img src="imgs/header-img2.jpg" alt="">
<!-- the p is just text-->
<!--  it's the we are dedicated top helping you thing...-->
<br>
<br>
<br>
<div class="flex-container">
   <div class="box">
       <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum alias optio, beatae, minus temporibus accusantium magni hic suscipit perspiciatis non laboriosam doloremque maxime in nihil eos adipisci rerum voluptatum commodi.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint molestiae nostrum temporibus minima animi ea ab enim dicta ducimus quia tempore assumenda nesciunt laboriosam at culpa deleniti, ipsum sit, alias.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum animi recusandae voluptas deserunt alias maiores, vitae fuga distinctio doloremque a voluptatem numquam mollitia saepe perferendis ratione illum asperiores natus. Tempora!</p>
   </div>
    </div>
<!-- Pictures are cartoons of team-->
<!-- Pictures are drawn-->
<br>
<br>
<br>
<br>
<div class="flex-container">
     <div class="half">
         <img src="./imgs/amjohn500x200.jpg" alt="">
         <p class="left">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam quae, ad, autem adipisci maxime cum asperiores. Saepe enim omnis atque facere blanditiis voluptate ea, quod possimus ex. Deserunt, eaque, cumque!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Esse et accusantium quos iusto ea ad aspernatur a, fugiat totam consequuntur! Ducimus quas rerum eius, sapiente veritatis deserunt aliquam quisquam. Error.</p>
         <button>Make an Appointment with John</button>
     </div>
     <!-- button will send you to form-->
     
     <!-- Pictures are drawn-->
    <div class="half">
         <img src="./imgs/amfrank500x200.jpg" alt="">
         <p class="left">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam quae, ad, autem adipisci maxime cum asperiores. Saepe enim omnis atque facere blanditiis voluptate ea, quod possimus ex. Deserunt, eaque, cumque!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Esse et accusantium quos iusto ea ad aspernatur a, fugiat totam consequuntur! Ducimus quas rerum eius, sapiente veritatis deserunt aliquam quisquam. Error.</p>
         <button>Make an Appointment with Frank</button>
     </div>
 </div>
<!-- button will send you to form-->


<!-- This is going to be the form for the client to put their information to make an appointment-->
  <br>
<br>
<br>
  
   <div class="form">
                      <form action="info.php" method="post">
                       
                         <label for="fn">Full Name:</label>  
                         <input type="text" name="fn" placeholder="John D" required><br>
                         
                         
                         <label for="ad">Address:</label>  
                         <input type="text" name="ad" required><br>
                         
                         
                         <label for="email">Email Address:</label>
                        <input type="email" name="email"
                        placeholder="address@domain.com" required><br>
                         
                         <label for="phone">Phone Number:</label>
                        <input type="number" name="phone"
                        placeholder="(559)555-5555" maxlength="15" required><br>
                        
                <!-- this is going to be the times for appointmetns-->       
                              <label for="sex">Gender:</label> <br> 
                             <input type="radio" name="sex"
                             value="M">Male<br>
                             <input type="radio" name="sex"
                             value="F">Female<br>
                             <input type="radio" name="sex"
                             value="O">Other<br>
                             
            
                         <input type="submit" value="Submit"><br>
                     </form>
                  </div>
 <div class="flex-foot">
<div class="foot flex-container">
 <footer>
<div class="ten"><i class="fab fa-facebook-square fa-3x"></i></div>
<div class="ten"><i class="fab fa-instagram fa-3x"></i></div>
<div class="ten"><i class="fab fa-linkedin fa-3x"></i></div> 

<div class="fourty">
    <h2>Pages</h2>
    <ul>
                <li><a href="index.php">Home</a></li>
                 <br>
                  <li><a href="team.php">Team</a></li>             <br>
    
               <li><a href="appointment.php">Appointments</a></li>             <br>
    
               <li><a href="contact.php">Contact</a></li>             <br>
    
               </ul>
</div>
<br>

<div class="fourty">
    <h3>Email:</h3>
    <p>taxserviceam@gmail.com</p>
    <h3>Phone Number:</h3>
    <p>(559) 903-8550</p>
    <h3>Address:</h3>
    <p>473 N. Fresno St. 93701</p>
    <p>Fresno, CA</p>
    <img src="http://placehold.it/200x50" alt="replace me">
</div>
</footer>
 </div>
    </div>
</body>
</html>
