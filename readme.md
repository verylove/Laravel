## Laravel CMS Application framework - Laravel v5.2.*

###框架介绍：
    1.Laravel　5.2.*版本
    2.Restful  api接口规范(article示例)
    3.Redis/memcached 缓存处理机制
    4.Mysql　事物处理机制
    5.单点登陆功能
    6.日志记录


###框架使用步骤：
    1. 下载github版本代码到本地（首先配置好composer,git,nginx,php,mysql等环境)

        git clone git remote add origin https://github.com/verylove/Laravel.git


    2. 更改配置文件.env　修改数据库链接，还原数据库

        php artisan migrate

        待续...


###原始创建步骤:
    1.composer create-project laravel/laravel --prefer-dist blog

    2.php artisan make:auth
    待续...
