"use strict";
Object.defineProperty(exports, "__esModule", { value: true });
exports.Frete = exports.TNTService = exports.JadlogService = exports.FedexService = exports.PACService = exports.SedexService = void 0;
var Correiros_1 = require("./shipping/Correiros");
var Fedex_1 = require("./shipping/Fedex");
var Jadlog_1 = require("./shipping/Jadlog");
var TNT_1 = require("./shipping/TNT");
// Concrete Strategy
var SedexService = /** @class */ (function () {
    function SedexService() {
    }
    SedexService.prototype.calculate = function (weight) {
        var correios = new Correiros_1.default();
        return correios.SEDEXCalculator(weight);
    };
    return SedexService;
}());
exports.SedexService = SedexService;
var PACService = /** @class */ (function () {
    function PACService() {
    }
    PACService.prototype.calculate = function (weight) {
        var correios = new Correiros_1.default();
        return correios.PACCalculator(weight);
    };
    return PACService;
}());
exports.PACService = PACService;
var FedexService = /** @class */ (function () {
    function FedexService() {
    }
    FedexService.prototype.calculate = function (weight) {
        var fedex = new Fedex_1.default();
        return fedex.shippingCalculator(weight);
    };
    return FedexService;
}());
exports.FedexService = FedexService;
var JadlogService = /** @class */ (function () {
    function JadlogService() {
    }
    JadlogService.prototype.calculate = function (weight) {
        var jadlog = new Jadlog_1.default();
        return jadlog.shippingCalculator(weight);
    };
    return JadlogService;
}());
exports.JadlogService = JadlogService;
var TNTService = /** @class */ (function () {
    function TNTService() {
    }
    TNTService.prototype.calculate = function (weight) {
        var tnt = new TNT_1.default();
        return tnt.shippingPriceCalculator(weight);
    };
    return TNTService;
}());
exports.TNTService = TNTService;
var Frete = /** @class */ (function () {
    function Frete(service) {
        this.service = service;
    }
    Frete.prototype.calculate = function (weight) {
        var totalValue = this.service.calculate(weight);
        return totalValue;
    };
    return Frete;
}());
exports.Frete = Frete;
