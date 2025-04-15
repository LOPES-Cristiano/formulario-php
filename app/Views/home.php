<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 2403</title>
    <link rel="stylesheet" href="<?= base_url('assets/css/styles.css') ?>">  
</head> 
<body>


    <form action="<?= base_url('form/submit') ?>" method="post">
        <label for="name">Nome:</label>
        <input type="text" id="name" name="name" value="<?= old('name') ?>" placeholder="Informe seu nome" required>
        
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" value="<?= old('email') ?>" placeholder="Informe seu email" required>
        
        <button type="submit">Enviar</button>
    </form>

    <?php if (session()->getFlashdata('success')): ?>
        <div class="modal">
            <div class="modal-content">
                <p class="msg msg-success"><?= session()->getFlashdata('success') ?></p>
            </div>
        </div>
    <?php endif; ?>

    <?php if (session()->getFlashdata('error')): ?>
        <div class="modal">
            <div class="modal-content">
                <p class="msg msg-error"><?= session()->getFlashdata('error') ?></p>
            </div>
        </div>
    <?php endif; ?>

</body>
<script>
    document.addEventListener('DOMContentLoaded', () => {
        const modals = document.querySelectorAll('.modal');
        modals.forEach(modal => {
            modal.addEventListener('click', (event) => {
                if (!event.target.closest('.modal-content')) {
                    modal.style.display = 'none';
                }
            });
        });
    });
</script>
</html>
