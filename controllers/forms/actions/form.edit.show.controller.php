<?php

require 'models/form.edit.model.php';
$id = $_GET['showId'];
$show = getshowbyId($id);

require 'views/forms/form.create.show.view.php';
