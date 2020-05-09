<! DOCTYPE html>
<html>
<head>
<meta charset = "utf-8" />
<title>
</ title>
<link href = "https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" rel = "stylesheet">
</ head>
<body>
<div class = "container">
<div class = "row">
<div class = "col-md-3"> </ div>
<div class = "col-md-6">

<div class = "page-header">
<h2> Initialize <small> Account Verification </ small> </ h2>
</ div>
<div>
<? php if (! @ is_writable (ROOT.'config / ') OR! @is_writable (ROOT.'cache /')):?>
<div class = "alert alert-danger" role = "alert"> Please set the directory <code> config / </ code> and <code> cache / </ code> to read and write </ div>
<? php endif;?>
<h4> Environmental requirements: PHP:> <code> 5.6 + </ code> and enable <code> curl </ code> support </ h4>
<h4> Click the link: <a href="<?php echo $authorize_url;?> "> Bind Account </a> </ h4>
</ div>
<? php if (! empty ($ error)):?>
<div class = "alert alert-danger" role = "alert"> <? php echo $ error;?> </ div>
<? php endif;?>
</ div>
</ div>
</ div>
</ body>
</ html>
