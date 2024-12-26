#!/bin/bash

docker run --rm -it -v $(pwd):/app -w /app jkniest/docker-testing-php:6 bash
