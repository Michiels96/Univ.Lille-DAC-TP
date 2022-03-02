#!/bin/bash
docker stop $(docker ps -aq)
docker rm $(docker ps -aq)
docker image rm imgsitephp imgsitephpdb
#echo $(docker image ls)
