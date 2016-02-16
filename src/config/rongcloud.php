<?php

//默认返回官网提供的测试账号；配置.env以使用自己的账号或者直接修改；
return [
    'AppKey'      => env('RONGCLOUD_APP_KEY', 'your appKey'),
    'AppSecret'      => env('RONGCLOUD_APP_SECRET', 'your appSecret')
];
