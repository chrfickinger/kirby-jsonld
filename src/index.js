import "regenerator-runtime/runtime";
import "./assets/styles.scss";

import newsarticle	from "./components/newsarticle/index.vue";
import faqpage		from "./components/faqpage/index.vue";
import faqpage_item	from "./components/faqpage/item.vue";

panel.plugin("chrfickiger/jsonld-for-kirby", {
	blocks: {
		jsonld_newsarticle: newsarticle,
		jsonld_faqpage: faqpage,
		jsonld_faqpage_item: faqpage_item,
	}
});