#!/bin/zsh

deploy_time="date %Y-%-m-%d %H:%i:%s"
echo "开发构建"
git add .
git commit -m "$deploy_time"
git push origin master
echo "构建完成"
