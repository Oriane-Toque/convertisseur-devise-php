<?php include 'inc/header.php'; ?>
<?php include 'inc/function-convert.php'; ?>

    <form class="form_submit" action="index.php" method="POST">
      <fieldset class="form_submit-fieldset">
        <legend class="form_submit-legend">Convertisseurs de devises</legend>
        <label class="form_submit-label" for="dev_ent">Devise entrante</label>
        <select class="form_submit-select" name="dev_ent" id="dev_ent">
          <option value="euro">euro</option>
          <option value="dollar">dollar</option>
          <option value="livre">livre</option>
          <option value="peso">peso</option>
        </select>
        <label class="form_submit-label" for="dev_sort">Devise sortante</label>
        <select class="form_submit-select" name="dev_sort" id="dev_sort">
          <option value="euro">euro</option>
          <option value="dollar">dollar</option>
          <option value="livre">livre</option>
          <option value="peso">peso</option>
        </select>
        <label class="form_submit-label" for="montant">Montant à convertir</label>
        <input type="number" name="montant" id="montant" placeholder="Votre montant">
        <button>To convert</button>
      </fieldset>
    </form>

<?php

  $amount = $_POST['montant'];
  $dev_ent = $_POST['dev_ent'];
  $dev_sort = $_POST['dev_sort'];

  if(checkForm($amount) === true):

    $amountToConvert = amountToConverted($dev_ent, $dev_sort, $amount);
?>

<section class="amount_convert">
    <p><?= $amount.' '.$dev_ent; ?> vaut <?= $amountToConvert.' '.$dev_sort ?></p>
</section>

<?php
  else:
?>

<section class="amount_error">
    <p>Veuillez indiquer un montant !</p>
</section>

<?php
  endif;
?>
<?php include 'inc/footer.php'; ?>