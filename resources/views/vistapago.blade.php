@extends('plantilla')

@section ('seccion')
<form action="https://test.placetopay.com/redirection/api/session/" method="POST" name="pago" class="form_contact" id="tarjeta"  content-type =“application/json”>
@csrf
<div class="form-group">
    <input type="hidden" class="form-control" id="name" name ="name" value="Ali" >
    <input type="hidden" class="form-control" id="surname"name ="surname" value="Collins" >
    <input type="hidden" class="form-control" id="email" name ="email" value="dnetix@yopmail.com">
    <input type="hidden" class="form-control" id="document" name ="document"value="1040035000">
    <input type="hidden" class="form-control" id="documentType" name ="documentType"value="CC">
    <input type="hidden" class="form-control" id="mobile" name ="mobile"value="3006108300">
    <input type="hidden" class="form-control" id="reference" name ="reference"value="TEST_20200306_155611">
    <input type="hidden" class="form-control" id="description" name ="description"value="Sunt magnam esse neque numquam harum enim aspernatur.">
    <input type="hidden" class="form-control" id="currency"name ="currency" value="COP">
    <input type="hidden" class="form-control" id="total"name ="total"value="122000">
    <input type="hidden" class="form-control" id="expiration"name ="expiration" value="2020-03-09T15:56:11-05:00" >
    <input type="hidden" class="form-control mb-2" id="ipAddress" name="ipAddress" value="181.51.75.149">
    <input type="hidden" class="form-control mb-2" id="returnUrl" name="returnUrl" value="http://127.0.0.1:8000/">
    <input type="hidden" class="form-control mb-2" id="userAgent" name="userAgent" value="Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.132 Safari/537.36">
    <input type="hidden" class="form-control mb-2" id="paymentMethod" name="paymentMethod" value="ATH,PSE,CR_VS">
    <input type="hidden" class="form-control mb-2" id="login" name="login" value="6dd490faf9cb87a9862245da41170ff2">
    <input type="hidden" class="form-control mb-2" id="tranKey" name="tranKey" value="024h1IlD">
    <input type="hidden" class="form-control mb-2" id="nonce" name="nonce" value="TnpZM09UWXhNMlkwWXpVelpXVmxOalJqTldFek56TTRObU13TTJJd1l6Zz0=">
    <input type="hidden" class="form-control mb-2" id="seed" name="seed" value="2020-03-09T11:46:41-05:00">
</div>
<button type="submit" class="btn btn-primary">Pagar</button>
</form>
@endsection