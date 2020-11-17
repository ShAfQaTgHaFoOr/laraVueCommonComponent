<?php



if (!function_exists('isActiveRoute')) {

  function isActiveRoute($route, $output = "active")
  {
    if (Route::currentRouteName() == $route) return $output;
  }

}

if (!function_exists('areActiveRoutes')) {

  function areActiveRoutes(Array $routes, $output = "active")
  {
    foreach ($routes as $route)
    {
      if (Route::currentRouteName() == $route) return $output;
    }

  }
}


if (!function_exists('PublicSiteAreActiveRoutes')) {

  function PublicSiteAreActiveRoutes(Array $routes, $output = "current-menu-item")
  {
    foreach ($routes as $route)
    {
      if (Route::currentRouteName() == $route) return $output;
    }

  }
}


function ReferenceDecrypt($string) {
   return Crypt::decryptString($string);
}

function ReferenceEncrypt($string) {
  return  Crypt::encryptString($string);

}

function EncryptThis ($pure_string) {
    return    convert_uuencode($pure_string);
}

function DecryptThis($eky) {
    return convert_uudecode($eky);
}

