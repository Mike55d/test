#!/usr/bin/env bash
# prints colored text
print_style () {

    if [[ "$2" == "info" ]] ; then
        COLOR="96m"
    elif [[ "$2" == "success" ]] ; then
        COLOR="92m"
    elif [[ "$2" == "warning" ]] ; then
        COLOR="93m"
    elif [[ "$2" == "danger" ]] ; then
        COLOR="91m"
    else #default color
        COLOR="0m"
    fi

    STARTCOLOR="\e[$COLOR"
    ENDCOLOR="\e[0m"

    printf "$STARTCOLOR%b$ENDCOLOR" "$1"
}

## Configure script to exit on error ##
set -e

if [[ $# -eq 0 ]] ; then
    print_style "Missing arguments Docker_Registry - Image_Name - Tag - BUILD_ENV.\n" "danger"

    exit 1
fi

if [[ $1 == "" ]] ; then
    print_style "Missing arguments Docker_Registry.\n" "danger"

    exit 1
fi

if [[ $2 == "" ]] ; then
    print_style "Missing arguments Image_Name.\n" "danger"

    exit 1
fi

if [[ $3 == "" ]] ; then
    print_style "Missing arguments Tag.\n" "danger"

    exit 1
fi

if [[ $4 == "" ]] ; then
    print_style "Missing arguments Environment available dev | prod.\n" "danger"

    exit 1
fi

DOCKER_REGISTRY="$1"
IMAGE_NAME="$2"
TAG="$3"
BUILD_ENV="$4"

echo "#########################################################"
echo "Docker Registry: $DOCKER_REGISTRY"
echo "Docker Image Name: $IMAGE_NAME"
echo "Image TAG: $TAG"
echo "#########################################################"

BUILD="$DOCKER_REGISTRY/$IMAGE_NAME"

echo "\n"
print_style "Creating Build Image ${BUILD}:${TAG}.\n" "info"

docker build -t base --compress -f base/Dockerfile ../
#docker build -t ${BUILD} --squash --compress -f Dockerfile .
docker build -t ${BUILD} --build-arg BUILD_ENV=${BUILD_ENV} --compress -f Dockerfile ../../

echo "\n"
print_style "Creating Tag: ${TAG}.\n" "info"
docker tag ${BUILD} ${BUILD}:${TAG}

echo "\n"
print_style "Pushing Image ${BUILD}:${TAG}.\n" "info"
docker push ${BUILD}:${TAG}

echo "\n"
print_style "Ready ${BUILD}:${TAG}.\n" "success"

# http://patorjk.com/software/taag/#p=display&f=Big&t=Happy%20Codding%20!%20!%20!
echo "  _____                _       "
echo " |  __ \              | |      "
echo " | |__) |___  __ _  __| |_   _ "
echo " |  _  // _ \/ _  |/ _  | | | |"
echo " | | \ \  __/ (_| | (_| | |_| |"
echo " |_|  \_\___|\__,_|\__,_|\__, |"
echo "                          __/ |"
echo "                         |___/ \n"
