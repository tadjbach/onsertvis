<?php

namespace SE\PlatformBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class SEPlatformBundle extends Bundle
{
  public function getParent()
  {
    return 'FOSUserBundle';
  }
}
