<?php
 
namespace Aspose\Cloud;

use Aspose\Cloud\Common\AsposeApp;
use Aspose\Cloud\Common\Product;
use Aspose\Cloud\Common\Utils;
use Aspose\Cloud\Exception\AsposeCloudException as Exception;
 
class Cloud {    
    private $config;
    private $classPath;
		
    public function __construct($config) 
    {
        $this->config = $config;
        Product::$baseProductUri = $this->config['baseUri'];
        AsposeApp::$appSID = $this->config['appSID']; 
        AsposeApp::$appKey = $this->config['appKey'];
    }

    public function setOutputLocation($outputLocation) 
    {
        AsposeApp::$outPutLocation = $outputLocation;		
    }
		
    public function get($moduleName, $className, $fileName)
    {			
        if($moduleName == '')
            throw new Exception('Module name not specified');
        if($className == '')
            throw new Exception('Class name not specified');

        $classPath = "\Aspose\Cloud\\$moduleName\\$className"; 
        if(class_exists($classPath))
            if($className == 'ChartEditor' || $className == 'Worksheet')
                return new $classPath($fileName, '');	
            else
                return new $classPath($fileName);
        else
            throw new Exception('Module or Class Name is not found');	
    }
}