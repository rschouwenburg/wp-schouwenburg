<form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>" autocomplete="off">
  <label>
  	<span class="screen-reader-text">Search for:</span>
  	<input type="search" class="search-field" placeholder="Search &hellip;" value="<?php the_search_query(); ?>" name="s" />
  </label>
  <input type="submit" class="search-submit" value="Search" />
</form>