<?php
namespace Sasedev\MpdfBundle;

use Sasedev\MpdfBundle\DependencyInjection\SasedevMpdfExtension;
use Symfony\Component\DependencyInjection\Extension\ExtensionInterface;
use Symfony\Component\HttpKernel\Bundle\Bundle;

/**
 *
 * Sasedev\MpdfBundle\SasedevMpdfBundle
 *
 *
 * @author sasedev <sinus@sasedev.net>
 *         Created on: 1 juin 2020 @ 22:58:16
 */
class SasedevMpdfBundle extends Bundle
{

    /**
     *
     * {@inheritdoc}
     * @see \Symfony\Component\HttpKernel\Bundle\Bundle::getContainerExtension()
     */
    public function getContainerExtension(): ?ExtensionInterface
    {

        return new SasedevMpdfExtension();

    }

}
