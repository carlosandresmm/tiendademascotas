<div class="form-floating mb-3">
    <input class="form-control" id="name"  name="name" type="text"
        placeholder="Enter your name..." data-sb-validations="required" />
    <label for="name">Nombre completo</label>
    <div class="invalid-feedback" data-sb-feedback="name:required">A name is
        required.</div>
</div>

<div class="form-floating mb-3">
    <input class="form-control" id="direction"  name="direction" type="text"
        placeholder="Ej... Cl 5 # 20-52 torre 5 apto 601" data-sb-validations="required" />
    <label for="direction">Dirección</label>
    <div class="invalid-feedback" data-sb-feedback="direction:required">A direction
        is required.
    </div>
</div>


<div class="form-floating mb-3">
    <input class="form-control" id="phone"  name="phone" type="tel" placeholder="(123) 456-7890"
        data-sb-validations="required" />
    <label for="phone">Número de teléfono</label>
    <div class="invalid-feedback" data-sb-feedback="phone:required">A phone number
        is required.
    </div>
</div>

<div class="d-none" id="submitSuccessMessage">
    <div class="text-center mb-3">
        <div class="fw-bolder">Form submission successful!</div>
        To activate this form, sign up at
        <br />
        <a
            href="https://startbootstrap.com/solution/contact-forms">https://startbootstrap.com/solution/contact-forms</a>
    </div>
</div>

<div class="d-none" id="submitErrorMessage">
    <div class="text-center text-danger mb-3">Error sending message!</div>
</div>
<!-- Submit Button-->
<button class="btn btn-primary btn-xl disabled" id="submitButton" type="submit">Enviar</button>