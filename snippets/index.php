<?php
  // Config settings
  $publisher = $kirby->options();

  // Blocks
  foreach ($page->jsonld()->toBlocks() as $nested_block):

    snippet( $nested_block->type(), [
      'block' => $nested_block,
      'publisherType' => $publisher['chrfickinger.jsonld-for-kirby']['publisher']['type'],
      'publisherName' => $publisher['chrfickinger.jsonld-for-kirby']['publisher']['name'],
      'publisherLogo' => $publisher['chrfickinger.jsonld-for-kirby']['publisher']['logo']
    ]);
  endforeach;