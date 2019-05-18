<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home</title>
    <link rel="stylesheet" href="css/index.css">
    <link href="https://fonts.googleapis.com/css?family=Abel|Raleway" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
</head>
<script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}
</script>
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
<!-- goes at the top of the page-->

<div class="flex-container">
    <div class="flex sixty">
       
            <p class="tax">	The best way to file your taxes in a great environment is with A&M Tax Service! Our representatives are dedicated to making your tax experience easy.
</p>
            <div class="right">
                  <button>Find an Office</button><br>
             </div>
    
             </div>
    <div class="flex">
       <img src="./imgs/amjasmine.jpg" alt=""   height="500px" width="500px">
         <!--<img src="http://placehold.it/400x400" alt="replace me"> -->
         
         
         
         
          </div>
</div>




<!-- steps to file -->
<!-- the images are going to be icons-->
<!--buttons , MAYBE-->
<div class="padding"></div>

   <div class="flex-container">
        <div class="thirds">
             <i class="fas fa-envelope-open-text fa-5x"></i>
              <p class="left pad">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae quisquam ipsa, iste ea nam aperiam culpa incidunt suscipit repellendus accusamus fugiat quidem fuga, est nulla, modi ad omnis repudiandae dolores?</p>
      
          </div>
          
          
       <div class="thirds">
           <i class="fas fa-folder-open fa-5x"></i>
            <p class="left pad">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae quisquam ipsa, iste ea nam aperiam culpa incidunt suscipit repellendus accusamus fugiat quidem fuga, est nulla, modi ad omnis repudiandae dolores?</p>
             </div>
        
       <div class="thirds">
            <i class="fas fa-walking fa-5x"></i>
            <p class="left pad">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae quisquam ipsa, iste ea nam aperiam culpa incidunt suscipit repellendus accusamus fugiat quidem fuga, est nulla, modi ad omnis repudiandae dolores?</p>
          
        </div>
        </div>
<!-- mission statement -->
<br>
<div class="padding"></div>

<div class="flex-container">
    <div class="box ">
        <p>Our firm’s mission is to develop personal relationships with our clients and a commitment to service. We provide many services to our customers to make sure we give them the best care. Each client receives their own personal attention and time. We are timely and responsive to any questions you may have. Our representatives provide you with expert advice that is not only accurate, but also dependable. We offer individual, business, and tax resolution services! We believe our firm’s rapid growth is largely due to our personalized customer service.
        </p>
    </div>
</div>
<br>

<!-- 9 customer reviews -->
<!-- 9 customer reviews -->

<!-- slideshow-->


<div class="slideshow-container">

<div class="mySlides">
 <div class="flex-container">
         <div class="three">
  <span style="color:rgba(34, 201, 53, 0.67);"><i class="fas fa-user fa-6x" ></i>
             </span>
                 <p class="left">I highly recommend A&M for all of your tax service needs.  Not only did they provide excellent customer service, but they also made sure not to miss a single thing with my return.  Their prices are very reasonable, they're very quick, and they take the time to get to build personal relationships with you.  Thank you A&M!!</p>
                 <img src="./imgs/stars-temp.jpg" alt="">
         </div>
            
            <div class="three">
              <span style="color:rgba(34, 201, 53, 0.67);"><i class="fas fa-user fa-6x" ></i>
             </span>     
           <p class="left">A&M provided amazing customer service while providing specific details of the process. This place is time efficient and affordable! I would definitely recommend to others. Staff is great and personable!
                 <p>
                                  <img src="./imgs/stars-temp.jpg" alt="">

         </div>
    <div class="three">
         <span style="color:rgba(34, 201, 53, 0.67);"><i class="fas fa-user fa-6x" ></i>
             </span>
        <p class="left">I have used larger tax companies until this year when I tried A&M. I cannot say enough about how customer sensitive they are. The customer service was amazing and it cost much less than I was paying before. They did not miss a thing and filing was done in a fraction of the time. Highly recommended. These guys are legit and I will be returning next year. Thank you guys for the great experience.</p>
                             <img src="./imgs/stars-temp.jpg" alt="">

     </div>
    </div>
</div>

<div class="mySlides">
 <div class="flex-container">
   <div class="three">
  <span style="color:rgba(34, 201, 53, 0.67);"><i class="fas fa-user fa-6x" ></i>
             </span>
                <p class="left">Very happy with their service. Took the time to look over everything to make sure I was getting the best refund. This was the first year I ever got back a huge refund. I also like how they explained the new laws and how they will effect me from now on. 
        
        Sounds funny, but they even change the temp in the room to make sure I was comfortable! 
        
         I highly recommend them</p>
                          <img src="./imgs/stars-temp.jpg" alt="">

   </div>
    
    
    
    <div class="three">
  <span style="color:rgba(34, 201, 53, 0.67);"><i class="fas fa-user fa-6x" ></i>
             </span>            
             <p class="left">I am amazed on how quickly and accurately A&M Tax Service prepared my taxes.  A line by line review was thoroughly and patiently explained.  With the ever changing tax laws, I trust their tax planning advice for the next year.  Reasonable price and excellent customer service warrants more than 5 stars.</p>
                              <img src="./imgs/stars-temp.jpg" alt="">

     </div>
    
       
        
         <div class="three">
                  <span style="color:rgba(34, 201, 53, 0.67);"><i class="fas fa-user fa-6x" ></i>
             </span>
                 <p class="left">John is extremely knowledgeable and helpful. He is always reliable and accommodating to his clients. He cuts out wasted time and paperwork that I’ve dealt with at other tax prep companies that overcharge for nice offices and “peace of mind”. He gets to the point and shows you your options. When I had audits from previous companies filings, he fixed the mess. Highly recommend</p>
                                  <img src="./imgs/stars-temp.jpg" alt="">

         </div>
    </div>
</div>

<div class="mySlides">
  <div class="flex-container">
   <div class="three">
  <span style="color:rgba(34, 201, 53, 0.67);"><i class="fas fa-user fa-6x" ></i>
             </span>        
        <p class="left">John is very professional and makes your tax experience easy. He's very detailed and takes time explaining everything. We will definitely be back next year!!</p>
                          <img src="./imgs/stars-temp.jpg" alt="">

    </div>
    
    
    <div class="three">
  <span style="color:rgba(34, 201, 53, 0.67);"><i class="fas fa-user fa-6x" ></i>
             </span>            
             <p class="left">Very professional, timely, and efficient. I have been seeing John for taxes for two years now and it’s always been a seamless process. Highly recommend!</p>
                               <img src="./imgs/stars-temp.jpg" alt="">

     </div>
    
        
         <div class="three">
<span style="color:rgba(34, 201, 53, 0.67);"><i class="fas fa-user fa-6x" ></i>
             </span>
                         
                 <p class="left">Fantastic service, great price! They get you what you are entitled to!
                 </p>
                                  <img src="./imgs/stars-temp.jpg" alt="">

         </div>
</div>
</div>

<a class="prev" onclick="plusSlides(-1)">❮</a>
<a class="next" onclick="plusSlides(1)">❯</a>

</div>






<!--  -->
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
