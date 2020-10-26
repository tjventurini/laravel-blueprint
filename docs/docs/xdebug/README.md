---
title: "xDebug"
---

# xDebug

## How to use xDebug in vscode

Here is how you can use xdebug in vscode.

### PHP Debug Extension

To use xdebug you will need to install the [PHP Debug](https://github.com/felixfbecker/vscode-php-debug) extension.

### Launcher

To gain the ability to listen to the events xdebug is firing, you will have to setup a launcher for php. Here is a sample configuration.

```json
{
    // Use IntelliSense to learn about possible attributes.
    // Hover to view descriptions of existing attributes.
    // For more information, visit: https://go.microsoft.com/fwlink/?linkid=830387
    "version": "0.2.0",
    "configurations": [
        {
            "name": "Listen for XDebug on Laradock",
            "type": "php",
            "request": "launch",
            "pathMappings": {
                "/var/www": "${workspaceFolder}"
            },
            "port": 9000
        }
    ]
}
```