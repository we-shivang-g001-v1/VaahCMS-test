<?php

return [
    "name"=> "Blog",
    "title"=> "Blog Management",
    "slug"=> "blog",
    "thumbnail"=> "https://img.site/p/300/160",
    "is_dev" => env('MODULE_BLOG_ENV')?true:false,
    "excerpt"=> "Blog Content",
    "description"=> "Blog Content",
    "download_link"=> "",
    "author_name"=> "Shivang",
    "author_website"=> "https://vaah.dev",
    "version"=> "0.0.1",
    "is_migratable"=> true,
    "is_sample_data_available"=> true,
    "db_table_prefix"=> "vh_blog_",
    "providers"=> [
        "\\VaahCms\\Modules\\Blog\\Providers\\BlogServiceProvider"
    ],
    "aside-menu-order"=> null
];
