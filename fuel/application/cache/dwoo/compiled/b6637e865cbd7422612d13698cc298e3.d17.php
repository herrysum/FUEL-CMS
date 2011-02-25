<?php
/* template head */
/* end template head */ ob_start(); /* template body */ ?><p><img src="<?php echo img_path('blog/team_placeholder.png');?>" alt="" /> <a href="http://localhost/daylight/FUEL/v.9/blog/2010/11/06/a-long-long-time-ago-in-a-galaxy-far-far-away" class="readmore">Read More</a></p><?php  /* end template body */
return $this->buffer . ob_get_clean();
?>