import axios from "axios";
import Alpine from "alpinejs";
import persist from "@alpinejs/persist";

Alpine.plugin(persist);

window.axios = axios;
window.Alpine = Alpine;

window.axios.defaults.headers.common["X-Requested-With"] = "XMLHttpRequest";
Alpine.start();
