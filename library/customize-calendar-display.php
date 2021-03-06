<?php
/*
* Adds start time to event titles in Month view
* from https://theeventscalendar.com/knowledgebase/add-start-time-to-event-title/
*/
function tribe_add_start_time_to_event_title( $post_title, $post_id ) {

	if ( ! tribe_is_event( $post_id ) ) {
		return $post_title;
	}

	// Checks if it is the month view, modify this line to apply to more views
	if ( ! tribe_is_month() ) {
		return $post_title;
	}

	$event_start_time = tribe_get_start_time( $post_id );

	if ( ! empty( $event_start_time ) ) {
		$post_title = $event_start_time . '<br />' . $post_title;
	}

	return $post_title;
}

add_filter( 'the_title', 'tribe_add_start_time_to_event_title', 100, 2 );