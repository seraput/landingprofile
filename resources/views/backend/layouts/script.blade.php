<!-- Chart library -->
<script src="../vendor/admin/plugins/chart.min.js"></script>
<!-- Icons library -->
<script src="../vendor/admin/plugins/feather.min.js"></script>
<!-- Custom scripts -->
<script src="../vendor/admin/js/script.js"></script>

<script>
    $('#sidemenu a').on('click', function() {
        var $this = $(this),
            $bc = $('<div class="item"></div>');

        $this.parents('li').each(function(n, li) {
            var $a = $(li).children('a').clone();
            $bc.prepend(' / ', $a);
        });
        $('.breadcrumb').html($bc.prepend('<a href="#home">Home</a>'));
        return false;
    })
</script>
