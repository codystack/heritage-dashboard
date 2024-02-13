//User Delete Trigger
function confirmDelete(self) {
    var id = self.getAttribute("data-id");

    document.getElementById("form-delete-user").id.value = id;
    $("#userDeleteModal").modal("show");
}


//Setting Delete Trigger
function confirmSettingDelete(self) {
    var id = self.getAttribute("data-id");

    document.getElementById("form-delete-setting").id.value = id;
    $("#settingDeleteModal").modal("show");
}


//Quote Delete Trigger
function confirmQuoteDelete(self) {
    var id = self.getAttribute("data-id");

    document.getElementById("form-delete-quote").id.value = id;
    $("#quoteDeleteModal").modal("show");
}


//Category Delete Trigger
function confirmCategoryDelete(self) {
    var id = self.getAttribute("data-id");

    document.getElementById("form-delete-category").id.value = id;
    $("#categoryDeleteModal").modal("show");
}