<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Dataminers - HRO</title>
  <meta name="description" content="Project HRO">
  <meta name="keywords" content="Project, Dataminers">
  <link href="css/style.css" rel="stylesheet" type="text/css">
</head>
<body>

<?php

// ----------------------------------------------------------------------------------------------------
// - Display Errors
// ----------------------------------------------------------------------------------------------------
ini_set('display_errors', 'On');
ini_set('html_errors', 0);

// ----------------------------------------------------------------------------------------------------
// - Error Reporting
// ----------------------------------------------------------------------------------------------------
error_reporting(-1);

// ----------------------------------------------------------------------------------------------------
// - Shutdown Handler
// ----------------------------------------------------------------------------------------------------
function ShutdownHandler()
{
    if(@is_array($error = @error_get_last()))
    {
        return(@call_user_func_array('ErrorHandler', $error));
    };

    return(TRUE);
};

register_shutdown_function('ShutdownHandler');

// ----------------------------------------------------------------------------------------------------
// - Error Handler
// ----------------------------------------------------------------------------------------------------
function ErrorHandler($type, $message, $file, $line)
{
    $_ERRORS = Array(
        0x0001 => 'E_ERROR',
        0x0002 => 'E_WARNING',
        0x0004 => 'E_PARSE',
        0x0008 => 'E_NOTICE',
        0x0010 => 'E_CORE_ERROR',
        0x0020 => 'E_CORE_WARNING',
        0x0040 => 'E_COMPILE_ERROR',
        0x0080 => 'E_COMPILE_WARNING',
        0x0100 => 'E_USER_ERROR',
        0x0200 => 'E_USER_WARNING',
        0x0400 => 'E_USER_NOTICE',
        0x0800 => 'E_STRICT',
        0x1000 => 'E_RECOVERABLE_ERROR',
        0x2000 => 'E_DEPRECATED',
        0x4000 => 'E_USER_DEPRECATED'
    );

    if(!@is_string($name = @array_search($type, @array_flip($_ERRORS))))
    {
        $name = 'E_UNKNOWN';
    };

    return(print(@sprintf("%s Error in file \xBB%s\xAB at line %d: %s\n", $name, @basename($file), $line, $message)));
};

$old_error_handler = set_error_handler("ErrorHandler");

// other php code

?>

<div class="main">
<div class="page">
<div class="header">
<div class="header-img">
<h1>Dataminers</h1>
<p><i>Mining for results.</i></p>
</div>

<div class="menu">

<ul>
  <li><a href="index.php">Home</a></li>
  <li><a href="product.php">Product</a></li>
  <li><a href="onderzoeksverslag.php">Onderzoeks verslag</a></li>
  <li><a href="overons.php">Over ons</a></li>
  <li><a href="contact.php">Contact</a></li>
</ul>
</div>
</div>
<div class="content">
<div class="left-panel">
<div class="left-panel-in">
<h2 class="title">Welkom op onze website</h2>
<p>&nbsp;</p>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse
id purus nisi, in rutrum nunc. Donec non orci eros, ut sollicitudin
risus. Vivamus at lacinia enim. Nam tincidunt nisl eget erat
sollicitudin vitae accumsan felis eleifend. Phasellus eu ante non magna
egestas tincidunt ut varius lorem. Nunc ornare feugiat ligula, ut
tincidunt enim porta nec. Curabitur interdum, ante non vehicula semper,
quam arcu condimentum velit, at elementum justo nisi eget urna. Fusce
vulputate malesuada euismod. Morbi condimentum tincidunt molestie. In
vulputate neque et augue posuere fringilla. Nunc nec tempus nibh.
Integer interdum suscipit urna, nec interdum nisi aliquet et. Quisque
augue tortor, porta et malesuada dapibus, tempor ut mauris. Nullam
dictum posuere ante at tincidunt. Praesent sed lorem enim, vitae
scelerisque dui. Etiam ac purus est, et accumsan sem. In hac habitasse
platea dictumst. Maecenas a dui leo, sit amet dignissim nisi. </p>
<p>&nbsp;</p>
Nam sit amet arcu nisi. Proin sagittis, nisi sed sollicitudin
elementum, urna justo porta enim, nec semper massa nunc non eros.
Nullam molestie, quam quis egestas porta, ligula elit laoreet ante, a
convallis lectus sem volutpat urna. Donec congue purus placerat quam
sodales quis suscipit leo ullamcorper. Quisque vulputate metus vel
risus aliquam dictum. Pellentesque habitant morbi tristique senectus et
netus et malesuada fames ac turpis egestas. Vestibulum eget justo et
orci viverra pulvinar eu non magna. Nam vehicula convallis erat
suscipit laoreet. Phasellus at nisl ut diam aliquam ultricies non vel
quam. Donec mattis porttitor ante lacinia dapibus. Cras vitae massa
sem, ac pharetra felis. Praesent tincidunt interdum neque, et semper
nulla suscipit a. Nullam ultricies varius orci, nec pharetra quam
accumsan id. Donec vel nulla quis sem aliquet suscipit. Aenean at
lectus mauris, non tristique dui. Curabitur eu diam mi, eget blandit
dolor.
<p>&nbsp;</p>
<p>&nbsp;</p>
<h2 class="title">Recent articles<br>
</h2>
<p>&nbsp;</p>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse
id purus nisi, in rutrum nunc. Donec non orci eros, ut sollicitudin
risus. Vivamus at lacinia enim. Nam tincidunt nisl eget erat
sollicitudin vitae accumsan felis eleifend. Phasellus eu ante non magna
egestas tincidunt ut varius lorem. Nunc ornare feugiat ligula, ut
tincidunt enim porta nec. Curabitur interdum, ante non vehicula semper,
quam arcu condimentum velit, at elementum justo nisi eget urna. Fusce
vulputate malesuada euismod. Morbi condimentum tincidunt molestie. In
vulputate neque et augue posuere fringilla. Nunc nec tempus nibh.
Integer interdum suscipit urna, nec interdum nisi aliquet et. Quisque
augue tortor, porta et malesuada dapibus, tempor ut mauris. Nullam
dictum posuere ante at tincidunt. Praesent sed lorem enim, vitae
scelerisque dui. Etiam ac purus est, et accumsan sem. In hac habitasse
platea dictumst. Maecenas a dui leo, sit amet dignissim nisi.<br>
<br>
</p>
</div>
</div>
<div class="right-panel">
<div class="right-panel-in">

<h3>Categories</h3>
<ul>
  <li><a href="#">Link item 1<br>
    </a></li>
  <li><a href="index.html#">Link item 2<br>
    </a></li>
  <li><a href="index.html#">Link item 3<br>
    </a></li>
  <li><a href="index.html#">Link item 4<br>
    </a></li>
  <li><a href="index.html#">Link item 5<br>
    </a></li>
  <li><a href="index.html#">Link item 6<br>
    </a></li>
</ul>
<h3>Blogroll</h3>
<ul>
  <li><a href="#">Blogroll link 1<br>
    </a></li>
  <li><a href="index.html#">Blogroll link 2<br>
    </a></li>
  <li><a href="index.html#">Blogroll link 3<br>
    </a></li>
  <li><a href="index.html#">Blogroll link 4<br>
    </a></li>
  <li><a href="index.html#">Blogroll link 5<br>
    </a></li>
  <li><a href="index.html#">Blogroll link 6<br>
    </a></li>
</ul>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
</div>
</div>
</div>
<div class="footer">
<p>Copyright &copyDataminers 2014</p>
</div>
</div>
</div>



</body></html>