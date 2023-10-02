import { Frete, SedexService, TNTService } from "./frete-strategy";

const sedexService = new SedexService();
const tntService = new TNTService();
const frete = new Frete(tntService);
const freteValue = frete.calculate(20);
console.log(freteValue);