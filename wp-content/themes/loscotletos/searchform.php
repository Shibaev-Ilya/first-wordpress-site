<form role="search" method="get" class="search-form" action="<?php echo home_url("/") ?>">
    <label for="search"></label>
    <input id="search" type="search" class="search-field" placeholder="Search..." value="<?php echo get_search_query() ?>" name="s">
    <input type="submit" class="search-submit" value="">
</form>
