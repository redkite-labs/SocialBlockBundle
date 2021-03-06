<?php
/*
 * This file is part of the SocialBlockBundle and it is distributed
 * under the MIT LICENSE. To use this application you must leave intact this copyright 
 * notice.
 *
 * Copyright (c) RedKiteCms <info@redkite-labs.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * For extra documentation and help please visit http://www.redkite-labs.com
 * 
 * @license    MIT LICENSE
 * 
 */

namespace RedKiteCms\Block\SocialBlockBundle\Core\Sdk;

use Symfony\Component\HttpKernel\Event\FilterResponseEvent;

/**
 * Implements the object that renders the Twitter Sdk
 *
 * @author RedKite Labs
 */
class SdkTwitter extends SdkBase
{
    /**
     * {@inheritdoc}
     */
    public function render(FilterResponseEvent $event)
    {        
        $response = $event->getResponse();
        $content = $response->getContent();
        $result = (preg_match('/class="twitter\-[^"]+"/s', $content)) ? $this->templating->render('SocialBlockBundle:SDK:Twitter/initialize.html.twig') : "";
        
        return $result;
    }
}
