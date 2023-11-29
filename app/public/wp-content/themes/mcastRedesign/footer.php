
<?php
$footer_bg = get_theme_mod('custom_theme_footer_bg', '#FFFFFF');
$footer_txt = get_theme_mod('custom_theme_txt', '#000000');
?>
  <div class="row" style="background-color: <?php echo $footer_bg; ?>;color:<?php echo $footer_txt; ?>; ">

<!--automatic footer user will have control on the amount of columns-->
<?php
  $footer_layout = get_theme_mod('custom_footer_widget_count','3');
  $sidebars_active = false;

  for($i=0; $i<$footer_layout; $i++){
    if(is_active_sidebar('footer-sidebar-'.($i+1))){
      $sidebars_active =true;
    }
  }

  if($sidebars_active):
    for($i=0; $i<$footer_layout; $i++):

      echo" <div class='col'>";
      if(is_active_sidebar('footer-sidebar-'.($i+1))){
        dynamic_sidebar('footer-sidebar-'.($i+1));
      }
      echo "</div>";
    endfor;
  endif;
  

?>

</div>
</body>
</html>

<?php wp_footer(); ?>