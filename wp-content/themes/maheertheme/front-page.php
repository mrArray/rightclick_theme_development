<?php
get_header();

?>
    
  
    
    
	    <article class="about-section content px-3 py-5 p-md-5">
           <?php
           //thid display dynamic post
        if (have_posts())
        {
            while(have_posts())
            {
               the_post();
               the_content();
            }
        }
        ?>
	    </article>
	    
	    
	    
	 
    
    

    <?php
    
    get_footer();
    ?>
    

   
