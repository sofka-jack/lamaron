 <?php
include './cfg/db.php';
$sql = "SELECT * FROM `review` ORDER BY `id` DESC LIMIT 10";

try {
    $stmt = $dbh->prepare($sql);
    $stmt->execute();
}
catch (PDOException $e) {
    print $e->getMessage();
}

function generateDate()
{
    static $i = 0;
    $i++;
    $time = time() - ($i * 130000) - (rand(0, 30000));
    return date('j F Y g:i A', $time);
}
?>
<div class="testimonialcontainer">
    <div class="container">
    <div class="row">
        <div class="clearfix"></div>
        <div class="column twelvecol">
            <h2 class="headline"> What our customers say </h2>
            <div class="text-center margin-top col-sm-12 col-md-12">
                <?php while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) : ?>
                    <article class="testimonial col-sm-6 col-md-5">
                        <div class="testimonial-text">
                            <h6 class='author nomargin'>
                                <span><?= $row['name'];?></span><span class="date-post"> / <?= generateDate();?></span>
                            </h6>
                            <div class="post-field-white"><?= $row['text'];?></div>
                        </div>
                    </article>
                <?php endwhile;?>
            </div>
       </div>
   </div>
</div>
</div>