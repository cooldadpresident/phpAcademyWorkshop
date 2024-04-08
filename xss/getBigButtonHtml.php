<?php
function getBigButton($url, $text){
    // validate input 
    if (!filter_var($url, FILTER_VALIDATE_URL)){
        throw new InvalidArgumentException("Invalid URL");
    }
    
    // escape user input html context
    $escapedText = htmlspecialchars($text, ENT_QUOTES, 'UTF-8');

    // build button with escaped text
    $html = "a href=$url' class=big-button'> $escapedText</a>";
    
    return $html;
}
$url = "https://www.exampleefsafd.com";
$text = "Click Here";

$buttonHtml = getBigButton($url, $text);

echo $buttonHtml;
?>
