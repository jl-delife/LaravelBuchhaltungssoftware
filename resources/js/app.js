import { createApp } from "vue";
import setRange from "./vueConverter/setRangeConverter.vue";
import newTransaction from "./vueConverter/newTransactionConverter.vue";

createApp(setRange).mount("#vueSetRange");
createApp(newTransaction).mount("#vueNewTransaction");
