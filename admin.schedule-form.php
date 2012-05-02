<form method="post" class="hmbkp-form">

	<input type="hidden" name="hmbkp_schedule_id" value="<?php echo $schedule->get_id(); ?>" />

	<fieldset class="hmbkp-edit-schedule-form">

		<legend><?php _e( 'Schedule Settings', 'hmbkp' ); ?></legend>

    	<label>

    		<?php _e( 'Backup', 'hmbkp' ); ?>

    		<select name="hmbkp_schedule_type" id="hmbkp_schedule_type">
    			<option<?php selected( $schedule->get_type(), 'complete'); ?> value="complete"><?php _e( 'Both Database &amp; files', 'hmbkp' ); ?></option>
    			<option<?php selected( $schedule->get_type(), 'file'); ?> value="file"><?php _e( 'Files only', 'hmbkp' ); ?></option>
    			<option<?php selected( $schedule->get_type(), 'database'); ?> value="database"><?php _e( 'Database only', 'hmbkp' ); ?></option>
    		</select>

    	</label>

    	<label>

    		<?php _e( 'Schedule', 'hmbkp' ); ?>

    		<select name="hmbkp_schedule_reoccurrence" id="hmbkp_schedule_reoccurrence">

<?php foreach( wp_get_schedules() as $cron_schedule => $cron_details ) : ?>

    		    <option<?php selected( $schedule->get_reoccurrence(), $cron_schedule ); ?> value="<?php echo $cron_schedule; ?>"><?php echo $cron_details['display']; ?></option>

<?php endforeach; ?>

    		</select>

    	</label>

    	<label>

    		<?php _e( 'Number of backups to keep', 'hmbkp' ); ?>

    		<input type="number" name="hmbkp_schedule_max_backups" min="1" step="1" value="<?php echo $schedule->get_max_backups(); ?>" />

    	</label>

    	<p class="submit">

		    <button type="submit" class="button-primary"><?php _e( 'Update', 'hmbkp' ); ?></button>

		</p>

	</fieldset>

</form>