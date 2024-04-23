<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Test</title>
    <?php echo app('Illuminate\Foundation\Vite')('resources/css/app.css'); ?>
</head>
<body>
	<div id="root"></div>
    <?php echo app('Illuminate\Foundation\Vite')->reactRefresh(); ?>
    <?php echo app('Illuminate\Foundation\Vite')('resources/js/App.jsx'); ?>
</body>
</html>


<?php /**PATH /home/bibek/InitialLaravelReactSetUp/resources/views/react.blade.php ENDPATH**/ ?>