"use strict";
Object.defineProperty(exports, "__esModule", { value: true });
var Correiros_1 = require("./shipping/Correiros");
var Fedex_1 = require("./shipping/Fedex");
var Jadlog_1 = require("./shipping/Jadlog");
var TNT_1 = require("./shipping/TNT");
var Frete = /** @class */ (function () {
    function Frete() {
    }
    Frete.prototype.calculate = function (service, weight) {
        if (service === "pac") {
            var correios = new Correiros_1.default();
            return correios.PACCalculator(weight);
        }
        else if (service === "sedex") {
            var correios = new Correiros_1.default();
            return correios.SEDEXCalculator(weight);
        }
        else if (service === "fedex") {
            var fedex = new Fedex_1.default();
            return fedex.shippingCalculator(weight);
        }
        else if (service === "jadlog") {
            var jadlog = new Jadlog_1.default();
            return jadlog.shippingCalculator(weight);
        }
        else if (service === 'tnt') {
            var tnt = new TNT_1.default();
            return tnt.shippingPriceCalculator(weight);
        }
        else {
            console.log('Serviço não disponível');
        }
    };
    return Frete;
}());
exports.default = Frete;
