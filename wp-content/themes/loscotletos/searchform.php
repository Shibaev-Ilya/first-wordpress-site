<form role="search" method="get" class="search-form" action="<?php echo home_url("/") ?>">
    <label>
        <input type="search" class="search-field" placeholder=""
               value="<?php echo get_search_query() ?>" name="s"/>
    </label>
    <input type="submit" class="search-submit" value="Search"/>
</form>
