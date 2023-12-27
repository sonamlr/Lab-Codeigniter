<?php echo form_open("Admin/Edit/".$this->uri->segment(3));?>
<table>
	<tr>
		<td>
		<input type="hidden" name="id" value="<?php echo $id;?>">
		<label>Username</label><input type="text" name="username" value="<?php echo $username;?>">
		<?php echo form_error('username', '<div class="error">', '</div>'); ?>
		</td>
	</tr>
	<tr>
		<td>
		<label>Password</label><input type="password" name="password" value="<?php echo $password;?>">
		<?php echo form_error('password', '<div class="error">', '</div>'); ?>
		</td>
	</tr>
	

	<tr>
	<td><input type="submit" value="submit"></td>
	</tr>
</table>
</form