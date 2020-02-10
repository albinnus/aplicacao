import Inputmask from "inputmask";

var selector = document.getElementById("telefone");
Inputmask({"mask": "(99) 99999-9999"}).mask(selector);
