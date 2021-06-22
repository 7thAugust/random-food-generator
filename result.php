<h2 class="heading"><?php echo $name; ?></h2>
<div class="container">
    <div class="flex1">
        <img src="<?php echo $image; ?>" width="420" height="420">
        <?php echo '<p class="instruction-margin">' . $instruction . '</p>'; ?>
    </div>
</div>

<div class="container">
    <div class="flex2">
        <?php

        foreach ($ingredient as $key => $value) {
            echo '<p>' . $key . '. ' . $value . '</p>';
        }

        ?>
    </div>
    <div class="video">
        <iframe width="500px" height="400" src="<?php echo $video; ?>"></iframe>
    </div>
</div>




