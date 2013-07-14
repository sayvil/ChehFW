<form action="<?php echo home_url(); ?>/" id="searchform" method="get">
        <input type="text" id="s" name="s" value="<?php _e('Search', 'energy') ?>" onfocus="if(this.value=='<?php _e('Search', 'energy') ?>')this.value='';" onblur="if(this.value=='')this.value='<?php _e('Search', 'energy') ?>';" autocomplete="off" />
        <input type="submit" value="Search" id="searchsubmit" class="hidden" />
</form>