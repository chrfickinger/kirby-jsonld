<?php
  // Items
  $items = '';
  foreach ($block->content()->blocks()->toBlocks() as $item):
    $items .= '{
        "@type": "Question",
        "name": "'.$item->question().'",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "'.$item->answer().'"
        }
      }, ';
  endforeach;
  
  $items = rtrim($items, ', ');

?><script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "FAQPage",
    "mainEntity": [<?php echo $items; ?>]
}
</script>