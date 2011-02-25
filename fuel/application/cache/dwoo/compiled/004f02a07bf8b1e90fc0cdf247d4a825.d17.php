<?php
/* template head */
/* end template head */ ob_start(); /* template body */ ?><p><img src="<?php echo img_path('blog/team_placeholder.png');?>" alt="" /></p><?php  /* end template body */
return $this->buffer . ob_get_clean();
?>