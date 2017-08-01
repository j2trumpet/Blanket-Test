<?php

function global_header() {
?>
<header id="global-header" class="standardized-styles standardized-header gh">
  <div class="sh-container">
    <div class="gh-row gh-align-items-center">
      <div class="gh-col-sm-3 gh-col-6 gh-logo-col"><a href="/" class="gh-logo"><img src="/assets/img/cru_logo.png" /></a></div>
      <div class="gh-col-sm gh-col-6 gh-menu-col">
        <a href="#" class="gh-link gh-signin gh-hidden-sm-up"><span>Sign In</span></a>
        <a href="#" class="gh-link gh-menu"><img src="/assets/img/menu.png" class="gh-icon" /><span>Menu</span></a>
        <ul class="gh-breadcrumbs">
          <li><a href="#" class="gh-link gh-home">Home</a></li>
        </ul>
      </div>
      <div class="gh-col-sm gh-col-6 gh-search-col">
        <a href="#" class="gh-link gh-give"><span>Give</span></a>
        <a href="#" class="gh-link gh-signin ss-hidden-xs-down"><span>Sign In</span></a>
        <a href="#" class="gh-link gh-search"><img src="/assets/img/search.png" class="gh-icon" /></a>
      </div>
    </div>
  </div>
</header>
<?php
}

function local_menu( $display ) {
  if ( $display == false ) {
    return false;
  }
?>
<div id="local-menu" class="standardized-styles standardized-header lm ss-hidden-xs-down">
  <div class="sh-container">
    <ul class="gh-local-menu">
      <li><a href="#">About</a></li>
      <li><a href="#">&iquest;Quines Somos?</a></li>
      <li><a href="#">Communities</a></li>
      <li>
        <a href="#">Events</a>
        <ul class="gh-local-submenu">
          <li><a href="#">Fall Retreat</a></li>
          <li class="active"><a href="#">Winter Conference</a></li>
          <li><a href="#">Summer Missions</a></li>
        </ul>
      </li>
      <li><a href="#">Resources</a></li>
      <li><a href="#">Get Involved</a></li>
      <li><a href="#" class="gh-local-menu-more"><img src="/assets/img/local_menu_more.png" /></a></li>
    </ul>
  </div>
</div>
<?php
}

function global_menu( $display ) {
  if ( $display == false ) {
    return false;
  }
?>
<div id="global-menu" class="standardized-styles gm">
  <ul class="gm-top-menu">
    <li><a href="#"><span>Knowing God</span></a></li>
    <li><a href="#"><span>Resources</span></a></li>
    <li class="has-children active">
      <a href="#"><span>Ministries</span></a>
      <ul class="gm-submenu">
        <li><a href="#">Athletes</a></li>
        <li><a href="#">Campus</a></li>
        <li><a href="#">City</a></li>
        <li><a href="#">Creatives</a></li>
        <li class="active"><a href="#">Destino</a></li>
        <li><a href="#">Embassy</a></li>
        <li><a href="#">Epic</a></li>
        <li><a href="#">Faculty</a></li>
        <li><a href="#">FamilyLife</a></li>
        <li><a href="#">Global Aid</a></li>
        <li><a href="#">High School</a></li>
        <li><a href="#">Impact</a></li>
        <li><a href="#">Inner City</a></li>
        <li><a href="#">Jesus Film</a></li>
        <li><a href="#">Josh McDowell</a></li>
        <li><a href="#">Military</a></li>
        <li><a href="#">Nations</a></li>
        <li><a href="#">Story Runners</a></li>
        <li><a href="#">Valor</a></li>
      </ul>
    </li>
    <li><a href="#"><span>Get Involved</span></a></li>
    <li><a href="#"><span>Blog</span></a></li>
    <li><a href="#"><span>About</span></a></li>
    <li><a href="#"><span>Give</span></a></li>
    <li><a href="#"><span>Sign In</span></a></li>
  </ul>
</div>
<?php
}

?>