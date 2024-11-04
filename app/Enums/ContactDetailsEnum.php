<?php
namespace App\Enums;

class ContactDetailsEnum
{
 
    public const instagram = 'https://www.instagram.com/neondonetsk/';
    public const telegram = 'https://t.me/neondn';
    public const vkontakte = 'https://vk.com/neondn';
    public const telephone = '+7 949 801 88 41';
    public const adress = 'г. Донецк, пр.Ильича 15А';
    public static function getConstants(): array
    {
        $reflectionClass = new \ReflectionClass(self::class);
        return $reflectionClass->getConstants();
    }
}
?>