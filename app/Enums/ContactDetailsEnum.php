<?php
namespace App\Enums;

class ContactDetailsEnum
{
 
    public const instagram = 'https://www.instagram.com/neondonetsk/';
    public const telegram = 'https://t.me/neondn';
    public const vkontakte = 'ChangeOrder';
    public const telephone = '+7494-555-55-55';
    public static function getConstants(): array
    {
        $reflectionClass = new \ReflectionClass(self::class);
        return $reflectionClass->getConstants();
    }
}
?>