@extends('plantilla')

@section ('seccion')
<form action="https://test.placetopay.com/redirection/api/session/" method="POST" name="pago" class="form_contact" id="tarjeta">
@csrf
<div class="form-group form-radio">
    <input type="radio" onclick="mostrarDetalle()"  aria-label="Radio button for following text input" name="pago" id="credito" value="1" >       
    <label class="form-radio-label" for="credito">Tarjeta Credito</label><br><br>
</div>
<div class="form-group form-radio">
    <input type="radio" onclick="mostrarDetalle()" aria-label="Radio button for following text input" name="pago" id="p" value="2" >       
    <label class="form-radio-label" for="debito">Débito</label>
</div>
<script>
function mostrarDetalle(){
    var p = document.pago.pago;
	if(p.value=='1')
    {
        document.getElementById("insertar").innerHTML = 
        `<div class="row">
         <div class="form-group col">
            <label for="numtarjeta">Número de Tarjeta</label>
            <input type="number" class="form-control" id="numtarjeta" placeholder="Ingrese Número de Tarjeta">
        </div>
        <div class="form-group col">
            <label for="tarjeta">Tipo Tarjeta</label>
            <select class="form-control" id="tarjeta">
                <option>American Express </option>
                <option>Visa</option>
                <option>Mastercard</option>
                <option>Tarjeta RIS</option>
                <option>Codensa</option>
                <option>BBVA</option>
            </select>
        </div> 
        </div> 
        <div class="row">
        <div class="form-group col">
            <label for="nomtarjeta">Nombre</label>
            <input type="text" class="form-control" id="nomtarjeta" placeholder="Ingrese el Nombre como Aparece en la Tarjeta">
        </div>
        <div class="form-group col">
            <label for="fecha">Vencimiento (mm/aa)</label>
            <input type="date" class="form-control" id="fecha" placeholder="Seleccione Fecha de Vencimiento" >
        </div>
        </div> `;
   }
   else
   {
        document.getElementById("insertar").innerHTML = 
        `<div class="form-group">
            <label for="nomtarjeta">Nombre del Responsable</label>
            <input type="text" class="form-control" id="nomtarjeta" placeholder="Ingrese el Nombre">
        </div>
        <div class="row">
        <div class="form-group col">
            <label for="banco">Banco</label>
            <select class="form-control" id="banco">
                <option>Av Villas</option>
                <option>Banco de Bogotá</option>
                <option>Banco de Occidente</option>
                <option>Banco Popular</option>
                <option>Bancolombia</option>
                <option>Caja Social</option>
                <option>Citibank</option>
                <option>Colpatria</option>
                <option>Corpbanca</option>
                <option>Davivienda</option>
                <option>Helm Bank</option>
                <option>Multibank</option>
            </select>
        </div>
        <div class="form-group col">
            <label for="cuenta">Tipo Cuenta</label>
            <select class="form-control" id="cuenta">
                <option>Corriente</option>
                <option>Ahorros</option>
            </select>      
        </div> 
        </div> 
        <div class="row">
        <div class="form-group col">
            <label for="numcuenta">Número de Cuenta</label>
            <input type="number" class="form-control" id="numcuenta" placeholder="Ingrese Número de Cuenta">
        </div>
        <div class="form-group col">
            <label for="concuenta">Confirmar Número de cuenta</label>
            <input type="number" class="form-control" id="concuenta" placeholder="Confirme Número de Cuenta">
        </div>
        </div>`;
   }
}
</script>
<div class="form-group">
    <label for="tipo">Tipo de Identificación</label>
    <select class="form-control" id="tipo">
        <option>CC</option>
        <option>TI</option>
        <option>PPN</option>
        <option>CE</option>
    </select>
</div>
<div class="form-group">
    <label for="identificacion">Identificación del Titular</label>
    <input type="number" class="form-control" id="identificacion" placeholder="Ingrese Número de Identificación" >
</div>
<div class="form-group">
    <label for="valor">Telefono</label>
    <input type="number" class="form-control mb-2" id="valor" name="valor" value="39000">
  </div> 
  <div class="form-group">
    <label for="moneda">Telefono</label>
    <input type="text" class="form-control mb-2" id="moneda" name="moneda" value="COP">
  </div> 
  <div class="form-group">
    <label for="url">Telefono</label>
    <input type="text" class="form-control mb-2" id="url" name="url" value="http://127.0.0.1:8000/">
  </div>
  <div class="form-group">
    <label for="conurl">Telefono</label>
    <input type="text" class="form-control mb-2" id="conurl" name="conurl" value="http://127.0.0.1:8000/">
  </div> 
  <div class="form-group">
    <label for="firma">Telefono</label>
    <input type="number" class="form-control mb-2" id="firma" name="firma" value="6dd490faf9cb87a9862245da41170ff2">
  </div> 
<p id="insertar"></p>
<button type="submit" class="btn btn-primary">Pagar</button>
</form>
@endsection