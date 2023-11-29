
<?php
$s=get_search_query();
$args = array(
                's' =>$s
            );

?>


<!--
<form action="/" method="get">
     <input type="text" name="s" id="search" value="<?php the_search_query(); ?>" />
        <button>
            <span class="search-icon"></span>
        </button>
</form>
-->

<form method="get"  action="<?php echo esc_url( home_url( '/' ) ); ?>">
    
    <input placeholder="Search" type="text" name="s" id="search" value="<?php the_search_query(); ?>" />

</form>
        <button>
            <span class="search-icon"></span>
        </button>



