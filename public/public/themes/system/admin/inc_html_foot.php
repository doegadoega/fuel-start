
        <?php 
        echo \Asset::js('jquery-ui.min.js'); 
        echo \Asset::js('bootstrap.min.js'); 
        echo $theme->asset->js('smartmenus/jquery.smartmenus.min.js'); 
        echo $theme->asset->js('chosen/chosen.jquery.min.js'); 
        echo $theme->asset->js('icheck/icheck.min.js'); 
        echo $theme->asset->js('jquery.floatThead.min.js'); 
        echo $theme->asset->render('fuelstart_footer'); 
        
        echo $theme->asset->js('main.js'); 
        echo $theme->asset->js('admin.js'); 
        ?>
    </body>
</html>