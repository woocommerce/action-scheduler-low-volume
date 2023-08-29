> IMPORTANT: This code is made available in the hope that it will be useful, but without any warranty. See the GNU General Public License for more details. Automattic or WooCommerce support services are also not available to assist with the use of this code.

### Action Scheduler Low Volume

Reduce the [batch size](https://github.com/prospress/action-scheduler#increasing-batch-size) and [concurrency](https://github.com/prospress/action-scheduler#increasing-concurrent-batches) for Action Scheduler.

Occasionally required by sites with a large posts table running on a host which enforces a timeout lower than the amount of seconds required to process 25 actions.
