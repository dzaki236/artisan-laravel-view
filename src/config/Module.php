<?php

namespace Dzaki236\ArtisanLaravelView\config;

class Module
{
   protected $path,$view,$dir;
   
   /**
    * Get the view full path.
    *
    * @param string $view
    *
    * @return string
    */
   public function viewPath($view)
   {
      $view = str_replace('.', '/', $view) . '.blade.php';

      $path = "resources/views/{$view}";

      return $path;
   }

   /**
    * Create view directory if not exists.
    *
    * @param $path
    */
   public function createDir($path)
   {
      $dir = dirname($path);

      if (!file_exists($dir)) {
         mkdir($dir, 0777, true);
      }
   }
}
