
<?php
$footer_bg = get_theme_mod('custom_theme_footer_bg', '#FFFFFF');
$footer_txt = get_theme_mod('custom_theme_txt', '#000000');
?>
  <div class="row footer-top"  style="background-color: <?php echo $footer_bg; ?>;color:<?php echo $footer_txt; ?>; ">

    <!--automatic footer user will have control on the amount of columns-->
    <?php
      $footer_rows = get_theme_mod('custom_footer_row_count','1');
      // if footer_rows = 2
      if($footer_rows == 2){
      
        // build html structure for top footer (div with row class)
        echo "<div class='row' class='top-footer-row ' style='background-color: ".$footer_bg."; color:". $footer_txt."; '>";

        // inside row, get sidebar 'top-footer-sidebar'
        if(is_active_sidebar('top-footer-sidebar')):
          

            echo" <div class='col'class='top-footer-row' style = '    text-align: -webkit-center;'>";
            if(is_active_sidebar('top-footer-sidebar')){
              dynamic_sidebar('top-footer-sidebar');
            }
            echo "</div>";
      
          endif;
          echo "</div>";
      }

    ?>

</div>
<div class="row footer-bot" style="background-color: <?php echo $footer_bg; ?>;color:<?php echo $footer_txt; ?>; ">

<!--automatic footer user will have control on the amount of columns-->
<?php
  $footer_layout = get_theme_mod('custom_footer_widget_count','4');
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