TAG ?= $(shell git rev-parse --abbrev-ref HEAD)

DIND_PREFIX ?= $(HOME)
ifneq ($(HOST_PATH),)
DIND_PREFIX := $(HOST_PATH)
endif
ifeq ($(CACHE_PREFIX),)
	CACHE_PREFIX=/tmp
endif
ifeq ($(CACHE_PREFIX),)
	CACHE_PREFIX=/tmp
endif

UID=$(shell id -u)
PREFIX=$(shell echo $(PWD) | sed -e s:$(HOME):$(DIND_PREFIX):)
TS=$(shell date "+%Y%m%d%s")
PWD=$(shell pwd)

include .env

build:
	docker build -f deployments/Dockerfile -t $(TAG) .

.PHONY: build
