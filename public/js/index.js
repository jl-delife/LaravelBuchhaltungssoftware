let interactionFieldButtons = document.querySelectorAll(".actions button");

interactionFieldButtons.forEach((button) => {
    button.addEventListener("click", () => {
        switch (button.id) {
            case "show-all-transactions-button":
                ShowActionField("show-transaction-field");
                break;
            case "show-period-transactions-button":
                ShowActionField("show-transaction-field");
                break;
            case "create-transaction-button":
                ShowActionField("create-transactions-field");
                break;
            case "delete-transaction-button":
                ShowActionField("delete-transactions-field");
                break;
        }
    });
});

function ShowActionField(actionFieldName) {
    let actionFields = document.querySelectorAll(".action-fields article");

    actionFields.forEach((actionField) => {
        actionField.classList.add("d-none");
    });

    document.getElementById(actionFieldName).classList.remove("d-none");
}
