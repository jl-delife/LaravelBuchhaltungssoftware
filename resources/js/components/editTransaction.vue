<script setup>
let getToken = () => {
    const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
    const id = document.querySelector('meta[name="userId"]').getAttribute('content');
    document.getElementById('token').value = csrfToken;
    document.getElementById('id').value = id;

    checkInputs();
}

let checkInputs = () => {
  const transactionNameInput = document.getElementById('transactionName');
  const transactionAmountInput = document.getElementById('transactionAmount');
  const transactionDateInput = document.getElementById('transactionDate');

  const transactionNameLabel = transactionNameInput.parentElement.firstChild;
  const transactionAmountLabel = transactionAmountInput.parentElement.firstChild;
  const transactionDateLabel = transactionDateInput.parentElement.firstChild;

  transactionNameLabel.style.color = 'black';
  transactionAmountLabel.style.color = 'black';
  transactionDateLabel.style.color = 'black';

  const isTransactionNameValid = (transactionNameInput.value.length >= 1 && transactionNameInput.value.length <= 25 && transactionNameInput.value.trim().length >= 1);
  const isTransactionAmountValid = validateAmountInput(transactionAmountInput.value);
  const isTransactionDateValid = isValidDate(transactionDateInput.value);

  transactionNameLabel.style.color = isTransactionNameValid ? 'green' : 'red';
  transactionAmountLabel.style.color = isTransactionAmountValid ? 'green' : 'red';
  transactionDateLabel.style.color = isTransactionDateValid ? 'green' : 'red';

  if (isTransactionNameValid && isTransactionAmountValid && isTransactionDateValid) {
    document.getElementById('form').submit();
  }
};

let resetForm = () => {
  const transactionNameLabel = document.getElementById('transactionName').parentElement.firstChild;
  const transactionAmountLabel = document.getElementById('transactionAmount').parentElement.firstChild;
  const transactionDateLabel = document.getElementById('transactionDate').parentElement.firstChild;

  transactionNameLabel.style.color = 'black';
  transactionAmountLabel.style.color = 'black';
  transactionDateLabel.style.color = 'black';

  document.getElementById('form').reset();
}

const validateAmountInput = (amount) => {
  const regex = /^-?\d+(\.\d{1,2})?$/;
  return regex.test(amount);
};

</script>

<template>
<section class="editTransaction">
            <div class="transactionsAreaHeader">
                <h2>Transaktion bearbeiten2:</h2>
            </div>        
    <article>
        <form v-on:submit.prevent="getToken" method="POST" action="/transactionRequest" id="form">
            <div class="inputs">
                <div>
                    <label for="transactionName">Transaktions-Name:</label>
                    <input minlength="1" maxlength="25" required id="transactionName" type="text" name="transactionName">
                </div>

                <div>
                    <label for="transactionAmount">Euro-Betrag:</label>
                    <input minlength="1" max-length="20" required id="transactionAmount" type="number" step="0.01" name="transactionAmount">
                </div>

                <div>
                    <label for="transactionDate">Transaktions-Datum:</label>
                    <input minlength="10" required id="transactionDate" type="date" placeholder="(TT.MM.JJJJ)" name="transactionDate">
                </div>

                <div>
                  <label for="categorys">Wähle eine Katrgorie:</label>
                    <select id="categorys" name="category">
                      <option value="automatic">AUTOMATISCH</option>
                      <option value="food">Lebensmittel</option>
                      <option value="restaurants">Restaurants</option>
                      <option value="shopping">Einkaufen</option>
                      <option value="transportation">Transport</option>
                      <option value="living">Wohnen</option>
                      <option value="travel">Reisen</option>
                      <option value="health">Gesundheit</option>
                      <option value="education">Bildung</option>
                      <option value="entertainment">Unterhaltung</option>
                      <option value="wage">Lohn/Gehalt</option>
                      <option value="other">Sonstiges</option>
                    </select>
                </div>
            </div>

            <input type="hidden" name="_token" id="token">
            <input type="hidden" name="transactionId" id="id">
            <input v-on:click="checkInputs" id="submitNewTransaction" type="submit" value="Transaktion hinzufügen">
        </form>

        <button v-on:click="resetForm" class="cancel buttonStyle2">Abbrechen</button>
    </article>
  </section>     
</template>


<style>

</style>