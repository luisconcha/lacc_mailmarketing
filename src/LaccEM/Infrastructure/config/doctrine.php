<?php
/**
 * File: doctrine.php
 * Created by: Luis Alberto Concha Curay.
 * Email: luisconchacuray@gmail.com
 * Language: PHP
 * Date: 27/02/17
 * Time: 13:31
 * Project: lacc_php7
 * Copyright: 2017
 */

\Doctrine\Common\Annotations\AnnotationRegistry::registerLoader(function ($className){
    return class_exists($className);
});