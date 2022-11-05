#!/usr/bin/env sh

git submodule update --recursive
cd invoke-explore
yarn && yarn build && cp dist/index.html ../src/index.html
cd -
