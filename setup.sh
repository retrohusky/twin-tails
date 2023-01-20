#!/bin/bash

# Prompt user for project name
# shellcheck disable=SC2162
read -p "Enter project name: " project_name

# Copy .env.example file to .env
cp .env.example .env

# Copy .lando.example.yml to .lando.yml
cp .lando.example.yml .lando.yml

# Replace string in .env file
sed -i "s/{project}/$project_name/g" .env

# Replace string in .lando.yml file
sed -i "s/{project}/$project_name/g" .lando.yml

echo "Project name replaced in .env and .lando.yml files."

# Load all the packages from composer
lando composer install

# Start the lando environment
lando start

# Install wordpress
lando install:wordpress