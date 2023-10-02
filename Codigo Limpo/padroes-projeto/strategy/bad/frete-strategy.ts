import Correios from "./shipping/Correiros";
import Fedex from "./shipping/Fedex";
import Jadlog from "./shipping/Jadlog";
import TNT from "./shipping/TNT";

// Padrão comportamental

// Strategy
interface FreteService {
  calculate(weight: number): number;
}

// Concrete Strategy
class SedexService implements FreteService {
  calculate(weight: number): number {
    const correios = new Correios();
    return correios.SEDEXCalculator(weight);
  }
}

class PACService implements FreteService {
  calculate(weight: number): number {
    const correios = new Correios();
    return correios.PACCalculator(weight);
  }
}

class FedexService implements FreteService {
  calculate(weight: number): number {
    const fedex = new Fedex();
    return fedex.shippingCalculator(weight);
  }
}

class JadlogService implements FreteService {
  calculate(weight: number): number {
    const jadlog = new Jadlog();
    return jadlog.shippingCalculator(weight);
  }
}

class TNTService implements FreteService {
  calculate(weight: number): number {
    const tnt = new TNT();
    return tnt.shippingPriceCalculator(weight);
  }
}

class Frete {
  constructor(private service: FreteService) {}

  calculate(weight) {
    const totalValue = this.service.calculate(weight);
    return totalValue;
  }
}

export{
    SedexService,
    PACService,
    FedexService,
    JadlogService,
    TNTService,
    Frete
}
