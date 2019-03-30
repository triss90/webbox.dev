<ul class="list-group">
<?php
    $url = htmlspecialchars($_POST['domainName']);

    if (substr( $url, 0, 8 ) != "https://") {
        if (strpos($url,'http://') === false){
            $url = 'http://'.$url;
        }
    }

    $headers = get_headers ($url);

    foreach($headers as $key => $value) {
        $value = explode(':', $value);
        ?>
        <li class="list-group-item d-flex justify-content-between align-items-center">
            <strong><?php echo $value[0]; ?></strong> <span><?php echo $value[1]; ?></span>
        </li>
        <?php
    }
?>
</ul>
