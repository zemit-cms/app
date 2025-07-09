#!/usr/bin/env pwsh

# This file is part of the Zemit Framework.
#
# (c) Zemit Team <contact@zemit.com>
#
# For the full copyright and license information, please view the LICENSE.txt
# file that was distributed with this source code.

. "$PSScriptRoot\Set-WorkingDirectory.ps1" -ScriptFilePath $MyInvocation.MyCommand.Definition

php ".\vendor\bin\phalcon" migration generate `
    --config=".\devtools.php" `
    --directory=".\" `
    --migrations=".\resources\migrations\" `
    --no-auto-increment `
    --force `
    --verbose `
    --log-in-db `
    $args
