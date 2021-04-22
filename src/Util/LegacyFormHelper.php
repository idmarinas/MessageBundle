<?php

namespace FOS\MessageBundle\Util;

/**
 * @internal
 *
 * @see https://github.com/FriendsOfSymfony/FOSUserBundle/blob/master/Util/LegacyFormHelper.php
 *
 * @author Titouan Galopin <galopintitouan@gmail.com>
 */
final class LegacyFormHelper
{
    private static $map = [
        'FOS\UserBundle\Form\Type\UsernameFormType'                     => 'fos_user_username',
        \FOS\MessageBundle\FormType\RecipientsType::class               => 'recipients_selector',
        \Symfony\Component\Form\Extension\Core\Type\EmailType::class    => 'email',
        \Symfony\Component\Form\Extension\Core\Type\PasswordType::class => 'password',
        \Symfony\Component\Form\Extension\Core\Type\RepeatedType::class => 'repeated',
        \Symfony\Component\Form\Extension\Core\Type\TextType::class     => 'text',
        \Symfony\Component\Form\Extension\Core\Type\TextareaType::class => 'textarea',
    ];

    private function __construct()
    {
    }

    public static function getType($class)
    {
        if ( ! self::isLegacy())
        {
            return $class;
        }

        if ( ! isset(self::$map[$class]))
        {
            throw new \InvalidArgumentException(\sprintf('Form type with class "%s" can not be found. Please check for typos or add it to the map in LegacyFormHelper', $class));
        }

        return self::$map[$class];
    }

    public static function isLegacy()
    {
        return ! \method_exists(\Symfony\Component\Form\AbstractType::class, 'getBlockPrefix');
    }
}
