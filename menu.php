<?php get_template_part( 'footer', 'svg' );?>




<div class="d-none site-navigation d-flex flex-column position-fixed end-0 flex-shrink-0 bg-dark rou
animate__animated animate__fadeInRight animate__delay-0.5s" style="width: 6.5rem; top:1.5em;
border-top-left-radius:13px; border-bottom-left-radius:13px;
 border-right:8px solid black;">
  
  <button class="close-btn ps-2 btn ms-0 start-0 d-block position-absolute"><i class="alice fas fa-close"></i></button>
  
    
    <ul class="nav nav-pills nav-flush flex-column mb-auto text-center">
    
     
      <li class="nav-item">
       <a href="<?php echo home_url();?>/logos" class="d-block nav-item active link-dark text-decoration-none" title="" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title="Icon-only">
     <i class="fa-regular fa-atom-simple fs-2 text-center w-100 minty"></i>
        <span class="minty text-center w-100">Logos</span>
    </a>
      </li>
      <li>
        <a href="<?php echo home_url();?>/digital-designs" class="d-block nav-item link-dark text-decoration-none" title="" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title="Icon-only">
     <i class="fa-regular fa-desktop fs-2 text-center w-100 minty"></i>
        <span class="minty text-center w-100">Digital</span>
    </a>
      </li>
      <li>
         <a href="<?php echo home_url();?>/print-designs" class="d-block nav-item link-dark text-decoration-none" title="" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title="Icon-only">
     <i class="fa-regular fa-newspaper fs-2 text-center w-100 minty"></i>
        <span class="minty text-center w-100">Print</span>
    </a>
      </li>
      <li>
         <a href="<?php echo home_url();?>/apparel-designs" class="d-block nav-item link-dark text-decoration-none" title="" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title="Icon-only">
     <i class="fa-regular fa-shirt fs-2 text-center w-100 minty"></i>
        <span class="minty text-center w-100">Apparel</span>
    </a>
      </li>
     <li>
         <a href="<?php echo home_url();?>/shop" class="d-block nav-item link-dark text-decoration-none" title="" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title="Icon-only">
     <i class="fa-regular fa-shopping-bag fs-2 text-center w-100 minty"></i>
        <span class="minty text-left w-100">Shop</span>
    </a>
      </li>
          <hr class="w-100 animate__animated animate__fadeInRight animate__delay-1s">
      <li>
         <a href="<?php echo home_url();?>/about" class="d-block nav-item link-dark text-decoration-none" title="" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title="Icon-only">
     <i class="fa-regular fa-circle-user fs-2 text-center w-100 minty"></i>
        <span class="minty text-left w-100">About</span>
    </a>
      </li>
          <li>
         <a href="<?php echo home_url();?>/quote" class="d-block nav-item link-dark text-decoration-none" title="" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title="Icon-only">
     <i class="fa-regular fa-list-check fs-2 text-center w-100 minty"></i>
        <span class="minty text-left w-100">Quote</span>
    </a>
      </li>
          <li>
         <a href="<?php echo home_url();?>/contact" class="d-block nav-item link-dark text-decoration-none" title="" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title="Icon-only">
     <i class="fa-regular fa-envelope fs-2 text-center w-100 minty"></i>
        <span class="minty text-left w-100">Contact</span>
    </a>
      </li>
    </ul>
    
 <div class="form-check form-switch w-100 row mb-5">
  <input class="form-check-input ms-2 col-auto py-3 w-75 justify-content-center text-center" type="checkbox" role="switch" id="flexSwitchCheckDefault">
</div>
    
    <?php
    if ( is_user_logged_in() ) {
?>
<!--
    <div class="dropdown border-top mx-auto ">
      <a href="#" class="d-flex align-items-center mx-auto justify-content-center py-3 ps-3 link-light text-decoration-none dropdown-toggle" id="dropdownUser3" data-bs-toggle="dropdown" aria-expanded="false">
        <img src="https://github.com/mdo.png" alt="mdo" width="50" height="50" class="rounded-circle">
      </a>
      <ul class="dropdown-menu text-small shadow" aria-labelledby="dropdownUser3">
        <li><a class="dropdown-item" href="#">New project...</a></li>
        <li><a class="dropdown-item" href="#">Settings</a></li>
        <li><a class="dropdown-item" href="#">Profile</a></li>
        <li><hr class="dropdown-divider"></li>
        <li><a class="dropdown-item" href="#">Sign out</a></li>
      </ul>
        
    </div>
-->
<?php 
} else {

}
?>
  </div>