function Calculadora(operando1, operando2) {
    this.operando1  = parseFloat(operando1);
    this.operando2  = parseFloat(operando2);
    this.somar      = function() {return this.operando1 + this.operando2;}
    this.subtrair   = function() {return this.operando1 - this.operando2;}
    this.multiplicar= function() {return this.operando1 * this.operando2;}
    this.dividir    = function() {return this.operando1 / this.operando2;}
};