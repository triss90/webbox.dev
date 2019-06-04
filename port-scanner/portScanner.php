 <ul class="list-group">
<?php
ini_set('max_execution_time', 0);
ini_set('memory_limit', -1);

$host = strip_tags(trim($_POST[ 'host' ]));
$ports = array_map('intval', explode(',', $_POST[ 'ports' ]));

if(isset($ports)) {
    foreach ($ports as $port) {
        $connection = @fsockopen($host, $port, $errno, $errstr, 2);
        if (is_resource($connection)) {
            ?>
            <li class="list-group-item d-flex justify-content-between align-items-center">
                <?php echo "<strong>" . $host . ":" . $port . " (".getservbyport($port, 'tcp').")</strong>" ?>
                <i class="fa fa-check-circle text-success" aria-hidden="true"></i>
            </li>
            <?php
            fclose($connection);
        }  else {
            ?>
            <li class="list-group-item d-flex justify-content-between align-items-center">
                <?php echo "<strong>" . $host . ":" . $port . "</strong>" ?>
                <i class="fa fa-exclamation-triangle text-primary" aria-hidden="true"></i>
            </li>
            <?php
        }
    }
}
?>
</ul>