<?php
Kirby::plugin('chrfickinger/jsonld-for-kirby', [

	/** Options
	---------------------------------------------------------------------------*/
	'options' => [
		'publisher' => [
			'type' => 'Organization/Person',
			'name' => 'Name',
			'logo' => 'Logo URL',
		]
	],


	/** Translations
	---------------------------------------------------------------------------*/
	'translations' => array(
		'en'	=> require_once __DIR__ . '/lib/languages/en.php',
		'de'	=> require_once __DIR__ . '/lib/languages/de.php',
	),

	/** Blueprints
	---------------------------------------------------------------------------*/
	'blueprints' => [
		'jsonld'					=> __DIR__ . '/blueprints/index.yml',

		// Blocks
		'blocks/jsonld_faqpage'		=> __DIR__ . '/blueprints/blocks/faqpage/index.yml',
		'blocks/jsonld_faqpage_item'=> __DIR__ . '/blueprints/blocks/faqpage/item.yml',
		'blocks/jsonld_newsarticle'	=> __DIR__ . '/blueprints/blocks/newsarticle/index.yml',

		// Fields
		'jsonld/author'				=> __DIR__ . '/blueprints/fields/author.yml',
		'jsonld/date'				=> __DIR__ . '/blueprints/fields/date.yml',
		'jsonld/description'		=> __DIR__ . '/blueprints/fields/description.yml',
		'jsonld/file'				=> __DIR__ . '/blueprints/fields/file.yml',
		'jsonld/headline'			=> __DIR__ . '/blueprints/fields/headline.yml',
		'jsonld/writer'				=> __DIR__ . '/blueprints/fields/writer.yml',
	],

	/** Snippets
	---------------------------------------------------------------------------*/
	'snippets' => [
		'jsonld'					=> __DIR__ . '/snippets/index.php',
		'jsonld_faqpage'			=> __DIR__ . '/snippets/blocks/faqpage/index.php',
		'jsonld_faqpage_item'		=> __DIR__ . '/snippets/blocks/faqpage/item.php',
		'jsonld_newsarticle'		=> __DIR__ . '/snippets/blocks/newsarticle/index.php',
	],
]);