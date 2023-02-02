# Sentry

[![Minimum PHP Version](https://img.shields.io/badge/php-%3E%3D%207.4-8892BF.svg)](https://php.net/)

 - Adds spryker logging to elasticsearch
 - Enables MAX_NORMALIZE_DEPTH configuration (to avoide error `Over 9 levels deep, aborting normalization` in logging)

## Integration

### Add composer registry
```
composer config repositories.gitlab.nxs360.com/461 '{"type": "composer", "url": "https://gitlab.nxs360.com/api/v4/group/461/-/packages/composer/packages.json"}'
```

### Add Gitlab domain
```
composer config gitlab-domains gitlab.nxs360.com
```

### Authentication
Go to Gitlab and create a personal access token. Then create an **auth.json** file:
```
composer config gitlab-token.gitlab.nxs360.com <personal_access_token>
```

Make sure to add **auth.json** to your **.gitignore**.

### Install package
```
composer req valantic-spryker/elasticsearch-logging
```

### Update your shared config
```php
$config[KernelConstants::PROJECT_NAMESPACES] = [
    'ValanticSpryker',
    ...
];

$config[LogConstants::LOG_LEVEL] = Logger::DEBUG;
```

Reference implementation: https://gitlab.nxs360.com/team-lr/glue-api
