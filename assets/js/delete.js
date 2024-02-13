//User Delete Trigger
function confirmDelete(self) {
    var id = self.getAttribute("data-id");

    document.getElementById("form-delete-user").id.value = id;
    $("#userDeleteModal").modal("show");
}

//User Setting Trigger
function confirmSettingDelete(self) {
    var id = self.getAttribute("data-id");

    document.getElementById("form-delete-setting").id.value = id;
    $("#settingDeleteModal").modal("show");
}