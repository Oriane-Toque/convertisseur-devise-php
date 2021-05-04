<?php include 'inc/header.php'; ?>
    <form class="form_submit" action="index.php" method="post">
      <fieldset class="form_submit-fieldset">
        <legend class="form_submit-legend">Convertisseurs de devises</legend>
        <label class="form_submit-label" for="dev_ent">Devise entrante</label>
        <select class="form_submit-select" name="dev_ent" id="dev_ent">
          <option value="euro">EURO</option>
          <option value="dollar">DOLLAR</option>
        </select>
        <label class="form_submit-label" for="dev_sort">Devise sortante</label>
        <select class="form_submit-select" name="dev_sort" id="dev_sort">
          <option value="euro">EURO</option>
          <option value="dollar">DOLLAR</option>
        </select>
        <label class="form_submit-label" for="montant">Montant à convertir</label>
        <input type="number" name="montant" id="montant" placeholder="Votre montant">
      </fieldset>
      <button></button>
    </form>
<?php include 'inc/footer.php'; ?>