<?php
namespace Neos\Flow\Tests\Unit\ObjectManagement\Proxy;

/*
 * This file is part of the Neos.Flow package.
 *
 * (c) Contributors of the Neos Project - www.neos.io
 *
 * This package is Open Source Software. For the full copyright and license
 * information, please view the LICENSE file which was distributed with this
 * source code.
 */

use Neos\Flow\Annotations as Flow;
use Neos\Flow\ObjectManagement\Proxy\ProxyMethod;
use Neos\Flow\Reflection\ReflectionService;

class ProxyMethodTest extends \Neos\Flow\Tests\UnitTestCase
{
    /**
     * @test
     */
    public function buildMethodDocumentationAddsAllExpectedAnnotations()
    {
        $validateFoo1 = new Flow\Validate(['value' => 'foo1', 'type' => 'bar1']);
        $validateFoo2 = new Flow\Validate(['value' => 'foo2', 'type' => 'bar2']);

        $mockReflectionService = $this->getMockBuilder(ReflectionService::class)->disableOriginalConstructor()->getMock();
        $mockReflectionService->expects($this->any())->method('hasMethod')->will($this->returnValue(true));
        $mockReflectionService->expects($this->any())->method('getMethodTagsValues')->with('My\Class\Name', 'myMethod')->will($this->returnValue([
            'param' => ['string $name']
        ]));
        $mockReflectionService->expects($this->any())->method('getMethodAnnotations')->with('My\Class\Name', 'myMethod')->will($this->returnValue([
            $validateFoo1,
            $validateFoo2,
            new Flow\SkipCsrfProtection([])
        ]));

        $mockProxyMethod = $this->getAccessibleMock(ProxyMethod::class, ['dummy'], [], '', false);
        $mockProxyMethod->injectReflectionService($mockReflectionService);
        $methodDocumentation = $mockProxyMethod->_call('buildMethodDocumentation', 'My\Class\Name', 'myMethod');

        $expected =
            '    /**' . chr(10) .
            '     * Autogenerated Proxy Method' . chr(10) .
            '     * @param string $name' . chr(10) .
            '     * @\Neos\Flow\Annotations\Validate(type="bar1", argumentName="foo1")' . chr(10) .
            '     * @\Neos\Flow\Annotations\Validate(type="bar2", argumentName="foo2")' . chr(10) .
            '     * @\Neos\Flow\Annotations\SkipCsrfProtection' . chr(10) .
            '     */' . chr(10);
        $this->assertEquals($expected, $methodDocumentation);
    }

    /**
     * @test
     */
    public function buildMethodParametersCodeRendersParametersCodeWithCorrectTypeHintsAndDefaultValues()
    {
        $className = 'TestClass' . md5(uniqid(mt_rand(), true));
        eval('
            /**
             * @param string $arg1 Arg1
             */
            class ' . $className . ' {
                public function foo($arg1, array $arg2, \ArrayObject $arg3, $arg4= "foo", $arg5 = TRUE, array $arg6 = array(TRUE, \'foo\' => \'bar\', NULL, 3 => 1, 2.3)) {}
            }
        ');
        $methodParameters = [
            'arg1' => [
                'position' => 0,
                'byReference' => false,
                'array' => false,
                'optional' => false,
                'allowsNull' => true,
                'class' => null,
                'scalarDeclaration' => false
            ],
            'arg2' => [
                'position' => 1,
                'byReference' => false,
                'array' => true,
                'optional' => false,
                'allowsNull' => true,
                'class' => null,
                'scalarDeclaration' => false
            ],
            'arg3' => [
                'position' => 2,
                'byReference' => false,
                'array' => false,
                'optional' => false,
                'allowsNull' => true,
                'class' => 'ArrayObject',
                'scalarDeclaration' => false
            ],
            'arg4' => [
                'position' => 3,
                'byReference' => false,
                'array' => false,
                'optional' => true,
                'allowsNull' => true,
                'class' => null,
                'defaultValue' => 'foo',
                'scalarDeclaration' => false
            ],
            'arg5' => [
                'position' => 4,
                'byReference' => false,
                'array' => false,
                'optional' => true,
                'allowsNull' => true,
                'class' => null,
                'defaultValue' => true,
                'scalarDeclaration' => false
            ],
            'arg6' => [
                'position' => 5,
                'byReference' => false,
                'array' => true,
                'optional' => true,
                'allowsNull' => true,
                'class' => null,
                'defaultValue' => [0 => true, 'foo' => 'bar', 1 => null, 3 => 1, 4 => 2.3],
                'scalarDeclaration' => false
            ],
        ];

        $mockReflectionService = $this->createMock(ReflectionService::class);
        $mockReflectionService->expects($this->atLeastOnce())->method('getMethodParameters')->will($this->returnValue($methodParameters));

        $expectedCode = '$arg1, array $arg2, \ArrayObject $arg3, $arg4 = \'foo\', $arg5 = TRUE, array $arg6 = array(0 => TRUE, \'foo\' => \'bar\', 1 => NULL, 3 => 1, 4 => 2.3)';

        $builder = $this->getMockBuilder(ProxyMethod::class)->disableOriginalConstructor()->setMethods(['dummy'])->getMock();
        $builder->injectReflectionService($mockReflectionService);

        $actualCode = $builder->buildMethodParametersCode($className, 'foo', true);
        $this->assertSame($expectedCode, $actualCode);
    }

    /**
     * @test
     */
    public function buildMethodParametersCodeOmitsTypeHintsAndDefaultValuesIfToldSo()
    {
        $className = 'TestClass' . md5(uniqid(mt_rand(), true));
        eval('
            class ' . $className . ' {
                public function foo($arg1, array $arg2, \ArrayObject $arg3, $arg4= "foo", $arg5 = TRUE) {}
            }
        ');

        $mockReflectionService = $this->createMock(ReflectionService::class);
        $mockReflectionService->expects($this->atLeastOnce())->method('getMethodParameters')->will($this->returnValue([
            'arg1' => [],
            'arg2' => [],
            'arg3' => [],
            'arg4' => [],
            'arg5' => []
        ]));

        $expectedCode = '$arg1, $arg2, $arg3, $arg4, $arg5';

        $builder = $this->getMockBuilder(ProxyMethod::class)->disableOriginalConstructor()->setMethods(['dummy'])->getMock();
        $builder->injectReflectionService($mockReflectionService);

        $actualCode = $builder->buildMethodParametersCode($className, 'foo', false);
        $this->assertSame($expectedCode, $actualCode);
    }

    /**
     * @test
     */
    public function buildMethodParametersCodeReturnsAnEmptyStringIfTheClassNameIsNULL()
    {
        $builder = $this->getMockBuilder(ProxyMethod::class)->disableOriginalConstructor()->setMethods(['dummy'])->getMock();

        $actualCode = $builder->buildMethodParametersCode(null, 'foo', true);
        $this->assertSame('', $actualCode);
    }
}
