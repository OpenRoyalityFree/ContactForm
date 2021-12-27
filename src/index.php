<?php 
require_once __DIR__.'/config.php';
?>
<!DOCTYPE html>
<html lang="en" >
   <head>
      <!-- Meta Tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <title>Contact Form | OpenRoyalityFree</title>
      <!-- Link CSS-->
      <link rel="stylesheet" href="assets/style.css">
      <!-- Link JavaScript-->
      <script src="assets/smtpjs.js"></script>
   </head>
   <body>
      <div class="contact-us">
         <form onsubmit="sendEmail(); reset(); return false">
            <input id="name" placeholder="Name" type="text" required/>
            <input id="email" placeholder="Email" type="email" required/>
            <input id="subject" placeholder="Subject" type="text" required/>
            <textarea id="content" cols="35" rows="3.5" placeholder="Message" required></textarea>
            <button type="submit">Send Message</button>
         </form>
      </div>
   </body>
   <script>
      function sendEmail(){
         Email.send({
            Host : "<?= smtp_hostname?>",
            Username : "<?= smtp_username?>",
            Password : "<?= smtp_password?>",
            To : '<?= smtp_recform?>',
            From : document.getElementById("email").value,
            Subject : document.getElementById("subject").value,
            Body : document.getElementById("content").value,
         }).then(
            message => alert(message)
            );
         }
   </script>
</html>