<?php
// change comment post date meta display from previous time to specific post date.
add_filter( 'nevo_show_comment_time_ago', '__return_false' );