<?php

	session_start();

	session_destroy();
	$_SESSION = null;

	header("Location: ../dice/login");