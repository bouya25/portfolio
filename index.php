<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">   
    <link rel= "preconnect" href = "https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="shortcut icon" type="image/png" href="./images/favicon.png"/>
    <!-- Bootstrap v5 Stylesheet -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">  
    <title>MonPortfolio</title>
<body>
<header>
    <a href="#" class="logo1"><span>B</span>astien Colez</a>
    <div class="menuToggle1" onclick="toggleMenu();"></div>
    <ul class="navbar1">
        <li><a href="#banniere" onclick="toggleMenu();">Accueil</a></li>
        <li><a href="#apropos" onclick="toggleMenu();">A propos</a></li>
        <li><a href="#competences" onclick="toggleMenu();">Compétences</a></li> 
        <li><a href="#projet" onclick="toggleMenu();">Mes projets</a></li>                 
        <li><a href="#contact" class="btn-reserve" onclick="toggleMenu();">Contact</a></li>
    </ul>
</header>

<!-- banniere -->

<section class="banniere" id="banniere">
    <div class="contenu">
        <h2>Developpeur Web et Web mobile</h2>
        <p>ici, vous pouvez trouver des informations me concernant, ma présentation, mes projets terminés ainsi qu'un formulaire pour me contacter.</p>
       
    </div>
</section>

<!-- A propos de moi toutes ces choses la quoi -->

<section class="apropos" id="apropos">
    <div class="roww">
        <div class="col1">
            <h2 class="titre-texte"><span>A</span> propos de moi</h2>
            <p>
            Bonjour, et bienvenue sur mon portfolio.<br><br>
            Je m'appelle Bastien COLEZ, je suis développeur web et web mobile. Mordu d'informatique et de nouvelles technologies,
            j'ai commencé à apprendre le code en autodidacte les langages HTML5 et CSS3 pour de petits projets personnels.
            Par la suite je me suis intéréssé à la création de décors et de climats de jeux vidéo via les logiciels World Creator 2 et Unreal Engine 5
            pour finir par découvrir la création de jeux vidéo via RPG Maker.
            </p><br><br>
            <p>
            Aimant par dessus tout utiliser l'outil informatique pour mes projets personnels j'ai voulu qu'un de mes loisirs
            devienne une source de revenus. Que je puisse utiliser l'ordinateur aussi bien personnellement que professionnellement
            et ainsi donc vivre de ma passion. C'est pourquoi j'ai rejoint une formation developpeur web et web mobile financé par l'organisme ONLINEFORMAPRO
            pour consolider mes bases en HTML5 et CSS3 et apprendre de nouveaux langages tels que JavaScript et PHP, des frameworks
            tels que Bootstrap, Tailwind, Symfony, React.js, Vue.js ainsi que différents outils ou technologies tels que Github, VSC, PHPstorm, Node JS, MySQL etc..
            </p>
        </div>
        <div class="col1">
            <div class="img1">
                <img src="./images/image 2.jpg" alt="moi">
            </div>
        </div>
    </div>
</section>

<!-- Mes compétences -->

<section class="competences" id="competences">
    <div class="roww">
        <div class="col1">
            <h2 class="titre-texte"><span>M</span>es compétences</h2>
       </div>
    </div>
    
    <div class="roww">
        <div class="col2">
          <h3 class="titre-texte2"><span>F</span>ront</h3><br>
            <ul>
                <li>HTML5</li>
                <li>CSS3</li>
                <li>JavaScript</li>
                <li>BootStrap</li>
                <li>WordPress</li>
            </ul>
        </div>
        <div class="col2">
          <h3 class="titre-texte2"><span>B</span>ack</h3><br>
            <ul>
                <li>PHP</li>
                <li>Git</li>
                <li>MySQL</li>
                <li>NodeJS</li>
            </ul>
        </div>
        <div class="col2">
          <h3 class="titre-texte2"><span>T</span>echno</h3><br>
            <ul>
                <li>VSC</li>
                <li>GitHub</li>
                <li>PhpStorm</li>                
            </ul>
        </div>
    </div>
   
</section>

<!-- Mes projets fini -->

<section class="projet" id="projet">
    <div class="titre">
        <h2 class="titre-texte1"><span>M</span>es projets</h2><br>
        <p class="blanc1">Vous trouverez ci-dessous la liste de mes projets terminés. </p>
    </div>
    <div class="contenu">
        <div class="box1">
            <div class="imbox1">
                <a href="#projet_1"> <img src="./images/port1.jpg"  alt="projet 1"></a>
            </div>
            <div class="text1">
                <h3>Mon portfolio</h3>
            </div>
        </div>
        <div class="box1">
            <div class="imbox1">
                <a href="#projet_2"> <img src="./images/meteoAjax.jpg" alt="projet 2"></a>
            </div>
            <div class="text1">
                <h3>Widget météo</h3>
            </div>
        </div>
   <!-- <div class="box1">
            <div class="imbox1">
                <a href="#projet_3"> <img src="https://www.cicplacedelinnovation.com/wp-content/uploads/2018/02/innovation-idee-projet-innovant.jpg"  alt="projet 3"></a>
            </div>
            <div class="text1">
                <h3>Projet 3</h3>
            </div>
        </div> -->
   <!-- <div class="box1">
            <div class="imbox1">
                <a href="#projet_4"> <img src="https://www.cicplacedelinnovation.com/wp-content/uploads/2018/02/innovation-idee-projet-innovant.jpg" alt="projet 4"></a>
            </div>
            <div class="text1">
                <h3>projet 4</h3>
            </div>
        </div> -->
    </div>
 

