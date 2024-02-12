    <script src="https://cdn.jsdelivr.net/npm/choices.js/public/assets/scripts/choices.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.10.2/umd/popper.min.js"></script>
    <script src="assets/js/datatable.js"></script>
    <script src="assets/js/main.js"></script>
    <script src="assets/js/delete.js"></script>
    <script src="assets/js/switcher.js"></script>

    <!-- View Name Search Modal -->
    <script>
        $(document).ready(function(){
            $('.admindata').click(function(){
            
                var namesearchid = $(this).data('id');
                
                // AJAX request
                $.ajax({
                    url: './view.php',
                    type: 'post',
                    data: {namesearchid: namesearchid},
                    success: function(response){ 
                        // Add response in Modal body
                        $('.modal-body').html(response);
                        // Display Modal
                        $('#viewNameSearchModal').modal('show'); 
                    }
                });
            });
        });
	</script>
    <!-- View Name Search Modal -->


    <!-- <script>
        $(document).ready(function(){
            $("#userDeleteModal").modal('show');
        });
    </script> -->

    <script>
        new DataTable('#branches');
        new DataTable('#users');
        new DataTable('#pastors');
        new DataTable('#settings');
        new DataTable('#categories');
        new DataTable('#devotionals');
        new DataTable('#quotes');
        new DataTable('#events');
        new DataTable('#media');
    </script>

</body>

</html>