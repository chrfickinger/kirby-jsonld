<template>
  <div class="k-block k-block-jsonld" @dblclick="open">
    <div class="jsonld-type">
      <div>
        <span class="jsonld-name"><svg viewBox="0 0 16 16" height="16" width="16"><use href="#icon-question"></use></svg> {{ $t('jsonld.type.faqpage') }}</span>
        <a class="more" href="https://developers.google.com/search/docs/data-types/faqpage" target="_blank" rel="nofollow,noarchive"><svg viewBox="0 0 16 16"><use xlink:href="#icon-open"></use></svg></a>
      </div>
      <div class="jsonld-testurl">
        <a v-bind:href="testurl" class="testurl" target="_blank" rel="nofollow,noarchive"><svg viewBox="0 0 16 16"><use xlink:href="#icon-open"></use></svg> {{ $t('jsonld.action.validate') }}</a>
      </div>
    </div>
    <div class="jsonld-preview">
      <div class="item" v-for="item in content.blocks" :class="{'ishidden': item.isHidden}">
        <strong v-html="item.content.question"></strong>
        <div v-html="item.content.answer"></div>
      </div>
    </div>
  </div>
</template>
<script>
</script>