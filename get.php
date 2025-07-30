<?php if (isset($message)) : ?>
    <div class="alert alert-success alert-dismissible text-center">
        <?= $message ?>
    </div>
<?php endif ?>

<form action="index.php" method="post">
    <header>
        <h1></h1>
    </header>

                            

    <div class="form-floating mb-3">
        
        <input class="form-control" type="text" value="<?= $inputs['name'] ?? '' ?>" name="name" id="name" placeholder="Nombre comleto" data-sb-validations="required">
        <label for="name">Nombre completo:</label>
        <small><?= $errors['name'] ?? '' ?></small>
        <div class="invalid-feedback" data-sb-feedback="name:required">Nombre es requeridox .</div>
    </div>

    <div class="form-floating mb-3">
        <input class="form-control" type="email" name="email" id="email" value="<?= $inputs['email'] ?? '' ?>" placeholder="Email address">
        <label for="email">Email:</label>
        <small><?= $errors['email'] ?? '' ?></small>
        <div class="invalid-feedback" data-sb-feedback="name:required">Correo electrónico es requerido</div>
    </div>

    <div class="form-floating mb-3">
        <input class="form-control" type="subject" name="subject" id="subject" value="<?= $inputs['subject'] ?? '' ?>" placeholder="Enter a subject">
        <label for="subject">Asunto:</label>
        <small><?= $errors['subject'] ?? '' ?></small>
        <div class="invalid-feedback" data-sb-feedback="name:required">Asunto es requerido.</div>
    </div>

    <div class="form-floating mb-3">
        <textarea class="form-control" id="message" name="message" rows="5" placeholder="Enter a subject"style="height: 10rem" data-sb-validations="required" ><?= $inputs['message'] ?? '' ?></textarea>
        <label for="message">Mensaje:</label> 
        <small><?= $errors['message'] ?? '' ?></small>
    </div>
    <div class="text-center form-floating mb-3">
    <button  class="btn btn-primary btn-xl" type="submit">Enviar mensaje</button>
    </div>
</form>