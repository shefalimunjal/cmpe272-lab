
<table class="table table-striped table-bordered table-condensed">
    <thead>
        <tr>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Email</th>
            <th>Username</th>
            <th>Home Address</th>
            <th>Home Phone</th>
            <th>Cell Phone</th>
        </tr>
    </thead>

    <tbody>
    	<?php
			foreach ($users as &$user) {
    			echo "<tr>
            			<td>".$user->first_name."</td>
            			<td>".$user->last_name."</td>
            			<td>".$user->email."</td>
            			<td>".$user->user_name."</td>
            			<td>".$user->home_address."</td>
            			<td>".$user->home_phone."</td>
            			<td>".$user->cell_phone."</td>
        			</tr>";
			}
		?>
    </tbody>
</table>