

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" href="assets/css/styles.css">

        <!-- =====BOX ICONS===== -->
        <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>
         <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
         <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

        <title>Vishal Singh</title>
    </head>
    <body>
        <!--===== HEADER =====-->
        <header class="l-header">
            <nav class="nav bd-grid">
                <div>
                    <a href="#" class="nav__logo"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-award-fill" viewBox="0 0 16 16">
                 <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right-circle-fill" viewBox="0 0 16 16">
  <path d="M8 0a8 8 0 1 1 0 16A8 8 0 0 1 8 0zM4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H4.5z"/>
</svg>
                  </svg>Vishal</a>
                </div>

                <div class="nav__menu" id="nav-menu">
                    <ul class="nav__list">
                        <li class="nav__item"><a href="#home" class="nav__link active">Home</a></li>
                        <li class="nav__item"><a href="#about" class="nav__link">About</a></li>
                        <li class="nav__item"><a href="#skills" class="nav__link">Skills</a></li>
                        <li class="nav__item"><a href="#work" class="nav__link">Project</a></li>
                        <li class="nav__item"><a href="index.php" class="nav__link">Contact Me</a>
                            <li class="nav__item"><a href="login.php" class="nav__link">Sign out</a></li>
                    </ul>
                </div>

                <div class="nav__toggle" id="nav-toggle">
                    <i class='bx bx-menu'></i>
                </div>
            </nav>
        </header>

        <main class="l-main">
            <!--===== HOME =====-->
            <section class="home bd-grid" id="home">
                <div class="home__data">
                    <h1 class="home__title">Hi,<br>I'am <span class="home__title-color">Vishal Singh</span><br> Web Designer/IOTIAN</h1>

                    <a href="contactUs/contactUs/index.php" class="button">Contact</a>
                    <a href="assets/img/vishalsinghcv.pdf" class="button">CV</a>
                </div>

                <div class="home__social">
                    <a href="https://www.linkedin.com/in/rkvishal26" class="home__social-icon"><i class='bx bxl-linkedin'></i></a>
                    <a href="https://www.instagram.com/" class="home__social-icon"><i class='bx bxl-instagram' ></i></a>
                    <a href="https://github.com/rkvishal26" class="home__social-icon"><i class='bx bxl-github' ></i></a>
                </div>

                <div class="home__img">    
                    <img src="assets/img/pp4.jpg" alt="">
                </div>
            </section>

            <!--===== ABOUT =====-->
            <section class="about section " id="about">
                <h2 class="section-title">About</h2>

                <div class="about__container bd-grid">
                    <div class="about__img">
                        <img src="assets/img/pp3.jpg" alt="">
                    </div>
                    
                    <div>
                        <h2 class="about__subtitle">I'am Vishal Singh</h2>
                        <p class="about__text">Chasing my dream in order to build a happy and professional Carrier. Interested in Web Development, Iot, Digital marketing and system administration. Passionate and punctual towards work. Dedicated towards my life.#A happy being</p>   
                        <br>
                        <a href="about.php"> More... </a>        
                    </div>                                   
                </div>
            </section>

            <!--===== SKILLS =====-->
            <section class="skills section" id="skills">
                <h2 class="section-title">Skills</h2>

                <div class="skills__container bd-grid">          
                    <div>
                        <h2 class="skills__subtitle">Profesional Skills</h2>
                        <p class="skills__text">IOTIAN,WEB DEVELOPER, DIGITAL MARKETING AND SYATEM ADMINISTRATION</p>
                        <div class="skills__data">
                            <div class="skills__names">
                                <i class='bx bxl-html5 skills__icon'></i>
                                <span class="skills__name">Web Developer</span>
                            </div>
                            <div class="skills__bar skills__html">

                            </div>
                            <div>
                                <span class="skills__percentage">95%</span>
                            </div>
                        </div>
                        
                        <div class="skills__data">
                            <div class="skills__names">
                                <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAYAAAA7MK6iAAAAsUlEQVRIS+3WUQ6CMBCE4Z+TqTfBkyknwaOZGjA1tpuJGezL9pXNfnS6NEwMWtMgl4T/lrwa9QycgGvwZmdg3Z5fgEe0CwUu6G1rcg9wK1yj+wZ6uA1uoRFugSO0h1vgei7Uhmrdq7cyXGpDtS7h7ueuRqjWZdQZ9TsBdWjUOstwKVfrApS6j+W4uSK8iTqvzBbeRZ1w6VXjIeqGd7wM2deZ/nLGh/wAKsOVsCWBYVE/Ab2rTh9RahQzAAAAAElFTkSuQmCC"/>
                                <span class="skills__name">IOT</span>
                            </div>
                            <div class="skills__bar skills__js">
                                
                            </div>
                            <div>
                                <span class="skills__percentage">80%</span>
                            </div>
                        </div>
                        <div class="skills__data">
                            <div class="skills__names">
                                <i class='bx bxs-paint skills__icon'></i>
                                <span class="skills__name">Java</span>
                            </div>
                            <div class="skills__bar skills__ux">
                                
                            </div>
                            <div>
                                <span class="skills__percentage">85%</span>
                            </div>
                        </div>
                        <div class="skills__data">
                            <div class="skills__names">
                                <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAYAAAA7MK6iAAABqUlEQVRIS9WWgS0FQRCG/1cBHaACVIAK6IASqAAVUAIVoAJeBaiAEqiAfMnu5d2anZt7e8nFJiJ5d7ffzD//zO5CM63FTFz9O/ChpJ+k1rekt7HKjcn4RNKlpL0K5FHSdTSIKJgMnyU9JehxBf4laV/S55ACUfBVypb3cxC1vS8k3U4NRs5tR254yE2g7opmfCaJv3IdGL81gzHT7kDgVmaAqfFW+vbeqrmV8WYyUs29QyoCxgdZDdNwFvhO0unQ7s7zEsyrZN0rlQUmwo0G8JEkgs9S5616rBKMvK8N0HdJeOPD2IP+7iZcCfZ6NI/Gl0pgGIohQ8tZ/kCJ7tsomIlFjbyRSTwEXlsuuCY1bYVB1nU6wbhS80JpLupGvz401J4y0abdirTTMtUGmdddf6ZZbYDgvtwOrWC+x+ko6WbMQ2TBTPzHrRwMVsYYxlvAzEtC9JDIx2JE6uZDYhUyBF69IEwKPpd046SbW4V72KTgXOvaDKeO1JMBsjPl1YdkMRiSs3l5ANCnjEOeh26cUXNZKqNCViJiut47LeDRsEgfN20a+Xi2jH8BEjtUH96ug90AAAAASUVORK5CYII="/>
                                <span class="skills__name">Python</span>
                            </div>
                            <div class="skills__bar skills__ux">
                                
                            </div>
                            <div>
                                <span class="skills__percentage">70%</span>
                            </div>
                        </div>

                    </div>
                    
                    <div>  
                        
                        <img src="assets/img/work3.jpg" alt="" class="skills__img">
                    </div>
                </div>
            </section>

            <!--===== WORK =====-->
 <section class="skills section" id="skills">
                <h2 class="section-title my-2">Projects</h2>
            <section class="work section" id="work">
    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
        <div class="col">
          <div class="card shadow-sm">
            <img src="assets/img/emp.png" class=" d-block w-100 skills__img " alt="...">

            <div class="card-body">
              <p class="card-text"><b> Employee Management System(Java)</b></p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <a href="https://github.com/rkvishal26"> <button type="button" class="btn btn-sm btn-outline-secondary">View</button></a>
              
                </div>
               
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm">
             
           <img src="assets/img/f.png" class="skills__img d-block w-100" alt="...">

            <div class="card-body">
              <p class="card-text"><b>Online Food Delievery System(Front-End)</b></p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                 <a href="https://github.com/rkvishal26"> <button type="button" class="btn btn-sm btn-outline-secondary">View</button></a>
             
                </div>
               
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm">
            <img src="assets/img/f1.png" class="skills__img d-block w-100" alt="...">

            <div class="card-body">
              <p class="card-text"><b>Tour and Travel Website(Front End)</b></p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <a href="https://github.com/rkvishal26"> <button type="button" class="btn btn-sm btn-outline-secondary">View</button></a>
            
                </div>
           
              </div>
            </div>
          </div>
        </div>

        <div class="col">
          <div class="card shadow-sm">
           <img src="assets/img/ir.jpg" class="skills__img d-block w-100" alt="...">
            <div class="card-body">
              <p class="card-text"><b>Automated Railway Crossing(IOT)</b></p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
               <a href="https://github.com/rkvishal26"> <button type="button" class="btn btn-sm btn-outline-secondary">View</button></a>
      
                </div>
              
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm">
          <img src="assets/img/dj.jpg" class="skills__img d-block w-100" alt="...">

            <div class="card-body">
              <p class="card-text"><b>django Website</b></p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <a href="https://github.com/rkvishal26"> <button type="button" class="btn btn-sm btn-outline-secondary">View</button></a>
                  
                </div>
              
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm">
            <img src="assets/img/at.jpg" class="skills__img d-block w-100" alt="...">

            <div class="card-body">
              <p class="card-text"><b>Home Automation(IOT)</b></p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                <a href="https://github.com/rkvishal26"> <button type="button" class="btn btn-sm btn-outline-secondary">View</button></a>
            
                 
                </div>
                <a href="https://github.com/rkvishal26"> <button type="button" class="btn btn-sm btn-outline-secondary">More Projects....</button></a>
                
              </div>
            </div>
          </div>
        </div>

        
     
       
            </div>
          </div>
        </div>
      </div>
    </div>
            </section>

            <!--===== CONTACT =====-->
 </main>

        <!--===== FOOTER =====-->
      <footer class="footer">
            <p class="footer__title">@Vishal</p>
            <div class="footer__social">
                <a href="https://www.linkedin.com/in/rkvishal26" class="footer__icon"><i class='bx bxl-linkedin' ></i></a>
                <a href="https://www.instagram.com/" class="footer__icon"><i class='bx bxl-instagram' ></i></a>
                <a href="https://github.com/rkvishal26" class="footer__icon"><i class='bx bxl-github' ></i></a>
            </div>
            <p>&#169; 2020 copyright all right reserved</p>
        </footer>


        <!--===== SCROLL REVEAL =====-->
        <script src="https://unpkg.com/scrollreveal"></script>

        <!--===== MAIN JS =====-->
        <script src="assets/js/main.js"></script>
    </body>
</html>
