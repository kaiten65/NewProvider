<?php
namespace SocialiteProviders\MicrosoftSharePoint;

use SocialiteProviders\Manager\SocialiteWasCalled;

class MicrosoftSharePointExtendSocialite
{
    /**
     * Execute the provider.
     */
    public function handle(SocialiteWasCalled $socialiteWasCalled)
    {
        $socialiteWasCalled->extendSocialite('microsoftsharepoint', __NAMESPACE__.'\Provider');
    }
}
