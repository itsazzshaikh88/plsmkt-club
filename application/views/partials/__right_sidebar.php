<?php if($right_sidebar == 1) :?>
<div class="right-sidebar">

    <?php foreach($right_content as $content){
	$this->load->view($content); 
	} ?>

    <div class="sidebar-useful-links">
        <a href="#">About</a>
        <a href="#">Accessiblity</a>
        <a href="#">Help centre</a>
        <a href="#">Privacy policy</a>
        <a href="#">Advertising</a>
        <a href="#">Get the app</a>
        <a href="#">More</a>
        <div class="copyright-msg">
            <img src="images/logo.png">
            <p>Playersmkt &#169;2022.All right reserved</p>
        </div>

    </div>



</div>
<?php endif; ?>