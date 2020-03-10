@extends('plantilla')

@section ('seccion')
<form action="https://test.placetopay.com/redirection/api/session/" method="POST" name="pago" class="form_contact" id="tarjeta"  content-type =“application/json”>
@csrf
<div class="form-group">
    <input type="text" class="form-control mb-2" id="name" name ="name" value="{{$nuevaorden->name}}" readonly="readonly" >
    <input type="text" class="form-control mb-2" id="surname"name ="surname" value="{{$nuevaorden->surname}}" readonly="readonly" >
    <input type="text" class="form-control mb-2" id="email" name ="email" value="{{$nuevaorden->email}}" readonly="readonly">
    <input type="text" class="form-control mb-2" id="document" name ="document"value="{{$nuevaorden->document}}" readonly="readonly">
    <input type="text" class="form-control mb-2" id="documentType" name ="documentType"value="{{$nuevaorden->documenttype}}" readonly="readonly">
    <input type="text" class="form-control mb-2" id="mobile" name ="mobile"value="{{$nuevaorden->phone}}" readonly="readonly">
    <input type="hidden" id="reference" name ="reference"value="TEST_20200306_155611">
    <input type="hidden" id="description" name ="description"value="Sunt magnam esse neque numquam harum enim aspernatur.">
    <input type="hidden" id="currency"name ="currency" value="COP">
    <input type="hidden" id="total"name ="total"value="122000">
    <input type="hidden" id="expiration"name ="expiration" value="2020-03-09T15:56:11-05:00" >
    <input type="hidden" id="ipAddress" name="ipAddress" value="181.51.75.149">
    <input type="hidden" id="returnUrl" name="returnUrl" value="http://127.0.0.1:8000/">
    <input type="hidden" id="userAgent" name="userAgent" value="Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.132 Safari/537.36">
    <input type="hidden" id="paymentMethod" name="paymentMethod" value="ATH,PSE,CR_VS">
    <input type="hidden" id="login" name="login" value="6dd490faf9cb87a9862245da41170ff2">
    <input type="hidden" id="tranKey" name="tranKey" value="024h1IlD">
    <input type="hidden" id="nonce" name="nonce" value="TnpZM09UWXhNMlkwWXpVelpXVmxOalJqTldFek56TTRObU13TTJJd1l6Zz0=">
    <input type="hidden" id="seed" name="seed" value="2020-03-09T11:46:41-05:00">
</div>
<button type="submit" class="btn btn-primary mb-2">Pagar</button>
</form>
@endsection