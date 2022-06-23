
<h1 align="center" style="padding-top: 10%;">HELLO, <br> 
	<?php echo strtoupper($this->session->userdata('username')); ?>! <br><br>
<center>
	<table width="50%">
		<tr>
			<td >IP</td>
			<td>:</td>
			<td > <?php echo $this->session->userdata('ip') ?></td>
		</tr>
		<tr>
			<td>MAC</td>
			<td>:</td>
			<td> <?php echo $this->session->userdata('mac') ?></td>
		</tr>
		<tr>
			<td>STATUS</td>
			<td>:</td>
			<td> <?php echo $this->session->userdata('status') ?></td>
		</tr>
	</table>

</h1>