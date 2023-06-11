<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personal Portfolio Website</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.11/typed.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"/>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/js/all.min.js"></script>
</head>
<body>
    <div class="scroll-up-btn">
        <i class="fa-solid fa-arrow-up"></i>
    </div>
    <nav class="navbar bg-dark">
        <div class="max-width">
            <div class="logo"><a href="#">Portfo<span>lio.</span></a></div>
            <ul class="menu">
                <li><a href="#home" class="menu-btn" >Home</a></li>
                <li><a href="#about" class="menu-btn" >About</a></li>
                <li><a href="#services" class="menu-btn" >Services</a></li>
                <li><a href="#skills" class="menu-btn" >Skills</a></li>
                <li><a href="#teams" class="menu-btn" >Tems</a></li>
                <li><a href="#contact" class="menu-btn" >Contact</a></li>
            </ul>
            <div class="menu-btn">
                <i class="fa-solid fa-bars"></i>
            </div>
        </div>
    </nav>

    <!-- home section start -->
    <section class="home" id="home">
        <div class="max-width">
            <div class="home-content">
                <div class="text-1">Hello, my name is</div>
                <div class="text-2">Mr. Tohin</div>
                <div class="text-3">And I'm a <span class="typing"></span></div>
                <a href="#">Hire me</a>
            </div>
        </div>        
    </section>

    <!-- about section start -->
    <section class="about" id="about">
        <div class="max-width">
            <h2 class="title">About Me</h2>
            <div class="about-content">
                <div class="colum left">
                    <img src="images/tohin.jpg" alt="image">                    
                </div>
                <div class="colum right">
                    <div class="text">I'm Tohin and I'm a <span class="typing-2"></span></div>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem suscipit veniam blanditiis sed eius repellendus ipsam eveniet officia quisquam, eum asperiores soluta, obcaecati debitis corrupti qui sapiente molestiae ad ut id voluptates dolores! Rerum aut excepturi, ut dicta dolorem optio distinctio cupiditate? Perferendis ratione commodi sapiente assumenda quibusdam tenetur sint, tempore et, cumque obcaecati ad provident similique. Deserunt, architecto ab.</p>
                    <a href="#">Download CV</a>
                </div>
            </div>
        </div>        
    </section>

    <!-- services section start -->
    <section class="services" id="services">
        <div class="max-width">
            <h2 class="title">My services</h2>
            <div class="serv-content">
                <div class="card">
                    <div class="box">
                        <i class="fas fa-paint-brush"></i>
                        <div class="text">Web Design</div>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ut, illo. Odio fugit provident voluptas voluptates!</p>                        
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <i class="fas fa-chart-line"></i>
                        <div class="text">Advertising</div>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ut, illo. Odio fugit provident voluptas voluptates!</p>                        
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <i class="fas fa-code"></i>
                        <div class="text">App Design</div>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ut, illo. Odio fugit provident voluptas voluptates!</p>                        
                    </div>
                </div>
            </div>
        </div>        
    </section>

    <!-- skills section start -->
    <section class="skills" id="skills">
        <div class="max-width">
            <h2 class="title">My skills</h2>
            <div class="skills-content">
               <div class="colum left">
                   <div class="text">My creative skills & expriences.</div>
                   <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus iusto, sunt omnis quasi eligendi voluptates et rerum corrupti est quo at praesentium deserunt quibusdam. Excepturi doloremque impedit illum ea in sunt quasi cupiditate molestiae, voluptatibus saepe. Officiis odit recusandae illo necessitatibus dolorum sequi nemo soluta, laborum rem ut magni quibusdam a? Quo quod impedit reiciendis nostrum dignissimos commodi, ipsum consequuntur?</p>
                    <a href="#">Read more</a>
                </div>
               <div class="colum right">
                   <div class="bars">
                       <div class="info">
                           <span>HTML</span>
                           <span>90%</span>                           
                       </div>
                       <div class="line html"></div>
                   </div>
                   <div class="bars">
                       <div class="info">
                           <span>CSS</span>
                           <span>70%</span>                           
                       </div>
                       <div class="line css"></div>
                   </div>
                   <div class="bars">
                       <div class="info">
                           <span>JavaScript</span>
                           <span>80%</span>                           
                       </div>
                       <div class="line js"></div>
                   </div>
                   <div class="bars">
                       <div class="info">
                           <span>PHP</span>
                           <span>95%</span>                           
                       </div>
                       <div class="line php"></div>
                   </div>
                   <div class="bars">
                       <div class="info">
                           <span>MySQL</span>
                           <span>75%</span>                           
                       </div>
                       <div class="line mysql"></div>
                   </div>
               </div>
            </div>
        </div>        
    </section>

     <!-- teams section start -->
     <section class="teams" id="teams">
        <div class="max-width">
            <h2 class="title">My teams</h2>
           <div class="carousel owl-carousel">
               <div class="card">
                   <div class="box">
                       <img src="images/teams_1.jpg" alt="">
                       <div class="text">Mst. Suparna</div>
                       <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                   </div>
               </div>
               <div class="card">
                   <div class="box">
                       <img src="images/teams_2.jpg" alt="">
                       <div class="text">Md. Abdullah</div>
                       <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                   </div>
               </div>
               <div class="card">
                   <div class="box">
                       <img src="images/teams_3.jpg" alt="">
                       <div class="text">Alisha jeo</div>
                       <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                   </div>
               </div>
               <div class="card">
                   <div class="box">
                       <img src="images/teams_4.jpg" alt="">
                       <div class="text">Brandar Trailor</div>
                       <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                   </div>
               </div>
               <div class="card">
                   <div class="box">
                       <img src="images/teams_5.jpg" alt="">
                       <div class="text">Miss. Fatema</div>
                       <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                   </div>
               </div>
               <div class="card">
                   <div class="box">
                       <img src="images/teams_6.jpg" alt="">
                       <div class="text">Mst. Samia</div>
                       <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                   </div>
               </div>
           </div>
        </div>        
    </section>

    <!-- contact section start -->    
     <section class="contact" id="contact">
        <div class="max-width">
            <h2 class="title">Contact me</h2>
            <div class="contact-content">
               <div class="colum left">
                   <div class="text">Get in Touch</div>
                   <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur praesentium vero ratione doloribus reprehenderit dolores, porro rem esse possimus asperiores.</p>
                    <div class="icons">
                        <div class="row">
                            <i class="fas fa-user"></i>
                            <div class="info">
                                <div class="head">Name</div>
                                <div class="sub-title">Mr Tohin</div>
                            </div>
                        </div>
                        <div class="row">
                            <i class="fas fa-map-marker-alt"></i>
                            <div class="info">
                                <div class="head">Address</div>
                                <div class="sub-title">Uttara, Dhaka</div>
                            </div>
                        </div>
                        <div class="row">
                            <i class="fas fa-envelope"></i>
                            <div class="info">
                                <div class="head">Email</div>
                                <div class="sub-title">mohammedtohin956@gmail.com</div>
                            </div>
                        </div>
                    </div>
                </div>
               <div class="colum right">
                   <div class="text">Message me</div>
                   <form action="#">
                       <div class="fields">
                           <div class="field name">
                               <input type="text" placeholder="Name" required>
                           </div>
                           <div class="field email">
                               <input type="email" placeholder="Email" required>
                           </div>
                        </div>
                        <div class="field">
                            <input type="text" placeholder="Subject" required>
                        </div>
                        <div class="field textarea">
                            <textarea cols="30" rows="10" placeholder="Describe project.." required></textarea>
                        </div>
                        <div class="button">
                            <button type="submit">Send message</button>
                        </div>                       
                   </form>
               </div>
            </div>
        </div>        
    </section>

    <!-- footer section start -->
    <footer>
        <span>Created By <a href="#">Mr. Tohin</a> | <span class="far fa-copyrighy"></span> 2022 all rights reserved.</span>
    </footer>


    <script src="script.js"></script>
</body>
</html>