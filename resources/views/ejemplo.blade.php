<form  action= "https://test.placetopay.com/redirection/api/session/" Method="POST" name="pago" class="form_contact" id="tarjeta">
@csrf
<div class="form-group">
    <input  value={{$arguments}}>
</div>
<button type="submit" id="boton" class="btn btn-primary mb-2">Pagar</button>
</form>