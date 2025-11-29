#!/usr/bin/env bash

docker run --rm -it -v $(pwd):/app -w /app jkniest/docker-testing-php:7 bash
