<?php

require __DIR__ . "/../src/Hello.php";

use Com\Iesebre\Dam2\paolodavila\helloWorldComposer\Hello;

    /**
 * Created by PhpStorm.
 * User: pdavila
 * Date: 6/10/15
 * Time: 19:32
 */

$greetings = new Hello();

$greetings->sayHello();