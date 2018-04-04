<?php

namespace Espace\UserBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class EspaceUserBundle extends Bundle
{


	public function getParent()
  {
    return 'FOSUserBundle';
  }
}
