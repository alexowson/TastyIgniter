<div class="row content">
    <div class="col-md-12">
        <?= form_open(current_url(),
            [
                'id'   => 'edit-form',
                'role' => 'form',
                'method' => 'POST'
            ]
        ); ?>

        <?= $this->renderForm(); ?>

        <?= form_close(); ?>
    </div>
</div>