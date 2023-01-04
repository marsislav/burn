<?php
/*
Footer file
@package Burn
*/
?>


<!-- ======= Footer ======= -->
<footer id="footer" class="footer">
    <?php wp_footer();?>

    <div class="footer-content">
        <div class="container">

            <div class="row">
                <?php 
                if(is_active_sidebar( 'sidebar-2' )){
                     dynamic_sidebar('sidebar-2');
                    
                } 

                ?>
            </div>
        </div>
    </div>

    <div class="footer-legal">
        <div class="container">

            <div class="row justify-content-between">
                <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                    <div class="copyright">
                        © Copyright <strong><span>Marsislav</span></strong>. All Rights Reserved
                    </div>

                    <div class="credits">
                        Developed by <a href="https://marsislav./net/">Marsislav</a>
                    </div>

                </div>

                <div class="col-md-6">
                    <div class="social-links mb-3 mb-lg-0 text-center text-md-end">
                        <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                        <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                        <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                        <a href="#" class="google-plus"><i class="bi bi-skype"></i></a>
                        <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
                    </div>

                </div>

            </div>

        </div>
    </div>

</footer>

<a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>



</body>

</html>