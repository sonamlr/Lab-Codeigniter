<?php echo form_open("Admin/Add");?>
<table>
	<tr>
		<td>
		<label>Username</label><input type="text" name="username">
		<?php echo form_error('username', '<div class="error">', '</div>'); ?>
		</td>
	</tr>
	<tr>
		<td>
		<label>Password</label><input type="password" name="password">
		<?php echo form_error('password', '<div class="error">', '</div>'); ?>
		</td>
	</tr>

	<tr>
	<td><input type="submit" value="submit"></td>
	</tr>
</table>
</form>
