<?php
get_header();
?>
<div id="myModal" class="modal">
    <span class="close" onclick="document.getElementById('myModal').style.display='none'">&times;</span>
    <img class="modal-content" id="img01">
    <div id="caption"></div>
</div>

<div id="items">
    <input class="search" placeholder="Поиск" />
    
<ul class='list'>
<?php
global $wpdb;
$results = $wpdb->get_results( 'SELECT * FROM linear_instruments', OBJECT );

foreach ($results as $result){
    echo "<li>";
        echo "<h3 class=\"name\">";
    echo "<img src=\"$result->img\" class=\"img-preview\"  id=\"img_$result->id\"/>";

    echo $result->name;
        echo "</h3>";

        echo "<p>";
        echo $result->description;
        echo "</p>";

    echo "</li>";
}
?>
</div>
<script src="//cdnjs.cloudflare.com/ajax/libs/list.js/1.2.0/list.min.js"></script>
<script>
    var options = {
        valueNames: [ 'name' ]
    };

    var userList = new List('items', options);

    jQuery( document ).ready(function() {
        var modal = document.getElementById('myModal');
        var modalImg = document.getElementById("img01");
        // Get the <span> element that closes the modal
        var span = document.getElementsByClassName("close")[0];
        // When the user clicks on <span> (x), close the modal
        span.onclick = function() {
            modal.style.display = "none";
        };
        jQuery('.img-preview').click(function () {
            modal.style.display = "block";
            modalImg.src = this.src;
            modalImg.alt = this.alt;
        });
    });
</script>
<?php
get_sidebar('content-bottom'); ?>

<?php get_footer(); ?>
