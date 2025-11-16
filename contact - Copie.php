<?php

include "common_index/contact/header_index_contact.php";

include "common_index/contact/menu_index_contact.php";

?> 


<!--------------------------------debut de section formulaire de contact ---------------------------------------------->

<section class="contact">
    
    <h1 class="heading text-capitalize">
            <span>c</span>
            <span>o</span>
            <span>n</span>
            <span>t</span>
            <span>a</span>
            <span>c</span>
            <span>t</span>
    </h1>
                            
        <div class="row">
                            
            <div class="image">
                <img src="images/contact2.jpg" alt="">
            </div>
                            
            <form action="">
                <div class="inputBox">
                    <input type="text" placeholder="Votre nom (obligatoire)" required />
                    <input type="email" placeholder="Votre e-mail (obligatoire)" 
                        pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" required  />
                </div>
                <div class="inputBox">
                    <input type="tel" placeholder="Indicatif + numéro de télephone" required />
                    <input type="text" placeholder="Sujet" required />
                </div>
                <textarea placeholder="Votre message" name="" id="" cols="50" rows="50"></textarea>
                    <input type="submit" class="btn" value="Envoyer le message">
            </form>
                            
        </div>
                                
</section>



<?php

include "common_index/contact/footer_index1.php";

?> 