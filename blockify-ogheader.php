<?php

$block->open();

    ?>
  <meta property="og:locale" content="<?php echo $block->document['locale']; ?>" />
  <meta property="og:type" content="<?php echo $block->document['type']; ?>" />
  <meta property="og:title" content="<?php echo $block->document['title']; ?>" />
  <meta property="og:description" content="<?php echo $block->document['description']; ?>" />
  <meta property="og:url" content="<?php echo str_replace('//', 'http://', BLOCKIFY_URL);?>" />
  <meta property="og:site_name" content="<?php echo $block->document['site_name']; ?>" />
  <meta property="og:image" content="<?php echo $block->document['image']; ?>" />
    <?

$block->close();
