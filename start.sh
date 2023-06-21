#!/bin/bash

# Check if docker is installed
if ! [ -x "$(command -v docker)" ]; then
  echo "Error: docker not installed." >&2
  exit 1
fi

# Check if the docker-compose.yml file exists
if [ ! -f docker-compose.yml ]; then
  echo "Error: docker-compose.yml not exist in the current directory." >&2
  exit 1
fi

# List of docker services
services=$(docker compose config --services)

# Docker to start
printf "\nEnter the docker service(s) to be started separated by spaces:\n\n"

# Display the docker services
for serv in "${services[@]}"; do
  echo "$serv"
done

printf "\n"

read -r input

IFS=' ' read -r -a input_array <<< "$input"

# Start docker services
docker compose up -d "${input_array[@]}"
