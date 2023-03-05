#!/bin/bash

# Load all the packages from composer
lando composer install

# Start the lando environment
lando start

# Install wordpress
lando install:wordpress