<?php
/**
 * The Sidebar containing the menu
 *
 * @package sesky
 */
?>

<div class="sidebar pure-u">
  <header class="header pure-u-1">
    <div class="pure-g-r">
      <div class="pure-u-3-5">
        <h1 class="brand-title">The Beach Side Blues</h1>
      </div>
      <div class="menu-part pure-u-2-5">
        <div id="sesky-nav">
      <ul class="nav-list" id="std-menu-items">
        <li class="nav-item">
          <a href="/about">about</a>
        </li>
        <li class="nav-item">
          <a href="/forum">forum</a>
        </li>
        <li class="nav-item" id="menu-opener">
          <a href="#">menu <span class="circle">&raquo;</span></a>
        </li>
      </ul>
    </div>

    <?php wp_nav_menu(array(
        'theme_location' => 'primary',
        'container' => '',
        'container_class' => false,
        'menu_class' => 'real-menu',
    )); ?>
  </div>
  </header>
</div>
<script>
$(document).ready(function () {
    function hoverDelay(over, out, delayOver, delayOut) {

        var overT = 0, outT = 0;
        wrappedOver = function () {
            clearTimeout(outT);
            overT = setTimeout(over, delayOver);
        }

        wrappedOut = function () {
            clearTimeout(overT);
            outT = setTimeout(out, delayOut);
        }

        return {over: wrappedOver, out: wrappedOut}
    }

    $(".real-menu > ul").eq(0).addClass("sf-vertical sf-menu").superfish({
    });

    var wrapped = hoverDelay(function () {
        $(".real-menu").show("fast");
    }, function () {
        $(".real-menu").hide("fast");
    }, 200, 500);


    $("#menu-opener").mouseover(wrapped.over);
    $(".real-menu").mouseout(wrapped.out);
    $(".real-menu").mouseover(wrapped.over);
});
</script>
