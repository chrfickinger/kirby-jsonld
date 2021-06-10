<?php
  // Global values
  $publisherType = $data['publisherType'];
  $publisherName = $data['publisherName'];
  $publisherLogo = $data['publisherLogo'];

  // Headline
  $headline     = $block->headline();

  // Description
  $description  = $block->description();

  // Date
  if ($date = $block->datepublished()):
    $date = $date->toDate('Y-m-d').'T'.$date->toDate('h:i');
  endif;

  // Author
  if ($author = $block->author()->toUser()):
    $author = $author->name();
  endif;

  // Image
  $image = '';
  if ($file = $block->image()->toFile()):
    $image = '"image": {
    "@type": "ImageObject",
    "height": "'.$file->height().'",
    "width": "'.$file->width().'",
    "url": "'.$file->url().'"
  },'."\r\n";
  endif;

?><script type="application/ld+json">
{
  "@context": "http://schema.org/",
  "@type": "NewsArticle",
  "headline": "<?php echo $headline; ?>",
  "datePublished": "<?php echo $date; ?>",
  "description": "<?php echo $description; ?>",
  <?php echo $image; ?>
  "author": {
    "@type": "Person",
    "name": "<?php echo $author->name(); ?>"
  },
  "publisher": {
    "@type": "<?php echo $publisherType; ?>",
    "logo": {
      "@type": "ImageObject",
      "url": "<?php echo $publisherLogo; ?>"
    },
    "name": "<?php echo $publisherName; ?>"
  }
}
</script>