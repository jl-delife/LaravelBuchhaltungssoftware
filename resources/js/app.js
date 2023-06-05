import { createApp } from "vue";
import setRange from "./vueConverter/setRangeConverter.vue";
import newTransaction from "./vueConverter/newTransactionConverter.vue";
import editTransaction from "./vueConverter/editTransactionConverter.vue";

createApp(setRange).mount("#vueSetRange");
createApp(newTransaction).mount("#vueNewTransaction");
createApp(editTransaction).mount("#editNewTransaction");
