#!/bin/bash

# shellcheck disable=SC1091

set -o errexit
set -o nounset
set -o pipefail
# set -o xtrace # Uncomment this line for debugging purposes

# Load libraries
. /opt/bitnami/scripts/liblaravel.sh
. /opt/bitnami/scripts/liblog.sh
. /opt/bitnami/scripts/libservice.sh

# Load Laravel environment
. /opt/bitnami/scripts/laravel-env.sh

cd /app

declare -a start_flags=("artisan" "serve" "--host=0.0.0.0" "--port=${LARAVEL_PORT_NUMBER}")
start_flags+=("$@")

declare -a start_migrate=("artisan" "migrate:fresh")
start_migrate+=("$@")

declare -a start_seed=("artisan" "db:seed" "DatabaseSeeder")
start_seed+=("$@")

declare -a start_seed_habit=("artisan" "db:seed" "HabitacionesSeeder")

info "** Starting Laravel project **"

# migraciones iniciales
# php "${start_migrate[@]}"

# seeder para primeros usuarios
# php "${start_seed[@]}"
# php "${start_seed_habit[@]}"

php "${start_flags[@]}"
