<footer>
    <p></p>
</footer>

<script>
$(document).ready( function () {
    $('#productTable').DataTable(function(){
        order: [[3, 'desc']];
    });
} );
</script>