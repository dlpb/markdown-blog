<?php
require_once 'postRenderer.php';
$path = './posts';
$files = array_reverse(array_slice(scandir($path), 2));

foreach ($files as $file) {
    $md = file_get_contents($path . '/' . $file);
    // Get only summary (first lines of post)
    $md = getFirstLines($md, 3);
    $md = addTitleHref($md, $file);
    $year = substr($file, 0, strpos($file, "-"));
    
    
    $title = getFirstLines($md, 1);
    $preview = getFirstLinesOfBody($md, 2, 3);
    ?>
    <div class="row">
        <div class="col col-sm">
            <div class="card bg-light mb-3">
            <div class="card-header">
                <div class="row">
                    <div class="col-10">
                        <?php echo renderMarkdown($title); ?>
                    </div>
                    <div class="col">
                         <span class="badge badge-secondary float-right"><?php echo $year; ?></span>
                    </div>
                </div>
           </div>
            <div class="card-body">
                <div class="blog-post">
                    <?php echo renderMarkdown($preview); ?>
                    <a href="<?php echo explode('.', $file)[0] ?>">Read post</a>
                </div>
            </div>
        </div>
        </div>
    </div>
    
    
<?php } ?>