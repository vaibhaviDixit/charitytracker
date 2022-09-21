<?php 



function redirect ($path)
{
    ?>
    <script>
        window.location.href='<?php echo $path ?>'
    </script>
    <?php
    die();
}


function alertMsg($msg){
  ?>
    <script>
        alert('<?php echo $msg ?>');
    </script>
    <?php
}


?>