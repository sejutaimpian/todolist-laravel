import axios from "axios";
import Alpine from "alpinejs";
import persist from "@alpinejs/persist";
import Swal from "sweetalert2";

Alpine.plugin(persist);

window.axios = axios;
window.Alpine = Alpine;
window.Swal = Swal;

window.axios.defaults.headers.common["X-Requested-With"] = "XMLHttpRequest";
Alpine.start();
