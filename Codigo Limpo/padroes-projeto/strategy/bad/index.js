"use strict";
Object.defineProperty(exports, "__esModule", { value: true });
var frete_1 = require("./frete");
var frete = new frete_1.default();
var freteValue = frete.calculate("sedex", 20);
console.log(freteValue);
