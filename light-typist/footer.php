</div>

<!-- GO TO TOP BUTTON -->
<button onclick="topFunction()" id="myBtn" title="Go to top"><i class="fas fa-arrow-up"></i></button> 


    <footer>

    <nav class="navigation-menu">
  
    <?php wp_nav_menu( array('theme_location'=>'footer-menu')); ?>
    </nav>
    


        

<div class="advgb-social-icons"><a class="advgb-social-icon" href="#" target="_blank" rel="noopener noreferrer" style="margin-left:5px;margin-right:5px;color:"><img src="http://localhost/ACTIVE/July-wordpress/wp-content/uploads/2019/07/twitter-brands-2.svg" alt="Social link icon"></a><a class="advgb-social-icon" href="#" target="_blank" rel="noopener noreferrer" style="margin-left:5px;margin-right:5px;color:"><img src="http://localhost/ACTIVE/July-wordpress/wp-content/uploads/2019/07/git-brands2.svg" alt="Social link icon"></a><a class="advgb-social-icon" href="#" target="_blank" rel="noopener noreferrer" style="margin-left:5px;margin-right:5px"><img src="http://localhost/ACTIVE/July-wordpress/wp-content/uploads/2019/07/codepen-brands2.svg" alt="Social link icon"></a><a class="advgb-social-icon" href="#" target="_blank" rel="noopener noreferrer" style="margin-left:5px;margin-right:5px"><img src="http://localhost/ACTIVE/July-wordpress/wp-content/uploads/2019/07/facebook-f-brands-8.svg" alt="Social link icon"></a></div>
    
<div class="copyright">
<p>Copyright 2019 <span>&copy;</span> DarrenColson

        <?php if (is_user_logged_in()) : ?><a href="<?php echo wp_logout_url(get_permalink()); ?>">logout</a>
<?php else : ?><a href="<?php echo wp_login_url(get_permalink()); ?>">.</a>
<?php endif;?></p>
</div>
    </footer>


    <?php wp_footer(); ?>

   
     <!-- SCRIPTS -->
     <!-- <script type='text/javascript' src='date.js'></script> -->
     <script type='text/javascript'>

var day = new Date();
var days = ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"];
document.getElementById("day").innerHTML = days[day.getDay()];


var m = new Date();
var months = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October",
    "November", "December"
];
document.getElementById("month").innerHTML = months[m.getMonth()];

var d = new Date();
document.getElementById("date").innerHTML = d.getDate();

var y = new Date();
document.getElementById("year").innerHTML = y.getFullYear();

</script>

<!-- <Script type="text/javascript" src="backtotop.js"> -->
<script>
// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    document.getElementById("myBtn").style.display = "block";
  } else {
    document.getElementById("myBtn").style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0; // For Safari
  document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
} 
</script>

</body>

</html>