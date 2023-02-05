<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soumen Gope</title>
    <?php include 'config.php';?>
<link rel="stylesheet" type="text/css" href="main.css?v=<?= $version ?>"/> 
</head>
<body>

    <div id="mob_header">
        <div id="insta_01"><a href="https://instagram.com/soumengope99"><img src="img/instagram.png" width="18px" height="18px"></a></div>
        <div id="twitter_02"><a href="https://twitter.com/soumen_gope"><img src="img/twitter.png" width="20px" height="20px"></a></div>
        <div  id="linkdin_03"><a href="https://www.linkedin.com/in/soumen-gope-41205221a/"><img src="img/linkdin.png" width="20px" height="20px"></a></div>
        <div  id="github_04"><a href="https://github.com/soumengope"><img src="img/github.png" width="26px" height="26px"></a></div>
    </div>
    <div id="top_header">
        <div><img id="email" src="img/email.png" width="25px" height="20px">
        <p id="email_id" class="linked"><a href = "mailto: asmensou@gmail.com">asmensou@gmail.com</a></p></div>
        <div><img id="twitter" src="img/twitter.png" width="25px" height="25px">
        <p id="twitter_id" class="linked"><a href="https://twitter.com/soumen_gope">@soumen_gope</a></p></div>
        <div><img id="linkdin" src="img/linkdin.png" width="25px" height="25px">
        <p id="linkdin_id" class="linked"><a href="https://www.linkedin.com/in/soumen-gope-41205221a/">soumen gope</a></p></div>
        <div><img id="github" src="img/github.png" width="35px" height="35px">
        <p id="github_id" class="linked"><a href="https://github.com/soumengope">soumengope</a></p></div>
    </div>

    <div id="main_logodgn">
    <div id="myname" align="center">My name is </div>
    <div id="main_header_logo" align="center">Soumen Gope</div>
    <div id="developer" align="center">I am a Web Developer</div>
    </div>
    

    <div id="main_header_content">
        <div><button id="hom_btn" onClick="home_btn()">Home</button></div>
        <div><button id="whoami_btn" onClick="whoamiScroll()">Intro</button></div>
        <div><button id="hob_btn" onClick="hobbiesScroll()">Hobbies</button></div>
        <div><button id="skill_btn" onclick="skill_skillScroll()">Skills & Servces</button></div>
        <div><button id="rate_btn" onclick="contact_me()">contact me</button></div>
    </div>

    <div id="tagline">
        <p>"Those small changes <br> can justify Your Existance"</p>
        <img src="img/my_sign.png" alt="">
    </div>

    <div id="whoami_logo" align="center">Who am I?</div>
    <div id="whoami">
        <div id="my_img" align="center"><img src="img/my_pic.png" alt=""></div>
        <div id="my_img2" align="center"><img src="img/my_pic2.png" alt=""></div>
        <div id="intro">Firstly, I would like to say thank you for visiting my Website. Have a great day. My name is Soumen Gope (AS Mensou).
            I'm From Bankura in the state of West Bengal. I have started my journey for Web Development since 2019 but i was never
            constantly learn about Web Development, also I learnt Python for machine learning & web automation, C for Arduino projects and
            many more. <br> I'm profecient of using Kali Linux as a primary or secondary system.You can see my skills section there 
            you will find out exactly where i'm best fit for but beyond that i'm a good decesion maker, problem solver and understand what must need as
            per the current situation. I am really pasionate about coding and full stack web development.
        </div>
    </div>

    <div id="my_hobbies" align="center">My Hobbies</div>
    <div id="my_hobies_main" align="center">    
        <div id="myhob_next">
            <div class="myhob_adj">
                <div class="myhob_adjName">Coding</div>
                <div><img src="img/coding.jpg" alt=""></div>
            </div>
            <div class="myhob_adj">
                <div class="myhob_adjName">Photo Editing</div>
                <div><img src="img/photoshop.jpg" alt=""></div>
            </div>
            <div class="myhob_adj">
                <div class="myhob_adjName">Watching Movie</div>
                <div><img src="img/movies.jpg" alt=""></div>
            </div>
            <div class="myhob_adj">
                <div class="myhob_adjName">Reading Books</div>
                <div><img src="img/book.jpg" alt=""></div>
            </div>
            <div class="myhob_adj">
                <div class="myhob_adjName">Traveling</div>
                <div><img src="img/travel.jpg" alt=""></div>
            </div>
            <div class="myhob_adj">
                <div class="myhob_adjName">Gaming</div>
                <div><img src="img/gaming.jpg" alt=""></div>
            </div>
            <div class="myhob_adj">
                <div class="myhob_adjName">Robotics</div>
                <div><img src="img/robotics.jpg" alt=""></div>
            </div>
            <div class="myhob_adj">
                <div class="myhob_adjName">Cooking</div>
                <div><img src="img/cooking.jpg" alt=""></div>
            </div>
        </div>
    </div>

    
    <div id="personalskills_header" align="center">My Skills</div>
    <div id="personal_skills">
        <div id="web_dev">Full stack Development | 70%</div>
        <div id="macro">Macro Photography | 70%</div>
        <div id="ps_2020">Adobe Photoshop | 50%</div>
        <div id="corel_draw">Graphics Design | 30%</div>
        <div id="arduino">Arduino Code | 60%</div>
        <div id="c">C & C++ | 50%</div>
        <div id="ms_excel">Microsoft Excel | 60%</div>
        <div id="ml">Machine Learning | 70%</div>   
        <div id="git">Git & Github | 60%</div>
        <div id="py">Python & Opencv | 75%</div>
    </div>


    <div id="services_logo" align="center">All services</div>
    <div id="services">
        <div id="backend_eng">
            <div><img id="backend_img" src="img/backend.png" alt=""></div>
            <div><h4>Back End Engineer</h4><p>
                our back end deelopment is based on php,MYSQL and nodejs,mongodb depends on reqirements.
            </p></div>
        </div>
        <div id="frontend_dev">
            <div><img id="frontend_img" src="img/frontend.png" alt=""></div>
            <div><h4>Front End development</h4><p>
                For front end language we use HTML,CSS and javascript to create stuning websites and 
                improve UI/UX design
            </p></div>
        </div>
        <div id="gfx_dgn">
            <div><img id="gfxdgn_img" src="img/gfxdgn.png" alt=""></div>
            <div><h4>Custom Graphics Design</h4><p>
                we design custom graphics when it requirs to create good looking website.
                coreldraw is best for graphics design.
            </p></div>
        </div>
    </div>

    <div id="skill_header_logo" align="center">Skills Required for this Website</div>
    <div id="skills_req">
        <div id="skill_firstDiv">
            <div class="skill_sets">
                <div class="skill_name" id="html">HTML</div>
                <div class="main_skill_box">
                    <div id="html_load">90%</div>
                </div>
            </div>
            <div class="skill_sets">
            <div class="skill_name" id="css">CSS</div>
            <div class="main_skill_box">
                    <div id="css_load">100%</div>
                </div>
            </div>
            <div class="skill_sets">
            <div class="skill_name" id="js">JS</div>
            <div class="main_skill_box">
                    <div id="js_load">70%</div>
                </div>
            </div>
        </div>
        <div id="skill_secondDiv">
            <div class="skill_sets">
            <div class="skill_name" id="php">PHP</div>
            <div class="main_skill_box">
                    <div id="php_load">30%</div>
                </div>
            </div>
            <div class="skill_sets">
            <div class="skill_name" id="mysql">MYSQL</div>
                <div class="main_skill_box">
                    <div id="mysql_load">20%</div>
                </div>
            </div>
            <div class="skill_sets">
            <div class="skill_name" id="ps">PHPTOSHOP</div>
                <div class="main_skill_box">
                    <div id="ps_load">10%</div>
                </div>
            </div>
        </div>
    </div>


    <div id="topfooter_logo" align="center">Main Contact Section</div>
    <div id="top_footer">
        <div id="message_me">
            <div id="msgme_header">Message Me</div>
            <form action="/dataCollect.php" method="POST">
            <div><p id="fname">First Name</p><input type="text"name="fname" placeholder="first name" required minlength="2" maxlength="15"></div>
            <div><p id="lname">Last Name</p><input type="text" name="lname" placeholder="second name" required minlength="2" maxlength="15"></div>
            <div><p id="mail">Email Id</p><input type="text" name="mail" placeholder="email id (optional)"></div>
            <div><p id="askmehere" name="askmehere">Comment Me</p>
            <textarea name="comment" id="" cols="30" rows="5" placeholder="ask me something?" required minlength="2" maxlength="250"></textarea></div>
            <div><button id="submit" name="submit" onClick="data_submit()">Submit</button></div>
            </form>
        </div>
        <div id="contact_me">
            <div id="contactme_header">Contact Me</div>
            <div class="cnt_me"><p>Email</p><div class="contactme_val">soumengop@gmail.com || asmensou@gmail.com</div></div>
            <div class="cnt_me"><p>Whatsapp</p><div class="contactme_val">+91 7319047005 || +91 8016808823</div></div>
            <div class="cnt_me"><p>Instagram Id</p><div class="instagram_val"> @soumen_gop</div></div>
            <div class="cnt_me"><p>Address</p><div class="contactme_val"> Bankura, West Bengal, India, 722101</div></div>
        </div>
    </div>

    

<div id="footer">Welcome for visit ..@ 2019 All Rights Reserved</div>

<script src="myjs02.js?v=<?= $version ?>"></script>    

</body>
</html>
