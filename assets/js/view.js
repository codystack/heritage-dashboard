//Pastor View Trigger
function confirmPastorView(self) {
    var id = self.getAttribute("data-id");

    document.getElementById("form-view-pastor").id.value = id;
    $("#viewPastorModal").modal("show");
}