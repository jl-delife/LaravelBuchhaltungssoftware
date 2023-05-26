<script setup>

import{ref} from "vue";


let filterTransactions = () => {

    const startDate = document.getElementById('startDate').value;
    console.log("Selected start date:", startDate);

    const endDate = document.getElementById('endDate').value;
    console.log("Selected end date:", endDate);

    if (isValidDate(startDate) && isValidDate(endDate)) toggleFilter(startDate, endDate);

    
};

let toggleFilter = (startDate, endDate) => {
    let filterButton = document.getElementById('submit');
    filterButton.classList.toggle('filterActive');
    

    if(filterButton.classList.contains('filterActive')) {
        document.getElementById('submit').value = "Filter entfernen";
        getTransactions(startDate, endDate);
        document.querySelectorAll('#setRange input[type="date"]').forEach(input => {
    input.disabled = true;
});
    }else {
        document.getElementById('submit').value = "Filten";
        document.getElementById('setRange').reset();
        getTransactions();
        document.querySelectorAll('#setRange input[type="date"]').forEach(input => {
    input.disabled = false;
});
    } 
}

</script>

<template>
    <div class="setRange">
        <p class="fs-12 bold">Zeitraum festlegen:</p>
        <form v-on:submit.prevent="filterTransactions" id="setRange">
            <div>
                <label for="">Von:</label>
                <input required type="date" id="startDate" placeholder="(TT.MM.JJJ)">
            </div>

            <h2>-</h2>

            <div>
                <label for="">Bis:</label>
                <input required type="date" id="endDate" placeholder="(TT.MM.JJJ)">
            </div>

            <input id="submit" type="submit" value="Filtern">
        </form>
    </div>
</template>


<style>

</style>