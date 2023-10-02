import Correios from "./shipping/Correiros";
import Fedex from "./shipping/Fedex";
import Jadlog from "./shipping/Jadlog";
import TNT from "./shipping/TNT";


export default class Frete {
  calculate(service, weight) {
    if (service === "pac") {
      const correios = new Correios();
      return correios.PACCalculator(weight);
    } else if (service === "sedex") {
      const correios = new Correios();
      return correios.SEDEXCalculator(weight);
    } else if (service === "fedex") {
      const fedex = new Fedex();
      return fedex.shippingCalculator(weight);
    } else if (service === "jadlog") {
      const jadlog = new Jadlog();
      return jadlog.shippingCalculator(weight);
    } else if(service === 'tnt') {
      const tnt = new TNT();
      return tnt.shippingPriceCalculator(weight);
    }else{
      console.log('Serviço não disponível');
    }
  }
}
