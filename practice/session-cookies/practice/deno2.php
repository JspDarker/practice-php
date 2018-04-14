<?php
session_start();
echo $_SESSION['one']['phone'];
session_destroy();