<!-- Mes modales des projets 1-4 -->

<div id="projet_1" class="modal1">
    <div class="modal_content1">
        <img src="images/port1.jpg" alt="monPortfolio">
    <div class="row2"> 
      <div class="col2"> 
        <h3>Mon portfolio</h3>
        <p>Mon portfolio enjoy :)</p>
     </div>  

      <div class="col2">
        <h3>Code utilisé</h3><br>
        <ul>
            <li>HTML5</li>
            <li>CSS3</li>
            <li>Java Script</li>
            <li>PHP</li>
        </ul>
      </div>
      <a href="#projet" class="modal_close1">&times;</a>
    </div>
  </div>
  </div>

  <!-- modal projet 2 -->

  <div id="projet_2" class="modal1">
        <div class="modal_content1">
            <img src="images/meteoAjax1.jpg" alt="widgetMeteo"> 
            <div class="row2"> 
                <div class="col2"> 
                <h3>Widget météo</h3>
                <p>mon widget météo enjoy :)</p>
                </div>  

                <div class="col2">
                    <h3>Code utilisé</h3><br>
                    <ul>
                        <li>HTML5</li>
                        <li>CSS3</li>
                        <li>Java Script</li>
                        <li>Ajax</li>
                    </ul>
                </div>
                <a href="#projet" class="modal_close1">&times;</a>
            </div>
        </div>
    </div>
<!-- modal projet 3 -->

<!-- <div id="projet_" class="modal1">
    <div class="modal_content1">
        <img src="images/port1.jpg">  
    <div class="row2"> 
      <div class="col2"> 
        <h3>Mon portfolio</h3>
        <p>dsdsdsdsdsdsdsdsdsdsd</p>
        

      </div>  
      <div class="col2">
        <h3>Code utilisé</h3><br>
        <ul>
            <li>HTML5</li>
            <li>CSS3</li>
            <li>Java Script</li>
            <li>PHP</li>
        </ul>
      </div>
      <a href="#projet" class="modal_close1">&times;</a>
    </div>
  </div>
  </div> -->

  <!-- modal projet 4 -->

  <!-- <div id="projet_" class="modal1">
    <div class="modal_content1">
        <img src="images/port1.jpg">
    <div class="row2"> 
      <div class="col2"> 
        <h3>Mon portfolio</h3>
        <p>dsdsdsdsdsdsdsdsdsdsd</p>
        

      </div>  
      <div class="col2">
        <h3>Code utilisé</h3><br>
        <ul>
            <li>HTML5</li>
            <li>CSS3</li>
            <li>Java Script</li>
            <li>PHP</li>
        </ul>
      </div>
      <a href="#projet" class="modal_close1">&times;</a>
    </div>
  </div>
</div> -->

</section>  
<!-- Me contacter -->


 <section class="contact" id="contact">
    <div class="titre noir">
         <h2 class="titre-text"><span>C</span>ontact</h2>

    </div>
    <div>                                   
        <form id="contactForm" novalidate="novalidate">
        <div id="alertMessage"></div>
            <h3>Envoyer un message</h3>    
                <div class="inputboite">               
                   <input type="text" class="form-control" id="name" placeholder="Nom"
                        required="required" data-validation-required-message="Please enter your name" />
                    <p class="help-block text-danger"></p>
                </div>
                <div class="inputboite">
                    <input type="email" class="form-control" id="email" placeholder="Email"
                        required="required" data-validation-required-message="Please enter your email" />
                    <p class="help-block text-danger"></p>
                </div>
                <div class="inputboite">
                    <input type="text" class="form-control" id="subject" placeholder="Sujet"
                        required="required" data-validation-required-message="Please enter a subject" />
                    <p class="help-block text-danger"></p>
                </div>
                <div class="inputboite">
                    <textarea class="form-control" id="message" placeholder="Message"
                        required="required"
                        data-validation-required-message="Please enter your message"></textarea>
                    <p class="help-block text-danger"></p>
                </div>
                <div class="inputboite">
                    <input type="submit" id="sendMessageButton" value="envoyer">
                        
                        <div class="d-none spinner-border spinner-border-sm text-light ms-3" role="status"></div>                    
                </div>           
        </form>        
    </div>
 </section>
 
<!-- footer copyright et mes liens Github et Linkedin -->

<footer>
    
    <div class="copyright">
        
    </div>
    <div class="social-media">     
        <p><i class="fab fa-github"></i>&nbsp;<a href="https://github.com/bouya25" target="_blank">bouya25</a></p>
        <p><i class="fab fa-linkedin-in">&nbsp;</i><a href="https://www.linkedin.com/in/bastien-colez-4ba537214/" target="_blank">Bastien COLEZ</a></p>
    </div>

</footer>


<script>
    window.addEventListener('scroll', function(){
         const header =document.querySelector('header');
         header.classList.toggle("sticky", window.scrollY > 0 );
});

function toggleMenu(){
         const tmenuToggle = document.querySelector('.menuToggle1');
         const navbar = document.querySelector('.navbar1');
         navbar.classList.toggle('active');
         menuToggle.classList.toggle('active');
}
</script>

<!-- jQuery v3x -->
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- Bootstrap v5 Javascript -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js"></script>
  
<!-- Contact Form Javascript -->
<script src="mail/jqBootstrapValidation.min.js"></script>
<script src="mail/contact-form.js"></script>

</body>
</html>