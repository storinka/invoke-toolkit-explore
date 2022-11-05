#!/usr/bin/env sh

cd invoke-explore
git pull && yarn && yarn build && cp dist/index.html ../src/index.html
cd -
