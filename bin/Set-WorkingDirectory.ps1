#!/usr/bin/env pwsh

# This file is part of the Zemit Framework.
#
# (c) Zemit Team <contact@zemit.com>
#
# For the full copyright and license information, please view the LICENSE.txt
# file that was distributed with this source code.

param(
    [Parameter(Mandatory=$true)]
    [string]$ScriptFilePath
)

# Get the script directory
$scriptRoot = Split-Path -Parent $ScriptFilePath

# Move up one directory
$parentDirectory = Split-Path $scriptRoot -Parent
Set-Location $parentDirectory
