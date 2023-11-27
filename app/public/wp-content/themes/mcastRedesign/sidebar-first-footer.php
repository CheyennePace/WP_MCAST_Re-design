<aside role="complimentary">
<?php
    if(is_active_sidebar("sidebar-footer-1")){
        dynamic_sidebar("sidebar-footer-1");
    }
    else{
        echo "<p>No sidebar widgets.</p>";
    }
?>
</aside>