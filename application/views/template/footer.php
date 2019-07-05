</div>
<footer class="app-footer">
    <div>
        <a href="https://coreui.io">CoreUI</a>
        <span>&copy; 2018 creativeLabs.</span>
    </div>
    <div class="ml-auto">
        <span>Powered by</span>
        <a href="https://coreui.io">CoreUI</a>
    </div>
</footer>
<!-- CoreUI and necessary plugins-->
<script src="<?= base_url('assets/vendors'); ?>/jquery/js/jquery.min.js"></script>
<script src="<?= base_url('assets/vendors'); ?>/popper.js/js/popper.min.js"></script>
<script src="<?= base_url('assets/vendors'); ?>/bootstrap/js/bootstrap.min.js"></script>
<script src="<?= base_url('assets/vendors'); ?>/pace-progress/js/pace.min.js"></script>
<script src="<?= base_url('assets/vendors'); ?>/perfect-scrollbar/js/perfect-scrollbar.min.js"></script>
<script src="<?= base_url('assets/vendors'); ?>/@coreui/coreui/js/coreui.min.js"></script>
<!--Datatables  -->
<script type="text/javascript" src="<?= base_url('assets/'); ?>DataTables/datatables.min.js"></script>
<!-- Plugins and scripts required by this view-->
<script src="<?= base_url('assets/vendors'); ?>/chart.js/js/Chart.min.js"></script>
<script src="<?= base_url('assets/vendors'); ?>/@coreui/coreui-plugin-chartjs-custom-tooltips/js/custom-tooltips.min.js"></script>
<script src="<?= base_url('assets/vendors'); ?>/jquery/js/main.js"></script>
<script>
    $(document).ready(function() {
        $('#Mytable').DataTable();
    });
</script>
<script>
    $('.custom-file-input').on('change', function() {
        let filename = $(this).val().split('\\').pop();
        $(this).next('.custom-file-label').addClass("selected").html(filename);
    });


    $('.form-check-input').on('click', function() {
        const menuId = $(this).data('menu');
        const roleId = $(this).data('role');

        $.ajax({
            url: "<?= base_url('admin/changeAccess'); ?>",
            type: "post",
            data: {
                menuId: menuId,
                roleId: roleId
            },
            success: function() {
                document.location.href = "<?= base_url('admin/roleaccess/'); ?>" + roleId;
            }

        });
    });
</script>
</body>

</html>