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
        
    <span class="full-text">
               <div class="centertext text">
               <h1>MAKE AN APPOINTMENT</h1>
                </div>
                </span>
                
     <span class="short-text">
               <div class="centertext text">
               <h1>APPOINTMENTS</h1>
                </div>
                </span>
            <img src="imgs/header-img2.jpg" alt="">
<!-- the p is just text-->
<!--  it's the we are dedicated top helping you thing...-->
<br>
<br>
<br>
<div class="flex-container">
   <div class="box">
       <p>It’s time to make an appointment! Choose your preferred tax representative and schedule a meeting! Down below there is a form that will help you make your appointment! Just input your name, address, email, phone number. We don’t want to inconvenience you, so please select the best time for us to contact you. We look forward to meeting you!
</p>
   </div>
    </div>
<!-- Pictures are cartoons of team-->
<!-- Pictures are drawn-->
<br>
<br>
<br>
<br>
<span class="full-text">
        <div class="flex-container">
         <div class="half">
             <img src="./imgs/amjohn500x200.jpg" alt="">
               <p class="left">John specializes in many different fields and has about 25 years of experience! He is specialized in all forms of 1099 employment taxes.
                </p>
                <p class="left">Skilled in and offers: Individual, Small business, Corporation, Non-profit, Military, and Rental Properties
</p>
         </div>
         <!-- button will send you to form-->
         
         <!-- Pictures are drawn-->
        <div class="half">
             <img src="./imgs/amfrank500x200.jpg" alt="">
           <p class="left">Frank has been hard at work and in the business for over 30 years! He is specialized in all forms of 1099 employment taxes. 
</p>
       <p class="left">Skilled in and offers: Individual, Small business, and Rental Properties
</p>
         </div>
     </div>
     </span>
     
     <span class="short-text">
         <div class="half">
             <img src="./imgs/amjohn500x200.jpg" alt="">
              <p class="left">John specializes in many different fields and has about 25 years of experience! He is specialized in all forms of 1099 employment taxes.
                </p>
                <p class="left">Skilled in and offers: Individual, Small business, Corporation, Non-profit, Military, and Rental Properties
</p>
         </div>
         <!-- button will send you to form-->
         
         <!-- Pictures are drawn-->
        <div class="half">
             <img src="./imgs/amfrank500x200.jpg" alt="">
                 <p class="left">Frank has been hard at work and in the business for over 30 years! He is specialized in all forms of 1099 employment taxes. 
</p>
       <p class="left">Skilled in and offers: Individual, Small business, and Rental Properties
</p>
         </div>
     </span>
<!-- button will send you to form-->


<!-- This is going to be the form for the client to put their information to make an appointment-->
  <br>
<br>
<br>
  
  <div class="flex-container">
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
                            
                            <label for="time">Best time to be contacted:</label>
                                
                                <select required>
                           <option value="blank" aria-invalid="false"></option>     
                          <option value="8AM-12PM">8AM- 12PM</option>
                          <option value="1PM-5PM">1PM-5PM</option>
                          <option value="After 5PM">After 5PM</option>
                                </select>
                                
                    <!-- this is going to be the times for appointmetns-->       
                                  <label for="appointment">Preferred Tax Representative</label> <br> 
                                 <input type="radio" name="appointment"
                                 value="J">John<br>
                                 <input type="radio" name="appointment"
                                 value="F">Frank<br>
                              
                                 
                
                             <input type="submit" value="Submit"><br>
                         </form>
                      </div>
   </div>
 <div class="flex-foot">
<div class="foot flex-container">
 <footer class="foot">
    <div class="flex-container">
        <div class="five">
               <div class="ten"><i class="fab fa-facebook-square fa-3x"></i></div>
                <div class="ten"><i class="fab fa-instagram fa-3x"></i></div>
                <div class="ten"><i class="fab fa-linkedin fa-3x"></i></div>
        </div>
        <div class="quarter">
                <h2 class="font">Pages:</h2>
                        <ul>
                            <li><a class="font"  href="index.php">Home</a></li>
                             <br>
                          <li><a class="font" href="team.php">Team</a></li>             <br>
    
                           <li><a class="font" href="appointment.php">Appointments</a></li>             <br>
    
                           <li><a class="font" href="contact.php">Contact</a></li>             <br>
                
                           </ul>
                        </div>
            <div class="quarter">
                <h3 class="font">Email:</h3>
                    <p class="font">taxserviceam@gmail.com</p>
                <h3 class="font">Phone Number:</h3>
                    <p class="font">(559) 903-8550</p>
               
            </div>          
            <div class="quarter">
                 <h3 class="font">Address:</h3>
                    <p class="font">473 N. Fresno St. 93701</p>
                    <p class="font">Fresno, CA</p>
                <img src="./imgs/logo-2.jpg" alt=""width="85.2" height="50.66">
            </div>  
    </div>
</footer>
 </div>
    </div>
</body>
</html>
