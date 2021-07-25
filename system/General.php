<?php
// Secure HTML Input
function escape($string) {
    return htmlentities($string, ENT_QUOTES, 'UTF-8');
}

// Include Scripts From Root Path
function import($path) {
	return require_once($_SERVER['DOCUMENT_ROOT'] ."/".Config::get("server/appName")."/{$path}");
}

// Path To Root Directory
function root($path) {
	return $_SERVER['DOCUMENT_ROOT'] . "/".Config::get("server/appName")."/{$path}";
}

// absulot path used in links
function linkto($path) {
	echo "/".Config::get("server/appName")."/{$path}";
}

//Print Success Message Style
function Success ($message) {
	echo "<div class=\"alert alert-success alert-dismissible\" role=\"alert\">
			<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
			<span aria-hidden=\"true\">&times;</span>
			</button>
			{$message}
		</div>" ;
}

//Print Error Message Style
function Danger($message) {
	echo "<div class=\"alert alert-danger alert-dismissible show fade in\" role=\"alert\">
			<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
			<span aria-hidden=\"true\">&times;</span>
			</button>
			{$message}
		</div>" ;
}



function formatBody($body, string $format)
{
    $mime = "application/{$format}";
    $this->setContentType($mime);
    $this->bodyFormat = $format;

    // Nothing much to do for a string...
    if (! is_string($body))
    {
        /**
         * @var Format $config
         */
        $config    = config(Format::class);
        $formatter = $config->getFormatter($mime);

        $body = $formatter->format($body);
    }

    return $body;
}
function getJSON()
{
    $body = $this->body;

    if ($this->bodyFormat !== 'json')
    {
        /**
         * @var Format $config
         */
        $config    = config(Format::class);
        $formatter = $config->getFormatter('application/json');

        $body = $formatter->format($body);
    }

    return $body ?: null;
}

//--------------------------------------------------------------------

/**
 * Converts $body into XML, and sets the correct Content-Type.
 *
 * @param array|string $body
 *
 * @return $this
 */
function setXML($body)
{
    $this->body = $this->formatBody($body, 'xml');

    return $this;
}
function setJSON($body)
{
    $this->body = $this->formatBody($body, 'json');

    return $this;
}

//--------------------------------------------------------------------


function getXML()
{
    $body = $this->body;

    if ($this->bodyFormat !== 'xml')
    {
        /**
         * @var Format $config
         */
        $config    = config(Format::class);
        $formatter = $config->getFormatter('application/xml');

        $body = $formatter->format($body);
    }

    return $body;
}


?>