<?php
$conn = pg_connect("postgres://sqdepjrdqabiut:8230d4e24848fde1e8a75f668bf04c66564339919f0dc258b3b07ff9f2fdf10a@ec2-52-73-184-24.compute-1.amazonaws.com:5432/d5g9mb5kdb8l79");
	echo 'Connected Successfully!!!';
	if(!$conn)
	{
		die("Could not connect to database");
    }
    ?>