<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit05a58bf1c0dc03d0be5b5387d75b939c
{
    public static $files = array (
        'a4a119a56e50fbb293281d9a48007e0e' => __DIR__ . '/..' . '/symfony/polyfill-php80/bootstrap.php',
        '0e6d7bf4a5811bfa5cf40c5ccd6fae6a' => __DIR__ . '/..' . '/symfony/polyfill-mbstring/bootstrap.php',
        '667aeda72477189d0494fecd327c3641' => __DIR__ . '/..' . '/symfony/var-dumper/Resources/functions/dump.php',
        'fe62ba7e10580d903cc46d808b5961a4' => __DIR__ . '/..' . '/tightenco/collect/src/Collect/Support/helpers.php',
        'caf31cc6ec7cf2241cb6f12c226c3846' => __DIR__ . '/..' . '/tightenco/collect/src/Collect/Support/alias.php',
        '0e423a14e27410a071e5d815d3ffc856' => __DIR__ . '/..' . '/larapack/dd/src/helper.php',
        '69bf4645e1b79528d6035155bebb7f2e' => __DIR__ . '/../..' . '/app/Utilities/helper.php',
    );

    public static $prefixLengthsPsr4 = array (
        'T' => 
        array (
            'Tightenco\\Collect\\' => 18,
        ),
        'S' => 
        array (
            'Symfony\\Polyfill\\Php80\\' => 23,
            'Symfony\\Polyfill\\Mbstring\\' => 26,
            'Symfony\\Component\\VarDumper\\' => 28,
        ),
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Tightenco\\Collect\\' => 
        array (
            0 => __DIR__ . '/..' . '/tightenco/collect/src/Collect',
        ),
        'Symfony\\Polyfill\\Php80\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-php80',
        ),
        'Symfony\\Polyfill\\Mbstring\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-mbstring',
        ),
        'Symfony\\Component\\VarDumper\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/var-dumper',
        ),
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $classMap = array (
        'App\\Actions\\Movie\\CreateMovieAction' => __DIR__ . '/../..' . '/app/Actions/Movie/CreateMovieAction.php',
        'App\\Actions\\Movie\\DeleteMovieAction' => __DIR__ . '/../..' . '/app/Actions/Movie/DeleteMovieAction.php',
        'App\\Actions\\Movie\\IndexMovieAction' => __DIR__ . '/../..' . '/app/Actions/Movie/IndexMovieAction.php',
        'App\\Actions\\Movie\\ShowMovieAction' => __DIR__ . '/../..' . '/app/Actions/Movie/ShowMovieAction.php',
        'App\\Actions\\Movie\\UpdateMovieAction' => __DIR__ . '/../..' . '/app/Actions/Movie/UpdateMovieAction.php',
        'App\\Actions\\Song\\CreateSongAction' => __DIR__ . '/../..' . '/app/Actions/Song/CreateSongAction.php',
        'App\\Actions\\Song\\DeleteSongAction' => __DIR__ . '/../..' . '/app/Actions/Song/DeleteSongAction.php',
        'App\\Actions\\Song\\IndexSongAction' => __DIR__ . '/../..' . '/app/Actions/Song/IndexSongAction.php',
        'App\\Actions\\Song\\ShowSongAction' => __DIR__ . '/../..' . '/app/Actions/Song/ShowSongAction.php',
        'App\\Actions\\Song\\UpdateSongAction' => __DIR__ . '/../..' . '/app/Actions/Song/UpdateSongAction.php',
        'App\\Application' => __DIR__ . '/../..' . '/app/Application.php',
        'App\\Controllers\\BaseController' => __DIR__ . '/../..' . '/app/Controllers/BaseController.php',
        'App\\Controllers\\MovieController' => __DIR__ . '/../..' . '/app/Controllers/MovieController.php',
        'App\\Controllers\\SongController' => __DIR__ . '/../..' . '/app/Controllers/SongController.php',
        'App\\Exceptions\\Handler' => __DIR__ . '/../..' . '/app/Exceptions/Handler.php',
        'App\\Exceptions\\MethodNotAllowedException' => __DIR__ . '/../..' . '/app/Exceptions/MethodNotAllowedException.php',
        'App\\Exceptions\\ModelNotFoundException' => __DIR__ . '/../..' . '/app/Exceptions/ModelNotFoundException.php',
        'App\\Exceptions\\RouteNotFoundException' => __DIR__ . '/../..' . '/app/Exceptions/RouteNotFoundException.php',
        'App\\Exceptions\\UnauthenticatedException' => __DIR__ . '/../..' . '/app/Exceptions/UnauthenticatedException.php',
        'App\\Exceptions\\ValidationException' => __DIR__ . '/../..' . '/app/Exceptions/ValidationException.php',
        'App\\Middlewares\\Authenticated' => __DIR__ . '/../..' . '/app/Middlewares/Authenticated.php',
        'App\\Models\\Movie' => __DIR__ . '/../..' . '/app/Models/Movie.php',
        'App\\Models\\Song' => __DIR__ . '/../..' . '/app/Models/Song.php',
        'App\\Models\\User' => __DIR__ . '/../..' . '/app/Models/User.php',
        'App\\Services\\Authentication\\Auth' => __DIR__ . '/../..' . '/app/Services/Authentication/Auth.php',
        'App\\Services\\Authentication\\Interfaces\\Authenticatible' => __DIR__ . '/../..' . '/app/Services/Authentication/Interfaces/Authenticatible.php',
        'App\\Services\\Config\\Config' => __DIR__ . '/../..' . '/app/Services/Config/Config.php',
        'App\\Services\\Database\\DB' => __DIR__ . '/../..' . '/app/Services/Database/DB.php',
        'App\\Services\\Model\\ModelAbstract' => __DIR__ . '/../..' . '/app/Services/Model/ModelAbstract.php',
        'App\\Services\\Pagination\\Pagination' => __DIR__ . '/../..' . '/app/Services/Pagination/Pagination.php',
        'App\\Services\\Request\\Request' => __DIR__ . '/../..' . '/app/Services/Request/Request.php',
        'App\\Services\\Request\\RequestInterface' => __DIR__ . '/../..' . '/app/Services/Request/RequestInterface.php',
        'App\\Services\\Response\\Response' => __DIR__ . '/../..' . '/app/Services/Response/Response.php',
        'App\\Services\\Response\\ResponseInterface' => __DIR__ . '/../..' . '/app/Services/Response/ResponseInterface.php',
        'App\\Services\\Router\\Router' => __DIR__ . '/../..' . '/app/Services/Router/Router.php',
        'App\\Services\\Validation\\Interfaces\\RuleInterface' => __DIR__ . '/../..' . '/app/Services/Validation/Interfaces/RuleInterface.php',
        'App\\Services\\Validation\\Interfaces\\Validator' => __DIR__ . '/../..' . '/app/Services/Validation/Interfaces/Validator.php',
        'App\\Services\\Validation\\Rules\\DateFormatRule' => __DIR__ . '/../..' . '/app/Services/Validation/Rules/DateFormatRule.php',
        'App\\Services\\Validation\\Rules\\IntegerRule' => __DIR__ . '/../..' . '/app/Services/Validation/Rules/IntegerRule.php',
        'App\\Services\\Validation\\Rules\\MaxLengthRule' => __DIR__ . '/../..' . '/app/Services/Validation/Rules/MaxLengthRule.php',
        'App\\Services\\Validation\\Rules\\MaxRule' => __DIR__ . '/../..' . '/app/Services/Validation/Rules/MaxRule.php',
        'App\\Services\\Validation\\Rules\\MinLengthRule' => __DIR__ . '/../..' . '/app/Services/Validation/Rules/MinLengthRule.php',
        'App\\Services\\Validation\\Rules\\MinRule' => __DIR__ . '/../..' . '/app/Services/Validation/Rules/MinRule.php',
        'App\\Services\\Validation\\Rules\\RequireRule' => __DIR__ . '/../..' . '/app/Services/Validation/Rules/RequireRule.php',
        'App\\Services\\Validation\\Rules\\StringRule' => __DIR__ . '/../..' . '/app/Services/Validation/Rules/StringRule.php',
        'App\\Services\\Validation\\Validator' => __DIR__ . '/../..' . '/app/Services/Validation/Validator.php',
        'Attribute' => __DIR__ . '/..' . '/symfony/polyfill-php80/Resources/stubs/Attribute.php',
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'Stringable' => __DIR__ . '/..' . '/symfony/polyfill-php80/Resources/stubs/Stringable.php',
        'Symfony\\Component\\VarDumper\\Caster\\AmqpCaster' => __DIR__ . '/..' . '/symfony/var-dumper/Caster/AmqpCaster.php',
        'Symfony\\Component\\VarDumper\\Caster\\ArgsStub' => __DIR__ . '/..' . '/symfony/var-dumper/Caster/ArgsStub.php',
        'Symfony\\Component\\VarDumper\\Caster\\Caster' => __DIR__ . '/..' . '/symfony/var-dumper/Caster/Caster.php',
        'Symfony\\Component\\VarDumper\\Caster\\ClassStub' => __DIR__ . '/..' . '/symfony/var-dumper/Caster/ClassStub.php',
        'Symfony\\Component\\VarDumper\\Caster\\ConstStub' => __DIR__ . '/..' . '/symfony/var-dumper/Caster/ConstStub.php',
        'Symfony\\Component\\VarDumper\\Caster\\CutArrayStub' => __DIR__ . '/..' . '/symfony/var-dumper/Caster/CutArrayStub.php',
        'Symfony\\Component\\VarDumper\\Caster\\CutStub' => __DIR__ . '/..' . '/symfony/var-dumper/Caster/CutStub.php',
        'Symfony\\Component\\VarDumper\\Caster\\DOMCaster' => __DIR__ . '/..' . '/symfony/var-dumper/Caster/DOMCaster.php',
        'Symfony\\Component\\VarDumper\\Caster\\DateCaster' => __DIR__ . '/..' . '/symfony/var-dumper/Caster/DateCaster.php',
        'Symfony\\Component\\VarDumper\\Caster\\DoctrineCaster' => __DIR__ . '/..' . '/symfony/var-dumper/Caster/DoctrineCaster.php',
        'Symfony\\Component\\VarDumper\\Caster\\DsCaster' => __DIR__ . '/..' . '/symfony/var-dumper/Caster/DsCaster.php',
        'Symfony\\Component\\VarDumper\\Caster\\DsPairStub' => __DIR__ . '/..' . '/symfony/var-dumper/Caster/DsPairStub.php',
        'Symfony\\Component\\VarDumper\\Caster\\EnumStub' => __DIR__ . '/..' . '/symfony/var-dumper/Caster/EnumStub.php',
        'Symfony\\Component\\VarDumper\\Caster\\ExceptionCaster' => __DIR__ . '/..' . '/symfony/var-dumper/Caster/ExceptionCaster.php',
        'Symfony\\Component\\VarDumper\\Caster\\FrameStub' => __DIR__ . '/..' . '/symfony/var-dumper/Caster/FrameStub.php',
        'Symfony\\Component\\VarDumper\\Caster\\GmpCaster' => __DIR__ . '/..' . '/symfony/var-dumper/Caster/GmpCaster.php',
        'Symfony\\Component\\VarDumper\\Caster\\ImagineCaster' => __DIR__ . '/..' . '/symfony/var-dumper/Caster/ImagineCaster.php',
        'Symfony\\Component\\VarDumper\\Caster\\ImgStub' => __DIR__ . '/..' . '/symfony/var-dumper/Caster/ImgStub.php',
        'Symfony\\Component\\VarDumper\\Caster\\IntlCaster' => __DIR__ . '/..' . '/symfony/var-dumper/Caster/IntlCaster.php',
        'Symfony\\Component\\VarDumper\\Caster\\LinkStub' => __DIR__ . '/..' . '/symfony/var-dumper/Caster/LinkStub.php',
        'Symfony\\Component\\VarDumper\\Caster\\MemcachedCaster' => __DIR__ . '/..' . '/symfony/var-dumper/Caster/MemcachedCaster.php',
        'Symfony\\Component\\VarDumper\\Caster\\PdoCaster' => __DIR__ . '/..' . '/symfony/var-dumper/Caster/PdoCaster.php',
        'Symfony\\Component\\VarDumper\\Caster\\PgSqlCaster' => __DIR__ . '/..' . '/symfony/var-dumper/Caster/PgSqlCaster.php',
        'Symfony\\Component\\VarDumper\\Caster\\ProxyManagerCaster' => __DIR__ . '/..' . '/symfony/var-dumper/Caster/ProxyManagerCaster.php',
        'Symfony\\Component\\VarDumper\\Caster\\RdKafkaCaster' => __DIR__ . '/..' . '/symfony/var-dumper/Caster/RdKafkaCaster.php',
        'Symfony\\Component\\VarDumper\\Caster\\RedisCaster' => __DIR__ . '/..' . '/symfony/var-dumper/Caster/RedisCaster.php',
        'Symfony\\Component\\VarDumper\\Caster\\ReflectionCaster' => __DIR__ . '/..' . '/symfony/var-dumper/Caster/ReflectionCaster.php',
        'Symfony\\Component\\VarDumper\\Caster\\ResourceCaster' => __DIR__ . '/..' . '/symfony/var-dumper/Caster/ResourceCaster.php',
        'Symfony\\Component\\VarDumper\\Caster\\SplCaster' => __DIR__ . '/..' . '/symfony/var-dumper/Caster/SplCaster.php',
        'Symfony\\Component\\VarDumper\\Caster\\StubCaster' => __DIR__ . '/..' . '/symfony/var-dumper/Caster/StubCaster.php',
        'Symfony\\Component\\VarDumper\\Caster\\SymfonyCaster' => __DIR__ . '/..' . '/symfony/var-dumper/Caster/SymfonyCaster.php',
        'Symfony\\Component\\VarDumper\\Caster\\TraceStub' => __DIR__ . '/..' . '/symfony/var-dumper/Caster/TraceStub.php',
        'Symfony\\Component\\VarDumper\\Caster\\UuidCaster' => __DIR__ . '/..' . '/symfony/var-dumper/Caster/UuidCaster.php',
        'Symfony\\Component\\VarDumper\\Caster\\XmlReaderCaster' => __DIR__ . '/..' . '/symfony/var-dumper/Caster/XmlReaderCaster.php',
        'Symfony\\Component\\VarDumper\\Caster\\XmlResourceCaster' => __DIR__ . '/..' . '/symfony/var-dumper/Caster/XmlResourceCaster.php',
        'Symfony\\Component\\VarDumper\\Cloner\\AbstractCloner' => __DIR__ . '/..' . '/symfony/var-dumper/Cloner/AbstractCloner.php',
        'Symfony\\Component\\VarDumper\\Cloner\\ClonerInterface' => __DIR__ . '/..' . '/symfony/var-dumper/Cloner/ClonerInterface.php',
        'Symfony\\Component\\VarDumper\\Cloner\\Cursor' => __DIR__ . '/..' . '/symfony/var-dumper/Cloner/Cursor.php',
        'Symfony\\Component\\VarDumper\\Cloner\\Data' => __DIR__ . '/..' . '/symfony/var-dumper/Cloner/Data.php',
        'Symfony\\Component\\VarDumper\\Cloner\\DumperInterface' => __DIR__ . '/..' . '/symfony/var-dumper/Cloner/DumperInterface.php',
        'Symfony\\Component\\VarDumper\\Cloner\\Stub' => __DIR__ . '/..' . '/symfony/var-dumper/Cloner/Stub.php',
        'Symfony\\Component\\VarDumper\\Cloner\\VarCloner' => __DIR__ . '/..' . '/symfony/var-dumper/Cloner/VarCloner.php',
        'Symfony\\Component\\VarDumper\\Command\\Descriptor\\CliDescriptor' => __DIR__ . '/..' . '/symfony/var-dumper/Command/Descriptor/CliDescriptor.php',
        'Symfony\\Component\\VarDumper\\Command\\Descriptor\\DumpDescriptorInterface' => __DIR__ . '/..' . '/symfony/var-dumper/Command/Descriptor/DumpDescriptorInterface.php',
        'Symfony\\Component\\VarDumper\\Command\\Descriptor\\HtmlDescriptor' => __DIR__ . '/..' . '/symfony/var-dumper/Command/Descriptor/HtmlDescriptor.php',
        'Symfony\\Component\\VarDumper\\Command\\ServerDumpCommand' => __DIR__ . '/..' . '/symfony/var-dumper/Command/ServerDumpCommand.php',
        'Symfony\\Component\\VarDumper\\Dumper\\AbstractDumper' => __DIR__ . '/..' . '/symfony/var-dumper/Dumper/AbstractDumper.php',
        'Symfony\\Component\\VarDumper\\Dumper\\CliDumper' => __DIR__ . '/..' . '/symfony/var-dumper/Dumper/CliDumper.php',
        'Symfony\\Component\\VarDumper\\Dumper\\ContextProvider\\CliContextProvider' => __DIR__ . '/..' . '/symfony/var-dumper/Dumper/ContextProvider/CliContextProvider.php',
        'Symfony\\Component\\VarDumper\\Dumper\\ContextProvider\\ContextProviderInterface' => __DIR__ . '/..' . '/symfony/var-dumper/Dumper/ContextProvider/ContextProviderInterface.php',
        'Symfony\\Component\\VarDumper\\Dumper\\ContextProvider\\RequestContextProvider' => __DIR__ . '/..' . '/symfony/var-dumper/Dumper/ContextProvider/RequestContextProvider.php',
        'Symfony\\Component\\VarDumper\\Dumper\\ContextProvider\\SourceContextProvider' => __DIR__ . '/..' . '/symfony/var-dumper/Dumper/ContextProvider/SourceContextProvider.php',
        'Symfony\\Component\\VarDumper\\Dumper\\ContextualizedDumper' => __DIR__ . '/..' . '/symfony/var-dumper/Dumper/ContextualizedDumper.php',
        'Symfony\\Component\\VarDumper\\Dumper\\DataDumperInterface' => __DIR__ . '/..' . '/symfony/var-dumper/Dumper/DataDumperInterface.php',
        'Symfony\\Component\\VarDumper\\Dumper\\HtmlDumper' => __DIR__ . '/..' . '/symfony/var-dumper/Dumper/HtmlDumper.php',
        'Symfony\\Component\\VarDumper\\Dumper\\ServerDumper' => __DIR__ . '/..' . '/symfony/var-dumper/Dumper/ServerDumper.php',
        'Symfony\\Component\\VarDumper\\Exception\\ThrowingCasterException' => __DIR__ . '/..' . '/symfony/var-dumper/Exception/ThrowingCasterException.php',
        'Symfony\\Component\\VarDumper\\Server\\Connection' => __DIR__ . '/..' . '/symfony/var-dumper/Server/Connection.php',
        'Symfony\\Component\\VarDumper\\Server\\DumpServer' => __DIR__ . '/..' . '/symfony/var-dumper/Server/DumpServer.php',
        'Symfony\\Component\\VarDumper\\Test\\VarDumperTestTrait' => __DIR__ . '/..' . '/symfony/var-dumper/Test/VarDumperTestTrait.php',
        'Symfony\\Component\\VarDumper\\VarDumper' => __DIR__ . '/..' . '/symfony/var-dumper/VarDumper.php',
        'Symfony\\Polyfill\\Mbstring\\Mbstring' => __DIR__ . '/..' . '/symfony/polyfill-mbstring/Mbstring.php',
        'Symfony\\Polyfill\\Php80\\Php80' => __DIR__ . '/..' . '/symfony/polyfill-php80/Php80.php',
        'Tightenco\\Collect\\Contracts\\Support\\Arrayable' => __DIR__ . '/..' . '/tightenco/collect/src/Collect/Contracts/Support/Arrayable.php',
        'Tightenco\\Collect\\Contracts\\Support\\Htmlable' => __DIR__ . '/..' . '/tightenco/collect/src/Collect/Contracts/Support/Htmlable.php',
        'Tightenco\\Collect\\Contracts\\Support\\Jsonable' => __DIR__ . '/..' . '/tightenco/collect/src/Collect/Contracts/Support/Jsonable.php',
        'Tightenco\\Collect\\Support\\Arr' => __DIR__ . '/..' . '/tightenco/collect/src/Collect/Support/Arr.php',
        'Tightenco\\Collect\\Support\\Collection' => __DIR__ . '/..' . '/tightenco/collect/src/Collect/Support/Collection.php',
        'Tightenco\\Collect\\Support\\Enumerable' => __DIR__ . '/..' . '/tightenco/collect/src/Collect/Support/Enumerable.php',
        'Tightenco\\Collect\\Support\\HigherOrderCollectionProxy' => __DIR__ . '/..' . '/tightenco/collect/src/Collect/Support/HigherOrderCollectionProxy.php',
        'Tightenco\\Collect\\Support\\HigherOrderWhenProxy' => __DIR__ . '/..' . '/tightenco/collect/src/Collect/Support/HigherOrderWhenProxy.php',
        'Tightenco\\Collect\\Support\\LazyCollection' => __DIR__ . '/..' . '/tightenco/collect/src/Collect/Support/LazyCollection.php',
        'Tightenco\\Collect\\Support\\Traits\\EnumeratesValues' => __DIR__ . '/..' . '/tightenco/collect/src/Collect/Support/Traits/EnumeratesValues.php',
        'Tightenco\\Collect\\Support\\Traits\\Macroable' => __DIR__ . '/..' . '/tightenco/collect/src/Collect/Support/Traits/Macroable.php',
        'Tightenco\\Collect\\Support\\Traits\\Tappable' => __DIR__ . '/..' . '/tightenco/collect/src/Collect/Support/Traits/Tappable.php',
        'UnhandledMatchError' => __DIR__ . '/..' . '/symfony/polyfill-php80/Resources/stubs/UnhandledMatchError.php',
        'ValueError' => __DIR__ . '/..' . '/symfony/polyfill-php80/Resources/stubs/ValueError.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit05a58bf1c0dc03d0be5b5387d75b939c::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit05a58bf1c0dc03d0be5b5387d75b939c::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit05a58bf1c0dc03d0be5b5387d75b939c::$classMap;

        }, null, ClassLoader::class);
    }
}
