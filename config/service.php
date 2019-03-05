<?php

return [
  "services" => [
    /*
     * Add your services here in format:
     * 'serviceAlias' = \My\Service\Class::class
     */
    'StudentService' => \App\Services\StudentService::class,
    'EmployeeService' => \App\Services\EmployeeService::class,
    'UserAdminService' => \App\Services\UserAdminService::class,
    'ResellerListService' => \App\Services\ResellerListService::class,
    'TemplateUploadService' => \App\Services\TemplateUploadService::class

  ],
  "non-singletons" => [
    /*
     * listed serviceAliases will not be declared as singletons
     */
  ]
];