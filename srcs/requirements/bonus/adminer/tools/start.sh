
DIR="/usr/share/adminer/adminer";
if ! [ "$(ls -A $DIR)" ]; then
    echo "empty, do something" > 0
    apt-get install adminer -y
fi
tail -f