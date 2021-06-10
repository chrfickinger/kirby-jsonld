<template>
  <div class="k-block k-block-jsonld" @dblclick="open">
    <div class="jsonld-type">
      <div>
        <span class="jsonld-name"><svg viewBox="0 0 16 16" height="16" width="16"><use href="#icon-page"></use></svg> {{ $t('jsonld.type.newsarticle') }}</span>
        <a class="more" href="https://developers.google.com/search/docs/data-types/article" target="_blank" rel="nofollow,noarchive"><svg viewBox="0 0 16 16"><use xlink:href="#icon-open"></use></svg></a>
      </div>
      <div class="jsonld-testurl">
        <a v-bind:href="testurl" class="testurl" target="_blank" rel="nofollow,noarchive"><svg viewBox="0 0 16 16"><use xlink:href="#icon-open"></use></svg> {{ $t('jsonld.action.validate') }}</a>
      </div>
    </div>
    <div class="jsonld-preview">
      <div class="jsonld-headline" v-html="content.headline"></div>
      <div class="jsonld-content">
        <div class="jsonld-text">
          <div class="jsonld-description" v-html="content.description"></div>
          <div class="jsonld-date">{{ calcDate }}</div>
        </div>
        <div v-if="content.image.length" class="jsonld-image">
          <img :src="content.image[0].url" />
        </div>
      </div>
    </div>
  </div>
</template>
<script>
import moment from 'moment'
export default {
  data() {
    return {
      testurl: "https://validator.schema.org/#url=" + this.content.testurl,
    }
  },
  computed: {
    calcDate() {
      return moment(this.content.datepublished).startOf('hour').fromNow();
    }
  }
};
</script>