# PHP简单项目Quickstart模板

使用Composer作为依赖管理的工具，增加了PHPUnit单元测试。适合初学者学习和开发PHP库。

## 基于这个模板创建一个新项目

    composer create-project pingjiang/php-quickstart
    
## 执行单元测试
这里默认采用测试驱动开发，每个函数和功能都是通过编写单元测试用例来测试的。

可以把所有需要用到echo和print的位置整理为单元测试用例。

编写完成之后可以使用如下命令执行单元测试：

    phpunit

-------------------------------------------------------------------------------
# PHP quickstart

PHP quickstart project using composer manage dependencies and tests.

## Bootstrap the initial application

    composer create-project pingjiang/php-quickstart
    
## Run test cases

    phpunit
    
# Dependencies

* [PHP](http://php.net)
* [Composer](https://getcomposer.org)
* [PHPUnit](http://phpunit.de)
