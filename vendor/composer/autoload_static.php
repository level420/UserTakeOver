<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit3a4583dd259cb44865555d02ae4a6852
{
    public static $prefixLengthsPsr4 = array (
        's' => 
        array (
            'srag\\DIC\\' => 9,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'srag\\DIC\\' => 
        array (
            0 => __DIR__ . '/..' . '/srag/dic/src',
        ),
    );

    public static $classMap = array (
        'ActiveRecord' => __DIR__ . '/../..' . '/../../../../../../../Services/ActiveRecord/class.ActiveRecord.php',
        'ilException' => __DIR__ . '/../..' . '/../../../../../../../Services/Exceptions/classes/class.ilException.php',
        'ilMultiSelectInputGUI' => __DIR__ . '/../..' . '/../../../../../../../Services/Form/classes/class.ilMultiSelectInputGUI.php',
        'ilObjUser' => __DIR__ . '/../..' . '/../../../../../../../Services/User/classes/class.ilObjUser.php',
        'ilPluginConfigGUI' => __DIR__ . '/../..' . '/../../../../../../../Services/Component/classes/class.ilPluginConfigGUI.php',
        'ilPropertyFormGUI' => __DIR__ . '/../..' . '/../../../../../../../Services/Form/classes/class.ilPropertyFormGUI.php',
        'ilTemplate' => __DIR__ . '/../..' . '/../../../../../../../Services/UICore/classes/class.ilTemplate.php',
        'ilUIHookPluginGUI' => __DIR__ . '/../..' . '/../../../../../../../Services/UIComponent/classes/class.ilUIHookPluginGUI.php',
        'ilUserInterfaceHookPlugin' => __DIR__ . '/../..' . '/../../../../../../../Services/UIComponent/classes/class.ilUserInterfaceHookPlugin.php',
        'ilUserTakeOverConfig' => __DIR__ . '/../..' . '/classes/class.ilUserTakeOverConfig.php',
        'ilUserTakeOverConfigGUI' => __DIR__ . '/../..' . '/classes/class.ilUserTakeOverConfigGUI.php',
        'ilUserTakeOverPlugin' => __DIR__ . '/../..' . '/classes/class.ilUserTakeOverPlugin.php',
        'ilUserTakeOverUIHookGUI' => __DIR__ . '/../..' . '/classes/class.ilUserTakeOverUIHookGUI.php',
        'srag\\DIC\\AbstractDIC' => __DIR__ . '/..' . '/srag/dic/src/AbstractDIC.php',
        'srag\\DIC\\DICCache' => __DIR__ . '/..' . '/srag/dic/src/DICCache.php',
        'srag\\DIC\\DICException' => __DIR__ . '/..' . '/srag/dic/src/DICException.php',
        'srag\\DIC\\DICInterface' => __DIR__ . '/..' . '/srag/dic/src/DICInterface.php',
        'srag\\DIC\\DICStatic' => __DIR__ . '/..' . '/srag/dic/src/DICStatic.php',
        'srag\\DIC\\DICTrait' => __DIR__ . '/..' . '/srag/dic/src/DICTrait.php',
        'srag\\DIC\\LegacyDIC' => __DIR__ . '/..' . '/srag/dic/src/LegacyDIC.php',
        'srag\\DIC\\NewDIC' => __DIR__ . '/..' . '/srag/dic/src/NewDIC.php',
        'srag\\plugins\\UserTakeOver\\ilusrtoMultiSelectSearchInput2GUI' => __DIR__ . '/../..' . '/classes/Form/class.ilusrtoMultiSelectSearchInput2GUI.php',
        'usrtoHelper' => __DIR__ . '/../..' . '/classes/class.usrtoHelper.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit3a4583dd259cb44865555d02ae4a6852::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit3a4583dd259cb44865555d02ae4a6852::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit3a4583dd259cb44865555d02ae4a6852::$classMap;

        }, null, ClassLoader::class);
    }
}
