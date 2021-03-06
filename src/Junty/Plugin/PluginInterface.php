<?php
/**
 * Junty
 *
 * @author Gabriel Jacinto aka. GabrielJMJ <gamjj74@hotmail.com>
 * @license MIT License
 */
 
namespace Junty\Plugin;

interface PluginInterface
{
    public function getName() : string;

    public function getCallback() : callable;
}