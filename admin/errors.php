<?php $errors = array(); ?>

<?php if (count($errors) > 0) : ?>
    <?php foreach ($errors as $errors) : ?>
        <p><?php echo $errors; ?></p>
    <?php endforeach ?>
<?php endif ?>