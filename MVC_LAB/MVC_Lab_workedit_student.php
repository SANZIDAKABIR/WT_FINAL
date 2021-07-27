</head>
	<body>
		<h5><?php echo $err_db;?></h5>
        <h1 align="center">Edit Student</h1>
        <form action="" method="post">
		<table align="center">
@@ -22,8 +23,7 @@
				</td>
			</tr>
			<tr>
				<td>ID:
				<input type="text" value="<?php echo $s["id"];?>"   placeholder="ID" disabled>
				<td>
                <input type="hidden" name="id" value="<?php echo $s["id"];?>">
				</td>

@@ -60,7 +60,7 @@
			</tr>
			<tr>
				<td>
					<input type="submit" name="edit_std" value="Edit">
					<input type="submit" name="edit_std" value="Edit Student">
				</td>
			</tr>