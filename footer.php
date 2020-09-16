 <!-- Section C: get in touch -->
 <section id="contact" class="text-center py-3">
     <div class="container">
         <h2 class="section-title">
             Let's Work Together
         </h2>
         <div class="bottom-line"></div>
         <div class="contact-container">

             <div class="contact-form">
                 <form action="sendmail.php" method="post" name="contact-form">
                     <div class="form-group">
                         <label for="name">Name</label>
                         <input type="text" id="name" name="name">
                     </div>
                     <div class="form-group">
                         <label for="email">Email</label>
                         <input type="email" id="email" name="email">
                     </div>
                     <div class="form-group">
                         <label for="message">Message</label>
                         <textarea name="message" id="message"></textarea>
                     </div>

                     <div class="captcha-container">
                         <div class="g-recaptcha" data-sitekey="6LeSCMIZAAAAAFsUvW9AcJ-wpTlXiAlqm9fXxtJb"></div>
                     </div>

                     <input type="submit" value="Submit" class="btn-dark">
                 </form>
             </div>

             <div class="contact-info">
                 <ul>
                     <li><a href="mailto:mlore95@gmail.com" target="_blank" rel="noopener noreferrer"><i class="fas fa-envelope fa-2x"></i> mlore95@gmail.com</a></li>
                     <li><a href="https://www.linkedin.com/in/mlore/" target="_blank" rel="noopener noreferrer"><i class="fab fa-linkedin fa-2x"></i> Linkedin</a></li>
                     <li><a href="https://github.com/michaellore" target="_blank" rel="noopener noreferrer"><i class="fab fa-github-square fa-2x"></i> Github</a></li>
                     <li><a href="https://mhlore.com/Michael%20Lore%20-%20Resume.pdf" target="_blank" rel="noopener noreferrer"><i class="fas fa-file-pdf fa-2x"></i> Resume</a></li>
                 </ul>
             </div>
         </div>
     </div>
 </section>

 <!-- Footer -->
 <footer id="main-footer">
     <div class="footer-content container">
         <p>Copyright &copy; 2020 All Rights Reserved</p>
         <div class="social">
             <a href="mailto:mlore95@gmail.com" target="_blank" rel="noopener noreferrer"><i class="fas fa-envelope fa-2x"></i></a>
             <a href="https://www.linkedin.com/in/mlore/" target="_blank" rel="noopener noreferrer"><i class="fab fa-linkedin fa-2x"></i></a>
             <a href="https://github.com/michaellore" target="_blank" rel="noopener noreferrer"><i class="fab fa-github-square fa-2x"></i></a>
         </div>
     </div>
 </footer>

 <script src="https://code.jquery.com/jquery-3.5.0.min.js" integrity="sha256-xNzN2a4ltkB44Mc/Jz3pT4iU1cmeR0FkXs4pru/JxaQ=" crossorigin="anonymous"></script>
 <script>
     $('.btn-scroll').on('click', function(event) {
         if (this.hash != '') {
             event.preventDefault();
             const hash = this.hash;
             $('html, body').animate({
                     scrollTop: $(hash).offset().top
                 },
                 800
             );
         }
     });
 </script>
 <script src="portfolio_resources/js/lity.min.js"></script>
 <script src="portfolio_resources/js/gen_validatorv4.js"></script>
 <script>
     var frmvalidator = new Validator("contact-form");
     frmvalidator.addValidation("name", "req", "Please provide your name");
     frmvalidator.addValidation("email", "req", "Please provide your email");
     frmvalidator.addValidation("email", "email", "Please enter a valid email address");
     frmvalidator.addValidation("message", "req", "Please provide a message");
 </script>
 </body>

 </html>