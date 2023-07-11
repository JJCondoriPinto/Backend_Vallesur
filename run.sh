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
declare -a start_seed1=("artisan" "db:seed" "CheckinSeeder")
start_seed1+=("$@")
declare -a start_seed2=("artisan" "db:seed" "CheckoutSeeder")
start_seed2+=("$@")
declare -a start_seed3=("artisan" "db:seed" "HabitacionesSeeder")
start_seed3+=("$@")
declare -a start_seed4=("artisan" "db:seed" "HuespedSeeder")
start_seed4+=("$@")
declare -a start_seed5=("artisan" "db:seed" "ReservaSeeder")
start_seed5+=("$@")

info "** Starting Laravel project **"

# migraciones iniciales
# php "${start_migrate[@]}"

# # seeder para primeros usuarios
# php "${start_seed[@]}"
# php "${start_seed1[@]}"
# php "${start_seed2[@]}"
# php "${start_seed3[@]}"
# php "${start_seed4[@]}"
# php "${start_seed5[@]}"

php "${start_flags[@]}"
