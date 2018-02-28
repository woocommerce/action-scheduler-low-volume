<?php
/**
 * Plugin Name: Action Scheduler Low Volume
 * Plugin URI: https://github.com/prospress/action-scheduler
 * Description: Reduce Action Scheduler batch size and concurrency.
 * Author: Prospress Inc.
 * Author URI: http://prospress.com/
 * Version: 1.0
 *
 * Copyright 2018 Prospress, Inc.  (email : freedoms@prospress.com)
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 *
 * @author	Brent Shepherd
 * @since	1.0
 */


/**
 * Reduce Action Scheduler batch size so that fewer actions are processed in each queue, which can
 * be required on sites with a large posts table using a host which enforces a timeout lower than
 * the amount of seconds required to process 25 actions.
 *
 * For more details, see: https://github.com/prospress/action-scheduler#increasing-batch-size
 */
function aslv_decrease_queue_batch_size( $batch_size ) {
	return 10;
}
add_filter( 'action_scheduler_queue_runner_batch_size', 'aslv_decrease_queue_batch_size' );

/**
 * Reduce the default number of concurrent batches to avoid database locks.
 *
 * For more details, see: https://github.com/prospress/action-scheduler#increasing-concurrent-batches
 */
function aslv_decrease_concurrent_batches( $concurrent_batches ) {
	return 2;
}
add_filter( 'action_scheduler_queue_runner_concurrent_batches', 'aslv_decrease_concurrent_batches' );
